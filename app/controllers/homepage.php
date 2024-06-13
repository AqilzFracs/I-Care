<?php

class homepage extends Controller{
  public function index()
  {
    if ($this->isLoggedIn())
    {
    $data["judul"] = "Hompage I-Care";
    $data["dokter"] = $this->model("Dokter_model")->getAllDokter();
    $this->view("templatesPasien/header", $data);
    $this->view("Homepage/index", $data);
    $this->view("templatesPasien/footer");
    }
    else
    {
      header('location: ' . BASEURL);
      exit;
    }
  }
}