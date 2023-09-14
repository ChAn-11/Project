<?php
$page_name = basename($_SERVER['PHP_SELF']);
$page_name = strtok($page_name, '.');
$file_name = 'counter.txt';

$file = fopen($file_name, 'r');
if ($file == false) { 
    $file = fopen($file_name, 'w'); 
    $count = 0; 
} else {  
    $count = fread($file, filesize($file_name));              
} 
fclose($file);

  $count++; 
  ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <figure class="text-white text-center">
            This page has been viewed 
        </figure>
        <h3 class="mt-2 text-center">
        <b><?php echo $count;?></b>
        </h3>
        <figure class="text-white text-center">
            times
        </figure>
        </div>
    </div>
</div>

<?php
//   echo "This page has been viewed <b>$count</b> times"; 

  $file = fopen($file_name, 'w');   

   fwrite($file, $count); 

   fclose($file); 

?>