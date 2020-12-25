<?php
// +----------------------------------------------------------------------
// | A3Mall
// +----------------------------------------------------------------------
// | Copyright (c) 2020 http://www.a3-mall.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: xzncit <158373108@qq.com>
// +----------------------------------------------------------------------
namespace app\index\controller;

use app\BaseController;
use think\response\Redirect;
use think\Response;
use think\exception\HttpResponseException;
use think\facade\View;
class Movie extends BaseController {
    public function index(){
        return View::fetch();
    }
}