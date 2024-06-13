<?php

class Controller {
  public function view($view, $data = []) 
  {
    require_once "../app/views/" . $view . ".php";
  }

  public function model($model)
  {
    require_once "../app/models/" . $model . ".php"; 
    return new $model;
  }

  public function __construct() 
  {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
  }

  public function isLoggedIn() 
  {
      return isset($_SESSION['username']);
  }
}