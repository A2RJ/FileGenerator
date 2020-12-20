<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "laravel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT * FROM jurnal";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["jum_debet"] . "<br>";
//   }
// } else {
//   echo "0 results";
// }
$qColumnNames = mysqli_query($conn, "SHOW COLUMNS FROM jurnal");
$numColumns = mysqli_num_rows($qColumnNames);
$x = 0;
while ($x < $numColumns)
{
    $colname = mysqli_fetch_row($qColumnNames);
    $col[] = $colname[0];
    $x++;
}

// print_r($col);
$c = 0;
foreach($col as $s){
    
    echo $col[$c];
    $c++;
}
$data = array(
    'product_name'  => $this->request->getPost('product_name'),
    'product_price' => $this->request->getPost('product_price'),
);
$conn->close();

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "laravel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT * FROM jurnal";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["jum_debet"] . "<br>";
//   }
// } else {
//   echo "0 results";
// }
$qColumnNames = mysqli_query($conn, "SHOW COLUMNS FROM jurnal");
$numColumns = mysqli_num_rows($qColumnNames);
$x = 0;

// $myfile = fopen("newfile.php", "w") or die("Unable to open file!");
// fwrite($myfile, "<?php 
// Jurnal::create([");
// // $txt = "John Doe\n";
// while ($x < $numColumns)
// {
//     $colname = mysqli_fetch_row($qColumnNames);
//     echo $col[] = 'product_name' . '=>'. '$this->request->getPost('.$colname[0].')';
//     $x++;
//     fwrite($myfile, $col[] .= '"product_name"' . '=>'. '$this->request->getPost("'.$colname[0].'"),');
// }
// $txt = "]);";
// fwrite($myfile, $txt);
// fclose($myfile);
// print_r($col);