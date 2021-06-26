<?php namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;


class Users extends BaseController
{
	public function index()
	{
        $data = [];
        helper(['form']);

        if($this->request->getMethod() == 'post'){
            //do the validation
            $rules = [
                'email' => 'required|max_length[50]|valid_email',
                'password' => 'required|max_length[255]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password don\'t match'
                  ]
                ];

            if (! $this->validate($rules, $errors)){
                $data['validation'] = $this->validator;
            }else{
                $model = new UserModel();
                
                $user = $model->where('email', $this->request->getVar('email'))
                ->where('password', $this->request->getVar('password'))
                ->first();
               
                if(!$user){
                    $data['errorlogin'] = 'Email or Password don\'t match';
                }
                
              else
               {

                $this->setUserSession($user);

                return redirect()->to('dashboard');
            }
                
               /* $newData = [
                    'name' => $this->request->getVar('name'),
                    'username' => $this->request->getVar('username'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success','Successful Registration');
                return redirect()->to('/');*/


            }
        }

        echo view('templates/headerAdmin', $data);
        echo view('login');//login view
        echo view('templates/footerAdmin');
	}
    
    private function setUserSession($user){
        $data = [
            'id' => $user['id'],
            'name' => $user["name"],
            'email' => $user["email"],
            'username' => $user["username"],
            'password' => $user["password"],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    /*public function profile(){
        echo view('templates/header', $data);
        echo view('profile');//profile view
        echo view('templates/footer');
    }*/

    public function logout(){
        $data = [
            
            'isLoggedIn' => false,
        ];

        session()->set($data);
        return true;
    }

    public function editprofile()
    {        
        $model = new UserModel();
        $data=array();
    
        $data['user'] = $model->find('1') ;
     
         echo view('templates/headerAdmin', $data);
         echo view('users/editprofile', $data);
         echo view('templates/footerAdmin', $data);
        
    }

    public function update()
    {        
        helper(['form']);
        $model = new UserModel();
        $model->update($_POST['id'], $_POST);
       // $data=array();
        //$data['service'] = $model->findAll();
       // $model->update($id, $_POST);
        
        return $this->response->redirect(site_url('users'));
        
 
        
        
    }


	
//--------------------------
}