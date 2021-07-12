<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAbsensi extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_absensi')
            ->join('tbl_santri', 'tbl_santri.id_santri = tbl_absensi.id_santri', 'left')
            ->join('tbl_detailabsensi', 'tbl_detailabsensi.id_detailabsensi = tbl_absensi.id_detailabsensi', 'left')
            ->orderBy('id_absensi', 'DESC')
            ->get()->getResultArray();
    }

    public function mhs($id_absensi)
    {
        return $this->db->table('tbl_absensi')
            ->join('tbl_santri', 'tbl_santri.id_santri=tbl_absensi.id_santri', 'left')
            ->where('id_absensi', $id_absensi)
            ->get()->getResultArray();
    }

    public function SimpanAbsen($data)
    {
        $this->db->table('tbl_absensi')
            ->where('id_absensi', $data['id_absensi'])
            ->update($data);
    }

    public function detail_absensi()
    {
        return $this->db->table('tbl_detailabsensi')
            ->get()->getResultArray();
    }

    public function addData($data)
    {
        $this->db->table('tbL_detailabsensi')->insert($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbL_detailabsensi')
            ->where('id_detailabsensi', $data['id_detailabsensi'])
            ->delete($data);
    }

    public function detail_data()
    {
        return $this->db->table('tbl_absensi')
            ->get()->getResultArray();
    }
}
