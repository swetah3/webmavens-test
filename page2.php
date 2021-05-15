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

<?php
// print_r($_POST);
// print_r($_POST ['number']);
$number = $_POST['number'];
$number = (int)$number;

if(isset($number) && is_int($number)){
 ?>
 <div class="container">
      <form  name="myForm" action="page3.php" method="post" id="myform">
    <?php
	for ($x = 0; $x < $number; $x++) {
	 echo '<input type="text" class="text-field" name="array[]" id="numberInput" placeholder="Enter something"/> <br><br><br>';
	}	 
	?>
      <button type="submit" value="submit" id="Submit" >submit</button>
    </form>
</div>

<?php

};
?>

<!---script--->


<script>

$('#myform').on('submit', function() {
   var count = 0;
   
    $(".text-field").each(function() {
    //  ($(this).val())
	  count = count+($.trim($(this).val())!= "" ? 1 : 0);	

    });
    //  console.log(count)
	//   return false;
		if(count >= 3){
			return true;
		}else{
			alert("Enter more the 3 field");
			return false;
		 }  
});



</script>
</html>