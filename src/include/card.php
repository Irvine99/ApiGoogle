<div class="flex flex-col md:flex-row">
    <div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-1/6 drop-shadow-xl">
        <div class="mx-10 flex justify-between">
            <div class="flex flex-col">
                <h3 class="">Periode</h3>
                <h2 class=""><?= $info->periode['debut'] ?></h2>
                <h2 class=""><?= $info->periode['fin'] ?></h2>
            </div>
          
        </div>
    </div>
    <div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-1/6 drop-shadow-xl">
        <div class="mx-10 flex justify-between">
            <div class="flex flex-col">
                <h3 class="">Periode</h3>
                <h2 class=""><?= $infoOne->periode['debut'] ?></h2>
                <h2 class=""><?= $infoOne->periode['fin'] ?></h2>
            </div>
            <a href="index.php?action=info">ICI</a>
        </div>
    </div>
</div>
<div class="flex flex-col md:flex-row">
    <div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-1/6 drop-shadow-xl">
        <div class="mx-10 flex justify-between">
            <div class="flex flex-col">
                <h3 class="">Periode</h3>
                <h2 class=""><?= $infoTwo->periode['debut'] ?></h2>
                <h2 class=""><?= $infoTwo->periode['fin'] ?></h2>
            </div>
            
        </div>
    </div>
    <div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-1/6 drop-shadow-xl">
        <div class="mx-10 flex justify-between">
            <div class="flex flex-col">
                <h3 class="">Clics</h3>
                <h2 class=""><?= $data ?>

                <span> Clics</span></h2>
            </div>
            <div class=" flex justify-center items-center"><i class="  fa-solid fa-user fa-2xl"></i></div>
        </div>
    </div>
</div>