<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_chart')
            ->orderBy('id_chart', 'DESC')
            ->get()->getResultArray();
    }

    public function detail_data($NIS)
    {
        return $this->db->table('tbl_santri')
            ->where('NIS', $NIS)
            ->get()->getRowArray();
    }
}
