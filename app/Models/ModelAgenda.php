<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAgenda extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_agenda')
            ->orderBy('id_agenda', 'DESC')
            ->get()->getResultArray();
    }
}
