<?php
//$prex         = "whmcs";        //订单描述前置标记
//$security_code   = "";        //安全检验码
//$seller_email    = "";        //卖家支付宝帐户
function alipaypersonal_config() {
    $configarray = array(
        "FriendlyName"  => array(
            "Type"  => "System",
            "Value" => "支付宝收款接口·改"
        ),
        "seller_email"  => array(
            "FriendlyName" => "卖家支付宝帐户",
            "Type"         => "text",
            "Size"         => "32",
        ),
        "security_code" => array(
            "FriendlyName" => "安全检验码",
            "Type"         => "text",
            "Size"         => "32",
        ),
    );

    return $configarray;
}

function alipaypersonal_form($params) {

    # Invoice Variables
    $systemurl = $params['systemurl'];
    $invoiceid = $params['invoiceid'];
    $amount    = $params['amount']; # Format: ##.##
	$user      = $params['clientdetails']['firstname']
    $seller_email = $params['seller_email'];
    $name      = 'ijflstizi_' . $invoiceid;
    $form_html = '<form accept-charset="GBK" id="alipaysubmit" name="alipaysubmit" action="/modules/gateways/callback/ialipay.php" method="POST">
		<input type="hidden" name="optEmail" value="' . $seller_email. '"/>
		<input type="hidden" name="payAmount" value="' . $amount . '"/>
		<input type="hidden" name="title" value="' . $name . '"/>
		<input type="hidden" name="user" value="' . $user . '"/>
		<input type="hidden" value="submit" value="submit">
	</form>';
    $img       = $systemurl . "/modules/gateways/callback/pay-with-alipay.png";
    $code      = $form_html . '<a href="#" onclick="alipaypersonal_submit();"><img style="width: 152px;" src="' . $img . '" alt="点击使用支付宝支付"></a>';
    $script     = '<script language="javascript">
                    function alipaypersonal_submit(){
                        document.charset="GBK";
                        document.getElementById(\'alipaysubmit\').submit();
                    }
                 </script>';

     $code .= $script;
    return $code;
}

function alipaypersonal_link($params) {
    return alipaypersonal_form($params);
}

?>