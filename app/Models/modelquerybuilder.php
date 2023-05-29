<?php

namespace App\Models;

use CodeIgniter\Model;

class modelquerybuilder extends Model
{
    protected $table = 'agendarapat';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'Judul', 'Ruang', 'startTanggal_rapat', 'endTanggal_rapat', 'start', 'end', 'badge'];

    public function getCategory($id = false)
    {
        if ($id === false) {
            return $this->orderBy('startTanggal_rapat', 'desc')->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function getProduct()
    {
        $builder = $this->db->table('agendarapat');
        $builder->select('*');
        // $builder->join('category', 'category_id = product_category_id', 'left');
        return $builder->get();
    }

    public function saveProduct($data)
    {
        $query = $this->db->table('agendarapat')->insert($data);
        return $query;
    }

    public function DelBiodata($id)
    {
        $query = $this->db->table('agendarapat')->delete(array('id' => $id));
        return $query;
    }

    public function updateBiodata($data, $id)
    {
        $query = $this->db->table('agendarapat')->update($data, array('id' => $id));
        return $query;
    }

    public function lihat($id)
    {
        $query = $this->where(['id' => $id])->first();
        return $query;
    }

    public function nyari($id)
    {
        $query = $this->db->query("SELECT * FROM agendarapat where id = $id");
        return $query->getResult();
    }
}
