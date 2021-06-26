<?php namespace App\Controllers;

use App\Models\ContactsModel;
use App\Models\AboutModel;
use App\Models\ProjectsModel;
use App\Models\ServicesModel;
use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
       {
        // Whoops, we don't have a page for that!
        throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
       }
       $data=array();
       // the data that we want to pass into the view;
       $data['title'] = ucfirst($page); // Capitalize the first letter 

       //data services;
       $model_service = new ServicesModel();
       
       $data['services'] = $model_service->find([43,45,53]);
       /*************/

       //data projects
       $model_project = new ProjectsModel();
       $tab= $model_project->find([1,2,3]);
       //$tab = $query->getFirstRow($model_project);
       $res=array();
         //na5ou title mta3 kol services id
       foreach($tab as $one){
         $inf_service=$model_service->find($one['services_id']);
         $one["service_name"]=$inf_service['title'];
         $res[]=$one;
       }
        $data['projects']=$res;
        /*********/

        //data About
        $model_About = new AboutModel();
       
        $data['about'] = $model_About->find('1');

        //data contact
        $model_contact = new ContactsModel();
        $data['contacts'] = $model_contact->findAll();

       
       //load;
      
       if (session()->get('isLoggedIn')){
        echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/footer', $data);
        
     }else{
        echo view('templates/headerAdmin', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/footerAdmin', $data);

     }


      
    }

    public function viewall($page = 'homeAll')
    {
        if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
       {
        // Whoops, we don't have a page for that!
        throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
       }
       $data=array();
       // the data that we want to pass into the view;
       $data['title'] = ucfirst($page); // Capitalize the first letter 

       //data services;
       $model_service = new ServicesModel();
       
       $data['services'] = $model_service->findAll();
       /**********/

       
       //load;
      
       if (session()->get('isLoggedIn')){
        //echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
       // echo view('templates/footer', $data);
        
     }else{
       // echo view('templates/headerAdmin', $data);
        echo view('pages/'.$page, $data);
       // echo view('templates/footerAdmin', $data);

     }


      
    }
    //see all projects
    public function viewallp($page = 'homeAllp')
    {
        if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
       {
        // Whoops, we don't have a page for that!
        throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
       }
       $data=array();
       // the data that we want to pass into the view;
       $data['title'] = ucfirst($page); // Capitalize the first letter 

       //data projects;
       $model_project = new ProjectsModel();
       $tab= $model_project->findAll();
       //$tab = $query->getFirstRow($model_project);
       $res=array();
         //na5ou title mta3 kol services id
       foreach($tab as $one){
         $inf_service=$model_service->find($one['services_id']);
         $one["service_name"]=$inf_service['title'];
         $res[]=$one;
       }
        $data['projects']=$res;
       /**********/

       
       //load;
      
       if (session()->get('isLoggedIn')){
        
        echo view('pages/'.$page, $data);
       
        
     }else{
       
        echo view('pages/'.$page, $data);
       

     }


      
    }
}