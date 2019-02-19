<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2019 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
declare (strict_types = 1);

namespace think;

use think\Controller;

class ViewController extends Controller
{
    /**
     * 视图类实例
     * @var \think\View
     */
    protected $view;

    /**
     * 构造方法
     * @access public
     * @param  App  $app  应用对象
     */
    public function __construct(App $app)
    {
        $this->view = $app->make('think\View');
        parent::__construct($app);
    }

    /**
     * 加载模板输出
     * @access protected
     * @param  string $template 模板文件名
     * @return mixed
     */
    protected function fetch(string $template = '')
    {
        return $this->view->fetch($template);
    }

    /**
     * 渲染内容输出
     * @access protected
     * @param  string $content 模板内容
     * @return mixed
     */
    protected function display(string $content = '')
    {
        return $this->view->display($content);
    }

    /**
     * 模板变量赋值
     * @access protected
     * @param  array $vars 模板变量
     * @return $this
     */
    protected function assign(array $vars)
    {
        $this->view->assign($vars);

        return $this;
    }

    /**
     * 视图过滤
     * @access protected
     * @param  Callable $filter 过滤方法或闭包
     * @return $this
     */
    protected function filter(callable $filter)
    {
        $this->view->filter($filter);

        return $this;
    }

    /**
     * 初始化模板引擎
     * @access protected
     * @param  array|string $engine 引擎参数
     * @return $this
     */
    protected function engine($engine)
    {
        $this->view->engine($engine);

        return $this;
    }

}
