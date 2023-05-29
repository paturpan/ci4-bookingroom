<?php

namespace App\Controllers;

use App\Models\ruanganmodel;

class cruddaftarruang extends BaseController
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->ruang = $this->db->table('ruang');
    }

    public function daftarruang()
    {
        $model = new ruanganmodel();
        $data = [
            'title' => 'Daftar Ruangan | Agenda Rapat Cabang Tanjung Priok',
            // 'xx' => $this->ruanganmodel->ruangmodel($slug)
        ];

        $data['ruangmodel'] = $model->ruangmodel();
        echo view('/daftarruang', $data);
    }

    public function save()
    {
        $this->ruang->insert([
            'id' => $this->request->getVar('id'),
            'Kode_Ruangan' => $this->request->getVar('Kode_Ruangan'),
            'Nama_Ruangan' => $this->request->getVar('Nama_Ruangan')
        ]);

        return redirect()->to('/daftarruang');
    }

    public function hapus($id)
    {
        $model = new ruanganmodel();
        $model->DelBiodata($id);
        return redirect()->to('/daftarruang');
    }

    public function ubah($id = 'null')
    {

        $model = new ruanganmodel();
        $data = [
            'title' => 'Daftar Ruangan | Agenda Rapat Cabang Tanjung Priok',
            // 'xx' => $this->ruanganmodel->ruangmodel($slug)
        ];
        $data['result'] = $model->lihat($id);

        return view('editruangan', $data);
    }

    public function update($id = 'null')
    {

        helper(['form', 'url']);
        $request = service('request');
        $postData = $request->getPost();

        $model = new ruanganmodel();
        // $id = $this->request->getVar('id');
        $data2 = [
            'Kode_Ruangan' => $this->request->getVar('Kode_Ruangan'),
            'Nama_Ruangan'  => $this->request->getVar('Nama_Ruangan')
        ];
        $data = [
            'Kode_Ruangan' => $postData['Kode_Ruangan'],
            'Nama_Ruangan' => $postData['Nama_Ruangan']
        ];

        $model->update($id, $data);

        ## Update record
        if ($model->update($id, $data)) {
            session()->setFlashdata('message', 'Updated Successfully!');
            session()->setFlashdata('alert-class', 'alert-success');
            return redirect()->to('daftarruang');
        } else {
            session()->setFlashdata('message', 'Data not saved!');
            session()->setFlashdata('alert-class', 'alert-danger');

            return redirect()->route('editruangan/' . $id)->withInput();
        }
    }
}
