<?php

namespace App\Models;

use CodeIgniter\Model;

class mediamodel extends Model
{

    public $table = 'picturebank';

    public function getvideo()
    {
        $query = $this->db->query("SELECT * FROM picturebank");
        return $query->getResult();
    }

    public function Delvideo($id)
    {
        $query = $this->db->table('picturebank')->delete(array('id' => $id));
        return $query;
    }
}
