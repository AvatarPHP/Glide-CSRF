<?php

/*
 * This file is part of Glide CSRF Protection.
 *
 * (c) Sarfaraz <hey@m-sarfaraz.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 */
namespace AvatarPHP;

class Glide
{

    /**
     * The application hash.
     */
    protected $hash;

    /**
     * The application name.
     */
    public $name = "";

    /**
     * The session key prefix.
     */
    public static $key = "";

    /**
     * The hash salt.
     */
    protected $salt;

    /**
     * Generate a CSRF token
     *
     * @param  null
     * @return string
     */
    public static function use_glide()
    {

        $value = (new static())->generator();;

        $session = (new static())->put(self::$key, $value);

        return $value;
    }

    /**
     * CSRF token validation.
     * 
     * @param string $hash
     * @return mixed
     */
    public static function validate($hash)
    {

        $session = self::get(self::$key);

        if ($session == $hash) {
            return true;
        }
        return false;
    }

    /**
     * Set session key.
     * 
     * @param string key|value
     * @return void
     */
    public function put($key, $value)
    {

        if (isset($_SESSION[$key]) && !empty($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }

        $_SESSION[$key] = $value;
    }

    /**
     * Get session id.
     *
     * @return string → the session id or empty
     */
    public static function id()
    {
        return session_id();
    }

    /**
     * Regenerate session_id.
     *
     * @return string → session_id
     */
    public static function regenerate()
    {
        session_regenerate_id(true);

        return session_id();
    }

    /**
     * get session key.
     * 
     * @param string $key
     * @return string|null
     */

    public static function get($key)
    {

        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }

        return null;
    }

    /**
     * Generate "random" alpha-numeric string.
     *
     * @param  int  $length
     * @return string
     */
    public function generator(int $length = 16)
    {
        $string = '';

        while (($len = strlen($string)) < $length) {
            $size = $length - $len;

            $bytes = random_bytes($size);

            $string .= substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $size);
        }

        return $string;
    }


    /**
     * Decrypt the hash.
     *
     * @param  string  $encrypt
     * @return string
     */
    public function decrypt($encrypt)
    {
    }

    /**
     *  Destroy the session.
     * 
     * @param bool $destroy
     * @return boolean
     */
    public static function destroy(bool $destroy = true)
    {
        if ($destroy == true) {

            session_unset();
            session_destroy();
            return true;
        }

        return false;
    }
}
