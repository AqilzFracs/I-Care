// $(function() {
//   var modal = document.getElementById("editModal");
//   modal.classList.remove("hidden");
//   $('.tampilModalUbah').on('click', function(){

//       const id = $(this).data('id');

//       $.ajax({
//         url: 'http://localhost/I-Care/public/Pasien/getUbahPasien',
//         data: {id : productid},
//         method: 'post',
//         dataType: 'json',
//         success: function(data) {
//           $('#ID_Pasien').val(data.ID_Pasien);
//           $('#nama').val(data.nama);
//           $('#jenis_kelamin').val(data.jenis_kelamin);
//           $('#Tanggal_Lahir').val(data.Tanggal_Lahir);
//           $('#Alamat').val(data.Alamat);
//           $('#Poli').val(data.Poli);
//           $('#Status').val(data.Status);
//         }
//       });
//   })

function fetchPasienData(productId) {
  $.ajax({
      url: 'http://localhost/I-Care/public/Pasien/getUbahPasien',
      data: { id: productId },
      method: 'post',
      dataType: 'json',
      success: function(data) {
          $('#ID_Pasien').val(data.ID_Pasien);
          $('#nama').val(data.nama);
          $('#jenis_kelamin').val(data.jenis_kelamin);
          $('#Tanggal_Lahir').val(data.Tanggal_Lahir);
          $('#Alamat').val(data.Alamat);
          $('#Poli').val(data.Poli);
          $('#Status').val(data.Status);
      },
      error: function(jqXHR, textStatus, errorThrown) {
          console.error('Error fetching data:', textStatus, errorThrown);
          alert('An error occurred while fetching data.');
      }
  });
}

function fetchDokterData(dokterID) {
  $.ajax({
      url: 'http://localhost/I-Care/public/Dokter/getUbahDokter',
      data: { id: dokterID },
      method: 'post',
      dataType: 'json',
      success: function(data) {
          $('#ID_Dokter').val(data.ID_Dokter);
          $('#nama_Dokter').val(data.nama_Dokter);
          $('#spesialisasi').val(data.spesialisasi);
          $('#alamat').val(data.alamat);
          $('#telepon').val(data.telepon);
          $('#jadwal_dokter').val(data.jadwal_dokter);
          $('#image_path').val(data.image_path);
      },
      error: function(jqXHR, textStatus, errorThrown) {
          console.error('Error fetching data:', textStatus, errorThrown);
          alert('An error occurred while fetching data.');
      }
  });
}

//   $('.tampilModalUbahDokter').on('click', function(){

//     const id = $(this).data('id');

//     $.ajax({
//       url: 'http://localhost/I-Care/public/Dokter/getUbahDokter',
//       data: {id : id},
//       method: 'post',
//       dataType: 'json',
//       success: function(data) {
//         $('#ID_Dokter').val(data.ID_Dokter);
//         $('#nama_Dokter').val(data.nama_Dokter);
//         $('#spesialisasi').val(data.spesialisasi);
//         $('#alamat').val(data.alamat);
//         $('#telepon').val(data.telepon);
//       }
//     });
//   })
// });