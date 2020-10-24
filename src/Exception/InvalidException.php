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

namespace Glide\Exception;

class InvalidException extends \RuntimeException
{
    private $path;

    public function __construct(string $message = null, int $code = 0, \Throwable $previous = null, string $path = null)
    {
        $this->path = $path;

        parent::__construct($message, $code, $previous);
    }

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        return $this->path;
    }
}
