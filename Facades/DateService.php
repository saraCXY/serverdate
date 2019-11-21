<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 2019/11/21
 * Time: 11:55 AM
 */

namespace Sara\Serverdate\Facades;


use Illuminate\Support\Facades\Facade;

class DateService extends  Facade
{
    protected static function getFacadeAccessor()

    {
        return 'serverdate';
    }
}