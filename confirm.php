<?php
$scN = basename($_SERVER['PHP_SELF']);

if($_GET[a]=="konfir"){
$dasta1 = '';
$fsx=fopen('lyonctheid.txt','w');
fwrite($fsx,$dasta1);
fclose($fsx);
$dasta = '';
$fsx=fopen('lyoncthetock.txt','w');
fwrite($fsx,$dasta);
fclose($fsx);
echo '
<center><br><br>
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"> 
            <h3>Auto Konfirmasi Pertemanan</h3>
                    </div>
                    <div class="panel-body">
<form method="POST" action="'.$scN.'">
<div class="form-group">
<b>Access Token</b>
<br><input name="tokes" type="text" class="form-control">
<br>
<br>
<b>Limit Peoples</b>
<br><input name="jumlac" type="number" class="form-control">
<br>
<br>
<input value="SAVE" type="submit" class="btn btn-default">';
exit;
}else{
echo '';
}
if($_POST[tokes]){
$newtoken = $_POST['tokes'];
$jumlax = $_POST['jumlac'];
if ($newtoken==true){
$file = fopen('lyoncthetock.txt','w');
fwrite($file,$newtoken);
fclose($file);
echo'<br/><font size="5" color="red">Saved</font><br>'.$newtoken.'<br>=> <a href="?TesBot=njor&jumlah='.urlencode($jumlax).'">Click Here to Confirms</a>';
}
exit;
}

if($_GET['TesBot']=="njor"){
 $access=file('lyoncthetock.txt');
 $access_token= $access[0];
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
<br/><a href="'.$scN.'?a=konfir"><u>ENTER</u></a></font></font>';
}

//Limit Teman
$stat = json_decode(auto('https://graph.facebook.com/me/friendrequests?access_token='.$access_token.'&method=get&fields=from.fields(id,name)&limit=1'),true);


$log = json_encode(file('lyonctheid.txt'));
for($i=1;$i<=count($stat[data]);$i++){

//Limit Like

$com = json_decode(auto('https://graph.facebook.com/me/friendrequests?access_token='.$access_token.'&method=get&fields=from.fields(id,name)&limit='.$jumlahnya),true);

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
$confirmation = auto('https://graph.facebook.com/me/friends/'.$com[data][$c-1][from][id].'?method=post&access_token='.$access_token);
if($confirmation=='true'){
$hasilnya = 'Success';
}else{
$hasilnya = 'Failed';
}
echo '<a href="http://facebook.com/'.$com[data][$c-1][from][id].'" target="_blank"> '.htmlspecialchars($com[data][$c-1][from][name]).'</a> => '.$hasilnya.'<hr>';

}
}
}
}
}
}
?>		 