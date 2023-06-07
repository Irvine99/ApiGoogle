<?php
require_once 'src/model/User.php';
require_once 'src/model/Project.php';
?>
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

<body class="overflow-x-hidden">
    <!--TailwindElement -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <?php
                  include('src/include/sideNav.php');
                  ?>
                  <div class='h-screen' id="slim-content" class="">
                  <?php include('src/include/navbar.php') ?>
                 
                  <div class="flex justify-center mt-10">
                  <?php include('src/include/modalAdd.php') ?>
                  </div>
    <div class="mt-5">
        <div class="flex flex-col text-black">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500">
                            
                                    
                                <tr>
                                    <th scope="col" class="px-6 py-4">id</th>
                                    <th scope="col" class="px-6 py-4">prénom</th>
                                    <th scope="col" class="px-6 py-4">nom</th>
                                    <th scope="col" class="px-6 py-4">email</th>
                                    <th scope="col" class="px-6 py-4">nom du projet</th>
                                    <th scope="col" class="px-6 py-4">json</th>
                                    <th scope="col" class="px-6 py-4">logo</th>
                                    <th scope="col" class="px-6 py-4 text-center">Actions</th>
                                </tr>
                                
                            </thead>
                            <?php if (is_array($allUsers)) {
                             foreach ($allUsers as $user)  {?>
                            <tbody>
                                <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium"><?php echo $user->id ?></td>
                                    <td class="whitespace-nowrap px-6 py-4 font-medium"><?php echo $user->username ?></td>
                                    <td class="whitespace-nowrap px-6 py-4"><?php echo $user->userlastname ?></td>
                                    <td class="whitespace-nowrap px-6 py-4"><?php echo $user->email ?></td>
                                    <td class="whitespace-nowrap px-6 py-4"><?php echo $user->name ?></td>
                                    <td class="whitespace-nowrap px-6 py-4"><?php echo $user->json ?></td>
                                    <td class="whitespace-nowrap px-6 py-4"><?php echo $user->logo ?></td>
                                    <td class="whitespace-nowrap px-6 py-4 text-center">
                                        
                                        
                                        
                                        
                                        <form method="POST" action="?action=deleteUser">
                                        <input type="hidden" name="projectId" value="<?php echo $user->id_pro ?>">
                                        <input type="hidden" name="userId" value="<?php echo $user->id ?>">
                                        <button class="mb-2 bg-red-500 rounded-lg py-1 px-2 text-white hover:bg-red-800 w-[100px]  " type="submit">Supprimer</button>
                                        </form>
                                        
                                        
                            
                                        <form method="POST" action="?action=modifPage">
                                        <input type="hidden" name="username" value="<?php echo $user->username ?>">
                                        <input type="hidden" name="userlastname" value="<?php echo $user->userlastname ?>">
                                        <input type="hidden" name="useremail" value="<?php echo $user->email ?>">
                                        <input type="hidden" name="projectName" value="<?php echo $user->name ?>">
                                        <input type="hidden" name="projectJson" value="<?php echo $user->json ?>">
                                        <input type="hidden" name="projectLogo" value="<?php echo $user->logo ?>">
                                        <input type="hidden" name="projectId" value="<?php echo $user->id_pro ?>">
                                        <input type="hidden" name="userId" value="<?php echo $user->id ?>">
                                        <button class="bg-blue-500 rounded-lg py-1 px-2 w-[100px] text-white hover:bg-blue-800" type="submit">Modifier</button>
                                        </form>

                                       
                                    </td>
                                </tr>
                            </tbody>
                            <?php } } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include('src/include/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>

</body>