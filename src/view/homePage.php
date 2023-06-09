<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
  <!--FontAwesome-->
  <script src="https://kit.fontawesome.com/bebee1fedc.js" crossorigin="anonymous"></script>
  <!--VantaJs-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.globe.min.js"></script>

  <!--FLowbite-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

  <!--Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
  <!-- Date Picker flatpickr -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  
  <title>Vos Statistiques</title>
</head>

<body>

  <!--mobile-->
  <?php
  if($_SESSION['id_role'] === 1)
  { 
  ?>
  <div class="block">
    <div id="" class="flex overflow-hidden">
      <div class="hidden md:block">
        <?php
        include('src/include/sideNav.php');
        ?>
      </div>
  <?php 
  }
  ?>


      <div id="slim-content" class="flex flex-col w-full">

        <?php include('src/include/navbar.php') ?>
        <?php include('src/include/header.php') ?>
        <div class="flex flex-col lg:flex-row justify-between">
          <?php include('src/include/datePicker.php') ?>
          <?php include('src/include/card.php') ?>

        </div>


            <!-- //globe -->
            <!-- <canvas id="scene"></canvas>
                     <button>Export</button> -->
<div class="bg-zinc-100/50 mt-10">
<div class="block md:flex justify-center lg:justify-start lg:">
              <?php include('src/include/chartBar.php') ?>
              <?php include('src/include/chartLine.php') ?>
            </div>
            <div class="mt-10 block md:flex justify-center lg:justify-start lg:">
              <?php include('src/include/chartBarClicks.php') ?>
              <?php include('src/include/chartLineImpressions.php') ?>
            </div>
</div>

          </div>
        </div>
      </div>
    </div>
    <!--desktop-->
    <!-- <div class="md:hidden">

    <div class="flex flex-col  w-full">
      <?php //include('src/include/navbar.php') 
      ?>
      <?php //include ('src/include/header.php') 
      ?>
      <div class="flex flex-col mt-10">
      <?php //include ('src/include/card.php') 
      ?>
      <?php //include ('src/include/chartBar.php') 
      ?>
      <?php //include ('src/include/chartLine.php') 
      ?>     
      </div>
    </div>
  </div>
</div> -->
    <!--TailwindElement -->
    <?php include('src/include/footer.php') ?>

    <script src="assets/js/dataPickerN.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>

</body>
</html>