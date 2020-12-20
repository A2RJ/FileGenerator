<?php
// Berhasil generate file berdasarkan tabel database
$mysqli = new mysqli("localhost", "root", "", "laravel");

/* check connection */
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

$query = "SHOW COLUMNS FROM jurnal";
$result = $mysqli->query($query);

while ($row = $result->fetch_array()) {
  $rows[] = $row[0];
}

$text = '<?php
$data = ([' . "\n";
foreach ($rows as $row => $value) {
  $text .= '"' . $value . '" => $this->input("' . $value . '"),' . "\n";
}
$text .= "]);";

file_put_contents("Output.php", $text);

/* free result set */
$result->close();

/* close connection */
$mysqli->close();
