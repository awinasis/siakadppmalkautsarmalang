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

    // untuk halaman admin
    public function allDataPengajuan()
    {
        return $this->db->table('tbl_pengajuansurat')
            ->orderBy('id_pengajuansurat', 'DESC')
            ->get()->getResultArray();
    }

    public function editPengajuan($data)
    {
        $this->db->table('tbl_pengajuansurat')
            ->where('id_pengajuansurat', $data['id_pengajuansurat'])
            ->update($data);
    }
    // batas untuk admin
    
    public function dataPengajuan()
    {
        $nis = session()->get('username');
        return $this->db->table('tbl_pengajuansurat')
            ->where('NIS', $nis)
            ->orderBy('id_pengajuansurat', 'DESC')
            ->get()->getResultArray();
    }

    public function addPengajuan($data)
    {
        $this->db->table('tbl_pengajuansurat')->insert($data);
    }

   

    public function deletPengajuan($data)
    {
        $this->db->table('tbl_surat')
            ->where('id_surat', $data['id_surat'])
            ->delete($data);
    }

    public function pengajuan_surat()
    {
        return $this->db->table('tbl_surat')
            ->orderBy('id_surat', 'DESC')
            ->get()->getResultArray();
    }
}
