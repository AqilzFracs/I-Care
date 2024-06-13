<?php

class JadwalDokter extends Controller{
  public function index()
  {
    if ($this->isLoggedIn())
    {
    $data["judul"] = "Jadwal Dokter I-Care";
    $data["dokter"] = $this->model("Dokter_model")->getDokterWithJadwal();
    $this->view("templatesPasien/header", $data);
    $this->view("JadwalDokter/index", $data);
    $this->view("templatesPasien/footer");
    }
    else
    {
      header('location: ' . BASEURL);
      exit;
    }
  }
}