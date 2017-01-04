<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

// The php oauth extension is required
// For more information refer to 
// http://il1.php.net/manual/en/book.oauth.php
if(!extension_loaded('oauth')) {
  throw new Exception('Simple-LinkedIn: library not compatible with installed PECL oauth extension. Please disable this extension to use the Simple-LinkedIn library.');
  }
/*
 *   CodeIgniter LinkedIn API
 *
 *   @package CodeIgniter
 *
 *   @author  Yehuda Zadik
 *
 *
 *   Enable Simple LinkedIn API usage
 */
class Linkedin_handler {
  const LINKEDIN_API_URL = 'https://api.linkedin.com';
  
  private $api_key;
  private $secret_key;
  private $on_failure_url;
  
  // Oauth class
  public $oauth_consumer;
  
  // The url to return to from LinkedIn
  // authorize url in our case is// http://mydomain.com/return_from_provider
  private $callback_url;
  
  // The request token URL
  private $request_token_url;
  
  // LinkedIn authorize URL for getting the LinkedIn user // confirmation for required permissions
  private $authorize_path;
  
  // LinkedIn URL for getting the tokens to access // the LinkedIn URL resources
  private $access_token_path;
  
  // accessory variable for accessing the LinkedIn resources
  private $api_url;
  
  // CI instance
  private $CI;
  
  /*
   *  Set the class variables
   */
  private function set_varaiables() {
    $this->request_token_url = self::LINKEDIN_API_URL . '/uas/oauth/requestToken';
    $this->authorize_path = self::LINKEDIN_API_URL . '/uas/oauth/authorize';
    $this->access_token_path = self::LINKEDIN_API_URL . '/uas/oauth/accessToken';
    
    $this->api_url = array('people' => 'http://api.linkedin.com/v1/people/~' , 'connections' => 'http://api.linkedin.com/v1/people/~/connections', 'companies' => 'http://api.linkedin.com/v1/companies/');
    
    $this->CI = &get_instance();
    }
  /*
   *  Library constructor
   *
   *  Initializes the library variables
   *  and initializes oauth consumer object
   *
   *  @param $config array of the Linked configuration variables
   */
  public function __construct($config) {
    // Setting the handler's variables;
    foreach ($config as $k => $v) {
      $this->$k = $v;
      }
    
    // Setting all the class variables
    $this->set_varaiables();
    
    // Initializing the oauth consumer object
    $this->oauth_consumer = new oauth($this->api_key, $this->secret_key);
    
    // Enabling Oauth debug
    $this->oauth_consumer->enableDebug();
    
    // Checking if returned from the LinkedIn UI permission // conformation window
    if ($this->CI->input->get('oauth_verifier') || $this->CI->input->get('oauth_problem')) {
      $this->on_success();
      } elseif (!$this->CI->session->userdata('oauth_token') && !$this->CI->session->userdata('oauth_token_secret')) {
      // if session variables are not set: oauth_token, // oauth_token_secret
      // call auth to start the process of getting the tokens from // LinkedIn via the oauth consumer object
      $this->auth();
      } elseif ($this->CI->session->userdata('oauth_token') && $this->CI->session->userdata('oauth_token_secret')) {
      // if session variables are set: oauth_token, // oauth_token_secret initialize the oauth consumer with // $oauth_token, $oauth_token_secret
      $oauth_token = $this->CI->session->userdata('oauth_token');
      $oauth_token_secret = $this->CI->session->userdata('oauth_token_secret');
      
      // initialize oauth consumer with $oauth_token, // $oauth_token_secret
      $this->setToken($oauth_token, $oauth_token_secret);
      }
    }
  /*
   * Start the process of getting oauth token & oauth token * secret so that the user
   * redirects to a LinkedIn UI permission conformation window
   */
  public function auth()  {
    // Start communication with the LinkedIn server
    $request_token_response = $this->getRequestToken();
    
    $this->CI->session->set_userdata('oauth_token_secret', $request_token_response['oauth_token_secret']);
    
    // Get the token for the LinkedIn authorization url
    $oauth_token = $request_token_response['oauth_token'];
    
    $log_message = 'yuda auth getRequestToken oauth_token: : ' . $oauth_token;
    $log_message = "oauth_token_secret: " . $request_token_response['oauth_token_secret'] . "\n";
    log_message('debug', $log_message) ;
    
    // Redirect to the LinkedIn authorization url for getting // permissions for the app
    header("Location: " . $this->generateAuthorizeUrl($oauth_token));
    }
  /*
   * This is the method called after returning
   * from the LinkedIn authorization URL
   * The returned values from the LinkedIn authorization URL are: * oauth_token, oauth_token_secret, oauth_verifier
   * Those values are used to retrieve oauth_token, * oauth_token_secret for accessing the LinkedIn resources
   *
   */
  public function on_success() {
    if ($this->CI->input->get('oauth_problem')) {
      redirect($this->on_failure_url);
      }
    
    // Set the oauth consumer tokens
    $this->setToken($this->CI->input->get('oauth_token'), $this->CI->session->userdata('oauth_token_secret'));
    
    // Sending request to the LinkedIn access_token_path to // receive the array, which it's keys are tokens: oauth_token, // oauth_token_secret for accessing the LinkedIn resources
    $access_token_reponse = $this->getAccessToken($this->CI->input->get('oauth_verifier'));
    
    // Setting the session variables with the tokens: oauth_token, // oauth_token_secret for accessing the LinkedIn resources
    $this->CI->session->set_userdata('oauth_token', $access_token_reponse['oauth_token']);
    $this->CI->session->set_userdata('oauth_token_secret',$access_token_reponse ['oauth_token_secret']);
    
    // Redirecting to the main page
    redirect('');
    }
  
  /*
   * This method sends the request token to LinkedIn
   *
   * @return array keys: oauth_token, oauth_token_secret
   */
  public function getRequestToken() {
    // The LinkedIn request token url
    $request_token_url = $this->request_token_url;
    
    // The LinkedIn app permissions
    $request_token_url = "?scope = r_basicprofile+r_emailaddress+r_network";
    
    // Getting the response from the LinkedIn request token URL.
    // The method returns the response, which is an array// with the following keys: oauth_token, oauth_token_secret
    return $this->oauth_consumer->getRequestToken($request_token_url, $this->callback_url);
    }
  /*
   * This method returns the LinkedIn authorize URL
   *
   * @param $oauth_token string oauth token for the LinkedIn * authorzation URL
   *
   * @return string URL of the LinkedIn authorization URL
   */
  public  function generateAuthorizeUrl($oauth_token) {
    return $this->authorize_path . "?oauth_token = " . $oauth_token;
    }
  /*
   * This method sets the token and secret keys of
   * the oauth object of the oauth protocol
   *
   * @param $oauth_token string oauth token
   * @param $oauth_token_secret oauth_token_secret
   *
   */
  public function setToken($oauth_token, $oauth_token_secret) {
    $this->oauth_consumer->setToken($oauth_token, $oauth_token_secret);
    }
  /*
   * This method requests the LinkedIn tokens for
   * accessing the LinkedIn resources
   * It returns an array with the following keys: oauth_token, * oauth_token_secret
   *
   * @param $oauth_verifier string
   *
   * @return array Array with the following keys: *  oauth_token, oauth_token_secret,
   * which are used to access the LinkedIn resources URL
   */
  public function getAccessToken($oauth_verifier) {
    try {
      // Returns an array with the following keys: // oauth_token, oauth_token_secret
      // These keys are used to access the LinkedIn // resources URL
      return $this->oauth_consumer->getAccessToken($this->access_token_path, '', $oauth_verifier);
      } catch(OAuthException $E) {
      echo "<pre>";var_dump($this->oauth_consumer);
      echo "</pre><br><br>";
      echo "Response: ". $E->lastResponse;
      exit();
      }
    }
  /*
   * This function returns a LinkedIn user's details
   * It returns a JSON string containing these values
   *
   * @return $json string String containing user's details
   */
  public function me() {
    $params = array();
    $headers = array();
    $method = OAUTH_HTTP_METHOD_GET;
    $api_url = $this->api_url['people'] . '?format = json';
    
    try {
      // Request for a LinkedIn user's details
      $this->oauth_consumer->fetch ($api_url, $params, $method, $headers);
      
      // Receiving the last response with json // containing the user's details
      $s_json = $this->oauth_consumer->getLastResponse();
      return $s_json;
      } catch(OAuthException $E) {
      echo "<pre>";var_dump($this->oauth_consumer);
      echo "</pre><br><br>";
      echo "Response: ". $E->lastResponse;
      exit();
      }
    }
  /*
   * This function returns a LinkedIn user's connections
   * It returns a JSON string containing these values
   *
   * @return $json string String containing user's connections
   */
  public function connections() {
    $params = array();
    $headers = array();
    $method = OAUTH_HTTP_METHOD_GET;
    $api_url = $this->api_url['connections'] . '?count = 10&format = json';
    
    try {
      // Request for a LinkedIn user's connections
      $this->oauth_consumer->fetch($api_url, $params, $method, $headers);
      
      // Receiving the last response with json containing the user's // connections
      $s_json = $this->oauth_consumer->getLastResponse();
      return $s_json;
      } catch(OAuthException $E) {
      echo "<pre>";var_dump($this->oauth_consumer);
      echo "</pre><br><br>";
      echo "Response: ". $E->lastResponse;
      exit();
      }
    }
  /*
   * This function returns a LinkedIn company' details
   * It returns a JSON string containing these values
   *
   * @param Integer $company_id - company id
   *
   * @return $json string String containing a company' details
   */
  public function company($company_id) {
    $params = array();
    $headers = array();
    $method = OAUTH_HTTP_METHOD_GET;
    $api_url = $this->api_url['companies'] . $company_id;
    
    // The following company's details are required: // company_id, number of employees, foundation year, // number of the company's followers
    $api_url = ':(id, name, website-url, twitter-id, employee-count-range, specialties, founded-year, num-followers)?format = json';
    
    try {
      // Request for a LinkedIn company's details
      $this->oauth_consumer->fetch($api_url, $params, $method, $headers);
      
      // Receiving the last response with json containing the // company's details
      $s_json = $this->oauth_consumer->getLastResponse();
      return $s_json;
      } catch(OAuthException $E) {
      echo "<pre>";var_dump($this->oauth_consumer);
      echo "</pre><br><br>";
      echo "Response: ". $E->lastResponse;
      exit();
      }
    }
  /*
   * This function returns a LinkedIn company' three updates
   * It returns a JSON string containing these values
   *
   * @param Integer $company_id - company id
   *
   * @return $json string String containing company's three updates
   */
  public function company_updates($company_id) {
    $params = array();
    $headers = array();
    $method = OAUTH_HTTP_METHOD_GET;
    $api_url = $this->api_url[ 'companies'] . $company_id . '/updates?start = 0 & count = 3 & format = json';
    
    try {
      // Request for a LinkedIn company's three updates
      $this->oauth_consumer->fetch($api_url, $params, $method, $headers);
      
      // Receiving the last response with json // containing company's three updates
      $s_json = $this->oauth_consumer->getLastResponse();
      return $s_json;
      } catch(OAuthException $E) {
      echo "<pre>"; var_dump($this->oauth_consumer);
      echo "</pre><br><br>";
      echo "Response: ". $E->lastResponse;
      exit();
      }
    }
  }
// Class closing tags
/*  End of file linkedin.php */
/* Location: ./application/libraries/linkedin_handler.php */