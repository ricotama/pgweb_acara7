<!DOCTYPE html>
<html>
<body>

<?php
$hewan = array("Harimau", "Gajah", "Zebra", "Jerapah", "Singa", "Panda", "Koala");
$umur = array("10 tahun", "70 tahun", "25 tahun", "30 tahun", "20 tahun", "15 tahun", "18 tahun");
$habitat = array("Hutan", "Sabana", "Padang Rumput", "Savannah", "Padang Rumput", "Hutan Bambu", "Hutan Eukaliptus");

echo "<table border='1'>";
for($i=0; $i <= 6; $i++) {
echo"<tr><td> $hewan[$i] </td><td> $umur[$i] </td><td> $habitat[$i] </td></tr>";
}
echo "</table>";
?>

</body>
</html>
