<?php

namespace App\Controllers;

use App\Models\ServicesModel;
use CodeIgniter\Controller;

class Services extends Controller
{
    //affiche services;
    public function index()
    {
        $model = new ServicesModel();
        $data = array();

        // $data['services'] = $model->getNews($slug);
        //$data['services'] =$model->find($id);
        $data['services'] = $model->findAll();
        if (session()->get('isLoggedIn')) {

            echo view('templates/header', $data);
            echo view('services/overviewAdmin', $data);
            echo view('templates/footer', $data);
        } else {
            echo view('templates/headerAdmin', $data);
            echo view('services/overview', $data);
            echo view('templates/footerAdmin', $data);
        }
    }
    //add services;
    public function add()
    {
        echo view('templates/header');
        echo view('services/add');
        echo view('templates/footer');
    }
    //save service;
    public function save()
    {

        helper(['form', 'url']);
        $model = new ServicesModel();
        // $data=array();
        // $data['services'] = $model->find($id);
        $id = $this->request->getVar('id');
        $file = $this->request->getFile('photo');

        if ($file->getSize() > 0) {
            echo 'File Name: ' . $file->getName();
            echo 'File Size: ' . $file->getSize();
            echo 'File Extension: ' . $file->getExtension();
            $photo = $file->getRandomName();
            $file->move('./upload/', $photo);
        }
        $data = [
            'title' => $this->request->getVar('title'),
            'slug' => $this->request->getVar('slug'),
            'body' => $this->request->getVar('body'),
            'icon' => $this->request->getVar('icon'),
            'photo' =>  $photo
        ];
        $save = $model->insert($data);
        // $model->insert($_POST);
        return $this->response->redirect(site_url('services'));
    }
    //delete service;
    public function delete($id)
    {
        $model = new ServicesModel();
        $model->delete(['id' => $id]);
        return $this->response->redirect(site_url('services'));
    }

    public function edit($id)
    {
        $model = new ServicesModel();
        $data = array();

        $data['service'] = $model->find($id);



        echo view('templates/header', $data);
        echo view('services/edit', $data);
        echo view('templates/footer', $data);
    }

    public function update()
    {
        helper(['form', 'url']);
        $model = new ServicesModel();
        $data = array();
        $data['services'] = $model->find($id);
        $id = $this->request->getVar('id');
        $file = $this->request->getFile('photo');

        if ($file->getSize() > 0) {
            echo 'File Name: ' . $file->getName();
            echo 'File Size: ' . $file->getSize();
            echo 'File Extension: ' . $file->getExtension();
            $photo = $file->getRandomName();
            $file->move('./upload/', $photo);
        }
        $data = [
            'title' => $this->request->getVar('title'),
            'slug' => $this->request->getVar('slug'),
            'body' => $this->request->getVar('body'),
            'icon' => $this->request->getVar('icon'),
            'photo' =>  $photo
        ];

        //$model->update($_POST['id'], $_POST);
        $save = $model->update($id, $data);

        return $this->response->redirect(site_url('services'));
    }

    /*public function view($slug = null)
    {
        $model = new ServicesModel();

    $data['services'] = $model->getNews($slug);

    if (empty($data['services']))
    {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
    }

    $data['title'] = $data['services']['title'];

    echo view('templates/header', $data);
    echo view('services/view', $data);
    echo view('templates/footer', $data);
    }*/
}
