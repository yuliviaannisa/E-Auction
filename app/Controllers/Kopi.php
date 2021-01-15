<?php namespace App\Controllers;

class Kopi extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        $kopiModel = new \App\Models\KopiModel();
        $kopi = $kopiModel->findAll();
        return view('sweater/index',[
            'kopi'=>$kopi,
        ]);
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $kopiModel = new \App\Models\KopiModel();
        $kopi = $kopiModel->find($id);

        return view('sweater/view',[
            'kopi' => $kopi,
        ]);
    }

    public function create()
    {
        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data,'kopi');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $kopiModel = new \App\Models\KopiModel();
                $kopi = new \App\Entities\Kopi();

                $kopi->fill($data);
                $kopi->gambar = $this->request->getFile('gambar');
                $kopi->created_by = $this->session->get('id');
                $kopi->created_date = date("Y-m-d H:i:s");

				$kopiModel->save($kopi);

                $id = $kopiModel->insertID();
                
                $segments = ['kopi','view',$id];
				return redirect()->to(site_url($segments));
            }
        }
        return view('sweater/create');
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $kopiModel = new \App\Models\KopiModel();
        $kopi = $kopiModel->find($id);

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data, 'kopiupdate');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $k = new \App\Entities\Kopi();
                $k->id = $id;
                $k->fill($data);

                if($this->request->getFile('gambar')->isValid())
                {
                    $k->gambar = $this->request->getFile('gambar');
                }
                $k->updated_by = $this->session->get('id');
                $k->updated_date = date("Y-m-d H:i:s");

                $kopiModel->save($k);

                $segments = ['Kopi','view',$id];

				return redirect()->to(base_url($segments));
            }
        }

        return view('sweater/update',[
            'kopi' => $kopi,
            ]);
    }
    
    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

		$modelKopi = new \App\Models\KopiModel();
		$delete = $modelKopi->delete($id);

		return redirect()->to(site_url('sweater/index'));
    }

    public function jaket()
    {
        return redirect()->to(site_url('jaket/index'));
    }

    public function shirt()
    {
        return redirect()->to(site_url('shirt/index'));
    }
}