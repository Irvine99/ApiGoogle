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
            <div class=" flex justify-center items-center"><i class="  fa-solid fa-user fa-2xl"></i></div>
        </div>
    </div>
</div>