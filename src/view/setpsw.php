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
  <title>Inscription</title>
</head>


  <div class="bg-gray-50 dark:bg-gray-900 flex justify-center p-8">
    <img src="../../assets/img/logo_transpa.png" </img>

<section class="bg-gray-50 dark:bg-gray-900">

  <div class="flex flex-col  items-center justify-center px-6 py-8 mx-auto lg:py-0">

      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Inscription
              </h1>
              <form class="space-y-4 md:space-y-6" action="?action=setPsw" method="POST" enctype="multipart/form-data">
                  
                        <div>
                            <label for="setpsw" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Projet Json</label>
                            <input type="password" name="setpsw" id="setpsw" placeholder="Votre mot de passe" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>

                        <div>
                            <label for="confirm_setpsw" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Projet logo</label>
                            <input type="password" name="confirm_setpsw" id="confirm_setpsw" placeholder="Confirmez votre nouveau mot de passe" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        

                  <button type="submit" class="w-full bg-blue-600 text-white bg-primary-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Créer votre compte</button>
                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                      Déjà un compte ? <a href="/apigoogle/src/view/connexion.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Connectez vous</a>
                  </p>
              </form>
          </div>
      </div>

  </div>

    </div>
  </section>
</body>

</html>