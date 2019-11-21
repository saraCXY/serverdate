<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 2019/11/13
 * Time: 6:48 PM
 */

namespace Sara\Serverdate;

class DateService implements DateServiceInterface
{
    /**

     * @param string $msg

     * @return string

     */

    public function getLocale(){
        return time();
    }
}