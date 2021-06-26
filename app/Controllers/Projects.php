<?php

namespace App\Controllers;

use App\Models\ProjectsModel;
use App\Models\ServicesModel;
use CodeIgniter\Controller;

class Projects extends Controller
{
    //affiche projects;
    public function index()
    {
        $model = new ProjectsModel();
        $model_service = new ServicesModel();
        $data = array();


        $tab = $model->findAll();
        $res = array();
        //na5ou title mta3 kol services id
        foreach ($tab as $one) {
            $inf_service = $model_service->find($one['services_id']);
            $one["service_name"] = $inf_service['title'];
            $res[] = $one;
        }
        $data['projects'] = $res;
        if (session()->get('isLoggedIn')) {

            echo view('templates/header', $data);
            echo view('projects/overviewAdmin', $data);
            echo view('templates/footer', $data);
        } else {
            echo view('templates/headerAdmin', $data);
            echo view('projects/overview', $data);
            echo view('templates/footerAdmin', $data);
        }
        /* echo view('templates/header', $data);
    echo view('projects/overview', $data);
    echo view('templates/footer', $data);*/
    }
    //add projects;
    public function add()
    {
        echo view('templates/header');
        echo view('projects/add');
        echo view('templates/footer');
    }
    //save projects;
    public function save()
    {

        $model = new ProjectsModel();
        //$_POST['body'] = isset($_POST['body']);
        $model->insert($_POST);
        return $this->response->redirect(site_url('projects'));
    }
    //delete projects
    public function delete($id)
    {
        $model = new ProjectsModel();
        $model->delete(['id' => $id]);
        return $this->response->redirect(site_url('projects'));
    }

    public function edit($id)
    {
        $model = new ProjectsModel();
        $data = array();

        $data['project'] = $model->find($id);

        echo view('templates/header', $data);
        echo view('projects/edit', $data);
        echo view('templates/footer', $data);
    }

    public function update()
    {
        helper(['form', 'url']);
        $model = new ProjectsModel();




        $data = array();
        $data['projects'] = $model->find($id);
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
            'services_id' => $this->request->getVar('services_id'),
            'title' => $this->request->getVar('title'),
            'body' => $this->request->getVar('body'),
            'photo' =>  $photo
        ];

        //$model->update($_POST['id'], $_POST);
        $save = $model->update($id, $data);

        return $this->response->redirect(site_url('projects'));
    }
}
