<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRapor extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_rapor')
            ->join('tbl_santri', 'tbl_santri.NIS = tbl_rapor.NIS', 'tbl_santri.nama_santri = tbl_rapor.nama_santri', 'left')
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
            ->join('tbl_materi', 'tbl_materi.id_materi = tbl_rapor.id_materi', 'left')
            ->where('id_rapor', $id_rapor)
            ->get()->getRowArray();
    }
}
