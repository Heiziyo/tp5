<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

return [
    'url_route_on' => true,
    'log'          => [
        'type' => 'trace', // 支持 socket trace file
    ],
    'view_replace_str'=>[
        '__PUBLIC__'=>'/public/',
        '__ROOT__' => '/',
        '__CSS__'  => '/public/static/home/css/',
        '__JS__'  => '/public/static/home/js/',
        '__IMG__'  => '/public/static/home/img/',
    ],
];
