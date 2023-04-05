<?php

namespace App\Controllers;

use App\Models\UsersModel;
// use Config\Services;
// use Config\Validation;

class ValidasiController extends BaseController
{
    protected $user;
    public function __construct()
    {
        $this->user = new UsersModel();
    }
    public function viewLogin()
    {
        $data = [
            'error' => '',
            'validation' => \Config\Services::validation()
        ];
        return view("guest/validasi/login",$data);
    }

    public function viewRegister()
    {
        // if($validation == null){
        //     return 'y';
        // }
        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('guest/validasi/register',$data);
    }

    public function addValidasiUser()
    {
        session();
        // return 'tes';
        if(!$this->validate([
            'name' => 'required|is_unique[users.name]|min_length[6]',
            'email' => 'required|is_unique[users.email]|valid_email',
            'phone' => 'required|numeric|max_length[15]',
            'password' => 'required|min_length[6]'
        ])){
            $data = [
                'validation' => \Config\Services::validation()
            ];
    
            return view('guest/validasi/register',$data);
        }


        if($this->request->getVar('password') == $this->request->getVar('confir'))
        {
             
            if($this->user->insertDataUsers($this->request->getVar()) == true)
            {
                return redirect()->to('login');
            }
            
        }

        return redirect('register')->with('fail','data anda tidak benar');
        

    }

    public function validationAuthUser()
    {
        if(!$this->validate([
            'email' => 'required',
            'password' => 'required'
        ])){
            $data = [
                'validation' => \Config\Services::validation(),
                'error' => ''
            ];
    
            return view('guest/validasi/login',$data);
        }
        $where = array(
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password')
        );
        $cekUSer = $this->user->where(['email' => $this->request->getVar('email')])->where(['password' => $this->request->getVar('password')])->first();
        if( $cekUSer != null)
        {
            // return 'tes';
            session()->setFlashdata('user', $this->request->getVar('email'));
            return redirect()->to('/');
            
        }
        // return 'salah';
        session()->setFlashdata('wrong','username or password is wrong');
        return redirect()->to('login');
    }
}
