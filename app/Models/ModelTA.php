<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTA extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_tahunakademik')
            ->orderBy('id_ta')
            ->get()->getResultArray();
    }

    public function addData($data)
    {
        $this->db->table('tbl_tahunakademik')->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tbl_tahunakademik')
            ->where('id_ta', $data['id_ta'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_tahunakademik')
            ->where('id_ta', $data['id_ta'])
            ->delete($data);
    }

    public function reset_status_ta()
    {
        $this->db->table('tbl_tahunakademik')->update(['status_ta' => 0]);
    }
}
