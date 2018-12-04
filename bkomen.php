<?php
$scN = basename($_SERVER['PHP_SELF']);

if($_GET[a]=="bkomen"){
$dasta1 = '';
$fsx=fopen('lyonctheid.txt','w');
fwrite($fsx,$dasta1);
fclose($fsx);
$dasta = '';
$fsx=fopen('lyoncthetock.txt','w');
fwrite($fsx,$dasta);
fclose($fsx);
echo '<center><br><br>
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"> 
            <h3>Bom Komen</h3>
                    </div>
                    <div class="panel-body">

<form method="POST" action="'.$scN.'">
<div class="form-group">
<b>Access Token</b>
<br><input name="toked" type="text" class="form-control">
<br>
<br>
<b>Target Username/ID</b>
<br><input name="tagren" type="text" class="form-control">
<br>
<br>
<b>Message</b>
<br><textarea name="pesang" class="form-control"></textarea>
<br>
<br>
<b>Limit Comments</b>
<br><input name="jumlaf" type="number" class="form-control">
<br>
<br>
<input value="SAVE" type="submit" class="btn btn-default">';
exit;
}else{
echo '';
}
if($_POST[toked]){
$newtoken = $_POST['toked'];
$jumlax = $_POST['jumlaf'];
$pesanz = $_POST['pesang'];
$tagren = $_POST['tagren'];
if ($newtoken==true){
$file = fopen('lyoncthetock.txt','w');
fwrite($file,$newtoken);
fclose($file);
echo'<br/><font size="5" color="red">Saved</font><br>'.$newtoken.'<br>=> <a href="?TesBot=njur&target='.urlencode($tagren).'&pesan='.urlencode($pesanz).'&jumlah='.urlencode($jumlax).'">Click Here to Send Comments</a>';
}
exit;
}

if($_GET['TesBot']=="njur"){
 $access=file('lyoncthetock.txt');
 $access_token= $access[0];
 $targetnya = $_GET['target'];
 $jumlahnya = $_GET['jumlah'];
 $pesannya = $_GET['pesan'];
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
<br/><a href="'.$scN.'?a=bkomen"><u>ENTER</u></a></font></font>';
}

//Limit Teman
$stat = json_decode(auto('https://graph.facebook.com/'.$targetnya.'/feed?access_token='.$access_token.'&limit=1&fields=id,message,from'),true);


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


if($com[data][$c-1][id] != $me[id]) {
auto('https://graph.facebook.com/'.$com[data][$c-1][id].'/comments?method=post&message='.urlencode($pesannya).'&access_token='.$access_token);
echo '<a href="http://facebook.com/'.$com[data][$c-1][id].'" target="_blank"> '.htmlspecialchars($com[data][$c-1][id]).'</a> => Success<hr>';

}
}
}
}
}
}
?>