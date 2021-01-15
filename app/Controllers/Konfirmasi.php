<?php namespace App\Controllers;

class Konfirmasi extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        $bayarModel = new \App\Models\BayarModel();
        $bayar = $bayarModel->findAll();

        return view('konfirmasi/invoice',[
            'bayar'=>$bayar,
        ]);
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $bayarModel = new \App\Models\BayarModel();
        $bayar = $bayarModel->find($id);

        return view('konfirmasi',[
            'bayar' => $bayar,
        ]);
    }

    public function create()
    {
        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data,'bayar');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $bayarModel = new \App\Models\bayarModel();
                $bayar = new \App\Entities\bayar();

                $bayar->fill($data);
                $bayar->bukti = $this->request->getFile('bukti');
                $bayar->created_by = $this->session->get('id');
                $bayar->created_date = date("Y-m-d H:i:s");

				$bayarModel->save($bayar);

                $id = $bayarModel->insertID();
                
                $segments = ['bayar','view',$id];
				return redirect()->to(site_url($segments));
            }
        }
        return view('konfirmasi/create');
    }
    public function bayar()
    {
        $bayarModel = new \App\Models\BayarModel();
        $bayar = $bayarModel->findAll();

        return view('konfirmasi/bayar',[
            'bayar'=>$bayar,
        ]);
    }
}