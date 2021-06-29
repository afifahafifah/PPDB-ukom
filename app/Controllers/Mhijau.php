<?php namespace App\Controllers;

class Mhijau extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        
        $mhijauModel = new \App\Models\MhijauModel();
        $mhijaus = $mhijauModel->findAll();

             return view('mhijau/index',[
            'mhijaus'=>$mhijaus,
        ]);
         
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $mhijauModel = new \App\Models\MhijauModel();
        $mhijau = $mhijauModel->find($id);

        return view('mhijau/view',[
            'mhijau' => $mhijau,
        ]);
    }

    public function create()
    {
        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data,'mhijau');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $mhijauModel = new \App\Models\MhijauModel();
                $mhijau = new \App\Entities\Mhijau();
                $mhijau->fill($data);
                $mhijau->gambar = $this->request->getFile('gambar');
                $mhijau->created_by = $this->session->get('id');
                $mhijau->created_date = date("Y-m-d H:i:s");

                $mhijauModel->save($mhijau);

                $id = $mhijauModel->insertID();
                
                $segments = ['mhijau','view',$id];
                return redirect()->to(site_url($segments));
            }
        }
        return view('mhijau/create');
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $mhijauModel = new \App\Models\MhijauModel();
        $mhijau = $mhijauModel->find($id);

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data, 'mhijauupdate');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $b = new \App\Entities\Mhijau();
                $b->id = $id;
                $b->fill($data);

                if($this->request->getFile('gambar')->isValid())
                {
                    $b->gambar = $this->request->getFile('gambar');
                }
                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $mhijauModel->save($b);

                $segments = ['mhijau','view',$id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('mhijau/update',[
            'mhijau' => $mhijau,
            ]);
    }
    
    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelMhijau = new \App\Models\MhijauModel();
        $delete = $modelMhijau->delete($id);

        return redirect()->to(site_url('mhijau/index'));
    }
}