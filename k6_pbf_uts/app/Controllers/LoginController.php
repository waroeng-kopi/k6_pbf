<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    public function show_user()
    {
        $data_user = new ModelUser();
        dd($data_user->findAll());
    }
    public function tampil()
    {
        return view('login');
    }
    public function logincoba()
    {
        $data_user = new ModelUser();
        $id_user = $this->request->getVar('f_id');
        $pass_user = $this->request->getVar('f_pass');
        $ambildata = $data_user->where('id',$id_user)->first();
        if(!$ambildata)
        {
            return redirect()->to(base_url('hallogin'));
        }
        else{
            if ((($id_user ==  $ambildata['id']) and ($pass_user == $ambildata['password'])))
            session()->set([
                'id'=>$ambildata['id'],
                'nama'=>$ambildata['nama']
            ]);
            return redirect()->to(base_url('viewdatamhs'));
        }
        //echo "id:".$id_user."| pass= ". $pass_user;
    }

    //aksi logout
    public function aksi_logout()
    {
        session() -> destroy();
        return redirect() -> to(base_url());
    }
}