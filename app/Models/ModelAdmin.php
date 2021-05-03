<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_jk')
            ->join('tbl_santri', 'tbl_santri.id_santri = tbl_jk.id_santri')
            ->orderBy('id_santri', 'ASC')
            ->get()->getResultArray();
    }
}
