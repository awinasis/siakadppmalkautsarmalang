<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSurat extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_surat')
            ->orderBy('id_surat', 'DESC')
            ->get()->getResultArray();
    }

    public function addData($data)
    {
        $this->db->table('tbl_surat')->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tbl_surat')
            ->where('id_surat', $data['id_surat'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_surat')
            ->where('id_surat', $data['id_surat'])
            ->delete($data);
    }

    public function detail_data($id_surat)
    {
        return $this->db->table('tbl_surat')
            ->where('id_surat', $id_surat)
            ->get()->getRowArray();
    }

    public function permintaan_surat()
    {
        return $this->db->table('tbl_surat')
            ->orderBy('id_surat', 'DESC')
            ->get()->getResultArray();
    }

    public function get_user_count()
    {
        $query = $this->db->table('tbl_surat')->countAll();
        return $query;
    }
}
