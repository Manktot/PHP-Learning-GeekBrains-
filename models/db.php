<?php
session_start();
$session = session_id();

$db = @mysqli_connect('localhost:3306', 'guest', 'Azov64131', 'goods') or die("Ошибка соединения: " . mysqli_connect_error());

$goods = mysqli_query($db, "SELECT * FROM goods");
$result = mysqli_query($db, "SELECT count(id) as count FROM `basket` WHERE `session_id` = '{$session}'");
$count = mysqli_fetch_assoc($result)['count'];

$sum = mysqli_query($db, "SELECT SUM(goods.price) FROM basket, goods WHERE basket.goods_id = goods.id AND session_id = '{$session}'");
$sumFinal = mysqli_fetch_assoc($sum)['SUM(goods.price)'];
$basket = mysqli_query($db, "SELECT basket.id as id, basket.session_id as session, goods.name as name, goods.price as price FROM basket, goods WHERE basket.goods_id = goods.id AND session_id = '{$session}'");

if (isset($_POST['action'])){
    $id = (int)$_POST['id'];
    if ($_POST['action'] == 'buy')  mysqli_query($db, "INSERT INTO `basket`(`goods_id`, `session_id`) VALUES ('{$id}','{$session}')");
    if ($_POST['action'] == 'delete') mysqli_query($db, "DELETE FROM `basket` WHERE id=('{$id}')");
    if ($_POST['action'] == 'order'){
        $name = htmlspecialchars(strip_tags(mysqli_real_escape_string($db, $_POST['name'])));
        $phone = htmlspecialchars(strip_tags(mysqli_real_escape_string($db, $_POST['phone'])));
        var_dump($session);
        $sql = "INSERT INTO `orders`(`user_name`, `user_phone`, `session_id`) VALUES ('{$name}','{$phone}','{$session}')";
        session_regenerate_id();
        mysqli_query($db, $sql);
        $_SESSION['message'] = "Заказ успешно оформлен";
        echo "Order";
        header("Location: order.php/?order=ok");
        die();
    }
    header("Location: /");
    die();
}

$message = $_SESSION['message'];
unset($_SESSION['message']);