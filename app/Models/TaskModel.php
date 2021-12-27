<?php

namespace App\Models;

class TaskModel extends \CodeIgniter\Model
{
    # 指定此模型主要使用的数据库表。这仅适用于内置的 CRUD 方法
    protected $table = 'task';

    # 此数组应使用可在保存、插入或更新方法期间设置的字段名称进行更新
    protected $allowedFields = ['description', 'user_id'];

    protected $returnType = '\App\Entities\Task';

    protected $useTimestamps = true;

    protected $validationRules = [
        'description' => 'required'
    ];

    protected $validationMessafe = [
        'description' => [
            'required' => 'Please enter a description'
        ]
    ];

    public function paginateTasksByUserId($id)
    {
        return $this->where('user_id', $id)
                    ->orderBy('created_at')
                    ->paginate(5);
    }

    public function getTaskByUserId($id, $user_id)
    {
        return $this->where('id', $id)
                    ->where('user_id', $user_id)
                    ->first();
    }

    public function search($term, $user_id)
    {
        if ($term === null){
            return [];
        }
        return $this->select('id, description')
                    ->where('user_id', $user_id)
                    ->like('description', $term)
                    ->get()
                    ->getResultArray();
    }
}