<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPengumuman extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_pengumuman')
            ->orderBy('id_pengumuman', 'DESC')
            ->get()->getResultArray();
    }

    public function addData($data)
    {
        $this->db->table('tbl_pengumuman')->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tbl_pengumuman')
            ->where('id_pengumuman', $data['id_pengumuman'])
            ->update($data);
    }

    public function updateData($data, $id_pengumuman)
    {
        $query = $this->db->table("tbl_pengumuman")->update($data, array('id_pengumuman' => $id_pengumuman));
        return $query;
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_pengumuman')
            ->where('id_pengumuman', $data['id_pengumuman'])
            ->delete($data);
    }

    public function get_pengumuman_count()
    {
        $query = $this->db->table('tbl_pengumuman')->countAll();
        return $query;
    }
}
