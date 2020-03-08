<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * @function   show 通用api返回格式
 *
 * @param $status
 * @param string $message
 * @param array $data
 * @param int $httpStatus
 * @return \think\response\Json
 * @author admin
 *
 * @date 2020/3/8
 */
function show($status, $message = "error", $data = [], $httpStatus = 200)
{
    $result = [
        "status" => $status,
        "message" => $message,
        "result" => $data
    ];

    return json($result, $httpStatus);
}