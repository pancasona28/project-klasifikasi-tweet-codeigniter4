<?php

namespace App\Models;

use CodeIgniter\Model;

class LabelModel extends Model {
    protected $table      = 'c_w';
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    protected $allowedFields = ['Label', 'Chek', 'Status'];
    protected $primaryKey = 'id';

    public function search($keyword) {
        return $this->table($this->table)->like('Dataset', $keyword);
    }
    public function getdatalabel($id = false) {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['Id' => $id])->first();
    }
    public function getsisa() {
        $sql = "SELECT COUNT(*) as t_belum FROM $this->table WHERE Chek = 0";
        $t_belum = $this->db->query($sql)->resultID->fetch_assoc();
        $sql = "SELECT COUNT(*) as t_sudah FROM $this->table WHERE Chek = 1";
        $t_sudah = $this->db->query($sql)->resultID->fetch_assoc();
        
        $data = ['t_sudah' => $t_sudah,
                    't_belum' => $t_belum,
        ];
            
        
        
        return $data;
    }
}
