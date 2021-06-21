<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSantri extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_santri')
            ->orderBy('NIS')
            ->get()->getResultArray();
    }

    public function addData($data)
    {
        $this->db->table('tbl_santri')->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tbl_santri')
            ->where('id_santri', $data['id_santri'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_santri')
            ->where('id_santri', $data['id_santri'])
            ->delete($data);
    }

    public function detailData($id_santri)
    {
        return $this->db->table('tbl_santri')
            ->where('id_santri', $id_santri)
            ->get()->getRowArray();;
    }

    public function get_santri_count()
    {
        $query = $this->db->table('tbl_santri')->countAll();
        return $query;
    }

    public function get_bioSantri_by_id($data)
    {
        return $this->db->table('tbl_santri')
            ->where('NIS', $data)
            ->get()->getResultArray();
    }
}
