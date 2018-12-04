<?php
$scN = basename($_SERVER['PHP_SELF']);

if($_GET[a]=="eRYuij"){
$dasta1 = '';
$fsx=fopen('lyonctheid.txt','w');
fwrite($fsx,$dasta1);
fclose($fsx);
$dasta = '';
$fsx=fopen('lyoncthetock.txt','w');
fwrite($fsx,$dasta);
fclose($fsx);
echo '
<center>
<br><br>
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"> 
            <h3>Bom Like Beranda</h3>
                    </div>
                    <div class="panel-body">

<form method="POST" action="'.$scN.'">
<div class="form-group">
<b>Access Token</b>
<br><input name="token" type="text" class="form-control">
<br>
<br>
<b>Target Username/ID</b>
<br><input name="target" type="text" class="form-control">
<br>
<br>
<b>Limit Likes</b>
<br><input name="jumlah" type="number" class="form-control">
<br>
<br>
<input value="SAVE" type="submit" class="btn btn-default">';
exit;
}elseif($_GET[a]=="poss"){
$dasta1 = '';
$fsx=fopen('lyonctheid.txt','w');
fwrite($fsx,$dasta1);
fclose($fsx);
$dasta = '';
$fsx=fopen('lyoncthetock.txt','w');
fwrite($fsx,$dasta);
fclose($fsx);
echo '
<center>
<br><br>
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"> 
            <h3>Auto Post Group</h3>
                    </div>
                    <div class="panel-body">
<form method="POST" action="'.$scN.'">
<div class="form-group">
<b>Access Token</b>
<br><input name="toxen" type="text" class="form-control">
<br>
<br>
<b>Limit Groups</b>
<br><input name="jumlaz" type="number" class="form-control">
<br>
<br>
<b>Message</b>
<br><textarea name="pesan" class="form-control"></textarea>
<br>
<br>
<input value="SAVE" type="submit" class="btn btn-default">';
exit;
}else{
echo '';
}
if($_POST[token]){
$newtoken = $_POST['token'];
$targex = $_POST['target'];
$jumlax = $_POST['jumlah'];
if ($newtoken==true){
$file = fopen('lyoncthetock.txt','w');
fwrite($file,$newtoken);
fclose($file);
echo'<br/><font size="5" color="red">Saved</font><br>'.$newtoken.'<br>=> <a href="?TesBot=njer&target='.urlencode($targex).'&jumlah='.urlencode($jumlax).'">Click Here to Send Likes</a>';
}
exit;
}
if($_POST[toxen]){
$newtoken = $_POST['toxen'];
$pesax = $_POST['pesan'];
$jumlaz = $_POST['jumlaz'];
if ($newtoken==true){
$file = fopen('lyoncthetock.txt','w');
fwrite($file,$newtoken);
fclose($file);
echo'<br/><font size="5" color="red">Saved</font><br>'.$newtoken.'<br>=> <a href="?TesBot=njar&pesan='.urlencode($pesax).'&jumlah='.urlencode($jumlaz).'">Click Here to Send Posts</a>';
}
exit;
}

if($_GET['TesBot']=="njer"){
 $access=file('lyoncthetock.txt');
 $access_token= $access[0];
 $targetnya = $_GET['target'];
 $jumlahnya = $_GET['jumlah'];
$me = json_decode(auto('https://graph.facebook.com/me?access_token='.$access_token.'&fields=id'),true);
if(!empty($me[id])){
echo '<hr/>
<b>BOT ACTIVE</b>
<hr/><hr/>';
$gentime = microtime(); 
   $gentime = explode(' ',$gentime); 
   $gentime =  $gentime[0]; 
   $pg_end = $gentime; 
   $totaltime = ($pg_end - $pg_start); 
   $showtime = number_format($totaltime, 1, '.', ''); 

 }else{ echo'<br/><font color="red"><font size="5">Wrong Token or Expired
<br/><a href="'.$scN.'?a=eRYuij"><u>ENTER</u></a></font></font>';
}

//Limit Teman
$stat = json_decode(auto('https://graph.facebook.com/me/home?fields=id,from&access_token='.$access_token.'&offset=1&limit=1'),true);


$log = json_encode(file('lyonctheid.txt'));
for($i=1;$i<=count($stat[data]);$i++){

//Limit Like

$com = json_decode(auto('https://graph.facebook.com/'.$targetnya.'/feed?access_token='.$access_token.'&limit='.$jumlahnya.'&fields=id,message,from'),true);

if(count($com[data]) > 0){
for($c=1;$c<=count($com[data]);$c++){
$dat = explode($com[data][$c-1][id],$log);
if(count($dat) > 1){
echo 'Done<br/>';
}else{
$logx = $com[data][$c-1][id].'__';
$logy = fopen('lyonctheid.txt','w');
fwrite($logy,$logx);
fclose($logy);


if($com[data][$c-1][from][id] != $me[id]) {
auto('https://graph.facebook.com/'.$com[data][$c-1][id].'/likes?access_token='.$access_token.'&method=post');
echo '<a href="http://facebook.com/'.$com[data][$c-1][id].'" target="_blank"> '.htmlspecialchars($com[data][$c-1][id]).'</a> => Success<hr>';

}
}
}
}
}
}elseif($_GET['TesBot']=="njar"){
 $access=file('lyoncthetock.txt');
 $access_token= $access[0];
 $pesannya = $_GET['pesan'];
 $jumlahnya = $_GET['jumlah'];
$me = json_decode(auto('https://graph.facebook.com/me?access_token='.$access_token.'&fields=id'),true);
if(!empty($me[id])){
echo '<hr/>
<b>BOT ACTIVE</b>
<hr/><hr/>';
$gentime = microtime(); 
   $gentime = explode(' ',$gentime); 
   $gentime =  $gentime[0]; 
   $pg_end = $gentime; 
   $totaltime = ($pg_end - $pg_start); 
   $showtime = number_format($totaltime, 1, '.', ''); 

 }else{ echo'<br/><font color="red"><font size="5">Wrong Token or Expired
<br/><a href="'.$scN.'?a=poss"><u>ENTER</u></a></font></font>';
}

//Limit X
$stat = json_decode(auto('https://graph.facebook.com/me/groups?fields=id,name&access_token='.$access_token.'&offset=1&limit=1'),true);


$log = json_encode(file('lyonctheid.txt'));
for($i=1;$i<=count($stat[data]);$i++){

//Limit Groups

$com = json_decode(auto('https://graph.facebook.com/me/groups?fields=id,name&access_token='.$access_token.'&offset=1&limit='.$jumlahnya),true);

if(count($com[data]) > 0){
for($d=1;$d<=count($com[data]);$d++){
$dat = explode($com[data][$d-1][id],$log);
if(count($dat) > 1){
echo 'Done<br/>';
}else{
$logx = $com[data][$d-1][id].'__';
$logy = fopen('lyonctheid.txt','w');
fwrite($logy,$logx);
fclose($logy);


if($com[data][$d-1][id] != $me[id]) {
auto('https://graph.facebook.com/'.$com[data][$d-1][id].'/feed?access_token='.$access_token.'&method=post&message='.urlencode($pesannya));
echo '<a href="http://facebook.com/'.$com[data][$d-1][id].'" target="_blank"> '.htmlspecialchars($com[data][$d-1][name]).'</a> => Success<hr>';

}
}
}
}
}
}

function auto($url){
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl);
return $ch;
}

function getData($xurl){
     $xcx=curl_init();
     curl_setopt($xcx,CURLOPT_URL,$xurl);
     curl_setopt($xcx,CURLOPT_RETURNTRANSFER,1);
     curl_setopt($xcx, CURLOPT_COOKIEFILE,'coker_log');
     $xch = curl_exec($xcx);
     curl_close($xcx);
     return $xch; 
 }

?>