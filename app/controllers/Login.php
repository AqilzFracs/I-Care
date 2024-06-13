<?php

class Login extends Controller{
  public function index()
  {;
    $this->view("Login/index");
  }

  public function loginUser()
  {
    session_start();

    $user = $this->model("Login_model")->login($_POST);

    if ($user) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['role'] = $user['role'];

      if ($user['role'] == 0) {
          header("Location:" . BASEURL . "/homepage");
      } elseif ($user['role'] == 1) {
          header("Location:" . BASEURL . "/dashboard");
      } else {
          Flasher::setFlash('Anda', 'gagal', 'login', 'danger');
          header('Location:' . BASEURL);
      }
      exit;
    } else {
      Flasher::setFlash('Anda', 'gagal', 'login', 'danger');
      header('Location:' . BASEURL);
      exit;
      }
  }



  public function logout() {
    session_start();
    session_unset();
    session_destroy(); 
    setcookie(session_name(), '', time() - 3600, '/');
    header('Location:' . BASEURL);
    exit;
}
}