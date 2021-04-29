<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRPS extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_kurikulum')
            ->orderBy('id_kurikulum', 'DESC')
            ->get()->getResultArray();
    }
}
