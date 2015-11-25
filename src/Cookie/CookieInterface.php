<?php namespace T4S\CamelotAuth\Cookie;


interface CookieInterface{
    /**
     * Returnd the cookeis key.
     *
     * @return string
     */
    public function getKey();
    /**
     * Put a value in the cookie.
     *
     * @param mixed $value
     * @param int $time in minutes
     * @return void
     */
    public function put($value,$time,$key= null);
    /**
     * puts a value in the cookie forever.
     *
     * @param $value
     * @return void
     */
    public function forever($value);
    /**
     * gets the cookie value
     *
     * @return mixed
     */
    public function get($key= null);
    /**
     * removes the cookie
     *
     * @return void
     */
    public function forget($key= null);
}