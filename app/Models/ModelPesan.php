<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPesan extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_pesan')
            ->orderBy('id_pesan', 'DESC')
            ->get()->getResultArray();
    }

    public function addData($data)
    {
        $this->db->table('tbl_pesan')->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tbl_pesan')
            ->where('id_pesan', $data['id_pesan'])
            ->update($data);
    }

    public function updateData($data, $id_pesan)
    {
        $query = $this->db->table("tbl_pesan")->update($data, array('id_pesan' => $id_pesan));
        return $query;
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_pesan')
            ->where('id_pesan', $data['id_pesan'])
            ->delete($data);
    }

    public function get_pengumuman_count()
    {
        $query = $this->db->table('tbl_pesan')->countAll();
        return $query;
    }
}
