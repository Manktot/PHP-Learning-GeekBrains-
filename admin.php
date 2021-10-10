<?php
include "models/db.php";

$unfinished_orders = mysqli_query($db, "SELECT * FROM orders WHERE status = 'Ожидает подтверждения'");
$finished_orders = mysqli_query($db, "SELECT * FROM orders WHERE status = 'Подтверждено'");
$removed_orders = mysqli_query($db, "SELECT * FROM orders WHERE status = 'Отклонено'");

include "view/admin/admin_page.php";