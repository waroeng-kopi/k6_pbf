<?php

namespace App\Controllers;

use App\Models\SewaModel; // Import the SewaModel
use App\Models\UserModel;

class LoginController extends BaseController
{
  public function login()
  {
    // Menampilkan form login
    $data = [
      'title' => 'login',
    ];
    echo view('v_login', $data);
  }

  public function loginAction()
  {
    // Memvalidasi data login
    $rules = [
      'username' => 'required|valid_email',
      'password' => 'required|min_length[8]',
    ];

    if (!$this->validate($rules)) {
      // Menampilkan kembali form login dengan pesan error
      $data = [
        'title' => 'login',
      ];
      $data['errors'] = $this->validator->getErrors();
      echo view('v_login', $data);
      return;
    }

    // Mengambil data username dan password
    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');

    // Memverifikasi data login
    $userModel = new UserModel();
    if (!$userModel->verifyUser($username, $password)) {
      // Menampilkan kembali form login dengan pesan error
      $data = [
        'title' => 'login',
      ];
      $data['errors'] = ['username' => 'Username atau password salah.'];
      echo view('login', $data);
      return;
    }

    // Membuat session user
    $session = session();
    $userData = $userModel->getUser($username);
    $session->set('user_id', $userData['user_id']);
    $session->set('username', $userData['username']);

    // Mengarahkan user ke halaman dashboard
    echo redirect(site_url('v_dashboard'));
  }

  public function logout()
  {
    // Menghapus session user
    session()->destroy();

    // Mengarahkan user ke halaman login
    echo redirect(site_url('v_login'));
  }
}