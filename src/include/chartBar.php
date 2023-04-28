<div class="m-5 bg-gray-100 py-2 rounded-lg w-auto  md:w-2/5 drop-shadow-xl">
<div class="ml-5 w-auto overflow-hidden">
    <h3 class="my-2">Nom du graphique à mettre</h3>
  <canvas
    data-te-chart="bar"
    data-te-dataset-label="<?= "Coucou"; ?>"
    data-te-labels="[
      <?php 
      $count = count($clicksbydates);

      foreach($clicksbydates as $key=>$value) {
        echo "'".$value->date."'";
        if($key !== $count - 1) {
          echo ',';
        }
      } ?>
      
      ]"
    data-te-dataset-data="[<?php 
      $count = count($clicksbydates);

      foreach($clicksbydates as $key=>$value) {
        echo "'".$value->clicks."'";
        if($key !== $count - 1) {
          echo ',';
        }
      } ?>]">
  </canvas>
</div>
</div>