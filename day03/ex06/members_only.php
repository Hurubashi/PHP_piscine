<?php
if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
{
    $file = file_get_contents('../img/42.png');
    header('Content-Type: text/plain');
    echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64," . base64_encode($file) . "'>\n</body></html>\n";
}
else
{
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm=\'\'Member area\'\'');
    echo "<html><body>That area is accessible for members only</body></html>\n";
}
//curl -v --user root:root http://localhost:8100/ex06/members_only.php
//curl --user zaz:jaimelespetitsponeys http://localhost:8100/ex06/members_only.php
?>
