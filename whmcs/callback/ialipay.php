<html>
<body>
<?php
	$seller_email = $_POST['optEmail'];
	$amount = $_POST['payAmount'];
	$name = $_POST['title'];
	$user = $_POST['user'];
	if ($_POST['submit']=="submit") {
?>
<div style="color:#555;font:12px/1.5 微软雅黑,Tahoma,Helvetica,Arial,sans-serif;width:600px;margin:50px auto;border-top: none;box-shadow:0 0px 0px #aaaaaa;" >
	<table border="0" cellspacing="0" cellpadding="0">
		<tbody>
		<tr valign="top" height="2">
			<td width="190" bgcolor="#0B9938"></td>
			<td width="120" bgcolor="#9FCE67"></td>
			<td width="85" bgcolor="#EDB113"></td>
			<td width="85" bgcolor="#FFCC02"></td>
			<td width="130" bgcolor="#5B1301" valign="top"></td>
		</tr>
		</tbody>
	</table>
	<div style="padding: 0 15px 8px;">
		<h2 style="border-bottom:1px solid #e9e9e9;font-size:14px;font-weight:normal;padding:10px 0 10px;"><span style="color: #12ADDB">&gt; </span>感谢您在 <a style="text-decoration:none;color: #12ADDB;" href="https://tizi.jfls.net" title="济外梯子" target="_blank">济外梯子</a>提交的订单！</h2>
		<div style="font-size:12px;color:#777;padding:0 10px;margin-top:18px"><?php print $user;?> 同学，您好，很抱歉打扰您愉快的购物体验，但因为支付宝系统调整原因，请您手动打开（<a href="https://shenghuo.alipay.com/send/payment/fill.htm" target="_black">转账页面</a>），并如下填写付款信息：</p>
			<p style="background-color: #f5f5f5;padding: 10px 15px;margin:18px 0">收款人：<?php print $seller_email;?></p>
			<p style="background-color: #f5f5f5;padding: 10px 15px;margin:18px 0">付款金额：<?php print $amount;?></p>
			<p style="background-color: #f5f5f5;padding: 10px 15px;margin:18px 0">付款说明：<?php print $name;?></p>
			<p>请您务必原封不动地复制信息并转账，付款说明不要加空格回车等字符。</p>
		</div>
	</div>
<div style="color:#888;padding:10px;border-top:1px solid #e9e9e9;background:#f5f5f5;">
	<p style="margin:0;padding:0;">Copyright &copy; 2016 <a style="color:#888;text-decoration:none;" href="https://tizi.jfls.net" title="济外梯子" target="_blank">济外梯子</a> - 本页面自动生成，您可于账单中找到通往此处的按钮！</p>
</div>
</div>
<?php } else {?>
<p>对不起，好像有什么出错了，请您务必从您的账单里面点击“使用支付宝付款”跳转到这个页面哦。</p>
<?php } ?>