<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelNilai extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_nilaiMateri')
            ->join('tbl_santri', 'tbl_santri.id_santri = tbl_nilaimateri.id_santri', 'left')
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

    //------------------------------------------------ 2 --------------------------------------------------// 

    public function allData1()
    {
        return $this->db->table('tbl_nilaikonseppraktikum')
            ->orderBy('id_kp', 'DESC')
            ->get()->getResultArray();
    }

    public function addData1($data)
    {
        $this->db->table('tbl_nilaikonseppraktikum')->insert($data);
    }

    //------------------------------------------------ 3 --------------------------------------------------// 

    public function allData2()
    {
        return $this->db->table('tbl_nilaisikapperilaku')
            ->orderBy('id_sp', 'DESC')
            ->get()->getResultArray();
    }

    public function addData2($data)
    {
        $this->db->table('tbl_nilaisikapperilaku')->insert($data);
    }

    //------------------------------------------------ 4 --------------------------------------------------// 

    public function allData3()
    {
        return $this->db->table('tbl_nilailimasuksessantri')
            ->orderBy('id_lss', 'DESC')
            ->get()->getResultArray();
    }

    public function addData3($data)
    {
        $this->db->table('tbl_nilailimasuksessantri')->insert($data);
    }

    //------------------------------------------------ 5 --------------------------------------------------// 

    public function allData4()
    {
        return $this->db->table('tbl_nilaiekstrakurikuler')
            ->orderBy('id_ne', 'DESC')
            ->get()->getResultArray();
    }

    public function addData4($data)
    {
        $this->db->table('tbl_nilaiekstrakurikuler')->insert($data);
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
            ->orderBy('id_ip', 'DESC')
            ->get()->getResultArray();
    }

    public function addData6($data)
    {
        $this->db->table('tbl_')->insert($data);
    }

    //------------------------------------------------ 8 --------------------------------------------------// 

    public function allData7()
    {
        return $this->db->table('tbl_catatanSaranPengurus')
            ->orderBy('id_cs', 'DESC')
            ->get()->getResultArray();
    }

    public function addData7($data)
    {
        $this->db->table('tbl_catatanSaranPengurus')->insert($data);
    }

    //------------------------------------------------ 9 --------------------------------------------------// 

    public function allData8()
    {
        return $this->db->table('tbl_nilai')
            ->orderBy('id_', 'DESC')
            ->get()->getResultArray();
    }
}
