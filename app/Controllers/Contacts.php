<?php namespace App\Controllers;

use App\Models\ContactsModel;
use CodeIgniter\Controller;

class Contacts extends Controller
{
    //affiche Contact;
    public function index()
    {
        $model = new ContactsModel();
        $data=array();
   
   $data['contacts'] = $model->findAll();

   
  
   

    if (session()->get('isLoggedIn')){

        echo view('templates/header', $data);
        echo view('contacts/overview', $data);
        echo view('templates/footer', $data);
     }
    }
    //add Contact;
    public function add(){
        echo view('templates/headerAdmin');
        echo view('contacts/add');
        echo view('templates/footerAdmin');

    }
    //save Contact;
    public function save()
    {        

        //$model = new ContactsModel();
        //$_POST['body'] = isset($_POST['body']);
        
       // $model->insert($_POST);
        /*email*/
        $email = \Config\Services::email();

        $config['protocol'] = 'sendmail';
        $config['mailPath'] = '/usr/sbin/sendmail';
        $config['charset']  = 'iso-8859-1';
        $config['wordWrap'] = true;

        $email->initialize($config);

        $email->setFrom('nadinebenchekaya@gmail.com', 'benchekaya nadine');
        $email->setTo('nadinbenchekaya@gmail.com');
        //$email->setCC('another@another-example.com');
        //$email->setBCC('them@their-example.com');

        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');

        $email->send();
        /***** */
        //return $this->response->redirect(site_url('/'));
    }
    
   

    

}