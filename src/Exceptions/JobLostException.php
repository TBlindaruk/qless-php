<?php

namespace Qless\Exceptions;

/**
 * Qless\Exceptions\JobLostException
 *
 * @package Qless\Exceptions
 */
class JobLostException extends RuntimeException
{
    use AreaAwareTrait;
}
