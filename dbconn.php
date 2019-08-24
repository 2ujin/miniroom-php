<head><meta content="text/html; charset=utf-8"></head>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$username = "DBTEST";                  // Use your username
$password = "1234";             // and your password
$database = "localhost/xe";   // and the connect string to connect to your database
$query = "select * from testtbl";

$c = oci_connect($username, $password, $database,  'AL32UTF8'); //한글안깨지게 ((필수임))
$s = oci_parse($c, $query);
$r = oci_execute($s);

echo "<table border='1'>\n";
$ncols = oci_num_fields($s);
echo "<tr>\n";
for ($i = 1; $i <= $ncols; ++$i) {
    $colname = oci_field_name($s, $i);
    echo "  <th><b>".htmlspecialchars($colname,ENT_QUOTES|ENT_SUBSTITUTE)."</b></th>\n";
}
echo "</tr>\n";

while (($row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "<td>";
        echo $item!==null?htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE):"&nbsp;";
        echo "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";
?>
