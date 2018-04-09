<?php
session_start();

setCookie("panier[Nuts]", '', -1);
setCookie("panier[cookie]", '', -1);
setCookie("panier[chips]", '', -1);
setCookie("panier[M&Ms]", '', -1);

header ("location: index.php");

?>
