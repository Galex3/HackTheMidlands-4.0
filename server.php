<?php
$names = sendNames();
/*$socket = stream_socket_server("tcp://127.0.0.1:10000", $errno, $errstr);
if (!$socket) {
  echo "$errstr ($errno)<br/>\n";
} else {
  while ($conn = stream_socket_accept($socket)) {
    echo "Hello Mama Server";
    $names = sendNames();
    fwrite($conn, 'The local time is ' . date('n/j/Y g:i a') . "\n");
    fclose($conn);
  }
  fclose($socket);
}*/

function printNames(){
  global $names;
  foreach ($names as $value) {
    echo $value, '<br/>';
  }
}
?>
