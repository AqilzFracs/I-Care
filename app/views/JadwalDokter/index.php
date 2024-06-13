<?php
$current_dokter_id = null;

if (!empty($data['dokter'])) {
    foreach ($data['dokter'] as $row) {
        if ($current_dokter_id != $row["dokter_id"]) {
            if ($current_dokter_id !== null) {
                echo "</table></div></div></div>";
            }
            $current_dokter_id = $row["dokter_id"];
            echo "<div class='doctor-card'>
                <img class='doctor-image' src='" . BASEURL . "/img/" . basename($row["image_path"]) . "' alt='" . $row["nama_Dokter"] . "'>
                <div class='doctor-details'>
                    <h2>" . $row["nama_Dokter"] . "</h2>
                    <div class='doctor-schedule'>
                        <table>
                            <tr>
                                <th>Hari</th>
                                <th>Jam</th>
                            </tr>";
        }
        echo "<tr>
                <td>" . $row["hari"] . "</td>
                <td>" . $row["jam_mulai"] . " - " . $row["jam_selesai"] . "</td>
              </tr>";
    }
    echo "</table></div></div></div>";
} else {
    echo "Tidak ada data dokter ditemukan.";
}