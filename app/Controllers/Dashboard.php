<?php namespace App\Controllers;

use CodeIgniter\Controller;
class Dashboard extends BaseController
{
	public function index()
	{    
        $data = [];
        
        
        
        if (session()->get('isLoggedIn')){
                echo view('templates/header', $data);
                echo view('dashboard');//dashboard view
                echo view('templates/footer');
             }
        }
        
        public function logout()
	{    
        
        session()->destroy();
        
        return $this->response->redirect(site_url('home'));
	}
        
	//--------------------------------------------------------------------

}