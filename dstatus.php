<?php
$scN = basename($_SERVER['PHP_SELF']);

if($_GET[a]=="dstatus"){
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
            <h3>Auto Delete Post</h3>
                    </div>
                    <div class="panel-body">
<form method="POST" action="'.$scN.'">
<div class="form-group">
<b>Access Token</b>
<br><input name="tokesd" type="text" class="form-control">
<br>
<br>
<b>Limit Posts</b>
<br><input name="jumlafz" type="number" class="form-control">
<br>
<br>
<input value="SAVE" type="submit" class="btn btn-default">';
exit;
}else{
echo '';
}
if($_POST[tokesd]){
$newtoken = $_POST['tokesd'];
$jumlazx = $_POST['jumlafz'];
$pesanz = $_POST['pesang'];
$tagren = $_POST['tagren'];
if ($newtoken==true){
$file = fopen('lyoncthetock.txt','w');
fwrite($file,$newtoken);
fclose($file);
echo'<br/><font size="5" color="red">Saved</font><br>'.$newtoken.'<br>=> <a href="?TesBot=njear&jumlah='.urlencode($jumlazx).'">Click Here to Delete Posts</a>';
}
exit;
}

if($_GET['TesBot']=="njear"){
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
<br/><a href="'.$scN.'?a=dstatus"><u>ENTER</u></a></font></font>';
}

//Limit Teman
$stat = json_decode(auto('https://graph.facebook.com/me/posts?access_token='.$access_token.'&limit=1&fields=id,name'),true);


$log = json_encode(file('lyonctheid.txt'));
for($i=1;$i<=count($stat[data]);$i++){

//Limit Like

$com = json_decode(auto('https://graph.facebook.com/me/posts?access_token='.$access_token.'&limit='.$jumlahnya.'&fields=id,name'),true);

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
$deletes = auto('https://graph.facebook.com/'.$com[data][$c-1][id].'?access_token='.$access_token.'&method=delete');
if($deletes=='true'){
echo '<a href="http://facebook.com/'.$com[data][$c-1][id].'" target="_blank"> '.htmlspecialchars($com[data][$c-1][id]).'</a> => Success<hr>';
}else{
echo '<a href="http://facebook.com/'.$com[data][$c-1][id].'" target="_blank"> '.htmlspecialchars($com[data][$c-1][id]).'</a> => Failed<hr>';
}
}
}
}
}
}
}
?>