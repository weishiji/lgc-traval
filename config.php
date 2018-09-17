<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 13-3-21
 * Time: 上午11:12
 * To change this template use File | Settings | File Templates.
 */
$dsn = 'mysql:dbname=lgc;host=localhost'; //数据库的连接信息
$user = 'root';
$password = 'liuxiaoguang';


//管理页面的密码
$pass = 'baodidsfsdfs';



//邮件的标题
$message_title = '新订单提示';
//邮件的内容
$message_content = '
        <html>
    	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<style>
    		.clearfix {
    		  *zoom: 1;
    		}
    		.clearfix:before,
    		.clearfix:after {
    		  display: table;
    		  content: "";
    		  line-height: 0;
    		}
    		.clearfix:after {
    		  clear: both;
    		}
    		.hide-text {
    		  font: 0/0 a;
    		  color: transparent;
    		  text-shadow: none;
    		  background-color: transparent;
    		  border: 0;
    		}
    		.input-block-level {
    		  display: block;
    		  width: 100%;
    		  min-height: 30px;
    		  -webkit-box-sizing: border-box;
    		  -moz-box-sizing: border-box;
    		  box-sizing: border-box;
    		}
    		table {
    		  max-width: 100%;
    		  background-color: transparent;
    		  border-collapse: collapse;
    		  border-spacing: 0;
    		}
    		.table {
    		  width: 100%;
    		  margin-bottom: 20px;
    		}
    		.table th,
    		.table td {
    		  padding: 8px;
    		  line-height: 20px;
    		  text-align: left;
    		  vertical-align: top;
    		  border-top: 1px solid #dddddd;
    		}
    		.table th {
    		  font-weight: bold;
    		}
    		.table thead th {
    		  vertical-align: bottom;
    		}
    		.table caption + thead tr:first-child th,
    		.table caption + thead tr:first-child td,
    		.table colgroup + thead tr:first-child th,
    		.table colgroup + thead tr:first-child td,
    		.table thead:first-child tr:first-child th,
    		.table thead:first-child tr:first-child td {
    		  border-top: 0;
    		}
    		.table tbody + tbody {
    		  border-top: 2px solid #dddddd;
    		}
    		.table .table {
    		  background-color: #ffffff;
    		}
    		.table-condensed th,
    		.table-condensed td {
    		  padding: 4px 5px;
    		}
    		.table-bordered {
    		  border: 1px solid #dddddd;
    		  border-collapse: separate;
    		  *border-collapse: collapse;
    		  border-left: 0;
    		  -webkit-border-radius: 4px;
    		  -moz-border-radius: 4px;
    		  border-radius: 4px;
    		}
    		.table-bordered th,
    		.table-bordered td {
    		  border-left: 1px solid #dddddd;
    		}
    		.table-bordered caption + thead tr:first-child th,
    		.table-bordered caption + tbody tr:first-child th,
    		.table-bordered caption + tbody tr:first-child td,
    		.table-bordered colgroup + thead tr:first-child th,
    		.table-bordered colgroup + tbody tr:first-child th,
    		.table-bordered colgroup + tbody tr:first-child td,
    		.table-bordered thead:first-child tr:first-child th,
    		.table-bordered tbody:first-child tr:first-child th,
    		.table-bordered tbody:first-child tr:first-child td {
    		  border-top: 0;
    		}
    		.table-bordered thead:first-child tr:first-child > th:first-child,
    		.table-bordered tbody:first-child tr:first-child > td:first-child,
    		.table-bordered tbody:first-child tr:first-child > th:first-child {
    		  -webkit-border-top-left-radius: 4px;
    		  -moz-border-radius-topleft: 4px;
    		  border-top-left-radius: 4px;
    		}
    		.table-bordered thead:first-child tr:first-child > th:last-child,
    		.table-bordered tbody:first-child tr:first-child > td:last-child,
    		.table-bordered tbody:first-child tr:first-child > th:last-child {
    		  -webkit-border-top-right-radius: 4px;
    		  -moz-border-radius-topright: 4px;
    		  border-top-right-radius: 4px;
    		}
    		.table-bordered thead:last-child tr:last-child > th:first-child,
    		.table-bordered tbody:last-child tr:last-child > td:first-child,
    		.table-bordered tbody:last-child tr:last-child > th:first-child,
    		.table-bordered tfoot:last-child tr:last-child > td:first-child,
    		.table-bordered tfoot:last-child tr:last-child > th:first-child {
    		  -webkit-border-bottom-left-radius: 4px;
    		  -moz-border-radius-bottomleft: 4px;
    		  border-bottom-left-radius: 4px;
    		}
    		.table-bordered thead:last-child tr:last-child > th:last-child,
    		.table-bordered tbody:last-child tr:last-child > td:last-child,
    		.table-bordered tbody:last-child tr:last-child > th:last-child,
    		.table-bordered tfoot:last-child tr:last-child > td:last-child,
    		.table-bordered tfoot:last-child tr:last-child > th:last-child {
    		  -webkit-border-bottom-right-radius: 4px;
    		  -moz-border-radius-bottomright: 4px;
    		  border-bottom-right-radius: 4px;
    		}
    		.table-bordered tfoot + tbody:last-child tr:last-child td:first-child {
    		  -webkit-border-bottom-left-radius: 0;
    		  -moz-border-radius-bottomleft: 0;
    		  border-bottom-left-radius: 0;
    		}
    		.table-bordered tfoot + tbody:last-child tr:last-child td:last-child {
    		  -webkit-border-bottom-right-radius: 0;
    		  -moz-border-radius-bottomright: 0;
    		  border-bottom-right-radius: 0;
    		}
    		.table-bordered caption + thead tr:first-child th:first-child,
    		.table-bordered caption + tbody tr:first-child td:first-child,
    		.table-bordered colgroup + thead tr:first-child th:first-child,
    		.table-bordered colgroup + tbody tr:first-child td:first-child {
    		  -webkit-border-top-left-radius: 4px;
    		  -moz-border-radius-topleft: 4px;
    		  border-top-left-radius: 4px;
    		}
    		.table-bordered caption + thead tr:first-child th:last-child,
    		.table-bordered caption + tbody tr:first-child td:last-child,
    		.table-bordered colgroup + thead tr:first-child th:last-child,
    		.table-bordered colgroup + tbody tr:first-child td:last-child {
    		  -webkit-border-top-right-radius: 4px;
    		  -moz-border-radius-topright: 4px;
    		  border-top-right-radius: 4px;
    		}
    		.table-striped tbody > tr:nth-child(odd) > td,
    		.table-striped tbody > tr:nth-child(odd) > th {
    		  background-color: #f9f9f9;
    		}
    		.table-hover tbody tr:hover > td,
    		.table-hover tbody tr:hover > th {
    		  background-color: #f5f5f5;
    		}
    		table td[class*="span"],
    		table th[class*="span"],
    		.row-fluid table td[class*="span"],
    		.row-fluid table th[class*="span"] {
    		  display: table-cell;
    		  float: none;
    		  margin-left: 0;
    		}
    		.table td.span1,
    		.table th.span1 {
    		  float: none;
    		  width: 44px;
    		  margin-left: 0;
    		}
    		.table td.span2,
    		.table th.span2 {
    		  float: none;
    		  width: 124px;
    		  margin-left: 0;
    		}
    		.table td.span3,
    		.table th.span3 {
    		  float: none;
    		  width: 204px;
    		  margin-left: 0;
    		}
    		.table td.span4,
    		.table th.span4 {
    		  float: none;
    		  width: 284px;
    		  margin-left: 0;
    		}
    		.table td.span5,
    		.table th.span5 {
    		  float: none;
    		  width: 364px;
    		  margin-left: 0;
    		}
    		.table td.span6,
    		.table th.span6 {
    		  float: none;
    		  width: 444px;
    		  margin-left: 0;
    		}
    		.table td.span7,
    		.table th.span7 {
    		  float: none;
    		  width: 524px;
    		  margin-left: 0;
    		}
    		.table td.span8,
    		.table th.span8 {
    		  float: none;
    		  width: 604px;
    		  margin-left: 0;
    		}
    		.table td.span9,
    		.table th.span9 {
    		  float: none;
    		  width: 684px;
    		  margin-left: 0;
    		}
    		.table td.span10,
    		.table th.span10 {
    		  float: none;
    		  width: 764px;
    		  margin-left: 0;
    		}
    		.table td.span11,
    		.table th.span11 {
    		  float: none;
    		  width: 844px;
    		  margin-left: 0;
    		}
    		.table td.span12,
    		.table th.span12 {
    		  float: none;
    		  width: 924px;
    		  margin-left: 0;
    		}
    		.table tbody tr.success > td {
    		  background-color: #dff0d8;
    		}
    		.table tbody tr.error > td {
    		  background-color: #f2dede;
    		}
    		.table tbody tr.warning > td {
    		  background-color: #fcf8e3;
    		}
    		.table tbody tr.info > td {
    		  background-color: #d9edf7;
    		}
    		.table-hover tbody tr.success:hover > td {
    		  background-color: #d0e9c6;
    		}
    		.table-hover tbody tr.error:hover > td {
    		  background-color: #ebcccc;
    		}
    		.table-hover tbody tr.warning:hover > td {
    		  background-color: #faf2cc;
    		}
    		.table-hover tbody tr.info:hover > td {
    		  background-color: #c4e3f3;
    		}

    	</style>
    	</head>
    	<body>
    	   <table class="table table-bordered table-striped">
               <thead>
                 <tr>
                   <th>列表</th>
                   <th>内容</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <td>姓名</td>
                   <td>'.$_POST['name'].'</td>
                 </tr>
                 <tr>
                   <td>电子邮件</td>
                   <td>'.$_POST['Email'].'</td>
                 </tr>
                 <tr>
                   <td>电话号码</td>
                   <td>'.$_POST['telephone'].'</td>
                 </tr>
                 <tr>
                   <td>地址</td>
                   <td>'.$_POST['address'].'</td>
                 </tr>
                 <tr>
                     <td>人数男</td>
                     <td>'.$_POST['sex_m'].'</td>
                 </tr>
                 <tr>
                     <td>人数女</td>
                     <td>'.$_POST['sex_w'].'</td>
                 </tr>

                 <tr>
                     <td>开始时间</td>
                     <td>'.$_POST['start_time'].'</td>
                 </tr>
                 <tr>
                     <td>结束时间</td>
                     <td>'.$_POST['end_time'].'</td>
                 </tr>
                 <tr>
                     <td>行程起始城市</td>
                     <td>'.$_POST['start_city'].'</td>
                 </tr>
                 <tr>
                     <td>结束城市</td>
                     <td>'.$_POST['end_city'].'</td>
                 </tr>
                 <tr>
                     <td>酒店要求</td>
                     <td>'.$_POST['jyaoqiu'].'</td>
                 </tr>
                 <tr>
                     <td>酒店级别</td>
                     <td>'.$_POST['jibie'].'</td>
                 </tr>
                 <tr>
                     <td>房间要求</td>
                     <td>'.$_POST['fyaoqiu'].'</td>
                 </tr>
                 <tr>
                     <td>希望前往的地区</td>
                     <td>'.$_POST['diqu'].'</td>
                 </tr>
                 <tr>
                     <td>必去景点</td>
                     <td>'.$_POST['jingdian'].'</td>
                 </tr>
                 <tr>
                     <td>备注</td>
                     <td>'.$_POST['other'].'</td>
                 </tr>
                 <tr>
                     <td>发送人IP</td>
                     <td>'.$_SERVER['REMOTE_ADDR'].'</td>
                 </tr>
               </tbody>
             </table>
    	</body>
    	</html>';
  //phone,address,name,sex_w,sex_m,
  //start_time,end_time,start_city,end_city,email,jyaoqiu,jibie,fyaoqiu,diqu,jingdian,other,ip,save_time
//邮件的SMTP的地址
$host = 'smtp.exmail.qq.com';
//邮件的账户
$m_Username = "test@59n.net";
//邮件的密码
$m_Password = "1qwert";
//如果使用的是ssl加密，请设置为true
$ssl = false;
//端口号
$port = 25;
$fromName = '新订单';        
//邮件发送的间隔时间（秒为单位）
$time = 900;        
//目标邮箱地址
//$tomail="449051368@qq.com";
$tomail = 'lgc.bordeaux@hotmail.com';
