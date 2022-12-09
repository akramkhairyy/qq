<?php
function bot2($method, $datas = []) {
	$token = file_get_contents("Token");
	$url = "https://api.telegram.org/bot$token/" . $method;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$res = curl_exec($ch);
	curl_close($ch);
	return json_decode($res, true);
} 
function uuid(){
    $uuid = sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff)
    );
    return $uuid;
}
function useragent() {
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
$useragent = useragent();
$uuid = uuid();
$name = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'),1,6);
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_POST => 1,
CURLOPT_URL => 'https://api.internal.temp-mail.io/api/v3/email/new',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => ['User-Agent: '.$useragent],
CURLOPT_POSTFIELDS => "name=$name&domain=greencafe24.com",
CURLOPT_ENCODING => "gzip"
));
$result = curl_exec($ch);
$result = json_decode($result,true);
$email = $result['email'];
print("Done Create Email : $email\n");
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_POST => 1,
CURLOPT_URL => 'https://www.instagram.com/accounts/check_email/',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => array('authority: www.instagram.com',
'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96"',
'x-ig-app-id: 1217981644879628',
'x-ig-www-claim: hmac.AR3YttfYQWMo4aCfHJfmrEMByM6aqjmE8P-5m67nwiMgJkYH',
'sec-ch-ua-mobile: ?1',
'x-instagram-ajax: d82a8b39058f',
'content-type: application/x-www-form-urlencoded',
'accept: */*',
'x-requested-with: XMLHttpRequest',
'x-asbd-id: 198387',
'user-agent: Mozilla/5.0 (Linux; Android 11; SM-A217F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.46 Mobile Safari/537.36',
'x-csrftoken: j96SeMj4NKEfNJKJy90QCVtdzzJoxsW9',
'sec-ch-ua-platform: "Android"',
'origin: https://www.instagram.com',
'sec-fetch-site: same-origin',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'referer: https://www.instagram.com/accounts/signup/email',
'accept-language: ar-AE,ar;q=0.9,en-US;q=0.8,en;q=0.7,de-DE;q=0.6,de;q=0.5',
'cookie: mid='.$uuid.'; ig_did=BEB7DE0C-FD7B-4ABB-A6C1-8A522CEA34DC; ig_nrcb=1; rur="ODN\05451273161851\0541674635965:01f749259149d7fc638b9dbf998ece53c89d114a9b04a016ba9e68aaf8f80789e73c4571"; csrftoken=j96SeMj4NKEfNJKJy90QCVtdzzJoxsW9'),
CURLOPT_POSTFIELDS => 'email='.urlencode($email),
CURLOPT_ENCODING => "gzip"
));
$result = curl_exec($ch);
if(strpos($result,'"invalid_email"')){
print("Failed To Register Email\n");
} elseif(strpos($result,'"email_is_taken"')){
print("Failed To Register Email\n");
} else {
print("Done Register Email\n");
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_POST => 1,
CURLOPT_URL => 'https://i.instagram.com/api/v1/accounts/send_verify_email/',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => array(
'authority: i.instagram.com',
'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96"',
'x-ig-app-id: 1217981644879628',
'x-ig-www-claim: hmac.AR3YttfYQWMo4aCfHJfmrEMByM6aqjmE8P-5m67nwiMgJkYH',
'sec-ch-ua-mobile: ?1',
'x-instagram-ajax: d82a8b39058f',
'content-type: application/x-www-form-urlencoded',
'accept: */*',
'user-agent: Mozilla/5.0 (Linux; Android 11; SM-A217F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.46 Mobile Safari/537.36',
'x-asbd-id: 198387',
'x-csrftoken: j96SeMj4NKEfNJKJy90QCVtdzzJoxsW9',
'sec-ch-ua-platform: "Android"',
'origin: https://www.instagram.com',
'sec-fetch-site: same-site',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'referer: https://www.instagram.com/',
'accept-language: ar-AE,ar;q=0.9,en-US;q=0.8,en;q=0.7,de-DE;q=0.6,de;q=0.5',
'cookie: mid='.$uuid.'; ig_did=BEB7DE0C-FD7B-4ABB-A6C1-8A522CEA34DC; ig_nrcb=1; rur="ODN\05451273161851\0541674635965:01f749259149d7fc638b9dbf998ece53c89d114a9b04a016ba9e68aaf8f80789e73c4571"; csrftoken=j96SeMj4NKEfNJKJy90QCVtdzzJoxsW9'),
CURLOPT_POSTFIELDS => 'device_id='.$uuid.'&email='.$email,
CURLOPT_ENCODING => "gzip"
));
$result = json_decode(curl_exec($ch),true);
print("Plz Wait A Few Seconds To Get Code\n");
while(true){
$msg = file_get_contents('https://api.internal.temp-mail.io/api/v3/email/'.$email.'/messages');
if(!strpos($msg,'is your Instagram code')){
$msg = file_get_contents('https://api.internal.temp-mail.io/api/v3/email/'.$email.'/messages');
} else {
$msg = json_decode(file_get_contents('https://api.internal.temp-mail.io/api/v3/email/'.$email.'/messages'),true);
$subject = $msg[0]['subject'];
$code = explode(' is your Instagram code',$subject)[0];
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_POST => 1,
CURLOPT_URL => 'https://i.instagram.com/api/v1/accounts/check_confirmation_code/',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => array(
'authority: i.instagram.com',
'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96"',
'x-ig-app-id: 1217981644879628',
'x-ig-www-claim: hmac.AR3YttfYQWMo4aCfHJfmrEMByM6aqjmE8P-5m67nwiMgJkYH',
'sec-ch-ua-mobile: ?1',
'x-instagram-ajax: d82a8b39058f',
'content-type: application/x-www-form-urlencoded',
'accept: */*',
'user-agent: Mozilla/5.0 (Linux; Android 11; SM-A217F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.46 Mobile Safari/537.36',
'x-asbd-id: 198387',
'x-csrftoken: j96SeMj4NKEfNJKJy90QCVtdzzJoxsW9',
'sec-ch-ua-platform: "Android"',
'origin: https://www.instagram.com',
'sec-fetch-site: same-site',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'referer: https://www.instagram.com/',
'accept-language: ar-AE,ar;q=0.9,en-US;q=0.8,en;q=0.7,de-DE;q=0.6,de;q=0.5',
'cookie: mid='.$uuid.'; ig_did=BEB7DE0C-FD7B-4ABB-A6C1-8A522CEA34DC; ig_nrcb=1; rur="ODN\05451273161851\0541674635965:01f749259149d7fc638b9dbf998ece53c89d114a9b04a016ba9e68aaf8f80789e73c4571"; csrftoken=j96SeMj4NKEfNJKJy90QCVtdzzJoxsW9'),
CURLOPT_POSTFIELDS => 'code='.$code.'&device_id='.$uuid.'&email='.$email,
CURLOPT_ENCODING => "gzip"
));
$result = curl_exec($ch);
if(strpos($result,'"invalid_nonce"')){
print("Failed To Get Code !\n");
exit();
} else {
print("Done Get Code : $code, Plz Wait To Register\n");
$sign_code = json_decode($result,true);
$signup_code = $sign_code['signup_code'];
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_POST => 1,
CURLOPT_URL => 'https://www.instagram.com/web/consent/check_age_eligibility/',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => array('authority: www.instagram.com',
'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96"',
'x-ig-app-id: 1217981644879628',
'x-ig-www-claim: 0',
'sec-ch-ua-mobile: ?1',
'x-instagram-ajax: d82a8b39058f',
'content-type: application/x-www-form-urlencoded',
'accept: */*',
'x-requested-with: XMLHttpRequest',
'x-asbd-id: 198387',
'user-agent: Mozilla/5.0 (Linux; Android 11; SM-A217F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.46 Mobile Safari/537.36',
'x-csrftoken: UKmDDrtCDo3XIPWf0PUE2MVHwcokkDat',
'sec-ch-ua-platform: "Android"',
'origin: https://www.instagram.com',
'sec-fetch-site: same-origin',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'referer: https://www.instagram.com/accounts/signup/birthday',
'accept-language: ar-AE,ar;q=0.9,en-US;q=0.8,en;q=0.7,de-DE;q=0.6,de;q=0.5',
'cookie: mid='.$uuid.'; ig_did=BEB7DE0C-FD7B-4ABB-A6C1-8A522CEA34DC; ig_nrcb=1; csrftoken=UKmDDrtCDo3XIPWf0PUE2MVHwcokkDat; ig_gdpr_signup=%7B%22count%22%3A1%2C%22timestamp%22%3A1643112064565%7D'),
CURLOPT_POSTFIELDS => 'day=20&month=11&year=1996',
CURLOPT_ENCODING => "gzip"
));
$result = curl_exec($ch);
$password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'),1,8);
$username = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'),1,7);
$first_name = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'),1,6);
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_POST => 1,
CURLOPT_URL => 'https://www.instagram.com/accounts/web_create_ajax/',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => array('authority: www.instagram.com',
'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96"',
'x-ig-app-id: 1217981644879628',
'x-ig-www-claim: hmac.AR3v83slgpGfIK_bEpuCItxMgBy1y426AcqAisb9UaZX6nbd',
'sec-ch-ua-mobile: ?1',
'x-instagram-ajax: 31da6d1b025b',
'content-type: application/x-www-form-urlencoded',
'accept: */*',
'x-requested-with: XMLHttpRequest',
'x-asbd-id: 198387',
'user-agent: Mozilla/5.0 (Linux; Android 11; SM-A217F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.46 Mobile Safari/537.36',
'x-csrftoken: QCaVNN83zI2xvZvoocMsfHqEJSlsdjfU',
'sec-ch-ua-platform: "Android"',
'origin: https://www.instagram.com',
'sec-fetch-site: same-origin',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'referer: https://www.instagram.com/accounts/signup/username',
'accept-language: ar-AE,ar;q=0.9,en-US;q=0.8,en;q=0.7,de-DE;q=0.6,de;q=0.5',
'cookie: mid='.$uuid.'; ig_did=BEB7DE0C-FD7B-4ABB-A6C1-8A522CEA34DC; ig_nrcb=1; rur="CLN\05451297125343\0541674684111:01f7f242288bdab03791a265216076ac9b1703382c58fbe8d76e9186ccfd387e1ae63913"; csrftoken=QCaVNN83zI2xvZvoocMsfHqEJSlsdjfU'),
CURLOPT_POSTFIELDS => 'enc_password=#PWD_INSTAGRAM_BROWSER:0:'.time().':'.$password.'&email='.$email.'&username='.$username.'&first_name='.$first_name.'&month=10&day=20&year=1997&client_id='.$uuid.'&seamless_login_enabled=1&tos_version=row&force_sign_up_code='.$signup_code,
CURLOPT_ENCODING => "gzip"
));
$result = curl_exec($ch);
$result = json_decode($result,true);
$account_created = $result['account_created'];
if($account_created == false){
print("Failed To Create ×\n");
print("Done Send Info To Bot √\n");
$id = file_get_contents("id");
bot2('sendMessage', [
'chat_id' => $id ,
'text'=>"Does Not Success ❌.
— — — — — —
- First Name :- *$first_name*
- Email :- $email
- Username :- `$username`
- Password :- `$password`
— — — — — —

", 
]);
exit();
} else {
$user_id = $result['user_id'];
print("Done Create Account √\n");
print("Done Send Info To Bot √\n");
$id = file_get_contents("id");
bot2('sendMessage', [
'chat_id' => $id,
'text'=>"Done Here Your Account ✅.
— — — — — —
- First Name :- *$first_name*
- Email :- $email
- Username :- `$username`
- Password :- `$password`
- User Id :- $user_id
— — — — — —

", 
]); 
exit();
}
}
}
}
}
?>