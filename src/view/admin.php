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

                  <div class="flex justify-center mt-10">
                    <?php
                      if (isset($_GET['messageOk'])) 
                      {
                        echo '<div class="text-green-400 text-xs m-0">' . $_GET['messageOk'] . '</div>';
                      }
                      if (isset($_GET['messageModifOk'])) 
                      {
                        echo '<div class="text-green-400 text-xs m-0">' . $_GET['messageModifOk'] . '</div>';
                      }      
                      if (isset($_GET['message1'])) 
                      {
                        echo '<div class="text-red-400 text-xs m-0">' . $_GET['message1'] . '</div>';
                      }       
                      if (isset($_GET['message2'])) 
                      {
                        echo '<div class="text-red-400 text-xs m-0">' . $_GET['message2'] . '</div>';
                      }       
                      if (isset($_GET['message3'])) 
                      {
                        echo '<div class="text-red-400 text-xs m-0">' . $_GET['message3'] . '</div>';
                      }
                      if (isset($_GET['messageModif1'])) 
                      {
                        echo '<div class="text-green-400 text-xs m-0">' . $_GET['messageModifOk'] . '</div>';
                      }                   
                    ?>
                  </div>


    <div class="mt-5">
      <div class="flex flex-col text-black">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="w-full text-left text-sm font-light">
                <div class="">
                  <table class="table w-full flex justify-between">
                    <thead>
                      <tr>
                        <th scope="col" class="px-6 py-4">id</th>
                        <th scope="col" class="px-6 py-4">prénom</th>
                        <th scope="col" class="px-6 py-4">nom</th>
                        <th scope="col" class="px-6 py-4">email</th>
                        <th scope="col" class="px-6 py-4">nom du projet</th>
                        <th scope="col" class="px-6 py-4">json</th>
                        <th scope="col" class="px-6 py-4">logo</th>
                        <th scope="col" class="px-6 py-4">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="" id="letterList">

                    </tbody>
                  </table>
                  <div class="flex mt-10 justify-center gap-4">
                    
                    <button class="btn" onclick="firstPage()"><<
                    <button class="btn" onclick="previous()"><</button>
                          
                    <span id="pageInfo"></span>
                      <button class="btn" onclick="nextPage()">></button>
                      <button class="btn" onclick="lastPage()">>></button>
                  </div>
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


  <!-- Pagination -->
  <script>
    let allUsers = <?php echo json_encode($allUsers); ?>;
    let first = 0;
    let actualPage = 1;
    let numberOfItems = 2;
    let maxPages = Math.ceil(allUsers.length / numberOfItems);

    showList();

    document.getElementById('pageButtons').addEventListener('click', function (event) {

      if (event.target.tagName === 'BUTTON') {
        switch (event.target.id) {
          case 'nextButton':
            nextPage();
            break;
          case 'prevButton':
            previous();
            break;
          case 'firstButton':
            firstPage();
            break;
        }
      }
    });

    function showList() {
      let tableList = "";
      for (let i = first; i < first + numberOfItems && i < allUsers.length; i++) {
        tableList += `


<div class="mt-2 mb-5">
<tr class=" h-full min-w-full text-center text-sm font-light">
              <td>${allUsers[i].id_pro}</td>
              <td>${allUsers[i].username}</td>
              <td>${allUsers[i].userlastname}</td>
              <td>${allUsers[i].email}</td>
              <td>${allUsers[i].name}</td>
              <td>${allUsers[i].json}</td>
              <td class="h-full"><div class="flex w-full justify-center items-center"><img class="rounded-full w-[50px] h-[50px]" src="${allUsers[i].logo}" alt="" srcset=""></div></td>
              <td class=""> 
                <form method="POST" action="?action=deleteUser">
                <input type="hidden" name="projectId" value="<?php echo $user->id_pro ?>">
                <input type="hidden" name="userId" value="<?php echo $user->id ?>">
                <button class="mb-2 bg-red-500 rounded-lg py-1 px-2 text-white hover:bg-red-800 w-[90px]  " type="submit">Supprimer</button>
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
                <button class="bg-blue-500 rounded-lg py-1 px-2 w-[90px] text-white hover:bg-blue-800" type="submit">Modifier</button>
                </form>
              </td>
            </tr>
</div>


          `
      }
      document.getElementById('letterList').innerHTML = tableList;
      showPageInfo();
    }

    function nextPage() {
      let newFirst = first + numberOfItems;
      if (newFirst < allUsers.length) {
        first = newFirst;
        actualPage++;
        showList();
      }
    }

    function previous() {
      if (first - numberOfItems >= 0) {
        first -= numberOfItems;
        actualPage--;
        showList();
      }
    }

    function firstPage() {
      first = 0;
      actualPage = 1;
      showList();
    }

    function showPageInfo() {
      document.getElementById('pageInfo').innerHTML = `
          Page ${actualPage} / ${maxPages}
        `;
    }

  </script>
</body>