<?php
include "dbsetting.php";
$conn = @mysql_connect(dbserver,dbuser,dbpass);
@mysql_selectdb('edugrmq5_db',$conn);
?>