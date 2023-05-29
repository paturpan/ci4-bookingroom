<?php

namespace App\Models;

use CodeIgniter\Model;

class ruanganmodel extends Model
{
    protected $table = 'ruang';
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'Kode_Ruangan', 'Nama_ruangan', 'warna'];
    // Validation 
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;
    //callback
    protected $beforeUpdate = [];
    protected $afterUpdate = [];

    public function getCategory()
    {
        $builder = $this->db->table('ruang');
        return $builder->get();
    }

    public function getKomik($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    public function lihat($id)
    {
        $query = $this->where(['id' => $id])->first();
        return $query;
    }

    public function updateProduct($data, $id)
    {
        $query = $this->db->table('ruang')->update($data, array('id' => $id));
        return $query;
    }

    public function ruangmodel($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function DelBiodata($id)
    {
        $query = $this->db->table('ruang')->delete(array('id' => $id));
        return $query;
    }


    public function getCustomert($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function updateCustomer($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }
}
