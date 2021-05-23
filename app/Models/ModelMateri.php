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

    public function addData($data)
    {
        $this->db->table('tbl_materi')->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tbl_materi')
            ->where('id_materi', $data['id_materi'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_materi')
            ->where('id_materi', $data['id_materi'])
            ->delete($data);
    }

    public function get_materi_count()
    {
        $query = $this->db->table('tbl_materi')->countAll();
        return $query;
    }
}
