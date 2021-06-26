<?php namespace App\Controllers;

use App\Models\AboutModel;
use CodeIgniter\Controller;

class About extends Controller
{
    //affiche services;
    public function index()
    {
        $model = new AboutModel();
        $data=array();
    
   // $data['services'] = $model->getNews($slug);
      $data['about'] = $model->findAll();

    

    if (session()->get('isLoggedIn')){

        echo view('templates/header', $data);
        echo view('about/overview2', $data);
        echo view('templates/footer', $data);
     }

    }

    
    
    
    //save service;
    public function save()
    {        

        $model = new AboutModel();
        //$_POST['body'] = isset($_POST['body']);
        $model->insert($_POST);
        return $this->response->redirect(site_url('about'));
    }
    //delete service;
    /*public function delete($id)
    {        
        $model = new ServicesModel();
        $model->delete(['id' => $id]);
        return $this->response->redirect(site_url('services'));
        
    }*/

    public function edit($id)
    {        
        $model = new AboutModel();
        $data=array();
    
        $data['about'] = $model->find($id) ;
     
         echo view('templates/header', $data);
         echo view('about/edit', $data);
         echo view('templates/footer', $data);
        
    }

    public function update()
    {        
        helper(['form' , 'url']);
        $model = new AboutModel();
        $model->update($_POST['id'], $_POST);
        
        //$data=array();
        //$data['services'] = $model->find($id);
        $id = $this->request->getVar('id');
        $file = $this->request->getFile('photo');

        if($file->getSize() > 0){
            echo'File Name: '.$file->getName();
            echo'File Size: '.$file->getSize();
            echo'File Extension: '.$file->getExtension();
              $photo=$file->getRandomName();
            $file->move('./upload/', $photo);
        }
            $data = [
                'name' => $this->request->getVar('name'),
                'disc' => $this->request->getVar('disc'),
                'telephone' => $this->request->getVar('telephone'),
                'email' => $this->request->getVar('email'),
                'adresse' => $this->request->getVar('adresse'),
                'photo' =>  $photo
            ];
        
            //$model->update($_POST['id'], $_POST);
            $save = $model->update($id, $data);
        
        return $this->response->redirect(site_url('about'));
        
 
        
        
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