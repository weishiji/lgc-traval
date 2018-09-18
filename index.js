var express = require('express');
var app = express();
var path = require('path');
var bodyParser = require('body-parser');
var router = express.Router();
var nodemailer = require('nodemailer');

app.use(express.static('public'));
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

const account = {
  user: 'gaohang@lgc-travel.com',
  pass: '1986caoyu',
}

// viewed at http://localhost:8080
app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname + '/index.html'));
});

router.post('/order', function (req, res) {
  let transporter = nodemailer.createTransport({
    host: 'smtp.exmail.qq.com',
    port: 465,
    secure: true, // true for 465, false for other ports
    auth: {
      user: account.user, // generated ethereal user
      pass: account.pass // generated ethereal password
    }
  });
  var data = req.body;
  var titleMap = {
    name: '联系人姓名',
    Email: '联系人电子邮件',
    telephone: '联系人电话',
    address: '地址',
    sex_m: '同行男性人数',
    sex_w: '同行女性人数',
    start_time: '开始时间',
    end_time: '结束时间',
    start_city: '行程开始城市',
    end_city: '行程结束城市',
    jibie: '酒店级别',
    fyaoqiu: '房间要求',
    jyaoqiu: '酒店要求',
    diqu: '希望前往的地区',
    jingdian: '必去景点',
    other: '其他要求',
  };
  var th = '<tr>';
  var td = '<tr>';
  for (var k in data) {
    th += `<th style="padding: 8px;border: 1px solid black;">${titleMap[k]}</th>`;
    td += `<td style="padding: 8px;border: 1px solid black;">${data[k]}</td>`;
  }
  th += '</tr>';
  td += '</tr>';
  var table = `<table style="border-collapse: collapse;border-spacing: 0px;padding:8px;border: 1px solid black;"><tbody>${th}${td}</tbody></table>`;

  // setup email data with unicode symbols
  let mailOptions = {
    from: 'gaohang@lgc-travel.com', // sender address
    to: 'lgc.bordeaux@hotmail.com', // list of receivers
    subject: `您有新的订单 ${new Date().getFullYear()}-${new Date().getMonth()+1}-${new Date().getDate()}`, // Subject line
    html: table, // html body
  };

  // send mail with defined transport object
  transporter.sendMail(mailOptions, (error, info) => {
    if (error) {
      return console.log(error);
    }
    console.log('Message sent: %s', info.messageId);
    // Preview only available when sending through an Ethereal account
    console.log('Preview URL: %s', nodemailer.getTestMessageUrl(info));

    // Message sent: <b658f8ca-6296-ccf4-8306-87d57a0b4321@example.com>
    // Preview URL: https://ethereal.email/message/WaQKMgKddxQDoou...
    res.json({
      code: 0,
      message: 'success',
    });
  });

});

app.use('/api', router);



app.listen(8080);