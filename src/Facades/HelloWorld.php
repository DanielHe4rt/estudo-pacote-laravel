<?php
/**
 * Created by PhpStorm.
 * User: idani
 * Date: 29-Nov-18
 * Time: 1:25 PM
 */

namespace frozentest\Facades;

use Illuminate\Support\Facades\Facade;

class HelloWorld extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'hello.world';
    }
}
