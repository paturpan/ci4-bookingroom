<?php

namespace App\Models;

use CodeIgniter\Model;

class Agendamodel extends Model
{
    public $table = 'agendarapat';

    public function search($keyword)
    {
        $builder = $this->table('agendarapat');
        $builder->like('Judul', $keyword);

        return $builder;
    }

    public function getAgendamodel1($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function getAgendamodel()
    {
        return $this->db->table('agendarapat')
            ->join('ruang', 'ruang.Nama_Ruangan=agendarapat.ruang', 'left')
            ->get()->getResultArray();
    }

    public function getkalendar()
    {
        $query = $this->db->query("SELECT * FROM agendarapat");
        return $query->getResult();
    }

    public function getjadwal($id = false)
    {
        if ($id === false) {
            return $this->orderBy('startTanggal_rapat', 'desc')->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
}
