<?php
use Cyber\Request;

return [
    ['/', 'GET', 'app\controller\Index@hello'],
    // // Normal route definition
    // ['/admin/a', 'GET', 'app\admin\index\controller\Index@index'],
    // ['/admin/medoo', 'GET', 'app\admin\index\controller\Index@medoo'],
    // ['/admin/tporm', 'GET', 'app\admin\index\controller\Index@tporm'],
    // ['/admin/json', 'GET', 'app\admin\index\controller\Index@json'],

    // // Parameter route definition
    // ['/index/{id}', 'GET,POST','app\admin\index\controller\Index@index'],

    // Anonymous function route definition with parameters
    // ['/{name}', 'GET,POST',function(Request $request,$name){
    //     $controller = new \app\admin\index\controller\Index();
    //     return $controller->index($request,$name);
    // }],

    // // Route group definition
    // ['/admin', [
    //     ['/index1', 'GET,POST', 'app\admin\index\controller\Index@index1'],
    //     ['/index2', 'GET', 'app\admin\index\controller\Index@index2']
    // ]],
];