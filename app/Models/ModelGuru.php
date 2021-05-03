<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelGuru extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_guru')
            ->orderBy('id_guru', 'DESC')
            ->get()->getResultArray();
    }

    public function addData($data)
    {
        $this->db->table('tbl_guru')->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tbl_guru')
            ->where('id_guru', $data['id_guru'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_guru')
            ->where('id_guru', $data['id_guru'])
            ->delete($data);
    }

    public function detail_data($id_guru)
    {
        return $this->db->table('tbl_guru')
            ->where('id_guru', $id_guru)
            ->get()->getRowArray();
    }

    public function get_guru_count()
    {
        $query = $this->db->table('tbl_guru')->countAll();
        return $query;
    }
}
