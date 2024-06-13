<?php

class DaftarPasien extends Controller{
  public function index()
  {
    if ($this->isLoggedIn())
    {
      $data["judul"] = "Daftar Pasien I-Care";
      $this->view("DaftarPasien/index", $data);

    }
    else
    {
      header('Location: ' . BASEURL . '/');
      exit;
    }
  }
}