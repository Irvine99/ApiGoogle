<div class="m-auto lg:m-5 w-3/4 justify-between flex flex-col mt-16">
    <div class="flex flex-col lg:flex-row">
        <div
            class="mb-5 lg:mr-5 bg-gradient-to-r from-zinc-500 via-zinc-700 to-zinc-800 py-2 rounded-lg w-auto lg:w-full drop-shadow-xl">
            <div class="flex w-full h-full">
                <div class="py-2 w-full mx-5  lg:flex flex-col  ">
                    <div class="flex  items-center justify-between w-full">
                        <div class="flex">
                            <h3 class="text-5xl text-zinc-300">Position</h3>
                        </div>
                        <div class="flex">
                            <h2
                                class="mt-4 lg:mt-0 text-2xl bg-slate-300 rounded-full w-[100px] h-[100px] flex justify-center items-center">
                                <?php $number = $_SESSION['resultTotal']->rows[0]['position'];
                                $formattedNumber = number_format($number, 2, '.', ',');
                                echo $formattedNumber;
                                ?>
                            </h2>
                        </div>
                    </div>
                    <div class="flex justify-center mt-5">
                        <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                            class="bg-blue-700 py-1 px-4 rounded-lg rounded-lg  transition ease-in-out duration-300 hover:bg-blue-500 text-white"
                            type="button">
                            En savoir plus</button>
                    </div>


                </div>
                <!-- <a href="index.php?action=position"
                        class="flex justify-center items-center w-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-lg shadow-black/30 p-2 m-2"><i
                            class="bi bi-caret-down-fill hover:text-sky-400"></i></a> -->
            </div>
        </div>
        <div
            class="mb-5 lg:mr-5 bg-gradient-to-r from-zinc-500 via-zinc-700 to-zinc-800 py-2 rounded-lg w-auto lg:w-full drop-shadow-xl">
            <div class="flex w-full h-full">
                <div class="py-2 w-full mx-5 lg:flex flex-col  ">
                    <div class="flex  items-center justify-between w-full">
                        <div class="flex">
                            <h3 class="text-5xl text-zinc-300">CTR</h3>
                        </div>
                        <div class="flex">
                            <h2
                                class="mt-4 lg:mt-0 text-2xl bg-slate-300 rounded-full w-[100px] h-[100px] flex justify-center items-center">
                                <?php $number = $_SESSION['resultTotal']->rows[0]['ctr'];
                                $formattedNumber = number_format($number, 2, '.', ',');
                                echo $formattedNumber;
                                ?>
                            </h2>
                        </div>
                    </div>
                    <div class="flex justify-center mt-5">
                        <button data-modal-target="defaultModal1" data-modal-toggle="defaultModal1"
                            class="bg-blue-700 py-1 px-4 rounded-lg rounded-lg  transition ease-in-out duration-300 hover:bg-blue-500 text-white"
                            type="button">
                            En savoir plus</button>
                    </div>


                </div>
                <!-- <a href="index.php?action=position"
                        class="flex justify-center items-center w-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-lg shadow-black/30 p-2 m-2"><i
                            class="bi bi-caret-down-fill hover:text-sky-400"></i></a> -->
            </div>
        </div>
    </div>
    <div class="flex flex-col lg:flex-row">
        <div
            class="mb-5 lg:mr-5 bg-gradient-to-r from-zinc-500 via-zinc-700 to-zinc-800 py-2 rounded-lg w-auto lg:w-full drop-shadow-xl">
            <div class="flex w-full h-full">
                <div class="py-2 w-full mx-5 lg:flex flex-col  ">
                    <div class="flex  items-center justify-between w-full">
                        <div class="flex">
                            <h3 class="text-5xl text-zinc-300">Impressions</h3>
                        </div>
                        <div class="flex">
                            <h2
                                class="mt-4 lg:mt-0 text-2xl bg-slate-300 rounded-full w-[100px] h-[100px] flex justify-center items-center">
                                <?php echo $_SESSION['resultTotal']->rows[0]['impressions'];
  
                                ?>
                            </h2>
                        </div>
                    </div>
                    <div class="flex justify-center mt-5">
                        <button data-modal-target="defaultModal2" data-modal-toggle="defaultModal2"
                            class="bg-blue-700 py-1 px-4 rounded-lg rounded-lg  transition ease-in-out duration-300 hover:bg-blue-500 text-white"
                            type="button">
                            En savoir plus</button>
                    </div>


                </div>
                <!-- <a href="index.php?action=position"
                        class="flex justify-center items-center w-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-lg shadow-black/30 p-2 m-2"><i
                            class="bi bi-caret-down-fill hover:text-sky-400"></i></a> -->
            </div>
        </div>
        <div
            class="mb-5 lg:mr-5 bg-gradient-to-r from-zinc-500 via-zinc-700 to-zinc-800 py-2 rounded-lg w-auto lg:w-full drop-shadow-xl">
            <div class="flex w-full h-full">
                <div class="py-2 w-full mx-5 lg:flex flex-col  ">
                    <div class="flex  items-center justify-between w-full">
                        <div class="flex">
                            <h3 class="text-5xl text-zinc-300">Click</h3>
                        </div>
                        <div class="flex">
                            <h2
                                class="mt-4 lg:mt-0 text-2xl bg-slate-300 rounded-full w-[100px] h-[100px] flex justify-center items-center">
                                <?php echo$_SESSION['resultTotal']->rows[0]['clicks'];
                             
                                ?>
                            </h2>
                        </div>
                    </div>
                    <div class="flex justify-center mt-5">
                        <button data-modal-target="defaultModal3" data-modal-toggle="defaultModal3"
                            class="bg-blue-700 py-1 px-4 rounded-lg rounded-lg  transition ease-in-out duration-300 hover:bg-blue-500 text-white"
                            type="button">
                            En savoir plus</button>
                    </div>


                </div>
                <!-- <a href="index.php?action=position"
                        class="flex justify-center items-center w-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-lg shadow-black/30 p-2 m-2"><i
                            class="bi bi-caret-down-fill hover:text-sky-400"></i></a> -->
            </div>
        </div>
    </div>

</div>




<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Position
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    La position fait référence à la position moyenne de votre site web dans les résultats de recherche
                    pour un terme ou une requête spécifique. Par exemple, si la position est indiquée comme étant "3",
                    cela signifie que votre site apparaît généralement en troisième position dans les résultats de
                    recherche pour ce terme. Il est important de surveiller la position de votre site car cela peut
                    affecter sa visibilité et son trafic.

            </div>
            <!-- Modal footer -->

        </div>
    </div>
</div>
<!-- Main modal -->
<div id="defaultModal1" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                CTR (Click-Through Rate)
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                Le CTR représente le taux de clics, c'est-à-dire le pourcentage de personnes qui cliquent sur votre site web après avoir vu son apparition dans les résultats de recherche. Il est calculé en divisant le nombre de clics sur votre site par le nombre total d'impressions (voir ci-dessous) et en multipliant le résultat par 100. Un CTR élevé indique que votre site est attrayant pour les utilisateurs et incite à l'action.
                </p>

            </div>
            <!-- Modal footer -->

        </div>
    </div>
</div>
<!-- Main modal -->
<div id="defaultModal2" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Impressions
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                Les impressions correspondent au nombre de fois où votre site web apparaît dans les résultats de recherche pour une requête donnée. Chaque fois que votre site est affiché dans les résultats de recherche, cela est comptabilisé comme une impression, qu'il y ait eu ou non un clic sur votre site. Les impressions peuvent vous donner une idée de la visibilité de votre site dans les résultats de recherche.
                </p>

            </div>
            <!-- Modal footer -->

        </div>
    </div>
</div>
<!-- Main modal -->
<div id="defaultModal3" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Clics
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                Les clics correspondent au nombre total de fois où les utilisateurs ont cliqué sur votre site web à partir des résultats de recherche. Lorsqu'un utilisateur voit votre site dans les résultats de recherche et clique dessus, cela est enregistré comme un clic. Le nombre de clics est un indicateur important de l'engagement des utilisateurs avec votre site et peut influencer le trafic global.
                </p>

            </div>
            <!-- Modal footer -->

        </div>
    </div>
</div>