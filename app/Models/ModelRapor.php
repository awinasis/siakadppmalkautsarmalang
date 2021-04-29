<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRapor extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_rapor')
            ->orderBy('id_rapor', 'DESC')
            ->get()->getResultArray();
    }

    public function addData($data)
    {
        $this->db->table('tbl_rapor')->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tbl_rapor')
            ->where('id_rapor', $data['id_rapor'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_rapor')
            ->where('id_rapor', $data['id_rapor'])
            ->delete($data);
    }
}
