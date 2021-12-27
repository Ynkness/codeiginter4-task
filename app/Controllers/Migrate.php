<?php

namespace App\Controllers;

class Migrate extends BaseController
{
    public function index()
    {
        # 引用迁移服务
        $migrate = \Config\Services::migrations();

        try{
            # 执行迁移文件的另一种方法
            $migrate->latest();
            echo "migrated";
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}