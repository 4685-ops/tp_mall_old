<?php
/**
 * Created by PhpStorm.
 * User: 757208466
 * Date: 2020/3/8
 * Time: 15:18
 */

namespace app\controller;

use app\BaseController;

class Demo extends BaseController
{
    public function show()
    {
        $result = [
            "status" => 1,
            "message" => "ok",
            "result" => [
                "id" => 1
            ]
        ];

        $header = [
            "Token" => 'show_token'
        ];

        return json($result, 500, $header);

    }

    public function request()
    {
        //打印访问的所有参数
        dump($this->request->param());
        dump($this->request->param('name'));
        dump($this->request->param('age', 1, "intval"));
    }


}