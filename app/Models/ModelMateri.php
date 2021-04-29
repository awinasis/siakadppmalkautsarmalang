<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMateri extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_materi')
            ->orderBy('id_materi', 'ASC')
            ->get()->getResultArray();
    }

    public function get_materi_count()
    {
        $query = $this->db->table('tbl_materi')->countAll();
        return $query;
    }
}
