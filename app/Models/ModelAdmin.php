<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_jk')
            ->orderBy('NIS', 'ASC')
            ->get()->getResultArray();
    }
}
