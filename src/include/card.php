<div class="m-5 w-1/2 justify-between flex flex-col">
    <div class="flex">
        <div class="mb-5 mr-5 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 py-2 rounded-lg w-auto md:w-full drop-shadow-xl">
            <div class="flex justify-center h-full">
                <div class="py-2 flex flex-col items-center justify-between ">
                    <div class="flex items-center justify-between w-full">
                    <h3 class="text-3xl  ml-5">Position</h3>
                    <h2 class="bg-white mr-5 rounded-full w-[50px] h-[50px] flex justify-center items-center">
                        <?php  $number = $_SESSION['resultTotal']->rows[0]['position'];
                                $formattedNumber = number_format($number, 2, '.', ',');
                                echo $formattedNumber;
                        ?>
                    </h2>
                    </div>
                    <h2 class="text-sm mt-5 mb-1 text-left mx-5">
                    Position: A relative ranking of the position of your link on Google, where 1 is the topmost position, 2 is the next position, and so on. Shown only for Google Search results.
                    </h2>

                </div>
                <!-- <a href="index.php?action=position"
                        class="flex justify-center items-center w-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-md shadow-black/30 p-2 m-2"><i
                            class="bi bi-caret-down-fill hover:text-sky-400"></i></a> -->
            </div>
        </div>
        <div class="mb-5 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 py-2 rounded-lg w-auto md:w-full drop-shadow-xl">
            <div class="flex justify-center h-full">
                <div class="py-2 flex flex-col items-center justify-between ">
                    <div class="flex items-center justify-between w-full">
                    <h3 class="text-3xl  ml-5">CTR</h3>
                    <h2 class="bg-white mr-5 rounded-full w-[50px] h-[50px] flex justify-center items-center">
                        <?php  $number = $_SESSION['resultTotal']->rows[0]['ctr'];
                                $formattedNumber = number_format($number, 2, '.', ',');
                                echo $formattedNumber;
                        ?>
                    </h2>
                    </div>
                    <h2 class="text-sm mt-5 mb-1 text-left mx-5">
                    Click-through rate: The calculation of (clicks ÷ impressions).                    
                    </h2>

                </div>
                <!-- <a href="index.php?action=position"
                        class="flex justify-center items-center w-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-md shadow-black/30 p-2 m-2"><i
                            class="bi bi-caret-down-fill hover:text-sky-400"></i></a> -->
            </div>
        </div>

    </div>
    <div class="flex">
        <div class="mt-5 mr-5 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 py-2 rounded-lg w-auto md:w-full drop-shadow-xl">
            <div class="flex justify-center h-full">
                <div class="py-2 flex flex-col items-center justify-between ">
                    <div class="flex items-center justify-between w-full">
                    <h3 class="text-3xl  ml-5">Impressions</h3>
                    <h2 class="bg-white mr-5 rounded-full w-[50px] h-[50px] flex justify-center items-center">
                        <?php  echo  $_SESSION['resultTotal']->rows[0]['impressions'];
                                
                        ?>
                    </h2>
                    </div>
                    <h2 class="text-sm mt-5 mb-1 text-left mx-5">
                    How often someone saw a link to your site on Google. Depending on the result type, the link might need to be scrolled or expanded into view
                    </h2>

                </div>
                <!-- <a href="index.php?action=position"
                        class="flex justify-center items-center w-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-md shadow-black/30 p-2 m-2"><i
                            class="bi bi-caret-down-fill hover:text-sky-400"></i></a> -->
            </div>
        </div>
        <div class="mt-5 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 py-2 rounded-lg w-auto md:w-full drop-shadow-xl">
            <div class="flex justify-center h-full">
                <div class="py-2 flex flex-col items-center justify-between ">
                    <div class="flex items-center justify-between w-full">
                    <h3 class="text-3xl  ml-5">Clicks</h3>
                    <h2 class="bg-white mr-5 rounded-full w-[50px] h-[50px] flex justify-center items-center">
                        <?php  echo $_SESSION['resultTotal']->rows[0]['clicks'];
                                
                        ?>
                    </h2>
                    </div>
                    <h2 class="text-sm mt-5 mb-1 text-left mx-5">
                    How often someone clicked a link from Google to your site.

                </div>
                <!-- <a href="index.php?action=position"
                        class="flex justify-center items-center w-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-md shadow-black/30 p-2 m-2"><i
                            class="bi bi-caret-down-fill hover:text-sky-400"></i></a> -->
            </div>
        </div>

    </div>

</div>

