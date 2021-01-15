<?php namespace App\Controllers;

class Jaket extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        $jaketModel = new \App\Models\JaketModel();
        $jaket = $jaketModel->findAll();

        return view('jaket/index',[
            'jaket'=>$jaket,
        ]);
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $jaketModel = new \App\Models\JaketModel();
        $jaket = $jaketModel->find($id);

        return view('jaket/view',[
            'jaket' => $jaket,
        ]);
    }

    public function create()
    {
        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data,'jaket');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $jaketModel = new \App\Models\jaketModel();
                $jaket = new \App\Entities\Jaket();

                $jaket->fill($data);
                $jaket->gambar = $this->request->getFile('gambar');
                $jaket->created_by = $this->session->get('id');
                $jaket->created_date = date("Y-m-d H:i:s");

				$jaketModel->save($jaket);

                $id = $jaketModel->insertID();
                
                $segments = ['jaket','view',$id];
				return redirect()->to(site_url($segments));
            }
        }
        return view('jaket/create');
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $jaketModel = new \App\Models\JaketModel();
        $jaket = $jaketModel->find($id);

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data, 'jaketupdate');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $k = new \App\Entities\Jaket();
                $k->id = $id;
                $k->fill($data);

                if($this->request->getFile('gambar')->isValid())
                {
                    $k->gambar = $this->request->getFile('gambar');
                }
                $k->updated_by = $this->session->get('id');
                $k->updated_date = date("Y-m-d H:i:s");

                $jaketModel->save($k);

                $segments = ['jaket','view',$id];

				return redirect()->to(base_url($segments));
            }
        }

        return view('jaket/update',[
            'jaket' => $jaket,
            ]);
    }
    
    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

		$modeljaket = new \App\Models\JaketModel();
		$delete = $modeljaket->delete($id);

		return redirect()->to(site_url('jaket/index'));
    }
}