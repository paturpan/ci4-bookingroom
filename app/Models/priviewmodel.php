<?php

namespace App\Models;

use CodeIgniter\Model;

class priviewmodel extends Model
{
    public $table = 'ruang';


    public function Meetingroom($KR)
    {
        $query = $this->db->table('ruang')->getWhere(['Kode_Ruangan' => $KR]);
        return $query->getResult();
    }

    public function listbox($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
}
