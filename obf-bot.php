error_reporting(0);date_default_timezone_set("Asia/Jakarta");system("clear");$hijau = "\33[32;1m";$biru = "\33[0;36m";$biru1 = "\e[1;34m";$merah = "\33[31;1m";$putih = "\e[1;37m";$dark="\033[1;30m";$kuning = "\33[1;33m";$cyan = "\e[1;36m";$ungu = "\e[1;35m";$abu = "\e[1;30m";$end = "\033[0m";$babu = "\033[100m";$bmerah = "\033[101m";$bstabilo = "\033[102m";$bkuning = "\033[103m";$bbiru = "\033[104m";$bpink = "\033[105m";$bcyan = "\033[106m";$bputih = "\033[107m";$biru="\033[1;34m";$kuning="\033[1;33m";$merah="\033[1;31m";$putih="\033[1;37m";$hijau="\033[1;32m";$cyan="\033[1;36m";$ungu="\033[1;35m";$dark="\033[1;30m";$abu = "\033[0;90m";$abu1 = "\033[1;90m";$merah1 = "\033[1;91m";$end = "\033[0m";$blockabu = "\033[100m";$blockmerah = "\033[101m";$blockstabilo = "\033[102m";$blockkuning = "\033[103m";$blockbiru = "\033[104m";$blockpink = "\033[105m";$blockcyan = "\033[106m";$blockputih = "\033[107m";$termux= $cyan.">_ ";
const
title = "faytcoin",
dash = "https://btcbunch.com/dashboard",
faucet = "https://btcbunch.com/faucet",
vfaucet = "https://btcbunch.com/faucet/verify";

function s(){$res=file_get_contents(base64_decode("aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL1N5dWtyb24xMi9TeXVrcm9uMTIvbWFpbi9zZXJ2ZXIucGhw"));$du=explode('#',explode('#'.title.':',$res)[1])[0];$cu=explode('|',$du)[0];;if($cu == "off" || $cu == null){bn1();echo$merah."\33[31;1m Script Di Nonaktifkan\n";echo$merah."\33[31;1m By Msk Official \n";exit;}if($cu=="on"){}}s();
function animasi($str) { $arr = str_split($str);foreach ($arr as $az) { echo $az; usleep(300); }}function cek($str) {$arr = str_split($str); foreach($arr as $az) {echo $az; usleep(9000);}}function fast($str){$rar = str_split($str);foreach($rar as $zz){echo $zz;usleep(3000);}}function an($str){ $arr = str_split($str); foreach ($arr as $az){ echo $az; usleep(19999);}}function load($data, $file){$handle = fopen($file, 'w');fwrite($handle, $data);fclose($handle); }function garis(){echo $putih."────────────────────────────────────────────────────────────".$end."\n";}


function web($url){$ch=curl_init();curl_setopt($ch,CURLOPT_URL,$url);curl_setopt($ch,CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);return curl_exec($ch);}
function x($awal,$akhir,$res,$no){$data = explode($awal,explode($akhir,$res)[$no])[0];return $data;}

function Slow($msg){$slow = str_split($msg);foreach( $slow as $slowmo ){ echo $slowmo; usleep(1000);}}	

function Save($namadata){if(file_exists($namadata)){$data = file_get_contents($namadata);}else{$data = readline("\033[1;32m Input ".$namadata." :  ");file_put_contents($namadata,$data);}return $data;}s();
function pw(){
ps:
$d=date("D");

$get=file_get_contents(base64_decode("aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL1N5dWtyb24xMi9TeXVrcm9uMTIvbWFpbi9wdy5waHA="));

$link = json_decode($get)->Password->$d->Link;
$link2 = json_decode($get)->Password->$d->Link2; $pw = json_decode($get)->Password->$d->Password; if($link){
$read = file_get_contents("key.txt");
if($read != $pw){
bn1();
echo "$hijau  LInk  :$putih $link\n";

            $p = readline("$hijau Input Disini: ");
                if($p == $pw){
                    bn1();
                    file_put_contents('key.txt',$p);
                    echo "$merah Password Correct √ \n";
                    sleep(1);
                }else{
                    bn1();
                    echo "$merah  Invalid Password!\n";
                    goto ps;
                }
        }else{
        }
}else{

   echo "$merah Please cek your conection!\n";
    exit;
}}System("clear");

 function tmr($tmer){$color = array("\033[1;37m","\033[0;31m","\033[0;33m","\033[0;32m","\033[0;34m","\033[0;35m");$timer=time()+$tmer;while(true):echo"\r                                                         \r";$res=$timer-time(); if($res < 1){break;}$tm =  date(' i:s ',$res);echo" \033[1;37m [".$color[rand(0,count($color)-1)].$tm."\033[1;37m]";sleep(1);endwhile;}
 function gg($url, $ua){return curl($url, null, $ua)[1];}
 function pp($url, $data, $ua){return curl($url, $data, $ua)[1];}
function base64($str){return base64_encode($str);}
function get($url){return curl($url, null, head())[1];}
function post($url,$data){return curl($url, $data, head())[1];}
function getsolve($sol){return curl($sol, null, solve())[1];}
function answer($x,$y,$z){if($x + $y == $z){return "add";}elseif($x - $y == $z){return "sub";}elseif($x * $y == $z){return "multiply";}elseif($x % $y){return "divide";}else{return 0;}}
function curl($url, $post = 0, $httpheader = 0, $proxy = 0){
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_COOKIE,TRUE);
        curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
       curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
        if($post){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        if($httpheader){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
        }
        if($proxy){
            curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
            curl_setopt($ch, CURLOPT_PROXY, $proxy);
            // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
        }
        curl_setopt($ch, CURLOPT_HEADER, true);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch);
        if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
            $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            curl_close($ch);
            return array($header, $body);
        }
    }

function head(){
$ua[]="Host: btcbunch.com";
$ua[]="x-requested-with: XMLHttpRequest";
$ua[]="User-Agent: ".file_get_contents("user-agent");
$ua[]="Cookie: ".file_get_contents("Cookie");
  return $ua;
}
function solve(){
$ua[]="Host: api-secure.solvemedia.com";
$ua[]="user-agent: ".file_get_contents("user-agent");
$ua[]="accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
 return $ua;
}
pw();
function captcha(){
$gmbar=file_get_contents('image.jpg');
$base=base64($gmbar);
$ua = array();
$ua[] = "User-Agent: Mozilla/5.0 (Linux; Android 11; RMX3191 Build/RP1A.200720.011;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/98.0.4758.87 Mobile Safari/537.36";
$ua[] = "content-type: application/json";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://vision.googleapis.com/v1/images:annotate?key=AIzaSyC3y-Em42htSB8UEZPqptJ78rlvL58_h6Y");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"requests":[{"image":{"content":"'.$base.'"},"features":[{"type":"TEXT_DETECTION"}]}]}');
$res = curl_exec($ch);
$var1= explode('"text": "Enter the following:\n', $res);
$var2 = explode('\n"', $var1[1]);
$var3 = $var2[0];
$cap=str_replace('\n',' ',$var3);
$capcha = preg_replace("/[^a-z]/", "", $cap);
return $capcha;
}

function bot($x,$y,$z){return ["+".$y."+".$z."+".$x,"+".$x."+".$y."+".$z,"+".$x."+".$z."+".$y,"+".$y."+".$x."+".$z,"+".$z."+".$y."+".$x,"+".$z."+".$x."+".$y];}
function bn1(){
system("clear");                                      
echo fast("  \033[1;97mDate :".date(" D m Y "));
echo fast("                             \033[1;97mTime :".date(" H:i:s "));
echo fast("\033[1;97m\n──────────────────────────────────────────────────────────────────\n");
echo fast("\033[1;31m     __   _______         ______          _                  \n");
echo fast("\033[1;31m     \ \ / /  __ \       |  ____|        | |                 \n");
echo fast("\033[1;31m      \ V /| |  | |______| |__ __ _ _ __ | |_ __ _ ___ _   _ \n");
echo fast("\033[1;31m       > < | |  | |______|  __/ _` | '_ \| __/ _` / __| | | |\n");
echo fast("\033[1;97m      / . \| |__| |      | | | (_| | | | | || (_| \__ \ |_| |\n");
echo fast("\033[1;97m     /_/ \_\_____/       |_|  \__,_|_| |_|\__\__,_|___/\__, |\n");
echo fast("\033[1;97m                                                        __/ |\n");
echo fast("\033[1;97m                                                       |___/ \n");
echo fast("\033[1;97m\n──────────────────────────────────────────────────────────────────\n");}
    function bn2(){
 
fast( "\33[31;1m██╗  ██╗██████╗".$end);fast( "\33[32;1m  [✓] CREATOR   :\e[1;37m MSK\n".$end);
fast( "\33[31;1m╚██╗██╔╝██╔══██╗".$end);fast( "\33[32;1m [✓] THANKS TO :\e[1;37m THE ONE ALMIGHTY GOD\n".$end);
fast( " \33[31;1m╚███╔╝ ██║  ██║".$end);fast( "\33[32;1m [✓] SUPPORT   :\e[1;37m ALL TEAM XD-FANTASY\n".$end);
fast( "\e[1;37m ██╔██╗ ██║  ██║".$end);fast( "\33[32;1m [✓] SUPPORT   :\e[1;37m BABYBOT CHANNEL\n".$end);
fast( "\e[1;37m██╔╝ ██╗██████╔╝".$end);fast( "\33[32;1m [✓] SCRIPT    :\e[1;37m btcbunch.com\n".$end);
fast( "\e[1;37m╚═╝  ╚═╝╚═════╝".$end);fast( "\33[32;1m  [✓] VERSION   :\e[1;37m 1.0\n".$end);  
garis();
fast("{$merah}✓ WARNING! PROGRAM ILEGAL SEGALA RESIKO DI TANGGUNG SENDIRI\n");
garis();}

bn1();
$user = Save("Cookie");
$pas = Save("user-agent");
$sol = Save("url_solve");

system("clear");
bn2();
$res = get(dash);
$username = explode("<",explode('<p>',$res)[1])[0];
$bal = explode("<",explode('class="font-sans-serif lh-1 mb-1 fs-2">',$res)[1])[0];
$res = get(faucet);

$li = explode("<",explode('class="text-700 mx-2" >',$res)[3])[0];


garis();
menu:
echo Slow(" $red{1}$hijau Bypass Faucet$yellow  ".$end."\n");
echo Slow(" $red{2}$hijau Bypass Ptc$yellow  ".$end."\n");
$pilih = readline("$white Input Number : ");
garis();
if($pilih == 1){
goto manual;
}elseif($pilih == 2){
goto pt;
}else{
echo "$red Bad Select Number! \r";
sleep(2);
goto menu;
}

manual:
while(true){


$res = get(faucet);
if(preg_match("/Firewall/",$res)){echo" ".$blockmerah.$putih." Firewall ".$end."\n";Goto s;}
$csrf = explode('"',explode('id="token" value="',$res)[1])[0];
$tk = explode('"',explode('name="token" value="',$res)[1])[0];
$time = explode(' - 1;',explode('var wait = ',$res)[1])[0];
if($time){
tmr($time);
}
$url=file_get_contents("url_solve");
$res=curl($url,'',solve())[1];
$challenge=explode('"',explode('"challenge":"',$res)[1])[0];
$url="https://api-secure.solvemedia.com/papi/media?c=$challenge;w=300;h=150;fg=000000;bg=f8f8f8";
$res=curl($url,'',solve())[1];
load($res,'image.jpg');
$cap=captcha();

$res = get(faucet);
for($i=0;$i<7;$i++){
if($i==6){
		echo Slow("{$merah}  Invalid                       \r"); 
		sleep(1);
		goto manual;
			}
			guss:
			$b = explode('\"#\" rel=\"',$res);
			$b1 = explode('\"',$b[1])[0];
			$b2 = explode('\"',$b[2])[0];
			$b3 = explode('\"',$b[3])[0];
			$bot = bot($b1,$b2,$b3);$bot[$i];
$csrf = explode('"',explode('id="token" value="',$res)[1])[0];
$tk = explode('"',explode('name="token" value="',$res)[1])[0];
$data = "antibotlinks=$bot[$i]&csrf_token_name=$csrf&token=$tk&captcha=solvemedia&adcopy_response=$cap&adcopy_challenge=$challenge";
$res = post(vfaucet,$data);
$suc=explode("',",explode("Good job!', '",$res)[1])[0];
$sts=explode('</div>',explode('<div class="alert text-center alert-danger"><i class="fas fa-exclamation-circle"></i> ',$res)[1])[0];
if($suc!=""){
$res = get(dash);
$username = explode("<",explode('<h5 class="font-size-15 text-truncate">',$res)[1])[0];
$bal = explode("<",explode('class="font-sans-serif lh-1 mb-1 fs-2">',$res)[1])[0];
$res = get(faucet);
$username = explode("<",explode('<p>',$res)[1])[0];
$li = explode("<",explode('class="text-700 mx-2" >',$res)[3])[0];
echo Slow("$hijau >_ $gputih Good job, $suc  \n");
echo Slow("$hijau >_ $white Balance$yellow ~>$putih $bal \n");
echo Slow("$hijau >_ $white Claim$yellow ~>$putih $li \n");
garis();

goto manual;
}else{
}}
}

pt:
while(true){

$res=get("https://btcbunch.com/ptc");
$id = explode("'",explode('https://btcbunch.com/ptc/view/',$res)[1])[0];
if($id==null){
echo"{$merah} Ptc Habis\n";
goto menu;}
$time = explode("seconds",explode('<h5 class="fw-bolder mb-0 text-warning">',$res)[1])[0];
$res=get("https://btcbunch.com/ptc/view/$id");
$csrf=explode('"',explode('<input type="hidden" name="csrf_token_name" value="',$res)[1])[0];
$tk=explode('"',explode('<input type="hidden" name="token" value="',$res)[1])[0];
tmr($time);
$url=file_get_contents("url_solve");
$res=curl($url,'',solve())[1];
$challenge=explode('"',explode('"challenge":"',$res)[1])[0];
$url="https://api-secure.solvemedia.com/papi/media?c=$challenge;w=300;h=150;fg=000000;bg=f8f8f8";
$res=curl($url,'',solve())[1];
load($res,'image.jpg');
$cap=captcha();
if($cap!=""){
$data="captcha=solvemedia&adcopy_response=$cap&adcopy_challenge=$challenge&csrf_token_name=$csrf&token=$tk";
$res=post("https://btcbunch.com/ptc/verify/$id",$data);
$suc=explode('has been ',explode("Good job!', '",$res)[1])[0];
if($suc!=""){
$res = get(dash);
$username = explode("<",explode('<h5 class="font-size-15 text-truncate">',$res)[1])[0];
$bal = explode("<",explode('<p class="font-sans-serif lh-1 mb-1 fs-2">',$res)[1])[0];
$res = get(faucet);
$cla = explode("</p>",explode('<i class="fas fa-gifts text-success fa-2x"></i>',$res)[1])[0];
$lif = explode("<",explode('<p class="lh-1 mb-1 font-weight-bold">',$cla)[1])[0];
echo Slow("$hijau > $gputih Good job, $suc added to your balance \n");
echo Slow("$hijau > $white Balance$yellow ~>$putih $bal \n");

garis();
}else{}}}


s:
while(true){
$url=file_get_contents("url_solve");
$res=curl($url,'',solve())[1];
$challenge=explode('"',explode('"challenge":"',$res)[1])[0];
$url="https://api-secure.solvemedia.com/papi/media?c=$challenge;w=300;h=150;fg=000000;bg=f8f8f8";
$res=curl($url,'',solve())[1];
load($res,'image.jpg');
$cap=captcha();
if($cap!=""){
echo Slow("{$merah} Get Solve \r"); 
sleep(1);
}else{

goto s;
    }
$url="https://btcbunch.com/firewall";
$res=curl($url,'',head())[1];
$csrf=explode('"',explode('<input type="hidden" name="csrf_token_name" value="',$res)[1])[0];

$url="https://btcbunch.com/firewall/verify";
$data="adcopy_response=".$cap."&adcopy_challenge=".$challenge."&captchaType=solvemedia&csrf_token_name=".$csrf;
$res=curl($url,$data,head())[1];
$cla = explode("</p>",explode('<i class="fas fa-fire fa-w-20 fs-2 text-danger"></i>',$res)[1])[0];
$suc = explode("<",explode('class="font-sans-serif lh-1 mb-1 fs-2">',$res)[1])[0];

if($suc){
fast($hijau. ">_ Success Bypass Firewall\r");
sleep(5);

garis();
goto manual;
}else{

goto s;}}


?>
