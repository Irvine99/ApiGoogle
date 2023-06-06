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
  <title>Connexion</title>
</head>

<body>

  <section class="bg-gray-50">
    <div class="flex flex-col h-screen items-center justify-center py-8 mx-auto md:h-screen lg:py-0">
      <div
        class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
        <div class="bg-gray-50 flex justify-center">
          <div class="bg-black rounded-full w-[100px] h-[100px] flex justify-center items-center">
            <img class="w-[75px] h-[75px]" src="assets/img/logo.png" />
          </div>
        </div>
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
            Connexion
          </h1>
          <form class="space-y-4 md:space-y-6" action="index.php?action=LoginTraitement" method="post">
            <div>
              <label for="email_user" class="block mb-2 text-sm font-medium text-gray-900 ">Votre
                email</label>
              <input type="email" name="email_user" id="email_user"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                placeholder="exemple@exemple.com" required="">
            </div>
            <div>
              <label for="password_user" class="block mb-2 text-sm font-medium text-gray-900 ">Votre mot
                de passe</label>
              <input type="password" name="password_user" id="password_user" placeholder="••••••••"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                required="">
            </div>
            <button type="submit"
              class="w-full bg-blue-600 text-white  hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Créer
              votre compte</button>
            <p class="text-sm font-light text-gray-500 ">
              Pas de compte ? <a href="/apigoogle/src/view/inscription.php"
                class="font-medium text-primary-600 hover:underline ">Inscrivez vous</a>
            </p>
          </form>
        </div>

      </div>
    </div>
  </section>
</body>

</html>