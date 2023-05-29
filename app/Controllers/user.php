<?php

namespace App\Controllers;

use App\Models\UsersModel;

class user extends BaseController
{

    public function index()
    {
        $model = new UsersModel();
        $data = [
            'title' => 'User Page | Agenda Rapat Cabang Tanjung Priok',
        ];
        $data['getusermodel'] = $model->getusermodel();

        echo view('/listuser', $data);
    }

    public function hapus($username)
    {
        $model = new UsersModel();
        $model->deleteProduct($username);
        return redirect()->to('/listuser');
    }
}
