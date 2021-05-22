<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAbsensi extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_chart')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_chart.NIS', 'tbl_santri.nama_santri = tbl_chart.nama_santri')
            ->orderBy('id_chart', 'DESC')
            ->get()->getResultArray();
    }

    public function addData($data)
    {
        $this->db->table('tbl_chart')->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tbl_chart')
            ->where('NIS', $data['NIS'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_chart')
            ->where('NIS', $data['NIS'])
            ->delete($data);
    }

    public function detail_data($NIS)
    {
        return $this->db->table('tbl_chart')
            ->where('NIS', $NIS)
            ->get()->getRowArray();
    }

    public function get_absensi_count()
    {
        $query = $this->db->table('tbl_chart')->countAll();
        return $query;
    }

    public function allData00()
    {
        return $this->db->table('tbl_chart')
            ->orderBy('id_chart', 'DESC')
            ->get()->getResultArray();
    }
}
