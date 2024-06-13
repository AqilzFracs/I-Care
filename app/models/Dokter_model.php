<?php
class Dokter_model 
{
  private $table = "dokter";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllDokter()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function getColumnsDokter()
  {
    $this->db->query("SHOW COLUMNS FROM ". $this->table);
    return $this->db->resultSet();
  }

  public function tambahDataDokter($data)
  {
    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }
    }

    if (file_exists($target_file)) {
        echo "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    if ($_FILES["image"]["size"] > 500000) {
        echo "Maaf, ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Maaf, hanya format JPG, JPEG, PNG & GIF yang diperbolehkan.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Maaf, file tidak diunggah.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
          $query = "INSERT INTO dokter
            VALUES
          ('', :nama_Dokter, :spesialisasi, :alamat, :telepon, :jadwal_dokter, :image_path)";

          $this->db->query($query);
          $this->db->bind("nama_Dokter", $data["nama_Dokter"]);
          $this->db->bind("spesialisasi", $data["spesialisasi"]);
          $this->db->bind("alamat", $data["alamat"]);
          $this->db->bind("telepon", $data["telepon"]);
          $this->db->bind("jadwal_dokter", $data["jadwal_dokter"]);
          $this->db->bind("image_path", $target_file);


          $this->db->execute();
          return $this->db->rowCount();
        } else {
                echo "Maaf, terjadi kesalahan saat mengunggah file.";
              }
        }
  }

  public function getDokterById($id)
  {
    $this->db->query("SELECT * FROM ". $this->table . " WHERE ID_Dokter=:id");
    $this->db->bind("id", $id);
    return $this->db->single();
  }

  public function ubahDataDokter($data)
  {
    $query = "UPDATE dokter SET 
              nama_Dokter = :nama_Dokter,
              spesialisasi = :spesialisasi,
              alamat = :alamat,
              telepon = :telepon,
              jadwal_dokter = :jadwal_dokter
            WHERE ID_Dokter = :ID_Dokter;";
    
    $this->db->query($query);
    $this->db->bind('ID_Dokter', $data['ID_Dokter']);
    $this->db->bind('nama_Dokter', $data['nama_Dokter']);
    $this->db->bind('spesialisasi', $data['spesialisasi']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('telepon', $data['telepon']);
    $this->db->bind('jadwal_dokter', $data['jadwal_dokter']);


    $boundQuery = $this->db->queryString();
    echo "Debug: SQL Query - " . $boundQuery;

    $this->db->execute();
    return $this->db->rowCount();

  }

  public function hapusDataDokter($id)
  {
    $query = "DELETE FROM " . $this->table . 
              " WHERE ID_Dokter = :ID_Dokter";
    $this->db->query($query);
    $this->db->bind("ID_Dokter", $id);

    $this->db->execute();

    return $this->db->rowCount();
  }
  
  public function countDokter()
    {
      $this->db->query("SELECT COUNT(*) as total FROM ". $this->table);
      $result = $this->db->single();

      return $result['total'];
    }
    
  public function sortingDataDokter($sort = 'nama_Dokter', $order = 'ASC')
  {
    $this->db->query("SELECT * FROM " . $this->table);
    $result = $this->db->resultSet();

    usort($result, function($a, $b) use ($sort, $order) {
      $valueA = $a[$sort];
      $valueB = $b[$sort];

      if ($order === 'ASC') {
          return $valueA <=> $valueB;
      } else {
          return $valueB <=> $valueA;
      }
  });

  return $result;
  }

  public function searchDokter($keyword)
  {
    $columns = $this->getColumnsDokter();
    $conditions = [];
    foreach ( $columns as $columnInfo)
    {
      $column = $columnInfo['Field'];
      $conditions[] = "LOWER($column) LIKE :keyword";
    }
    $this->db->query("SELECT * FROM dokter WHERE " . implode(" OR ", $conditions));
    $this->db->bind("keyword", "%$keyword%");
    $this->db->execute();
    $Dokter = $this->db->resultSet();
    return array_values(
      array_filter(
        $Dokter,
        function($row) use ($columns, $keyword)
          { 
            foreach ($columns as $columnInfo)
            {
              $column = $columnInfo['Field'];
              strpos(strtolower($row[$column]), strtolower($keyword)) !== false;
              return true;
            }
          }
        )
      );
  }
}

