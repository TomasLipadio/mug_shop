<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
	file_put_contents('files/orderscurrentdates_9jd2U9d2uqxDk29dqUsj2.txt', '');
    file_put_contents('files/orderslogins_9jd2U9d2uqxDk29dqUsj2.txt', '');
    file_put_contents('files/ordersfullnames_9jd2U9d2uqxDk29dqUsj2.txt', '');
    file_put_contents('files/ordersphonenumbers_9jd2U9d2uqxDk29dqUsj2.txt', '');
    file_put_contents('files/ordersemails_9jd2U9d2uqxDk29dqUsj2.txt', '');
    file_put_contents('files/ordersaddresses_9jd2U9d2uqxDk29dqUsj2.txt', '');
    file_put_contents('files/ordersdates_9jd2U9d2uqxDk29dqUsj2.txt', '');
    file_put_contents('files/ordersitems_9jd2U9d2uqxDk29dqUsj2.txt', '');
    echo '<script>location.href="new_orders.php"</script>';
} else
    header('Location:index.php');
?>