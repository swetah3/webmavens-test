<?php
$servername = "localhost";
$username = "newuser";
$password = "ab12345";
$dbname = "Test1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$count= 0;
foreach($_POST as $key=>$value){
    // print_r ($value ."<br><br><br>");
    $count = $count+1;
    $sql = "INSERT INTO Details2 (name)
    VALUES ('".$value."')";
    if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      

}
$sql = "select * from Details2 order by timestamp desc limit " .$count;  

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name: " . $row["name"]. " - timestamp: " . $row["timestamp"].  "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>