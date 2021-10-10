<?php
include "models/db.php";

$order_id = $_GET['order'];
$order_details = mysqli_query($db, "SELECT * FROM orders WHERE id = '{$order_id}'");
$order_session_id = mysqli_fetch_assoc($order_details);
$basket_details = mysqli_query($db, "SELECT goods.id as id, goods.name as name, goods.price as price FROM basket, goods WHERE basket.goods_id = goods.id AND session_id = '{$order_session_id["session_id"]}'");

if (isset($_POST['admin_action'])) {
    if ($_POST['admin_action'] == 'remove') {
        mysqli_query($db, "UPDATE orders SET `status`='Отклонено' WHERE id = '{$order_id}'");
        header("Location: /admin.php");
        die();
    }
    if ($_POST['admin_action'] == 'approve') {
        mysqli_query($db, "UPDATE orders SET `status`='Подтверждено' WHERE id = '{$order_id}'");
        header("Location: /admin.php");
        die();
    }
}
include "view/admin/order_details.php";