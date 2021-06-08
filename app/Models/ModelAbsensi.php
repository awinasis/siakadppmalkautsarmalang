<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAbsensi extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_chart')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_chart.NIS', 'tbl_santri.nama_santri = tbl_chart.nama_santri', 'left')
            ->orderBy('id_chart', 'DESC')
            ->get()->getResultArray();
    }

    public function addData($data)
    {
        $this->db->table('tbl_chart')->insert($data);
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

    public function tampilkan_draft()
    {
        return $this->db->table('tbl_kehadiran')
            ->orderBy('id_kehadiran', 'DESC')
            ->get()->getResultArray();
    }

    public function tambah_kehadiran($data)
    {
        $this->db->table('tbl_kehadiran')->insert($data);
    }

    public function edit_kehadiran($data)
    {
        $this->db->table('tbl_kehadiran')
            ->where('id_kehadiran', $data['id_kehadiran'])
            ->update($data);
    }

    public function delete_kehadiran($data)
    {
        $this->db->table('tbl_kehadiran')
            ->where('id_kehadiran', $data['id_kehadiran'])
            ->delete($data);
    }
}
