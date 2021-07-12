<?php

namespace App\Controllers;

use App\Models\ModelAbsensi;
use App\Models\ModelSantri;

class Data_Absensi extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAbsensi = new ModelAbsensi();
        $this->ModelSantri = new ModelSantri();
    }

    public function index()
    {
        $data = [
            'title' => 'Absen Kelas',
            'absensi' => $this->ModelAbsensi->allData(),
            'santri' => $this->ModelSantri->allData(),
            'isi'    => 'guru/absenkelas/view_absensi'
        ];

        return view("layout/wrapper", $data);
    }

    public function detailAbsensi()
    {
        $data = [
            'title' => 'Based on date',
            'detailabsen' => $this->ModelAbsensi->detail_absensi(),
            'isi'    => 'guru/absenkelas/based_on_date'
        ];

        return view("layout/wrapper", $data);
    }

    public function add()
    {
        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'sesi_pengajian' => $this->request->getPost('sesi_pengajian'),
        ];
        $this->ModelAbsensi->addData($data);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan !!');
        return redirect()->to(base_url('data_absensi/detailAbsensi'));
    }


    public function delete($id_detailabsensi)
    {
        $data = [
            'id_detailabsensi' => $id_detailabsensi,
        ];
        $this->ModelAbsensi->deleteData($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('data_absensi/detailAbsensi'));
    }

    public function SimpanAbsen()
    {
        $absen = $this->ModelAbsensi->mhs();
        foreach ($absen as $key => $value) {
            $data = [
                'id_absensi' => $this->request->getPost($value['id_absensi'] . 'id_absensi'),
                'keterangan' => $this->request->getPost($value['id_absensi'] . 'keterangan'),
            ];
            $this->ModelAbsensi->SimpanAbsen($data);
        }
        session()->setFlashdata('pesan', 'Absen berhasil di update !!');
        return redirect()->to(base_url('data_absensi/'));
    }

    public function rekapAbsensi()
    {
        $data = [
            'title' => 'Rekap Absensi',
            'rekap' => $this->ModelAbsensi->detail_data(),
            'isi'    => 'guru/absenkelas/tampilkanAbsen'
        ];

        return view("layout/wrapper", $data);
    }
}
