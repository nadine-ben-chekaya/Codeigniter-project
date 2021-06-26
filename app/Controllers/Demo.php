<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Demo extends BaseController
{
    public function demo1()
    {
        echo view('templates/header');
        echo view('demo/demo1');
        echo view('templates/footer'); 
    }
    public function upload()
    {

        $file = $this->request->getFile('photo');
        if($file->getSize() > 0){
            echo'File Name: '.$file->getName();
            echo'File Size: '.$file->getSize();
            echo'File Extension: '.$file->getExtension();
            $file->move('./public/upload', $file->getRandomName());
            // save fel base donnees
            $file = $this->request->getFile('photo');
            if($file->getSize() > 0){
                echo'File Name: '.$file->getName();
                echo'File Size: '.$file->getSize();
                echo'File Extension: '.$file->getExtension();
               
                $file->move('./upload',$photo);

        }

        echo view('templates/header');
        echo view('demo/demoa1');
        echo view('templates/footer'); 
    }
	//--------------------------------------------------------------------

}
