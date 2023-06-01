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


             <title>Vos Statistiques</title>

           </head>

           <body class="bg-[url('assets/img/bg.jpg')] bg-cover bg-no-repeat bg-center bg-fixed">

             <!--mobile-->
             <div class="block">
               <div id="" class="flex overflow-hidden">
                 <?php
                  include('src/include/sideNav.php');
                  ?>
                </div>

                 <div id="slim-content" class="flex flex-col w-full">

                   <?php include('src/include/navbar.php') ?>
                   <?php include('src/include/header.php') ?>
                   <div class="flex flex-col">

                    <div class="m-6 w-[150px] md:flex md:justify-center md:w-auto">
                       <form action="index.php?action=getValue" method="POST">
                         <input class="rounded my-2" type="date" id="date">
                         <input class="rounded" type="date" id="date">
                         <select name="Coucou" id="">
                           <?php foreach ($dates as $date) { ?>
                             <option name="dateChoose" value="<?= $date ?>"><?= $date  ?></option>
                           <?php } ?>
                         </select>
                         <button class="bg-blue-500 rounded-lg py-1 px-4 text-white hover:bg-blue-500/50 hover:transition ease-in-out duration-300 my-5" type="submit">Chercher</button>
                       </form>
                     </div>

                     <?php include('src/include/card.php') ?>
                     <!-- //globe -->
                     <!-- <canvas id="scene"></canvas>
                     <button>Export</button> -->

                     <div class="block md:flex justify-center">
                       <?php include('src/include/chartBar.php') ?>
                       <?php include('src/include/chartLine.php') ?>
                     </div>
                     <?php include('src/include/tabs.php') ?>
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
             <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
             <script src="assets/js/vanta.js"></script>
           </body>

           </html>