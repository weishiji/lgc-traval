<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 13-3-21
 * Time: 上午10:18
 * To change this template use File | Settings | File Templates.
 */
/**
 * 传参数
 * 全部使用get请求
 * pass =  密码
 * start = 当前的页数，默认为0
 * id = 要删除的信息，必须跟delete=true一起发送
 */

require('config.php');
if($_GET['pass'] != $pass)
{
    exit;
}
$conn = new PDO($dsn,$user,$password,array (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

if($_GET['delete'])
{
    $count = $conn->exec("delete from custom where id = ".(int)$_GET['id']);
    echo '删除'.$count.'条信息';
    exit;
}

$page = 10;
$start = empty($_GET['start']) ? 0 : (int)$_GET['start']*$page;

$result = $conn->query("select * from custom limit $start,$page",2);
$json = array();
foreach($result as $v)
{
        $json[] = $v;
}
echo json_encode($json);