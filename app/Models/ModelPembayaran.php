<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPembayaran extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_pembayaran')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_pembayaran.NIS')
            ->orderBy('id_pembayaran', 'DESC')
            ->get()->getResultArray();
    }

    public function addData($data)
    {
        $this->db->table('tbl_pembayaran')->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tbl_pembayaran')
            ->where('id_pembayaran', $data['id_pembayaran'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_pembayaran')
            ->where('id_pembayaran', $data['id_pembayaran'])
            ->delete($data);
    }

    public function get_pembayaran_count()
    {
        $query = $this->db->table('tbl_pembayaran')->countAll();
        return $query;
    }

    public function get_pembayaran_by_id($data)
    {
        return $this->db->table('tbl_pembayaran')
            ->where('NIS', $data)
            ->get()->getResultArray();
    }
}
