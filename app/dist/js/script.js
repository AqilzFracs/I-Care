const sidebarToggle = document.querySelector('.sidebar-toggle')
const sidebarOverlay = document.querySelector('.sidebar-overlay')
const sidebarMenu = document.querySelector('.sidebar-menu')
const main = document.querySelector('.main')
if(window.innerWidth < 768) {
    main.classList.toggle('active')
    sidebarOverlay.classList.toggle('hidden')
    sidebarMenu.classList.toggle('-translate-x-full')
}
sidebarToggle.addEventListener('click', function (e) {
    e.preventDefault() 
    main.classList.toggle('active')
    sidebarOverlay.classList.toggle('hidden')
    sidebarMenu.classList.toggle('-translate-x-full')
})
sidebarOverlay.addEventListener('click', function (e) {
    e.preventDefault()
    main.classList.add('active')
    sidebarOverlay.classList.add('hidden')
    sidebarMenu.classList.add('-translate-x-full')
})

document.addEventListener("DOMContentLoaded", function() {
  const menuItems = document.querySelectorAll(".group");

  const activeMenuIndex = sessionStorage.getItem('activeMenuIndex');
  if (activeMenuIndex !== null) {
    menuItems[activeMenuIndex].classList.add('active');
  }

  menuItems.forEach(function(item, index) {
    item.addEventListener("click", function(event) {
      event.preventDefault();
      
      // Hapus kelas 'active' dari semua item menu
      menuItems.forEach(function(menuItem) {
        menuItem.classList.remove("active");
      });

      // Tambahkan kelas 'active' ke item menu yang diklik
      this.classList.add("active");

      // Simpan indeks menu yang aktif dalam penyimpanan sesi
      sessionStorage.setItem('activeMenuIndex', index);

      const href = this.querySelector('a').getAttribute('href');

      window.location.href = href;
    });
  });
  window.addEventListener('popstate', function(event) {
    // Memeriksa apakah ada menu yang sudah ditetapkan sebagai aktif dalam penyimpanan sesi
    const activeMenuIndex = sessionStorage.getItem('activeMenuIndex');
    if (activeMenuIndex !== null) {
      menuItems[activeMenuIndex].classList.add('active');
    }
  });
});

const popperInstance = {}
document.querySelectorAll('.dropdown').forEach(function (item, index) {
    const popperId = 'popper-' + index
    const toggle = item.querySelector('.dropdown-toggle')
    const menu = item.querySelector('.dropdown-menu')
    menu.dataset.popperId = popperId
    popperInstance[popperId] = Popper.createPopper(toggle, menu, {
        modifiers: [
            {
                name: 'offset',
                options: {
                    offset: [0, 8],
                },
            },
            {
                name: 'preventOverflow',
                options: {
                    padding: 24,
                },
            },
        ],
        placement: 'bottom-end'
    });
})
document.addEventListener('click', function (e) {
    const toggle = e.target.closest('.dropdown-toggle')
    const menu = e.target.closest('.dropdown-menu')
    if (toggle) {
        const menuEl = toggle.closest('.dropdown').querySelector('.dropdown-menu')
        const popperId = menuEl.dataset.popperId
        if (menuEl.classList.contains('hidden')) {
            hideDropdown()
            menuEl.classList.remove('hidden')
            showPopper(popperId)
        } else {
            menuEl.classList.add('hidden')
            hidePopper(popperId)
        }
    } else if (!menu) {
        hideDropdown()
    }
})

function hideDropdown() {
    document.querySelectorAll('.dropdown-menu').forEach(function (item) {
        item.classList.add('hidden')
    })
}
function showPopper(popperId) {
    popperInstance[popperId].setOptions(function (options) {
        return {
            ...options,
            modifiers: [
                ...options.modifiers,
                { name: 'eventListeners', enabled: true },
            ],
        }
    });
    popperInstance[popperId].update();
}
function hidePopper(popperId) {
    popperInstance[popperId].setOptions(function (options) {
        return {
            ...options,
            modifiers: [
                ...options.modifiers,
                { name: 'eventListeners', enabled: false },
            ],
        }
    });
}