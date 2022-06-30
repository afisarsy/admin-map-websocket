<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Response;

class Auth extends BaseController
{
    public function __construct()
    {
        helper(['form']);
    }
    public function index()
    {
        $data['page_title'] = 'Login/Register at Admin Map Websocket';
        if(!empty($this->session->get('validation'))){
            $data['validation'] = $this->session->get('validation');
        }

        return view('auth/login', $data);
    }

    public function dologin()
    {
        //$data['page_title'] = 'Logging in';

        //Validate request
        $validation = $this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username required'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]|max_length[16]',
                'errors' => [
                    'required' => 'Password required',
                    'min_length' => 'Password must contain atleast 6 characters',
                    'max_length' => 'Password must contain 6-16 characters'
                ]
            ],
        ]);
        if(!$validation){   //Invalid request
            //$this->session->set('validation', $this->validator);      //Pass validation error
            return redirect()->to(base_url('auth'))->with('validation',  $this->validator)->withInput();
        }
        else{
            //POST to backend
            $client = \Config\Services::curlrequest();
            $url = backend_url('users/login');
            $body = $this->request->getPost();
            $response =  $client->request('POST', $url, ['body' => $body]);
            return $response;
        }


        //Set Session if Valid

        return redirect()->to(base_url());
    }
}