<?php

class homepage extends Controller{
  public function index()
  {
    if ($this->isLoggedIn())
    {
    $data["judul"] = "Hompage I-Care";
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