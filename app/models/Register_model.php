<?php

Class Register_model{
  private $table = "user";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function tambahAkun($data)
  {
    $query = "INSERT INTO user
                VALUES
            ('', :username, :password)";
    
    $this->db->query($query);
    $this->db->bind("username", $data["username"]);
    $this->db->bind("password", $data["password"]);

    $this->db->execute();
    return $this->db->rowCount();

  }
}