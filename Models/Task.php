<?php

require_once('Model.php');

class Task extends Model
{
    // プロパティ
    protected $table = 'tasks';

    // タスク作成のメソッド
    public function create($data)
    {
        // 実行するSQL
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table . ' (title, contents, created) VALUES (?, ?, ?)');
        $stmt->execute($data);
    }
}