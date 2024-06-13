
  <body class="text-gray-800 font-poppins">
    <!-- start: Sidebar -->
    <div class="fixed left-0 top-0 w-64 h-full bg-green-900 z-50 sidebar-menu transition-transform">
      <a href="" class="flex items-center pb-4 border-b border-b-white">
        <img src="https://placehold.co/32x32" alt="" class="mt-2 ml-2 w-10 h-10 rounded object-cover"> 
        <span class="text-lg font-bold text-white ml-3">I-Care</span>
      </a>
      <ul class="mt-4">
        <li class="mb-2 group">
            <a href="<?= BASEURL ?>/Dashboard" class="flex items-center py-2 px-4 text-gray-100 hover:bg-green-800 hover:text-gray-400 rounded-md group-[.active]:bg-green-950 group-[.active]:text-gray-400">
              <i class="ri-home-2-line mr-2 text-xl"></i>
              <span class="text-base">Dashboard</span>
            </a>
        </li>
        <li class="mb-2 group">
            <a href="<?= BASEURL ?>/Pasien" class="flex items-center py-2 px-4 text-gray-100 hover:bg-green-800 hover:text-gray-400 rounded-md group-[.active]:bg-green-950 group-[.active]:text-gray-400">
              <i class="ri-user-3-line mr-2 text-xl"></i>
              <span class="text-base">Pasien</span>
            </a>
        </li>
        <li class="mb-2 group">
            <a href="<?= BASEURL ?>/Dokter" class="flex items-center py-2 px-4 text-gray-100 hover:bg-green-800 hover:text-gray-400 rounded-md group-[.active]:bg-green-950 group-[.active]:text-gray-400">
              <i class="ri-user-3-line mr-2 text-xl"></i>
              <span class="text-base">Dokter</span>
            </a>
        </li>
        <li class="mb-2 group">
            <a href="<?= BASEURL ?>/InsertDataPasien" class="flex items-center py-2 px-4 text-gray-100 hover:bg-green-800 hover:text-gray-400 rounded-md group-[.active]:bg-green-950 group-[.active]:text-gray-400">
              <i class="ri-insert-row-top mr-2 text-xl"></i>
              <span class="text-base">Tambah Pasien</span>
            </a>
        </li>
        <li class="mb-2 group">
            <a href="<?= BASEURL ?>/InsertDataDokter" class="flex items-center py-2 px-4 text-gray-100 hover:bg-green-800 hover:text-gray-400 rounded-md group-[.active]:bg-green-950 group-[.active]:text-gray-400">
              <i class="ri-insert-row-top mr-2 text-xl"></i>
              <span class="text-base">Tambah Dokter</span>
            </a>
        </li>
        <li class="items-baseline mb-2">
            <a href="<?= BASEURL ?>/Login/logout" class="flex items-center py-2 px-4 text-gray-100 hover:bg-green-800 hover:text-gray-400 rounded-md">
              <i class="ri-logout-box-r-line mr-2 text-xl"></i>
              <span class="text-base">Logout</span>
            </a>
        </li>
      </ul>
  </div>
  <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
  <!-- end: Sidebar -->

    <main class="w-full md:w-[calc(100%-256px)] ml-64 bg-gray-50 min-h-screen transition-all main">
      <div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
        <button type="button" class="text-lg text-green-800 hover:text-green-950 sidebar-toggle">
          <i class="ri-menu-line"></i>
        </button>
        <ul class="flex items-center text-sm ml-4">
          <li class="mr-2">
            <a href="" class="text-green-800 hover:text-green-950 font-medium">Data Dokter</a>
          </li>
        </ul>
        <ul class="ml-auto flex items-center"> 
          <li class="mr-1 dropdown">
            <div class="hidden dropdown-menu shadow-md shadow-black/5 absolute max-w-xs w-full bg-white rounded-md border border-gray-100">
              <form action="" class="p-4 border-b border-b-gray-100">
                <div class="relative w-full">
                  <input type="text" name="" id="" class="py-2 pr-4 pl-10 bg-gray-50 w-full outline-none border-gray-100 rounded-md text-sm" placeholder=" Search...">
                  <i class="ri-search-line absolute top-0 bottom-1/2 left-4 translate-y-1/2 text-gray-400"></i>
                </div>
              </form>
            </div>
          </li>
          <li class="dropdown ml-3">
            <button type="button" class="dropdown-toggle flex items-center">
              <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle">
            </button>
            <ul class="hidden dropdown-menu py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
              <li>
                <a href="" class="flex items-center text-[13px] py-1.5 px-4 text-green-800 hover:text-green-950 hover:bg-gray-50">Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="p-5 h-screen bg-gray-50">
        <h1 class="text-xl pt-2 mb-2">Data Dokter</h1>
        <table class="w-full">
          <thead class="bg-green-700 border-b-2 border-white">
            <tr>
              <form method="post" action="">
                <th class="p-3 text-sm font-semibold tracking-wide text-left ">ID</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left ">Foto Dokter</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left ">Nama Dokter</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left ">Spesialisasi</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left ">Alamat</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left ">No. Telepon</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left ">Jadwal Dokter</th> 
                <th class="p-3 text-sm font-semibold tracking-wide text-left ">Aksi</th>
              </form>
            </tr>
          </thead>
          <tbody>
            <?php foreach ( $data["dokter"] as $dokter) : ?>
              <tr class="bg-white border-b-2 border-green-800">
                <td class="p-3 text-sm text-gray-700"><?= $dokter['ID_Dokter']; ?></td>
                <td class="p-3 text-sm text-gray-700">
                  <img src="<?= BASEURL ?>/img/<?= basename($dokter['image_path']); ?>" class="object-cover rounded-sm w-10 h-10" alt="">
                </td>
                <td class="p-3 text-sm text-gray-700"><?= $dokter['nama_Dokter']; ?></td>
                <td class="p-3 text-sm text-gray-700"><?= $dokter['spesialisasi']; ?></td>
                <td class="p-3 text-sm text-gray-700"><?= $dokter['alamat']; ?></td>
                <td class="p-3 text-sm text-gray-700"><?= $dokter['telepon']; ?></td>
                <td class="p-3 text-sm text-gray-700"><?= $dokter['jadwal_dokter']; ?></td>
                <td><div>
                  <button href="<?= BASEURL; ?>/Dokter/editDokter/<?= $dokter['ID_Dokter']; ?>" class="bg-green-600 hover:bg-green-900 text-white hover:text-gray-200 text-sm font-medium me-2 px-2.5 py-0.5 rounded border border-blue-400 inline-flex items-center justify-center" onclick=openModal(<?= $dokter['ID_Dokter']; ?>)>Edit</button>
                  <a href="<?= BASEURL; ?>/Dokter/editDokter/<?= $dokter['ID_Dokter']; ?>" class="tampilModalUbah bg-red-600 hover:bg-red-900 text-white hover:text-gray-200 text-sm font-medium me-2 px-2.5 py-0.5 rounded border border-blue-400 inline-flex items-center justify-center" data-id="<?= $dokter['ID_Dokter']; ?>" onclick="return confirm('Apakah anda yakin')">Hapus</a></td>
                </div>
              </tr>          
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      
      <div id="editModal" tabindex="-1" aria-hidden="true"
          class="hidden flex fixed z-50 justify-center items-center w-full inset-0">
          <div class="relative p-4 w-full max-w-md max-h-full">
              <!-- Modal content -->
              <div class="relative bg-gray-100 rounded-lg shadow">
                  <!-- Modal header -->
                  <div
                      class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-lg font-semibold text-gray-900 dark:text-black">
                          Edit Dokter
                      </h3>
                      <button type="button" onclick=closeModal();
                          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                          data-modal-toggle="editModal">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                              viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <form action="<?= BASEURL; ?>/Dokter/editDokter" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="ID_Dokter" name="ID_Dokter">
                    <div class="mb-5">
                        <label for="nama" class="block mb-2 text-sm font-medium text-black">Nama Dokter</label>
                        <input type="text" id="nama_Dokter" name="nama_Dokter" class="bg-gray-200 p-3 border border-green-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" required>
                    </div>
                    <div class="mb-5">
                        <label for="spesialisasi" class="block mb-2 text-sm font-medium text-black">Spesialisasi</label>
                        <select type="text" id="spesialisasi" name="spesialisasi" class="bg-gray-200 p-3 border border-green-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                          <option value="Umum" selected>Umum</option>
                          <option value="Penyakit Dalam">Penyakit Dalam</option>
                          <option value="Anak">Anak</option>
                          <option value="Saraf">Saraf</option>
                          <option value="Kandungan dan Ginekologi">Kandungan dan Ginekologi</option>
                          <option value="Bedah">Bedah</option>
                          <option value="Kulit dan Kelamin">Kulit dan Kelamin</option>
                          <option value="THT">THT</option>
                          <option value="Mata">Mata</option>
                          <option value="Psikiater">Psikiater</option>
                          <option value="Gigi">Gigi</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="alamat" class="block mb-2 text-sm font-medium text-black">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="bg-gray-200 p-3 border border-green-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" required>
                    </div>
                    <div class="mb-5">
                        <label for="telepon" class="block mb-2 text-sm font-medium text-black">No. Telepon</label>
                        <input type="text" id="telepon" name="telepon" class="bg-gray-200 p-3 border border-green-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" required>
                    </div>
                    <div class="mb-5">
                        <label for="jadwal_dokter" class="block mb-2 text-sm font-medium text-black">Jadwal Dokter</label>
                        <input type="text" id="jadwal_dokter" name="jadwal_dokter" class="bg-gray-200 p-3 border border-green-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" required">
                    </div>
                    <div>
                      <button type="submit" name="submit" class="focus:outline-none text-white bg-green-800 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit Dokter</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>

      <script>
      // function openModal(dokterID) {
      //     var modal = document.getElementById("editModal");
      //     modal.classList.remove("hidden");
      //     const idDokter = document.getElementById('id');
      //     idDokter.value = dokterID;
      //     console.log(idDokter.value)
      // }

      // function closeModal() {
      //     var modal = document.getElementById("editModal");
      //     // modal.classList.remove("block");
      //     modal.classList.add("hidden");
      // }
      function openModal(dokterID) {
            var modal = document.getElementById("editModal");
            modal.classList.remove("hidden");
            fetchDokterData(dokterID); // Call the function from ajax.js
        }

        function closeModal() {
            var modal = document.getElementById("editModal");
            modal.classList.add("hidden");
        }
      </script>
    </main>