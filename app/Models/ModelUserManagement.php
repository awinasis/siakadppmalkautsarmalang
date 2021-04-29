<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUserManagement extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_user')
            ->orderBy('id_user', 'DESC')
            ->get()->getResultArray();
    }

    public function detail_data($id_user)
    {
        return $this->db->table('tbl_user')
            ->where('id_user', $id_user)
            ->get()->getRowArray();
    }

    public function addData($data)
    {
        $this->db->table('tbl_user')->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tbl_user')
            ->where('id_user', $data['id_user'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_user')
            ->where('id_user', $data['id_user'])
            ->delete($data);
    }

    public function get_user_count()
    {
        $query = $this->db->table('tbl_user')->countAll();
        return $query;
    }
}
