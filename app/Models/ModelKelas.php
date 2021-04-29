<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKelas extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_kelas')
            ->orderBy('id_kelas')
            ->get()->getResultArray();
    }

    // public function addData($data)
    // {
    //     $this->db->table('tbl_kelas')->insert($data);
    // }

    // public function editData($data)
    // {
    //     $this->db->table('tbl_kelas')
    //         ->where('id_kelas', $data['id_kelas'])
    //         ->update($data);
    // }

    // public function deleteData($data)
    // {
    //     $this->db->table('tbl_kelas')
    //         ->where('id_kelas', $data['id_kelas'])
    //         ->delete($data);
    // }

    public function get_kelas_count()
    {
        $query = $this->db->table('tbl_kelas')->countAll();
        return $query;
    }
}
