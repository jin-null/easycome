<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/22
 * Time: 15:17
 */

namespace EasyCome;


use Illuminate\Http\Request;

class EasyCome
{


    public static function get(Request $request)
    {

        $ip=$request->ip();
        $address=file_get_contents('http://ip.taobao.com/service/getIpInfo.php?ip='.$ip);
        $data = [
            'ip' => $request->ip(),
            'useragent' => $request->userAgent(),
            'method' => $request->method(),
            'address' =>$address,
        ];
        return collect($data);
    }


}
