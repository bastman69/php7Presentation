<?php


namespace Demo\Exceptions;


class AnError extends \Error
{
    protected $message = 'I am an Error';
}