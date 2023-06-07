<div class="m-auto lg:m-5 w-3/4 justify-between flex flex-col mt-16">
    <div class="flex flex-col lg:flex-row">
        <div
            class="mb-5 lg:mr-5 bg-gradient-to-r from-zinc-500 via-zinc-700 to-zinc-800 py-2 rounded-lg w-auto lg:w-full drop-shadow-xl">
            <div class="flex justify-center h-full">
                <div class="py-2 lg:flex justify-between ">
                    <div class="flex flex-col justify-between w-full">
                        <h3 class="text-3xl text-zinc-300  ml-5">Position</h3>

                        <h2 class="text-zinc-300 text-sm mt-5 mb-1 text-left mx-5">
                            Position: A relative ranking of the position of your link on Google, where 1 is the topmost
                            position, 2 is the next position, and so on. Shown only for Google Search results.
                        </h2>
                    </div>
                    <div class="flex w-[100px] lg:w-1/2 max-lg:m-auto">
                        <h2
                            class="mt-4 lg:mt-0 text-2xl bg-slate-300 rounded-full w-[90px] h-[90px] flex justify-center items-center">
                            <?php $number = $_SESSION['resultTotal']->rows[0]['position'];
                            $formattedNumber = number_format($number, 2, '.', ',');
                            echo $formattedNumber;
                            ?>
                        </h2>
                    </div>


                </div>
                <!-- <a href="index.php?action=position"
                        class="flex justify-center items-center w-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-lg shadow-black/30 p-2 m-2"><i
                            class="bi bi-caret-down-fill hover:text-sky-400"></i></a> -->
            </div>
        </div>
        <div
            class="mb-5 lg:mr-5 bg-gradient-to-r from-zinc-500 via-zinc-700 to-zinc-800	 py-2 rounded-lg w-auto lg:w-full drop-shadow-xl">
            <div class="flex justify-center h-full">
                <div class="py-2 lg:flex justify-between">
                    <div class="flex flex-col justify-between w-full">
                        <h3 class="text-3xl text-zinc-300  ml-5">CTR</h3>

                        <h2 class="text-zinc-300 text-sm mt-5 mb-1 text-left mx-5">
                            Position: A relative ranking of the position of your link on Google, where 1 is the topmost
                            position, 2 is the next position, and so on. Shown only for Google Search results.
                        </h2>
                    </div>
                    <div class="flex w-[100px] lg:w-1/2 max-lg:m-auto">
                        <h2
                            class="mt-4 lg:mt-0 text-2xl bg-slate-300 rounded-full w-[90px] h-[90px] flex justify-center items-center">
                            <?php $number = $_SESSION['resultTotal']->rows[0]['ctr'];
                            $formattedNumber = number_format($number, 2, '.', ',');
                            echo $formattedNumber;
                            ?>
                        </h2>
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
            class="mb-5 lg:mr-5 bg-gradient-to-r from-zinc-500 via-zinc-700 to-zinc-800	 py-2 rounded-lg w-auto lg:w-full drop-shadow-xl">
            <div class="flex justify-center h-full">
                <div class="py-2 lg:flex justify-between">
                    <div class="flex flex-col justify-between w-full">
                        <h3 class="text-3xl text-zinc-300  ml-5">Impressions</h3>
                        <h2 class="text-zinc-300 text-sm mt-5 mb-1 text-left mx-5">
                            Position: A relative ranking of the position of your link on Google, where 1 is the topmost
                            position, 2 is the next position, and so on. Shown only for Google Search results.
                        </h2>
                    </div>
                    <div class="flex w-[100px] lg:w-1/2 max-lg:m-auto">
                        <h2
                            class="mt-4 lg:mt-0 text-2xl bg-slate-300 rounded-full w-[90px] h-[90px] flex justify-center items-center">
                            <?php echo $_SESSION['resultTotal']->rows[0]['impressions'];

                            ?>
                        </h2>
                    </div>


                </div>
                <!-- <a href="index.php?action=position"
                        class="flex justify-center items-center w-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-lg shadow-black/30 p-2 m-2"><i
                            class="bi bi-caret-down-fill hover:text-sky-400"></i></a> -->
            </div>
        </div>
        <div
            class="lg:mb-5 lg:mr-5 bg-gradient-to-r from-zinc-500 via-zinc-700 to-zinc-800	 py-2 rounded-lg w-auto lg:w-full drop-shadow-xl">
            <div class="flex justify-center h-full">
                <div class="py-2 lg:flex justify-between">
                    <div class="flex flex-col justify-between w-full">
                        <h3 class="text-3xl text-zinc-300  ml-5">Clicks</h3>

                        <h2 class="text-zinc-300 text-sm mt-5 mb-1 text-left mx-5">
                            Position: A relative ranking of the position of your link on Google, where 1 is the topmost
                            position, 2 is the next position, and so on. Shown only for Google Search results.
                        </h2>
                    </div>
                    <div class="flex w-[100px] lg:w-1/2 max-lg:m-auto">
                        <h2
                            class="mt-4 lg:mt-0 text-2xl bg-slate-300 rounded-full w-[90px] h-[90px] flex justify-center items-center">
                            <?php echo $_SESSION['resultTotal']->rows[0]['clicks'];

                            ?>
                        </h2>
                    </div>


                </div>
                <!-- <a href="index.php?action=position"
                        class="flex justify-center items-center w-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-lg shadow-black/30 p-2 m-2"><i
                            class="bi bi-caret-down-fill hover:text-sky-400"></i></a> -->
            </div>
        </div>
    </div>

</div>