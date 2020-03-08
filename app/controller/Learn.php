<?php
/**
 * Created by PhpStorm.
 * User: 757208466
 * Date: 2020/3/8
 * Time: 15:45
 */

namespace app\controller;


use app\Request;

use think\facade\Request as requestFace;

class Learn
{
    /**
     * @function   index
     *
     * @param Request $app Request 方法依赖注入 要使用use app\Request;
     * @author admin
     *
     * @date 2020/3/8
     */
    public function index(Request $request)
    {
        dump($request->param());
        dump($request->param('name'));
        dump($request->param('age', 1, "intval"));

        dump(input("name"));

        dump(request()->param('name'));

        dump(requestFace::param("name"));

        $request->isPost();
        $request->isGet();
        $request->isAjax();
    }
}