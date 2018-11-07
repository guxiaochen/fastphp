<?php
namespace fastphp\base;

use fastphp\db\Sql;

class Model extends Sql
{
    protected $model;

    public function __construct()
    {
        // 模型没有声明数据库名，数据库名默认为模型名
        if (!$this->table) {

            // 返回对象实力所在类名
            $this->model = get_class($this);

            // 删除类名最后的 Model 字符
            $this->model = substr($this->model, 0, -5);

            // 数据库表名与类名一致
            $this->table = strtolower($this->model);
        }
    }
}