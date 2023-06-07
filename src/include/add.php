<section class="bg-white">
        <div class=" flex flex-col items-center justify-center px-6 py-8 m-8 mx-auto md:p-12 lg:py-0">
            <div class="w-full bg-gray-50 rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-sm text-center font-thin leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Ajouter un utilisateur et son projet
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="?action=signUp" method="POST" enctype="multipart/form-data">
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Votre email</label>
                      <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="exemple@exemple.com" required="">
                  </div>
                  <div>
                      <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Votre nom</label>
                      <input type="text" name="name" id="name" placeholder="André" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div>
                      <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900">Votre prenom</label>
                      <input type="text" name="lastname" id="lastname" placeholder="Robert" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div>

                            <label for="nom_projet" class="block mb-2 text-sm font-medium text-gray-900">Nom du projet</label>
                            <input type="text" name="nom_projet" id="nom_projet" placeholder="Nom du projet" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div>
                            <label for="projet_json" class="block mb-2 text-sm font-medium text-gray-900">Projet Json</label>
                            <input type="file" name="projet_json" id="nom_projet" placeholder="Json" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>

                        <div>
                            <label for="logo_client" class="block mb-2 text-sm font-medium text-gray-900">Projet logo</label>
                            <input type="file" name="logo_client" id="logo_client" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        

                  <button type="submit" class="w-full bg-blue-600 text-white bg-primary-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Créer votre compte</button>
                  <p class="text-sm font-light text-gray-500">
                      Déjà un compte ? <a href="/apigoogle/src/view/connexion.php" class="font-medium text-primary-600 hover:underline">Connectez vous</a>
                  </p>
              </form>
                </div>
            </div>
        </div>
    </section>