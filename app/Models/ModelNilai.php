<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelNilai extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_nilaiMateri')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaiMateri.NIS', 'tbl_santri.nama_santri = tbl_nilaiMateri.nama_santri')
            ->orderBy('id_nm', 'DESC')
            ->get()->getResultArray();
    }

    public function addData($data)
    {
        $this->db->table('tbl_nilaimateri')->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tbl_nilaimateri')
            ->where('id_nm', $data['id_nm'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_nilaimateri')
            ->where('id_nm', $data['id_nm'])
            ->delete($data);
    }

    //------------------------------------------------ 2 --------------------------------------------------// 

    public function allData1()
    {
        return $this->db->table('tbl_nilaikonseppraktikum')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaikonseppraktikum.NIS', 'tbl_santri.nama_santri = tbl_nilaikonseppraktikum.nama_santri')
            ->orderBy('id_kp', 'DESC')
            ->get()->getResultArray();
    }

    public function addData1($data)
    {
        $this->db->table('tbl_nilaikonseppraktikum')->insert($data);
    }

    public function deleteData1($data)
    {
        $this->db->table('tbl_nilaikonseppraktikum')
            ->where('id_kp', $data['id_kp'])
            ->delete($data);
    }

    //------------------------------------------------ 3 --------------------------------------------------// 

    public function allData2()
    {
        return $this->db->table('tbl_nilaisikapperilaku')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaisikapperilaku.NIS', 'tbl_santri.nama_santri = tbl_nilaisikapperilaku.nama_santri')
            ->orderBy('id_sp', 'DESC')
            ->get()->getResultArray();
    }

    public function addData2($data)
    {
        $this->db->table('tbl_nilaisikapperilaku')->insert($data);
    }

    public function deleteData2($data)
    {
        $this->db->table('tbl_nilaisikapperilaku')
            ->where('id_sp', $data['id_sp'])
            ->delete($data);
    }

    //------------------------------------------------ 4 --------------------------------------------------// 

    public function allData3()
    {
        return $this->db->table('tbl_nilailimasuksessantri')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilailimasuksessantri.NIS', 'tbl_santri.nama_santri = tbl_nilailimasuksessantri.nama_santri')
            ->orderBy('id_lss', 'DESC')
            ->get()->getResultArray();
    }

    public function addData3($data)
    {
        $this->db->table('tbl_nilailimasuksessantri')->insert($data);
    }

    public function deleteData3($data)
    {
        $this->db->table('tbl_nilailimasuksessantri')
            ->where('id_lss', $data['id_lss'])
            ->delete($data);
    }

    //------------------------------------------------ 5 --------------------------------------------------// 

    public function allData4()
    {
        return $this->db->table('tbl_nilaiekstrakurikuler')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaiekstrakurikuler.NIS', 'tbl_santri.nama_santri = tbl_nilaiekstrakurikuler.nama_santri')
            ->orderBy('id_ne', 'DESC')
            ->get()->getResultArray();
    }

    public function addData4($data)
    {
        $this->db->table('tbl_nilaiekstrakurikuler')->insert($data);
    }

    public function deleteData4($data)
    {
        $this->db->table('tbl_nilaiekstrakurikuler')
            ->where('id_ne', $data['id_ne'])
            ->delete($data);
    }

    //------------------------------------------------ 6 --------------------------------------------------// 

    public function allData5()
    {
        return $this->db->table('tbl_nilai')
            ->orderBy('id_', 'DESC')
            ->get()->getResultArray();
    }

    //------------------------------------------------ 7 --------------------------------------------------// 

    public function allData6()
    {
        return $this->db->table('tbl_nilaiindeksprestasi')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaiindeksprestasi.NIS', 'tbl_santri.nama_santri = tbl_nilaiindeksprestasi.nama_santri')
            ->orderBy('id_ip', 'DESC')
            ->get()->getResultArray();
    }

    public function addData6($data)
    {
        $this->db->table('tbl_nilaiindeksprestasi')->insert($data);
    }

    public function deleteData6($data)
    {
        $this->db->table('tbl_nilaiindeksprestasi')
            ->where('id_ip', $data['id_ip'])
            ->delete($data);
    }

    //------------------------------------------------ 8 --------------------------------------------------// 

    public function allData7()
    {
        return $this->db->table('tbl_catatanSaranPengurus')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_catatanSaranPengurus.NIS', 'tbl_santri.nama_santri = tbl_catatanSaranPengurus.nama_santri')
            ->orderBy('id_cs', 'DESC')
            ->get()->getResultArray();
    }

    public function addData7($data)
    {
        $this->db->table('tbl_catatanSaranPengurus')->insert($data);
    }

    public function deleteData7($data)
    {
        $this->db->table('tbl_catatanSaranPengurus')
            ->where('id_cs', $data['id_cs'])
            ->delete($data);
    }

    //------------------------------------------------ 9 --------------------------------------------------// 

    public function allData8()
    {
        return $this->db->table('tbl_nilai')
            ->orderBy('id_', 'DESC')
            ->get()->getResultArray();
    }
}
