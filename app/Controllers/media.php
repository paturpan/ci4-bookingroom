<?php

namespace App\Controllers;

use App\Models\mediamodel;
use App\Models\galerimodel;
use App\Models\modelquerybuilder;
use App\Models\Profile_model;

class media extends BaseController
{

	public function index()
	{
		return view('home');
	}

	function upload()
	{
		helper(['form', 'url']);

		$database = \Config\Database::connect();
		$db = $database->table('videobank');

		$input = $this->validate([
			'file' => [
				'uploaded[file]',
				'mime_in[file,image/jpg,image/jpeg,image/png]',
				'max_size[file,1024]',
			]
		]);

		if (!$input) {
			print_r('Choose a valid file');
		} else {
			$img = $this->request->getFile('file');
			$img->move('assets/upload');
			// $img->move(WRITEPATH . 'uploads');

			$data = [
				'name' =>  $img->getName(),
				'type'  => $img->getClientMimeType()
			];

			$save = $db->insert($data);
			print_r('File has successfully uploaded');
		}
	}

	function uploadvideo()
	{
		helper(['form', 'url']);

		$database = \Config\Database::connect();
		$db = $database->table('picturebank');

		$input = $this->validate([
			'file' => [
				'uploaded[file]',
				'mime_in[file,video/mp4]',
				// 'type[video/mp4]',
				'max_size[file,100000]',
			],
		]);

		if (!$input) {
			print_r('Choose a valid file');
		} else {
			$img = $this->request->getFile('file');
			$img->move('assets/upload');
			// $img->move(WRITEPATH . 'uploads');

			$data = [
				'name' =>  $img->getName(),
				'type'  => $img->getClientMimeType()
			];

			$save = $db->insert($data);
			print_r('File has successfully uploaded');
		}
	}

	public function hapus($id)
	{
		$model = new galerimodel();
		$model->Delgaleri($id);
		return redirect()->to('/galeri');
	}

	public function Pideo()
	{
		$data = [
			'title' => 'Konten Video | Agenda Rapat Cabang Tanjung Priok',
		];
		$model = new mediamodel();
		$data['getvideo'] = $model->paginate(4, 'halaman');
		$data['pager'] = $model->pager;

		echo view('/pideo', $data);
	}

	public function listpreview()
	{
		$data = [
			'title' => 'List Tampilan Display | Agenda Rapat Cabang Tanjung Priok',
		];
		$model = new mediamodel();
		$data['getvideo'] = $model->paginate(4, 'halaman');
		$data['pager'] = $model->pager;

		echo view('/listpreview', $data);
	}

	public function galeri()
	{
		$data = [
			'title' => 'Galeri Ruang Rapat | Agenda Rapat Cabang Tanjung Priok'
		];
		$model = new galerimodel();
		$data['getgaleri'] = $model->paginate(3, 'halaman');
		$data['pager'] = $model->pager;

		echo view('/galeri', $data);
	}
}
