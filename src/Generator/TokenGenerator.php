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

namespace AvatarPHP\Glide;

class Generator{

    /**
     * @var integer $length
     */
    protected static $length = 16;

     /**
     * Generate "random" alpha-numeric string.
     *
     * @param  int  $length
     * @return string
     */
    public static function token()
    {
        $token = '';

        while (($len = strlen($token)) < self::$length) {
            $size = self::$length - $len;

            $bytes = random_bytes($size);

            $token .= substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $size);
        }

        return $token;
    }


}
   