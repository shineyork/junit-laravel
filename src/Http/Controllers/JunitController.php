<?php
namespace ShineYork\JunitLaravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/**
 * use Illuminate\Routing\Controller 这是laravel的基类控制器
 * index() 访问测试的页面
 * store() 是表示用来执行需要测试的方法
 */
class JunitController extends Controller
{
    public function index()
    {
        return view('junit::index');
    }
    // 如下内容，想要丰富就自个完善吧
    public function store(Request $request)
    {
        $namespace  = $request->input('namespace');
        $className  = $request->input('className');
        $action     = $request->input('action');
        $param      = $request->input('param');
        $class = ($className == "") ? $namespace : $namespace.'\\'.$className;
        // 要提换的值  需要的结果
        $class = str_replace("/", "\\", $class);
        $object = new $class();
        $param = ($param == "") ? [] : explode('|', $param) ;
        $data = call_user_func_array([$object, $action], $param);
        return (is_array($data)) ? json_encode($data) : dd($data);
    }
}
