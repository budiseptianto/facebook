<?php
$scN = basename($_SERVER['PHP_SELF']);

if($_GET[a]=="skomen"){
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
            <h3>Spam Komen</h3>
                    </div>
                    <div class="panel-body">
<form method="POST" action="'.$scN.'">
<div class="form-group">
<b>Access Token</b>
<br><input name="tokea" type="text" class="form-control">
<br>
<br>
<b>Target Post ID</b>
<br><input name="tagre" type="text" class="form-control">
<br>
<br>
<b>Message</b>
<br><textarea name="pesank" class="form-control"></textarea>
<br>
<br>
<b>Limit Spams</b>
<br><input name="jumlad" type="number" class="form-control">
<br>
<br>
<input value="SAVE" type="submit" class="btn btn-default">
<hr/>
<i>Target Post ID is the Post ID of Target.
<br/>Example : In url "https://m.facebook.com/story.php?story_fbid=379715489084620&id=100011385159823&fs=0", and you must copy from the "story_fbid=code" take the code "379715489084620".</i>';
exit;
}else{
echo '';
}
if($_POST[tokea]){
$newtoken = $_POST['tokea'];
$jumlax = $_POST['jumlad'];
$pesanz = $_POST['pesank'];
$tagren = $_POST['tagre'];
if ($newtoken==true){
$file = fopen('lyoncthetock.txt','w');
fwrite($file,$newtoken);
fclose($file);
echo'<br/><font size="5" color="red">Saved</font><br>'.$newtoken.'<br>=> <a href="?TesBot=njoer&target='.urlencode($tagren).'&pesan='.urlencode($pesanz).'&jumlah='.urlencode($jumlax).'">Click Here to Spamming Comments</a>';
}
exit;
}

if($_GET['TesBot']=="njoer"){
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
$i=1;
while ($i <= $jumlahnya)
{
auto('https://graph.facebook.com/'.$targetnya.'/comments?method=post&message='.urlencode($pesannya).'&access_token='.$access_token.'&fields=id');
echo 'Comment => '.$i.' => Success
<hr/>';
$i=$i+1;
}

 }else{ echo'<br/><font color="red"><font size="5">Wrong Token or Expired
<br/><a href="'.$scN.'?a=skomen"><u>ENTER</u></a></font></font>';
}
}
?>