<?php
/**
 * Created by PhpStorm.
 * User: 757208466
 * Date: 2020/3/8
 * Time: 16:05
 */

namespace app\controller;


class Error
{
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        $result = [
            "status" => config("status.controller_not_found"),
            "message" => "找不到该控制器",
            "result" => null
        ];
        return json($result, 400);
    }
}