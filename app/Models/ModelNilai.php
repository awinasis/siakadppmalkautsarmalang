<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelNilai extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_nilaiMateri')
            ->orderBy('id_nm', 'DESC')
            ->get()->getResultArray();
    }

    public function allData1()
    {
        return $this->db->table('tbl_nilaikonseppraktikum')
            ->orderBy('id_kp', 'DESC')
            ->get()->getResultArray();
    }

    public function allData2()
    {
        return $this->db->table('tbl_nilaiMateri')
            ->orderBy('id_nm', 'DESC')
            ->get()->getResultArray();
    }

    // public function allData3()
    // {
    //     return $this->db->table('tbl_nilaiMateri')
    //         ->orderBy('id_nm', 'DESC')
    //         ->get()->getResultArray();
    // }

    // public function allData4()
    // {
    //     return $this->db->table('tbl_nilaiMateri')
    //         ->orderBy('id_nm', 'DESC')
    //         ->get()->getResultArray();
    // }

    // public function allData5()
    // {
    //     return $this->db->table('tbl_nilaiMateri')
    //         ->orderBy('id_nm', 'DESC')
    //         ->get()->getResultArray();
    // }

    // public function allData6()
    // {
    //     return $this->db->table('tbl_nilaiMateri')
    //         ->orderBy('id_nm', 'DESC')
    //         ->get()->getResultArray();
    // }

    // public function allData7()
    // {
    //     return $this->db->table('tbl_nilaiMateri')
    //         ->orderBy('id_nm', 'DESC')
    //         ->get()->getResultArray();
    // }

    // public function allData8()
    // {
    //     return $this->db->table('tbl_nilaiMateri')
    //         ->orderBy('id_nm', 'DESC')
    //         ->get()->getResultArray();
    // }
}
