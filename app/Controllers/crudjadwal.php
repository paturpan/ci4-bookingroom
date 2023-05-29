<?php

namespace App\Controllers;

use App\Models\modelquerybuilder;

class crudjadwal extends BaseController
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->agendarapat = $this->db->table('agendarapat');
    }

    public function index()
    {
        $model = new modelquerybuilder();
        $data['product']  = $model->getProduct()->getResult();

        echo view('product_view', $data);
    }

    public function save()
    {
        $model = new modelquerybuilder();
        $model->getProduct();

        $tglinput = strtotime($this->request->getvar('startTanggal_rapat'));
        $jaminput = strtotime($this->request->getvar('start')); //1638131520

        $tglstart = strtotime($model->getProduct[10]['startTanggal_rapat']); //2021-11-29, 
        $start = strtotime($model->getProduct[10]['start']); // 14:31, 1638165600
        $end = strtotime($model->getProduct[10]['end']); //  6:31, 1638138660

        $this->agendarapat->insert([
            'Judul' => $this->request->getvar('Judul'),
            'Ruang' => $this->request->getvar('Ruang'),
            'startTanggal_rapat' => $this->request->getvar('startTanggal_rapat'),
            'endTanggal_rapat' => $this->request->getvar('endTanggal_rapat'),
            'start' => $this->request->getvar('start'),
            'end' => $this->request->getvar('end')
        ]);
        if ($tglinput == $tglstart) {
            session()->setFlashdata('message', 'sama jadi validasi lagi!!');
            if ($jaminput == $start) {
                session()->setFlashdata('message', "sama juga tolak tolak, ");
                if ($jaminput < $end) {
                    session()->setFlashdata('message', "ga bisa gaes, sory ya.. cari jam lain gih, ");
                }
            } else {
                session()->setFlashdata('message',  "sama tanggal tapi sudah lewat dari jam berakhir rapat sebelumnya nya, jadi gpp ");
            }
        } else {
            session()->setFlashdata('message', 'Data Saved Successfully!');
            session()->setFlashdata('alert-class', 'alert-success');
        }

        // if ($this->agendarapat->insert = true) {


        return redirect()->to('/jadwalagenda');
        // }
    }

    public function ubah($id)
    {
        $data = [
            'title' => 'Ubah Data',
        ];
        $model = new modelquerybuilder();
        $data['result'] = $model->lihat($id);

        return view('edit', $data);
    }

    public function update($id = 'null')
    {

        helper(['form', 'url']);
        $request = service('request');
        $postData = $request->getPost();

        $model = new modelquerybuilder();
        // $id = $this->request->getVar('id');

        $data = [
            'Judul' => $postData['Judul'],
            'Ruang' => $postData['Ruang'],
            'startTanggal_rapat' => $postData['startTanggal_rapat'],
            'endTanggal_rapat' => $postData['endTanggal_rapat'],
            'start' => $postData['start'],
            'end' => $postData['end'],
        ];

        $model->update($id, $data);

        ## Update record
        if ($model->update($id, $data)) {
            session()->setFlashdata('message', 'Updated Successfully!');
            session()->setFlashdata('alert-class', 'alert-success');
            return redirect()->to('/jadwalagenda');
        } else {
            session()->setFlashdata('message', 'Data not saved!');
            session()->setFlashdata('alert-class', 'alert-danger');

            return redirect()->route('edit/' . $id)->withInput();
        }
    }

    public function hapus($id)
    {
        $model = new modelquerybuilder();
        $model->DelBiodata($id);
        return redirect()->to('/jadwalagenda');
    }
}
