<?php

class dashboard extends Controller{
  public function index()
  {
    if ($this->isLoggedIn())
    {
      $data["judul"] = "Dashboard I-Care";
      $data["jumlahPasien"] = $this->model("Pasien_model")->countPasien();
      $data["jumlahDokter"] = $this->model("Dokter_model")->countDokter();
      $this->view("templates/header", $data);
      $this->view("dashboard/index", $data);
      $this->view("templates/footer");
    }
    else
    {
      header('Location: ' . BASEURL . '/');
      exit;
    }
  }
}