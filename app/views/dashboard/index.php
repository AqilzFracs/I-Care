
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
            <a href="<?= BASEURL ?>/InsertDataPasien" class="flex items-center py-2 px-4 text-gray-100 hover:bg-green-800 hover:text-gray-400 rounded-md group-[.active]:bg-green-950 group-[.active]:text-gray-400">
              <i class="ri-insert-row-top mr-2 text-xl"></i>
              <span class="text-base">Tambah Pasien</span>
            </a>
        </li>
        <li class="items-baseline mb-2">
            <a href="<?= BASEURL ?>" class="flex items-center py-2 px-4 text-gray-100 hover:bg-green-800 hover:text-gray-400 rounded-md">
              <i class="ri-logout-box-r-line mr-2 text-xl"></i>
              <span class="text-base">Logout</span>
            </a>
        </li>
      </ul>
  </div>
  <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
  <!-- end: Sidebar -->

  <!-- start: Main -->
  <main class="w-full md:w-[calc(100%-256px)] ml-64 bg-gray-50 min-h-screen transition-all main">
    <div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
      <button type="button" class="text-lg text-green-800 hover:text-green-950 sidebar-toggle">
        <i class="ri-menu-line"></i>
      </button>
      <ul class="flex items-center text-sm ml-4">
        <li class="mr-2">
          <a href="" class="text-green-800 hover:text-green-950 font-medium">Dashboard</a>
        </li>
      </ul>
      <ul class="ml-auto flex items-center">
        <li class="mr-1 dropdown">
          <button type="button" class="dropdown-toggle text-gray-400 w-8 h-8 rounded flex items-center justify-center hover:text-green-950">
            <i class="ri-search-line"></i>
          </button>
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
    <div class="p-6">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
        <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div>
                    <div class="text-2xl font-semibold mb-1"> <?= $data["jumlahPasien"]; ?></div>
                    <div class="text-sm font-medium text-gray-400">Pasien</div>
                </div>
            </div>
            <div class="flex items-center">
              <div class="w-full bg-gray-100 rounded-full h-4">
                  <div class="h-full bg-green-800 rounded-full p-1" style="width: 60%;">
                      <div class="w-2 h-2 rounded-full bg-white ml-auto"></div>
                  </div>
              </div>
              <span class="text-sm font-medium text-gray-600 ml-4">60%</span>
            </div>
        </div>
        <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
          <div class="flex justify-between mb-4">
              <div>
                  <div class="flex items-center mb-1">
                      <div class="text-2xl font-semibold">20</div>
                  </div>
                  <div class="text-sm font-medium text-gray-400">Dokter</div>
              </div>
          </div>       
        </div>
        <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
          <div class="flex justify-between mb-4">
              <div>
                  <div class="flex items-center mb-1">
                      <div class="text-2xl font-semibold">15</div>
                  </div>
                  <div class="text-sm font-medium text-gray-400">Perawat</div>
              </div>
          </div>       
        </div>
    </div>
  </main>
  <!-- end: Main -->