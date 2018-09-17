<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 13-3-20
 * Time: 下午7:34
 * To change this template use File | Settings | File Templates.
 */
require('config.php');
function d($v)
{
    echo '<pre>';
    var_dump($v);
    echo '</pre>';
}

$conn = new PDO($dsn,$user,$password,array (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

//获取IP地址
$ip = $_SERVER['REMOTE_ADDR'];
//查询IP地址在24小时以内是否发送了
$s = $conn->query("select * from custom where ip = '{$ip}' and  UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(save_time)<='{$time}'",2);
foreach($s as $v)
{
    echo "0";
    exit;
}
$date = date('Y-m-d H:i:s',time());
//保存数据
$i = $conn->prepare("insert into
custom(phone,address,name,sex_w,sex_m,start_time,end_time,start_city,end_city,email,jyaoqiu,jibie,fyaoqiu,diqu,jingdian,other,ip,save_time)
values(:telephone,:address,:name,:sex_w,:sex_m,:start_time,:end_time,:start_city,:end_city,:Email,:jyaoqiu,:jibie,:fyaoqiu,:diqu,:jingdian,:other,'{$ip}','{$date}')");
if(empty($_POST['start_time']))
{
    $_POST['start_time'] = '';
}
$i->execute($_POST);
if($i->rowCount())
{
    echo "订单提交成功";
    $body = $message_content;
    smtp_mail($tomail,$message_title,$body);


} else {
    echo json_encode($i->errorInfo());
}

function smtp_mail ( $sendto_email, $subject, $body ,$att=array()) {
    global $ssl,$host,$m_Username,$m_Password,$port,$fromName;
    require("phpmail/class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();

    $mail->Host = $host;
    $mail->Username = $m_Username;
    $mail->Password = $m_Password;
    if($ssl)
    {
        $mail->SMTPSecure = 'ssl';
    }
    $mail->Port = $port;
    $mail->SMTPAuth = true;

    $mail->FromName =  $fromName;
    $mail->From = $mail->Username;
    $mail->CharSet = "utf8";
    $mail->Encoding = "base64";
    $mail->AddAddress($sendto_email);

    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AltBody ="text/html";
    if(!$mail->Send()) {
        //echo "邮件错误信息: " . $mail->ErrorInfo;
    }else{
        //echo "邮件发送成功!";
    }
}