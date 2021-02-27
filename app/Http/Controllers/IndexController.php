<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //主页
    public function index(){
        return view('AileAdmin.index');
    }
    //图表
    public function charts(){
        return view('AileAdmin.charts');
    }
    //表格
    public function tables(){
        return view('AileAdmin.tables');
    }
    //按钮
    public function buttons(){
        return view('AileAdmin.buttons');
    }
}
