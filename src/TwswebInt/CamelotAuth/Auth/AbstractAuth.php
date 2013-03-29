<?php namespace TwswebInt\CamelotAuth\Auth;

use TwswebInt\CamelotAuth\Session\SessionInterface;
use TwswebInt\CamelotAuth\Cookie\CookieInterface;
use TwswebInt\CamelotAuth\Database\DatabaseInterface;

abstract class AbstractAuth{
	/**
	 * The currently authenticated user.
	 *
	 * @var TwswebInt\CamelotAuth\User\UserInterface
	 */
	protected $user;

	/**
	* The Session Driver used by Camelot
	*
	* @var use TwswebInt\CamelotAuth\Session\SessionInterface;
	*/
	protected $session;

	/**
	* The Cookie Driver used by Camelot
	*
	* @var use TwswebInt\CamelotAuth\Cookie\CookieInterface;
	*/
	protected $cookie;

	/**
	* The name of the authentication provider
	*
	*/
	protected $providerName;

	protected $settings = array();

	protected $httpPath = '';

	public function __construct(SessionInterface $session,CookieInterface $cookie,DatabaseInterface $database,$providerName,array $settings,$httpPath)
	{
		$this->session = $session;
		$this->cookie = $cookie;
		$this->database = $database;
		$this->providerName = $providerName;
		$this->settings = $settings;
		$this->httpPath = $httpPath;
	}


	public function check()
	{
		return !is_null($this->user());
	}

	public function user()
	{
		if(!is_null($this->user))
		{
			return $this->user;
		}

		$id= $this->session->get();

		$user = null;

		if(!is_null($id))
		{
			return $this->user = $this->database->getByID($id);
		}

		$id = $this->cookie->get();

		if(!is_null($id))
		{
			return $this->user = $this->database->getByID($id);
		}

		return null;
	}

	/*protected function createAccount($accountModel)
	{

	}*/

	protected function createSession($account,$remember = false)
	{
		$id = $account->id;

		$this->session->put($id);

		if($remember)
		{
			$this->cookie->forever($id);
		}

		return $this->user = $account;
	}

	abstract function authenticate();

	abstract function register();

	public function logout()
	{
		$this->user = null;
		$this->session->forget();
		$this->cookie->forget();
	}
}