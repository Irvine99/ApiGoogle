    <!-- <?php 
    $_SESSION['projet_id']= $_POST['projectId'] ;
    var_dump($_SESSION['projet_id']);
    ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdn.tailwindcss.com"></script>
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
    <!--TailwindElement -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <title>Modifier</title>
</head>

<body class="bg-gray-50 dark:bg-gray-900">
    <div class="bg-gray-50 dark:bg-gray-900 flex justify-center px-6 m-8">
        <img src="../../assets/img/logo_transpa.png" </img>
    </div>
    <section>
        <div class="flex flex-col items-center justify-center px-6 py-8 m-8 mx-auto md:p-12 lg:py-0">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Modifier un utilisateur et son projet
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" action="?action=updateUser">

                        <div>
                            <label  for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre email</label>
                            <input value = "<?php echo $_POST['useremail'] ?>" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="exemple@exemple.com" required="">
                        </div>
                        <div>
                            <label  for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre nom</label>
                            <input value = "<?php echo $_POST['username'] ?>" type="text" name="name" id="name" placeholder="André" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div>
                            <label  for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre prenom</label>
                            <input value = "<?php echo  $_POST['userlastname'] ?>" type="text" name="lastname" id="lastname" placeholder="Robert" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div>
                            <label  for="nom_projet" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du projet</label>
                            <input value = "<?php echo $_POST['projectName'] ?>" type="text" name="nom_projet" id="nom_projet" placeholder="Nom du projet" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                            <!-- <div>
                                <label for="projet_json" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Logo</label>
                                <input type="file" name="logo_client" id="logo_client" placeholder="Logo" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div> -->
                        <div>
                            <label for="projet_json" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Projet Json</label>
                            <input type="file" name="projet_json" id="nom_projet" placeholder="Json" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <input type="hidden" name="projectId" value="<?php echo $_POST['projectId'] ?>">
                        <input type="hidden" name="userId" value="<?php echo $_POST['userId'] ?>">
                        <?php var_dump($user);?>
                        <?php var_dump($_POST);?>
                        
                        <button type"submit" >submit</button>


                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>