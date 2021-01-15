<?php namespace App\Controllers;

class Etalase extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index(){
        $kopi =new \App\Models\KopiModel();
        $model = $kopi->findAll();
        return view('etalase/index',[
            'model' => $model,
        ]);
    }

    public function beli()
    {
        $id = $this->request->uri->getSegment(3);

        $modelKopi = new \App\Models\KopiModel();
        $model = $modelKopi->find($id);

        if($this->request->getPost())
		{
		    $data = $this->request->getPost();
			$this->validation->run($data, 'transaksi');
			$errors = $this->validation->getErrors();

			if(!$errors){
				$transaksiModel = new \App\Models\TransaksiModel();
                $transaksi = new \App\Entities\Transaksi();
                
				$kopiModel = new \App\Models\KopiModel();
				$id_kopi = $this->request->getPost('id_kopi');
				$jumlah_pembelian = $this->request->getPost('jumlah');

				$kopi = $kopiModel->find($id_kopi);
				$entityKopi = new \App\Entities\Kopi();
				$entityKopi->id = $id_kopi;
				
				$entityKopi->stok = $kopi->stok*0+$jumlah_pembelian;
				$kopiModel->save($entityKopi);

				$transaksi->fill($data);
				$transaksi->status = 0;
				$transaksi->created_by = $this->session->get('id');
				$transaksi->created_date = date("Y-m-d H:i:s");

				$transaksiModel->save($transaksi);

				$id = $transaksiModel->insertID();

				$segment = ['transaksi','view',$id];

				return redirect()->to(site_url($segment));
                }
        }
        return view('etalase/beli',[
            'model'=>$model,

        ]);
    }

    public function jaket(){
        $kopi =new \App\Models\KopiModel();
        $model = $kopi->findAll();
        return view('etalase1/index',[
            'model' => $model,
        ]);
    }

    public function shirt(){
        $kopi =new \App\Models\KopiModel();
        $model = $kopi->findAll();
        return view('etalase2/index',[
            'model' => $model,
        ]);
    }
}