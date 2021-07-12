<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRapor extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_rapor')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_rapor.NIS', 'left')
            ->orderBy('id_rapor', 'DESC')
            ->get()->getResultArray();
    }

    public function addData($data)
    {
        $this->db->table('tbl_rapor')->insert($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_rapor')
            ->where('id_rapor', $data['id_rapor'])
            ->delete($data);
    }

    public function detail_data($id_rapor)
    {
        return $this->db->table('tbl_rapor')
            ->join('tbl_nilaimateri', 'tbl_nilaimateri.id_nm = tbl_rapor.id_nm', 'left')
            ->join('tbl_nilaikonseppraktikum', 'tbl_nilaikonseppraktikum.id_kp = tbl_rapor.id_kp', 'left')
            ->join('tbl_nilaisikapperilaku', 'tbl_nilaisikapperilaku.id_sp = tbl_rapor.id_sp', 'left')
            ->join('tbl_nilailimasuksessantri', 'tbl_nilailimasuksessantri.id_lss = tbl_rapor.id_lss', 'left')
            ->join('tbl_nilaiekstrakurikuler', 'tbl_nilaiekstrakurikuler.id_ne = tbl_rapor.id_ne', 'left')
            ->join('tbl_nilaiindeksprestasi', 'tbl_nilaiindeksprestasi.id_ip = tbl_rapor.id_ip', 'left')
            ->join('tbl_catatansaranpengurus', 'tbl_catatansaranpengurus.id_cs = tbl_rapor.id_cs', 'left')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_rapor.NIS', 'left')
            ->where('id_rapor', $id_rapor)
            ->get()->getRowArray();
    }

    public function get_rapor_count()
    {
        $query = $this->db->table('tbl_rapor')->countAll();
        return $query;
    }
}
