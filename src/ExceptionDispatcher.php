<?php


namespace Demo;

use Demo\Exceptions\ {
    AnError,
    AException,
    BException
};


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

$d = new ExceptionDispatcher();

$d->throwAnError();