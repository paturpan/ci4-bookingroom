<?php

namespace App\Models;

use CodeIgniter\Model;

class galerimodel extends Model
{
    public $table = 'videobank';

    public function getgaleri()
    {
        $query = $this->db->query("SELECT * FROM videobank");
        return $query->getResult();
    }

    public function Delgaleri($id)
    {
        $query = $this->db->table('videobank')->delete(array('id' => $id));
        return $query;
    }
}
