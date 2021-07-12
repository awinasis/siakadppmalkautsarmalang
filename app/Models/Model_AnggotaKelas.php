<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_AnggotaKelas extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_anggotakelas')
            ->join('tbl_santri', 'tbl_santri.id_santri = tbl_anggotakelas.id_santri', 'left')
            ->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_anggotakelas.id_kelas', 'left')
            ->orderBy('id_ak', 'DESC')
            ->get()->getResultArray();
    }
}
