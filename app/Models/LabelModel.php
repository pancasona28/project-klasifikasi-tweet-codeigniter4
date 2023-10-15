<?php

namespace App\Models;

use CodeIgniter\Model;

class LabelModel extends Model
{
    protected $table      = 'c_w';
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    protected $allowedFields = ['Id', 'Full_text', 'Dataset', 'Lang', 'Label'];
    protected $primaryKey = 'id';

    public function search($keyword)
    {
        return $this->table($this->table)->like('Dataset', $keyword);
    }
    public function getdatalabel($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['Id' => $id])->first();
    }
}
