<?php

/**
 * @author goer
 *
 * @version 1.0.0 2023/07/21
 */

/**
 * 成功打印的函数
 *
 * @param  array  $data 数据
 * @param  int  $code 状态码
 * @param  string  $msg   返回提示
 * @param  int  $count 获取次数
 * @return json 返回json
 */
function success($data = [], $code = 200, $msg = '', $count = 0)
{
    return json_encode([
        'code' => $code,
        'msg' => $msg == '' ? '操作成功' : $msg,
        'count' => $count == 0 ? count($data) : $count,
        'data' => $data,
    ]);
}

/**
 * 返回错误信息
 *
 * @param  int  $code 错误码
 * @return void|json $res_data 返回json
 */
function error($code = null)
{
    $error_code = [
        // 系统
        50000 => '系统繁忙',

        // 登录返回
        50100 => '账号不存在',

        // 等等
    ];

    if (empty($code)) {
        return false;
    }

    $res_json = [
        'code' => $code,
        'msg' => $error_code[$code],
    ];

    return json_encode($res_json);
}
