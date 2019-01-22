<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2019 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Response;

/**
 * 渲染模板输出
 * @param string    $template 模板文件
 * @param array     $vars 模板变量
 * @param int       $code 状态码
 * @param callable  $filter 内容过滤
 * @return \think\response\View
 */
function view(string $template = '', $vars = [], $code = 200, $filter = null)
{
    return Response::create($template, 'view', $code)->assign($vars)->filter($filter);
}
