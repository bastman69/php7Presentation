<?php


namespace Demo;


use Demo\Exceptions\AException;
use Demo\Exceptions\AnError;
use Demo\Exceptions\BException;

class ExceptionDispatcher
{
    public function throwAnError()
    {
        throw new AnError();
    }

    public function throwExceptionA()
    {
        throw new AException();
    }

    public function throwExceptionB()
    {
        throw new BException();
    }
}