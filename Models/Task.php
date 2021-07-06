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

    // タスクを更新するメソッド
    public function update($data)
    {
        // 実行するSQL
        $stmt = $this->db_manager->dbh->prepare('UPDATE ' . $this->table . ' SET title = ?, contents = ? WHERE id = ?');
        $stmt->execute($data);
    }
        // タイトルを元に検索する
        public function findByTitle($data)
        {
            $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' WHERE title LIKE ?');
            $stmt->execute($data);
            $tasks = $stmt->fetchAll();
            return $tasks;
        }

}