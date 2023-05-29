<?php

namespace App\Controllers;

use App\Models\Agendamodel;

use App\Models\priviewmodel;
use App\Models\ruanganmodel;

class Agendarapat2 extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->agendarapat = $this->db->table('agendarapat');
        $this->ruang = $this->db->table('ruang');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard | Agenda Rapat Cabang Tanjung Priok',
        ];
        echo view('/dashboard', $data);
    }

    public function kalendar2()
    {
        $model = new Agendamodel;
        $model2 = new ruanganmodel();
        $data = ['title' => 'Kalendar Agenda Rapat',];
        $data['getAgendamodel'] = $model->getAgendamodel();
        $data['ruangmodel'] = $model2->ruangmodel();

        echo view('/kalendar', $data);
    }

    public function convertkata($ruangmodel)
    {
        $model2 = new ruanganmodel();
        $data['ruangmodel'] = $model2->ruangmodel();

        if ($ruangmodel) {
            $bulletRR01 = $ruangmodel[0]['Kode_Ruangan'];
            if ($bulletRR01 == 'RR01') {
                $hasil = preg_replace("/RR01/", "Holiday", $bulletRR01);
                echo $hasil;
            } else {
                echo "yah masih ada yg salah";
            }
            $bulletRR02 = $ruangmodel[1]['Kode_Ruangan'];
            if ($bulletRR02 == 'RR02') {
                $hasil = preg_replace("/RR02/", "Birthday", $bulletRR02);
                echo $hasil;
            } else {
                echo "yah masih ada yg salah";
            }
            $bulletRR03 = $ruangmodel[2]['Kode_Ruangan'];
            if ($bulletRR03 == 'RR03') {
                $hasil = preg_replace("/RR03/", "Event", $bulletRR03);
                echo $hasil;
            } else {
                echo "yah masih ada yg salah";
            }
            $bulletRR04 = $ruangmodel[3]['Kode_Ruangan'];
            if ($bulletRR04 == 'RR04') {
                $hasil = preg_replace("/RR04/", "lantai6GM", $bulletRR04);
                echo $hasil;
            } else {
                echo "yah masih ada yg salah";
            }
            $bulletRR05 = $ruangmodel[4]['Kode_Ruangan'];
            if ($bulletRR05 == 'RR05') {
                $hasil = preg_replace("/RR05/", "Lantai7komersial", $bulletRR05);
                echo $hasil;
            } else {
                echo "yah masih ada yg salah";
            }
        }
    }


    public function livedashboard()
    {
        $model = new Agendamodel();
        $data = ['title' => 'Aplikasi Ruang Rapat | Dashboard',];
        $data['getjadwal'] = $model->getjadwal();
        return view('/livedashboard', $data);
    }

    public function jadwalagenda()
    {
        $model = new Agendamodel;
        $modeling = new priviewmodel;
        $currentpage = $this->request->getVar('page_halaman') ? $this->request->getVar('page_halaman') : 1;
        // $keyword = $this->request->getVar('keyword');

        // if ($keyword) {
        //     $x = $this->model->search($keyword);
        // } else {
        //     $x = $this->model;
        // }

        $data = [
            'title' => 'Agenda Rapat',
            'currentpage' => $currentpage,
            // 'getAgendamodel' => $x->paginate(4, 'halaman')
        ];
        $data['getAgendamodel'] = $model->paginate(4, 'halaman');
        // $data['getAgendamodel'] = $x->paginate(4, 'halaman');
        $data['listbox'] = $modeling->listbox(); //untuk query nama ruangan rapat dari table ruang
        $data['pager'] = $model->pager;
        // $data['getAgendamodel'] = $model->getAgendamodel();

        echo view('/jadwalagenda', $data);
    }

    public function Priview($KR = '')
    {
        $model = new Agendamodel;
        $model2 = new priviewmodel;

        $data['title'] = 'Ruang Rapat Display';
        $data['Meetingroom'] = $model2->Meetingroom($KR);
        $data['getjadwal'] = $model->getjadwal();

        echo view('/priviewdisplay', $data);
    }

    public function Videolist()
    {
        $data = [
            'title' => 'Konten Video | Agenda Rapat Cabang Tanjung Priok',
        ];
        echo view('/videolist', $data);
    }


    public function masuk()
    {
        return view('/masuk');
    }

    public function testing()
    {
        $model = new Agendamodel;
        $data['title'] = 'Ruang Rapat Display';
        $data['getjadwal'] = $model->getjadwal();

        return view('/hello_view', $data);
    }
}
