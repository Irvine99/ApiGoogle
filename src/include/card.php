<div class="flex flex-col md:flex-row">
    <div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-1/6 drop-shadow-xl">
        <div class="mx-10 flex justify-between">
            <div class="flex flex-col">
                <h3 class="">Position</h3>
                <h2 class=""><?php if(!$_POST) {
                                    echo 'Aucun';
                                    } else{ 
                                    echo $data->average_position;
                                    } 
                                ?></h2>
                <h2 class=""></h2>
            </div>
            <a href="index.php?action=position" class=" flex justify-center items-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 w-[18%] rounded-lg shadow-md shadow-black/30"><i class="fa-light fa-computer-mouse"></i></a>
        </div>
    </div>
    <div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-1/6 drop-shadow-xl">
        <div class="mx-10 flex justify-between">
            <div class="flex flex-col">
                <h3 class="">CTR</h3>
                <h2 class=""><?php if(!$_POST) {
                                    echo 'Aucun';
                                    } else{ 
                                    echo $data->ctr;
                                    } 
                                ?></h2>
                <h2 class=""></h2>
            </div>
            <a href="index.php?action=ctr" class=" flex justify-center items-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 w-[18%] rounded-lg shadow-md shadow-black/30"><i class="fa-light fa-computer-mouse"></i></a>
        </div>
    </div>
</div>
<div class="flex flex-col md:flex-row">
    <div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-1/6 drop-shadow-xl">
        <div class="mx-10 flex justify-between">
            <div class="flex flex-col">
                <h3 class="">Impressions</h3>
                <h2 class=""><?php if(!$_POST) {
                                    echo 'Aucun';
                                    } else{ 
                                    echo $data->impressions;
                                    }
                                ?></h2>
                <h2 class=""></h2>
            </div>
            <a href="index.php?action=impressions" class="flex justify-center items-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 w-[18%] rounded-lg shadow-md shadow-black/30"><i class="fa-light fa-computer-mouse"></i></a>
        </div>
    </div>
    <div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-1/6 drop-shadow-xl">
        <div class="mx-10 flex justify-between">
            <div class="flex flex-col">
                <h3 class="">Clics</h3>
                <h2 class="">   <?php if(!$_POST) {
                                    echo 'Aucun';
                                    } else{ 
                                    echo $data->clicks;
                                    } 
                                ?>
                <span> Clics</span></h2>
            </div>
            <a href="index.php?action=clics" class=" flex justify-center items-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 w-[18%] rounded-lg shadow-md shadow-black/30"><i class="fa-light fa-computer-mouse"></i></a>
        </div>
        
    </div>
</div>