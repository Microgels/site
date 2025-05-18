<header class="left-0 w-full  backdrop-blur-md text-white border-gray-200 bg-gray-600/5 sticky top-0 z-50">
    <div class="container mx-auto lg:px-36 px-6 md:px-12">
      <div class="relative flex items-center justify-between">
        <!-- Logo à gauche -->
        <div class="flex-shrink-0">
          <a href="javascript:void(0)" class="block py-5">
            <img
              src="../img/logo MG3.png"
              alt="logo"
              class="w-16 h-16 bg-[#1f2039] rounded-full"
            />
          </a>
        </div>

        <!-- Icône menu mobile (à droite) -->
        <button
          id="menu-toggle"
          class="lg:hidden flex items-center font-bold bg-gray-200 rounded-md text-[#1f2039] p-2"
        >
          <i id="menu-icon" class="bi bi-list text-2xl"></i>
        </button>

        <!-- Menu de navigation au centre -->
        <nav
          id="mobile-menu"
          class="hidden md:flex flex-1 justify-center absolute md:relative top-full w-full max-w-[80%] rounded-lg bg-[#f8f9fe] py-5 px-6 shadow transition-all md:top-0 md:shadow-none md:bg-transparent md:max-w-none"
        >
          <ul class="flex flex-col md:flex-row lg:items-center gap-6 md:gap-14">
            <li>
              <a
                data-translate="Home"
                href="{{ route('home') }}#acceuil"
                class="menu-item flex py-2 text-lg font-bold text-[#1f2039] hover:text-[#a5b4fc]"
              >
                Accueil
              </a>
            </li>
            <li>
              <a
                data-translate="Services"
                href="{{ route('home') }}#services"
                class="menu-item flex py-2 text-lg font-bold text-[#1f2039] hover:text-[#a5b4fc]"
              >
                Services
              </a>
            </li>
            <li>
              <a
                data-translate="About"
                href="{{ route('home') }}#about"
                class="menu-item flex py-2 text-lg font-bold text-[#1f2039] hover:text-[#a5b4fc]"
              >
                À Propos
              </a>
            </li>
            <li>
              <a
                data-translate="Team"
                href="{{ route('home') }}#team"
                class="menu-item flex py-2 text-lg font-bold text-[#1f2039] hover:text-[#a5b4fc]"
              >
                Équipe
              </a>
            </li>
            <li>
              <a
                data-translate="Contact"
                href="{{ route('home') }}#contact"
                class="menu-item flex py-2 text-lg font-bold text-[#1f2039] hover:text-[#a5b4fc]"
              >
                Contact
              </a>
            </li>
            <li>
              <a
                data-translate="Blog"
                href="{{ route('blogs') }}"
                class="menu-item flex py-2 text-lg font-bold text-[#1f2039] hover:text-[#a5b4fc]"
              >
                Blog
              </a>
            </li>

            <!-- Boutons dans le menu mobile -->
            <li class="md:hidden w-full mt-4">
              <div class="flex flex-col gap-3">
                <a
                  href="javascript:void(0)"
                  id="lang-toggl"
                  class="menu-item w-full text-center py-3 text-base font-medium border border-[#1f2039] rounded-lg text-[#1f2039]"
                >
                  FR/EN
                </a>
                <a
                  data-translate="Blog"
                  href="javascript:void(0)"
                  class="menu-item w-full text-center py-3 text-base font-medium text-white rounded-lg bg-[#1f2039] hover:bg-opacity-90"
                >
                  Blog
                </a>
              </div>
            </li>
          </ul>
        </nav>

        <!-- Boutons à droite (desktop seulement) -->
        <div class="hidden md:flex gap-4 ml-auto">
          <a
            href="javascript:void(0)"
            id="lang-toggle"
            class="py-3 text-base font-medium px-7 border border-[#1f2039] rounded-lg bg-[#1f2039] text-gray-100"
          >
            FR
          </a>
         
        </div>
      </div>
    </div>
  </header>