<div class="m-5 bg-gray-100 py-2 rounded-lg w-auto md:w-[50%] drop-shadow-xl">
    <div class="ml-5  w-auto overflow-hidden">
    <h3 class="my-2">Nom du graphique à mettre</h3>
    <canvas
        data-te-chart="line"
        data-te-dataset-label="ctr"
        data-te-labels="[      <?php 
      $count = count($results);

      foreach($results as $key=>$value) {
        $keys = $value->keys;
        $date = date('d-m-Y', strtotime($keys[0]));
        echo "'".$date."'";
        if($key !== $count - 1) {
          echo ',';
        }
      } 
    ?>]"
        data-te-dataset-data="[<?php 
      $count = count($results);
      foreach($results as $key=>$data) {
        
        echo "'".$data->ctr."'";
        if($key !== $count - 1) {
          echo ',';
        }
      } ?>]">
    </canvas>
    </div>
</div>