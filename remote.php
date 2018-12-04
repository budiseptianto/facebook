<?php
if($_GET[a]=='remote'){
echo '<center>
<br><br>
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"> 
            <h3>Remote Access</h3>
                    </div>
                    <div class="panel-body">
<form method="POST" enctype="multipart/form-data">
<div class="form-group">
<br/>
<b>Token Access</b>
<br/>
<input type="text" name="atoken" placeholder="Target Token Access" class="form-control" required>
<br/>
<br/>
<b>Username/ID</b>
<br/>
<input type="text" name="user" placeholder="Target Username/ID" class="form-control" required>
<br/>
<br/>
<b>Post</b>
<br/>
<textarea name="status" placeholder="Post for Message" class="form-control" required></textarea>
<br/>
<br/>
<b>Link Include</b>
<br/>
<input type="text" name="link" placeholder="Include a Link" class="form-control">
<br/>
<br/>
<b>Photo Url</b>
<br/>
<input type="text" name="image" placeholder="Include a Image Link" class="form-control">
<br/>
<br/>
<b>Mode</b>
<br/>
<select name="mode" class="form-control">
<option value="1">Just Post Message</option>
<option value="2">Posting a Link</option>
<option value="3">Posting a Photo</option>
</select>
<br/><br/>
<input type="submit" name="post" value="POST" class="btn btn-default">
<br/>
<br/>
</form>';

if(isset($_POST['post'])){
$mode = $_POST['mode'];
$token = $_POST['atoken'];
$user = $_POST['user'];
$status = $_POST['status'];
$image = $_POST['image'];
$link = $_POST['link'];
$mode = $_POST['mode'];
if($mode=='1'){
$urlx = 'https://graph.facebook.com/'.$user.'/feed?method=POST';
$access_token = $token;
$attachment =  array( 'access_token' => $access_token, 'message' => $status);
}
elseif($mode=='2'){
$urlx = 'https://graph.facebook.com/'.$user.'/feed?method=POST';
$access_token = $token;
$attachment =  array( 'access_token' => $access_token, 'message' => $status, 'link' => $link);
}
elseif($mode=='3'){
$urlx = 'https://graph.facebook.com/'.$user.'/photos?method=POST';
$access_token = $token;
$attachment =  array( 'access_token' => $access_token, 'message' => $status, 'url' => $image);
}
else{
echo 'HaH<br/>';
}

function postup($url, $attachmen){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $attachmen);
$result= curl_exec($ch);
curl_close ($ch);
}

postup($urlx, $attachment);
}
echo '<hr/>';
}
?>