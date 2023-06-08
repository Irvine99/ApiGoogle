<!-- Main navigation container -->
<nav class="flex relative flex items-center bg-gray-800 py-2 shadow-md shadow-black/5" data-te-navbar-ref>
  <div class="flex justify-end w-full items-center px-3">


    <!-- Collapsible navigation container -->
    <div class="flex justify-end items-center" id="navbarSupportedContent1" data-te-collapse-item>
      <!-- Logo -->
      <div class="flex w-full mr-5 items-center">
        <!-- Second dropdown container -->
        <div class="w-full relative" data-te-dropdown-ref>
          <!-- Second dropdown trigger -->
          <a class="flex w-full justify-end hidden-arrow flex justify-end items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none" href="#" id="dropdownMenuButton2" role="button" data-te-dropdown-toggle-ref aria-expanded="false">
            <!-- User avatar -->
            <img src="<?= $getData->logo ?>" class="rounded-full align-middle w-auto  h-[60px]" alt="" loading="lazy" />
          </a>
          <!-- Second dropdown menu -->
          <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-2 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block" aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
            <!-- Second dropdown menu items -->
            <li>
              <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-xl font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400" href="index.php?action=deco" data-te-dropdown-item-ref>Déconnexion</a>
              <?php 
              
              if($_SESSION['id_role'] == 1){ ?>
                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-xl font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30" href="index.php?action=adminPage" data-te-dropdown-item-ref>Panel Admin</a>
            <?php  }
              
              ?>
              
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>