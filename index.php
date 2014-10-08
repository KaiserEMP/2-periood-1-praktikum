<doctype html!>
<html>

<head>
  <meta charset="utf-8">
  <title>euroz dollaz yeniz</title>
 </head>

 <body>

	

	<?php
  $page_link = "second_page.php";
  $name = "kaits";
  $age = "22";
	?>
	
   <a href="<?php echo "{$page_link}?age={$age}"; ?>">Teisele lehele</a><br>
    <?php 
      print_r($_GET); echo "<br>";
      echo $_GET["name"];
      $jada = array("syret", "22"); echo "<br>";
      echo $jada[1];
    ?>

 </body>
 </html>