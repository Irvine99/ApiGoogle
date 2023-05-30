<div class="flex flex-col md:flex-row md:justify-center lg:justify-start">
    <div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-[160px] drop-shadow-xl">
        <div class="flex justify-between">
            <div class="flex flex-col">
                <h3 class="p-2 text-start">Position</h3>
                <h2 class="p-2"><?php if(!$_POST) {
                                    echo 'Aucun';
                                    } else{ 
                                    echo $data->average_position;
                                    } 
                                ?></h2>
                <h2 class=""></h2>
            </div>
            <a href="index.php?action=position" class="flex justify-center items-center w-auto bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-md shadow-black/30 p-2 m-2"><i class="bi bi-caret-down-fill hover:text-sky-400"></i></a>
        </div>
    </div>
    <div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-[160px] drop-shadow-xl">
        <div class="flex justify-between">
            <div class="flex flex-col">
                <h3 class="p-2 text-start">CTR</h3>
                <h2 class="p-2"><?php if(!$_POST) {
                                    echo 'Aucun';
                                    } else{ 
                                    echo $data->ctr;
                                    } 
                                ?></h2>
                <h2 class=""></h2>
            </div>
            <a href="index.php?action=ctr" class=" flex justify-center items-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-md shadow-black/30 p-2 m-2"><i class="bi bi-caret-down-fill hover:text-sky-400"></i></a>
        </div>
    </div>
</div>
<div class="flex flex-col md:flex-row md:justify-center lg:justify-start">
    <div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-[160px] drop-shadow-xl">
        <div class="flex justify-between">
            <div class="flex flex-col">
                <h3 class="p-2 text-start">Impressions</h3>
                <h2 class="p-2"><?php if(!$_POST) {
                                    echo 'Aucun';
                                    } else{ 
                                    echo $data->impressions;
                                    }
                                ?></h2>
                <h2 class=""></h2>
            </div>
            <a href="index.php?action=impressions" class="flex justify-center items-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-md shadow-black/30 p-2 m-2"><i class="bi bi-caret-down-fill hover:text-sky-400"></i></a>
        </div>
    </div>
    <div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-[160px] drop-shadow-xl">
        <div class="flex justify-between">
            <div class="flex flex-col">
                <h3 class="p-2 text-start">Clics</h3>
                <h2 class="p-2">   <?php if(!$_POST) {
                                    echo 'Aucun';
                                    } else{ 
                                    echo $data->clicks;
                                    } 
                                ?>
                <span> Clics</span></h2>
            </div>
            <a href="index.php?action=clics" class=" flex justify-center items-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-md shadow-black/30 p-2 m-2"><i class="bi bi-caret-down-fill hover:text-sky-400"></i></a>
        </div>
        
    </div>
</div>