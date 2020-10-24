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

use Glide\Exception\InvalidException;
use  Glide\Token\Engine;

class Glide
{
    /**
     * Check for session.
     */
    public static $session = null;

    /**
     * The application hash.
     */
    protected $hash;

    /**
     * The session key prefix.
     */
    const SESSION_KEY = 'glide__';

    /**
     * Generate a CSRF token.
     *
     * @param  null
     *
     * @return string
     */
    public static function token()
    {
        if (is_null(static::$session)) {
            $startSession = self::startSession();
        }

        $token = Engine::token();

        $session = (new static())->put(self::SESSION_KEY, $token);

        return $token;
    }

    /**
     * CSRF token validation.
     *
     * @param string $hash
     *
     * @return mixed
     */
    public static function validate($hash)
    {
        if (is_null(static::$session)) {
            $startSession = self::startSession();
        }

        $session = self::get(self::SESSION_KEY);

        if ($session == $hash) {
            return true;
        }

        throw new InvalidException('Invalid Token/Token Not Found');
    }

    /**
     * Set session key.
     *
     * @param string key|value
     *
     * @return void
     */
    public function put($key, $value)
    {
        if (isset($_SESSION[$key]) && !empty($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }

        $_SESSION[$key] = $value;

        return true;
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
     *
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
     * Decrypt the hash.
     *
     * @param string $encrypt
     *
     * @return string
     */
    public function decrypt($encrypt)
    {
    }

    /**
     * Session.
     *
     * @return void
     */
    public static function startSession()
    {
        if (\PHP_SESSION_NONE === session_status()) {
            session_start();

            self::$session = true;
        }

        return false;
    }

    /**
     *  Destroy the session.
     *
     * @param bool $destroy
     *
     * @return bool
     */
    public static function destroy(bool $destroy = true)
    {
        if ($destroy == true) {
            session_unset();

            return true;
        }

        return false;
    }
}
