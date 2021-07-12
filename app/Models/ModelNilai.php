<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelNilai extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_nilaiMateri')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaiMateri.NIS', 'left')
            ->orderBy('tbl_santri.NIS', 'ASC')
            ->get()->getResultArray();
    }

    public function detail_data($id_nm)
    {
        return $this->db->table('tbl_nilaiMateri')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaiMateri.NIS', 'left')
            ->where('id_nm', $id_nm)
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

    public function allData_HB()
    {
        return $this->db->table('tbl_nilaiMateri2')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaiMateri2.NIS', 'left')
            ->orderBy('tbl_santri.NIS', 'ASC')
            ->get()->getResultArray();
    }

    public function addDataHB($data)
    {
        $this->db->table('tbl_nilaimateri2')->insert($data);
    }

    public function detail_dataHB($id_nm2)
    {
        return $this->db->table('tbl_nilaiMateri2')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaiMateri2.NIS', 'left')
            ->where('id_nm2', $id_nm2)
            ->get()->getResultArray();
    }

    public function editDataHB($data)
    {
        $this->db->table('tbl_nilaimateri2')
            ->where('id_nm2', $data['id_nm2'])
            ->update($data);
    }

    public function deleteDataHB($data)
    {
        $this->db->table('tbl_nilaimateri2')
            ->where('id_nm2', $data['id_nm2'])
            ->delete($data);
    }

    //------------------------------------------------ 2 --------------------------------------------------// 

    public function allData1()
    {
        return $this->db->table('tbl_nilaikonseppraktikum')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaikonseppraktikum.NIS', 'left')
            ->orderBy('tbl_santri.NIS', 'ASC')
            ->get()->getResultArray();
    }

    public function detail_data1($id_kp)
    {
        return $this->db->table('tbl_nilaikonseppraktikum')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaikonseppraktikum.NIS', 'left')
            ->where('id_kp', $id_kp)
            ->get()->getResultArray();
    }

    public function addData1($data)
    {
        $this->db->table('tbl_nilaikonseppraktikum')->insert($data);
    }

    public function editData1($data)
    {
        $this->db->table('tbl_nilaikonseppraktikum')
            ->where('id_kp', $data['id_kp'])
            ->update($data);
    }

    public function deleteData1($data)
    {
        $this->db->table('tbl_nilaikonseppraktikum')
            ->where('id_kp', $data['id_kp'])
            ->delete($data);
    }

    public function allData1_HB()
    {
        return $this->db->table('tbl_nilaikonseppraktikum2')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaikonseppraktikum2.NIS', 'left')
            ->orderBy('tbl_santri.NIS', 'ASC')
            ->get()->getResultArray();
    }

    public function addData1_HB($data)
    {
        $this->db->table('tbl_nilaikonseppraktikum2')->insert($data);
    }

    public function detail_data1HB($id_kp2)
    {
        return $this->db->table('tbl_nilaikonseppraktikum2')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaikonseppraktikum2.NIS', 'left')
            ->where('id_kp2', $id_kp2)
            ->get()->getResultArray();
    }

    public function editData1_HB($data)
    {
        $this->db->table('tbl_nilaikonseppraktikum2')
            ->where('id_kp2', $data['id_kp2'])
            ->update($data);
    }

    public function deleteData1_HB($data)
    {
        $this->db->table('tbl_nilaikonseppraktikum2')
            ->where('id_kp2', $data['id_kp2'])
            ->delete($data);
    }


    //------------------------------------------------ 3 --------------------------------------------------// 

    public function allData2()
    {
        return $this->db->table('tbl_nilaisikapperilaku')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaisikapperilaku.NIS', 'left')
            ->orderBy('tbl_santri.NIS', 'ASC')
            ->get()->getResultArray();
    }

    public function detail_data2($id_sp)
    {
        return $this->db->table('tbl_nilaisikapperilaku')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaisikapperilaku.NIS', 'left')
            ->where('id_sp', $id_sp)
            ->get()->getResultArray();
    }

    public function addData2($data)
    {
        $this->db->table('tbl_nilaisikapperilaku')->insert($data);
    }

    public function editData2($data)
    {
        $this->db->table('tbl_nilaisikapperilaku')
            ->where('id_sp', $data['id_sp'])
            ->update($data);
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
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilailimasuksessantri.NIS', 'left')
            ->orderBy('tbl_santri.NIS', 'ASC')
            ->get()->getResultArray();
    }

    public function detail_data3($id_lss)
    {
        return $this->db->table('tbl_nilailimasuksessantri')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilailimasuksessantri.NIS', 'left')
            ->where('id_lss', $id_lss)
            ->get()->getResultArray();
    }

    public function addData3($data)
    {
        $this->db->table('tbl_nilailimasuksessantri')->insert($data);
    }

    public function editData3($data)
    {
        $this->db->table('tbl_nilailimasuksessantri')
            ->where('id_lss', $data['id_lss'])
            ->update($data);
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
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaiekstrakurikuler.NIS', 'left')
            ->orderBy('tbl_santri.NIS', 'ASC')
            ->get()->getResultArray();
    }

    public function detail_data4($id_ne)
    {
        return $this->db->table('tbl_nilaiekstrakurikuler')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaiekstrakurikuler.NIS', 'left')
            ->where('id_ne', $id_ne)
            ->get()->getResultArray();
    }

    public function addData4($data)
    {
        $this->db->table('tbl_nilaiekstrakurikuler')->insert($data);
    }

    public function editData4($data)
    {
        $this->db->table('tbl_nilaiekstrakurikuler')
            ->where('id_ne', $data['id_ne'])
            ->update($data);
    }

    public function deleteData4($data)
    {
        $this->db->table('tbl_nilaiekstrakurikuler')
            ->where('id_ne', $data['id_ne'])
            ->delete($data);
    }

    //------------------------------------------------ 7 --------------------------------------------------// 

    public function allData6()
    {
        return $this->db->table('tbl_nilaiindeksprestasi')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaiindeksprestasi.NIS', 'left')
            ->orderBy('tbl_santri.NIS', 'ASC')
            ->get()->getResultArray();
    }

    public function detail_data6($id_ip)
    {
        return $this->db->table('tbl_nilaiindeksprestasi')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_nilaiindeksprestasi.NIS', 'left')
            ->where('id_ip', $id_ip)
            ->get()->getResultArray();
    }

    public function addData6($data)
    {
        $this->db->table('tbl_nilaiindeksprestasi')->insert($data);
    }

    public function editData6($data)
    {
        $this->db->table('tbl_nilaiindeksprestasi')
            ->where('id_ip', $data['id_ip'])
            ->update($data);
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
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_catatanSaranPengurus.NIS', 'left')
            ->orderBy('tbl_santri.NIS', 'ASC')
            ->get()->getResultArray();
    }

    public function detail_data7($id_cs)
    {
        return $this->db->table('tbl_catatanSaranPengurus')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_catatanSaranPengurus.NIS', 'left')
            ->where('id_cs', $id_cs)
            ->get()->getResultArray();
    }

    public function addData7($data)
    {
        $this->db->table('tbl_catatanSaranPengurus')->insert($data);
    }

    public function editData7($data)
    {
        $this->db->table('tbl_catatanSaranPengurus')
            ->where('id_cs', $data['id_cs'])
            ->update($data);
    }

    public function deleteData7($data)
    {
        $this->db->table('tbl_catatanSaranPengurus')
            ->where('id_cs', $data['id_cs'])
            ->delete($data);
    }
}
