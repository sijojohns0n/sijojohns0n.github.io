<html>
<head> <title>Technical Debayan</title>
<meta name="viewport" content="width=device-width"><style>
.hr-19 {
  border: none;
  height: 10px;
  background: linear-gradient(-135deg, #fff 5px, transparent 0) 0 5px, linear-gradient(135deg, #fff 5px, #8c8c8c 0) 0 5px;
  background-color: #fff;
  background-position: left bottom;
  background-repeat: repeat-x;
  background-size: 10px 10px;
}
input[type=text] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}
input[type=text]:placeholder {
  color: #cccccc;
}input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}
input[type=button], input[type=submit], input[type=reset]  {
  background-color: #FF0040;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}


</style></head><title></title><body><center><b><center>
<html><head>
<meta name="viewport" content="width=device-width">
<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
</head>
<body style='font-family: Yatra One;'>
 </style>
 </head>
 <title>Technical Debayan</title>
 <body>
 <center>
     <?php
error_reporting(0);



if(isset($_GET['submit'])){
	#header('refresh: 2');
	$odata=$_GET['odata'];
	$timer=$_GET['timer'];
  function rando($length) {
    $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function RandomNumber($length){
  $str="";
  for($i=0;$i<$length;$i++){
  $str.=mt_rand(0,9);
  }
  return $str;
  }
  $x8=rando(8);
  $x4=rando(4);
  $y4=rando(4);
  $z4=rando(4);
  $x12=rando(12);

  $encryption_key = 'm-pt2$yGcDD2BB=$b4uvZxt&y2G4y-RF';

  $data1 = openssl_decrypt($odata, 'aes-256-cbc', $encryption_key);

  $data1=json_decode($data1,true);

  
  $app_signature=$data1['app_signature'];
  $user_pkx=$data1['user_pk'];
  $x_version=$data1['version_code'];
  $user_token=$data1['user_token'];
 $app_public_key=$data1['app_public_key'];
 
 $cd=$_GET['cd'];
$market_name=$data1['market_name'];

 $ver='11';

 $ui=$x8.'-'.$x4.'-'.$y4.'-'.$z4.'-'.$x12;

 
 

 $secure=$ui.'.a092777d0ff271fa54cf11a08be13732f4165969c4a76f9d15bfe580775a1051828cb013b1f7f87df081a3a20cd390741ee5b863c360e3e1bb8d331a1bbbbbe2';//ok
 $secure=sha1($secure);

 $lk=rando(6);
$lk='%%'.$lk;


 $pm=$lk.$ver;
 $pm=md5($pm);

 $xkey=$user_token.$ver;
 $xkey=md5($xkey);

 $data3='{"app_signature":"'.$app_signature.'","language_code":"en","user_pk":"'.$user_pkx.'","requested_with":"fasaroid.fira.com","version_code":"'.$x_version.'","action":"'.$cd.'","app_public_key":"'.$app_public_key.'","user_token":"'.$user_token.'","market_name":"'.$market_name.'"}';


 $odata3 = openssl_encrypt($data3, 'aes-256-cbc', $encryption_key);


 $url1="http://firafollower.xyz/api/v1/orders.php";


 
 
 
 $bhorder=$app_signature.'en'.$user_pkx.'fasaroid.fira.com8'.$cd.$app_public_key.$user_token.$market_name;
 $bhorder=sha1($bhorder);
 $psl='app_signaturelanguage_codeuser_pkrequested_withversion_codeactionapp_public_keyuser_tokenpkorder_idmarket_name';
 $psl=md5($psl);

 $pso='app_signaturelanguage_codeuser_pkrequested_withversion_codeactionapp_public_keyuser_tokenmarket_name';
 $pso=md5($pso);
$headers1=['X-Market: '.$market_name.'', 
'ps: '.$pso, 
'X-Requested-With: ZmFzYXJvaWQuZmlyYS5jb20=', 
'bh: '.$bhorder, 
'X-Key: '.$xkey, 
'X-Lan: en', 
'X-Version: '.$x_version, 
'secure: '.$secure, 
'ui: '.$ui, 
'X-Access: fira', 
'X-Version-Build: 1.5', 
'pm: '.$pm, 
'lk: '.$lk, 
'Content-Type: application/json; charset=utf-8', 
'User-Agent: Dalvik/2.1.0 (Linux; U; Android 10)', 
'Host: firafollower.xyz', 
'Connection: Keep-Alive', 
'Accept-Encoding: gzip'];



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$odata3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $output1= curl_exec ($ch);

curl_close ($ch);
 $output1=gzdecode($output1);
  $output1=openssl_decrypt($output1, 'aes-256-cbc', $encryption_key);

$json2=json_decode($output1,true);

$id=$json2['data'][0]['id'];
$user_pk=$json2['data'][0]['user_pk'];






$bh=$app_signature.'en'.$user_pkx.'fasaroid.fira.com8'.$cd.$app_public_key.$user_token.$user_pk.$id.$market_name;
 $bh=sha1($bh);

 $data3='{"app_signature":"'.$app_signature.'","language_code":"en","user_pk":"'.$user_pkx.'","requested_with":"fasaroid.fira.com","version_code":"'.$x_version.'","action":"'.$cd.'","app_public_key":"'.$app_public_key.'","user_token":"'.$user_token.'","pk":"'.$user_pk.'","order_id":"'.$id.'","market_name":"'.$market_name.'"}';



$url2='http://firafollower.xyz/api/v1/coin.php';

$odata3 = openssl_encrypt($data3, 'aes-256-cbc', $encryption_key);

$headers2=['X-Market: '.$market_name.'', 
'ps: '.$psl, 
'X-Requested-With: ZmFzYXJvaWQuZmlyYS5jb20=', 
'bh: '.$bh, 
'X-Key: '.$xkey, 
'X-Lan: en', 
'X-Version: '.$x_version, 
'secure: '.$secure, 
'ui: '.$ui, 
'X-Access: fira', 
'X-Version-Build: 1.5', 
'pm: '.$pm, 
'lk: '.$lk, 
'Content-Type: application/json; charset=utf-8', 
'User-Agent: Dalvik/2.1.0 (Linux; U; Android 10)', 
'Host: firafollower.xyz', 
'Connection: Keep-Alive', 
'Accept-Encoding: gzip'];



sleep($timer);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url2);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$odata3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_HTTPHEADER,$headers2);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$output2= curl_exec ($ch);

curl_close ($ch);
 $output2=gzdecode($output2);
$output2=openssl_decrypt($output2, 'aes-256-cbc', $encryption_key);





echo"<font color='red' size='5'><bold><hr class='hr-19'>Fira Follower<hr class='hr-19'><bold>
<div class='success'><hr class='style5'>$output2<hr class='style5'><br></div>";





  echo '<meta http-equiv="refresh" content="0">';

	    }

        


	if(!isset($_GET['submit'])){
echo"<form action='' method='get'>
<font color='red' size='5'><bold><hr class='hr-19'>Fira Follower<hr class='hr-19'><bold>
<center> <select name='timer'>
<option value='1'>Slow-1sec</option>
<option value='2'>Slow-2sec</option>
<option value='3'>Slow-3sec</option>
<option value='4'>Slow-4sec</option>
<option value='5'>Slow-5sec</option>
<option value='6'>Slow-6sec</option>
<option value='7'>Slow-7sec</option>
<option value='8'>Slow-8sec</option>
<option value='9'>Slow-9sec</option>
</select> </center>
<center> <select name='cd'>
<option value='follow'>FOLLOW Bypass</option>
<option value='like'>LIKE Bypass</option>
<option value='comment'>COMMENT Bypass</option>
</select> </center>
<input type='text' name='odata'  class='text' placeholder='Enter Your order data' required><br><br>";
echo "<input type='submit' class='submit' name='submit' value='submit'>";
}
?>
 
<div id='formFooter'>
<center><script type="text/javascript">(function() {var script=document.createElement("script");script.type="text/javascript";script.async =true;script.src="//telegram.im/widget-button/index.php?id=@technical_debayan";document.getElementsByTagName("head")[0].appendChild(script);})();</script>
<a href="tg://resolve?domain=technical_debayan" target="_blank" class="telegramim_button telegramim_shadow telegramim_pulse" style="font-size:30px;width:399px;background:#84ff00;box-shadow:1px 1px 5px #0b5394;color:#6f00ff;border-radius:100px;" title="Join Now"><i></i> join my channel to get more script and bypass tricks<small><span class='telegramim_count' data-for='@technical_debayan'>...</span> participants</small></a>
</center>
<p>
      <div id='formFooter'>
<center><a href='https://www.youtube.com/channel/UCIf6vwv-_eRS1-YYXFaqFsQ' target='_blank'><img border='0' data-original-height='118' data-original-width='426' height='88' src='https://lh3.googleusercontent.com/-WV8Zar6fKtY/XY4Yv78tX3I/AAAAAAAAAJc/QesUabR4vjArNZbjmjtx9R0I_HIi_ngzwCLcBGAsYHQ/h230/clipartwiki.com-clothespin-clipart-png-1611333.png' width='200' /></a></div></center>
</center>
<p>

