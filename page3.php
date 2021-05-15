<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
     <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
      <title>test1</title>
    </head>

<body>
 <form id="form3" action="page4.php" method="post" >
   <div class="container">

<?php

// print_r($_POST);
$value = $_POST['array'];
// print_r($value);

for ($i = 0; $i < count($value); $i++){
    // echo $value[$i]."<br><br><br>";

    if(!empty($value[$i])){
 ?>
        <input type="checkbox" class="check" value="<?php echo $value[$i] ?>" name="check<?php echo $i;?>">
        <label for="check"><?php echo $value[$i]?></label><br>
        <!-- echo $value[$i]."<br><br><br>"; -->
   <?php }
}
?>
    <input type="checkbox" id="checkall" name="checkall">
    <label for="checkall">checkall</label><br>

    <input type="checkbox" id="clearall" name="clearall">
    <label for="clearall">clearall</label><br>

    <button type="submit" class="submit">submit</button>
        </div>
    </form>
  </body>

  

<script>

$("#checkall").click(function(){
$('.check').prop('checked', true);
$('#clearall').prop('checked', false);
$('#checkall').prop('checked', false);

});

$("#clearall").click(function(){
$('.check').prop('checked', false);
$('#checkall').prop('checked', false);
$('#clearall').prop('checked', false);
});

</script>

</html>