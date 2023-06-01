<div class="flex justify-center">
    <div class="flex justify-between w-full flex-col md:flex-row ">
        <div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-[20%] drop-shadow-xl">
            <div class="flex justify-center h-full">
                <div class="py-2 flex flex-col items-center justify-between ">
                    <h3 class="text-xl">Position</h3>
                    <h2 class="">
                        <?php echo $_SESSION['resultTotal']->rows[0]['position'];
                        ?>
                    </h2>
                    
                </div>
               <!-- <a href="index.php?action=position"
                    class="flex justify-center items-center w-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-md shadow-black/30 p-2 m-2"><i
                        class="bi bi-caret-down-fill hover:text-sky-400"></i></a> -->
            </div>
        </div>
        <div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-[20%] drop-shadow-xl">
            <div class="flex justify-center h-full">
                <div class="py-2 flex flex-col items-center justify-between ">
                    <h3 class="text-xl">Ctr</h3>
                    <h2 class="">
                        <?php echo $_SESSION['resultTotal']->rows[0]['ctr'];
                        ?>
                    </h2>
                    
                </div>
               <!-- <a href="index.php?action=position"
                    class="flex justify-center items-center w-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-md shadow-black/30 p-2 m-2"><i
                        class="bi bi-caret-down-fill hover:text-sky-400"></i></a> -->
            </div>
        </div>
        <div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-[20%] drop-shadow-xl">
            <div class="flex justify-center h-full">
                <div class="py-2 flex flex-col items-center justify-between ">
                    <h3 class="text-xl">Impressions</h3>
                    <h2 class="">
                        <?php echo $_SESSION['resultTotal']->rows[0]['impressions'];
                        ?>
                    </h2>
                    
                </div>
               <!-- <a href="index.php?action=position"
                    class="flex justify-center items-center w-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-md shadow-black/30 p-2 m-2"><i
                        class="bi bi-caret-down-fill hover:text-sky-400"></i></a> -->
            </div>
        </div>
        <div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-[20%] drop-shadow-xl">
            <div class="flex justify-center h-full">
                <div class="py-2 flex flex-col items-center justify-between ">
                    <h3 class="text-xl">Clicks</h3>
                    <h2 class="">
                        <?php echo $_SESSION['resultTotal']->rows[0]['clicks'];
                        ?>
                    </h2>
                    
                </div>
               <!-- <a href="index.php?action=position"
                    class="flex justify-center items-center w-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-md shadow-black/30 p-2 m-2"><i
                        class="bi bi-caret-down-fill hover:text-sky-400"></i></a> -->
            </div>
        </div>

    </div>



</div>