<?php namespace App\Controllers;

class Shirt extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        $pantsModel = new \App\Models\PantsModel();
        $pants = $pantsModel->findAll();

        return view('pants/index',[
            'pants'=>$pants,
        ]);
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $pantsModel = new \App\Models\PantsModel();
        $pants = $pantsModel->find($id);

        return view('pants/view',[
            'pants' => $pants,
        ]);
    }

    public function create()
    {
        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data,'pants');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $pantsModel = new \App\Models\PantsModel();
                $pants = new \App\Entities\Pants();

                $pants->fill($data);
                $pants->gambar = $this->request->getFile('gambar');
                $pants->created_by = $this->session->get('id');
                $pants->created_date = date("Y-m-d H:i:s");

				$pantsModel->save($pants);

                $id = $pantsModel->insertID();
                
                $segments = ['pants','view',$id];
				return redirect()->to(site_url($segments));
            }
        }
        return view('pants/create');
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $pantsModel = new \App\Models\PantsModel();
        $pants = $pantsModel->find($id);

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data, 'pantsupdate');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $k = new \App\Entities\Pants();
                $k->id = $id;
                $k->fill($data);

                if($this->request->getFile('gambar')->isValid())
                {
                    $k->gambar = $this->request->getFile('gambar');
                }
                $k->updated_by = $this->session->get('id');
                $k->updated_date = date("Y-m-d H:i:s");

                $pantsModel->save($k);

                $segments = ['pants','view',$id];

				return redirect()->to(base_url($segments));
            }
        }

        return view('pants/update',[
            'pants' => $pants,
            ]);
    }
    
    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

		$modelpants = new \App\Models\PantsModel();
		$delete = $modelpants->delete($id);

		return redirect()->to(site_url('pants/index'));
    }
}