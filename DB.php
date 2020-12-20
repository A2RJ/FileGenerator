<?php
// Berhasil generate file berdasarkan tabel mysql
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

$qColumnNames = mysqli_query($conn, "SHOW COLUMNS FROM jurnal");
$numColumns = mysqli_num_rows($qColumnNames);

$x = 0;
while ($x < $numColumns)
{
    $colname = mysqli_fetch_row($qColumnNames);
    $col[] = '"' . $colname[0] .'" => $this->input("' . $colname[0] .'"),';
    $x++;
}

$conn->close();

$filename = "mylog.php";
$text = '<?php
$data = ([' . "\n";
foreach($col as $key => $value)
{
    $text .= $value."\n";
}
$text .= "]);";
file_put_contents($filename, $text);

// Untuk menampilkan isi variabel kedalam file
// $fh = fopen($filename, "w") or die("Could not open log file.");
// fwrite($fh, $text) or die("Could not write file!");
// untuk menampilkan isi variabel kedalam file
// file_put_contents('filename.txt', var_export($col, true));
// file_put_contents('filename.txt', print_r($col, true));