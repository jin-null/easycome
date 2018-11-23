<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/23
 * Time: 14:50
 */

namespace EasyCome\facade;


use Illuminate\Support\Facades\Facade;

class EasyCome extends  Facade
{


    protected static function getFacadeAccessor()
    {
        return 'easycome';
    }
}
