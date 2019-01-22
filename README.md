# think-view

ThinkPHP5.2 视图扩展

## 主要特性

- 支持模板引擎驱动；
- 支持直接使用PHP作为模板；
- 支持模板渲染规则；
- 支持输出过滤；
- 支持使用Facade；
- 支持助手函数；

## 安装

~~~php
composer require topthink/think-view
~~~

## 用法示例

本扩展不能单独使用，只能用于ThinkPHP5.2+

~~~php

$view = new \think\View($config);

// 模板变量赋值
$view->assign(['name'=>'think'])
	// 输出过滤
	->filter(function($content){
		return str_replace('search', 'replace', $content);
	})
	// 读取模板文件渲染输出
	->fetch('index');

// 设置模板引擎
$view->engine('think',['path'=>'template_to_path']);

// 完整模板文件渲染
$view->fetch('./template/test.php');

// 渲染内容输出
$view->display($content);

// 或者使用Facade
think\facade\View::assign(['name'=>'think']);

// 使用助手函数
view('index',['name'=>'think']);
~~~

如果你的控制器需要使用模板渲染，可以直接继承 think\ViewController 或者使用view助手函数。