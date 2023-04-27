<!--Tabs navigation-->
<ul
  class="mx-5  flex list-none flex-row flex-wrap border-b-0 pl-0 drop-shadow-xl"
  role="tablist"
  data-te-nav-ref>
  <li role="presentation" class="flex-grow basis-0 text-center">
    <a
      href="#tabs-home02"
      class=" rounded-tl-lg bg-[#3b70ca] block text-white  border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-[#3b70ca]/80 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-red dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
      data-te-toggle="pill"
      data-te-target="#tabs-home02"
      data-te-nav-active
      role="tab"
      aria-controls="tabs-home02"
      aria-selected="true"
      >Home</a
    >
  </li>
  <li role="presentation" class="flex-grow basis-0 text-center">
    <a
      href="#tabs-profile02"
      class="focus:border-transparen text-white  bg-[#3b70ca]  block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-[#3b70ca]/80 focus:isolate data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
      data-te-toggle="pill"
      data-te-target="#tabs-profile02"
      role="tab"
      aria-controls="tabs-profile02"
      aria-selected="false"
      >Profile</a
    >
  </li>
  <li role="presentation" class="flex-grow basis-0 text-center">
    <a
      href="#tabs-messages02"
      class=" rounded-tr-lg block text-white border-x-0 bg-[#3b70ca] border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-[#3b70ca]/80 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
      data-te-toggle="pill"
      data-te-target="#tabs-messages02"
      role="tab"
      aria-controls="tabs-messages02"
      aria-selected="false"
      >Messages</a
    >
  </li>

</ul>

<!--Tabs content-->
<div class="rounded-b-lg mx-5 mb-6 drop-shadow-xl">
  <div
    class="hidden bg-gray-200 opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
    id="tabs-home02"
    role="tabpanel"
    aria-labelledby="tabs-home-tab02"
    data-te-tab-active>
    <?php include 'src/view/content/tabOneContent.php' ?>
  </div>
  <div
    class="hidden opacity-0 bg-gray-200 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
    id="tabs-profile02"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab02">
    Tab 2 content
  </div>
  <div
    class="hidden opacity-0 bg-gray-200 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
    id="tabs-messages02"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab02">
    Tab 3 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
    id="tabs-contact02"
    role="tabpanel"
    aria-labelledby="tabs-contact-tab02">
    Tab 4 content
  </div>
</div>