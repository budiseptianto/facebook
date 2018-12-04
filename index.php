<?php
error_reporting(0);
$hostname = $_SERVER['HTTP_HOST']
?>
<?php
if($_GET[TesBot]){
$zx = 'Proccessing';
}elseif($_GET[a]=='eRYuij'){
$zx = 'Bom Likes';
}elseif($_GET[a]=='bkomen'){
$zx = 'Bom Comments';
}elseif($_GET[a]=='poss'){
$zx = 'Multi Posts Groups';
}elseif($_GET[a]=='remote'){
$zx = 'Remote Access';
}elseif($_GET[a]=='konfir'){
$zx = 'Multi Confirm Friends';
}elseif($_GET[a]=='visitor'){
$zx = 'Auto Visitor';
}elseif($_GET[a]=='dstatus'){
$zx = 'Multi Delete Posts';
}elseif($_GET[a]=='skomen'){
$zx = 'Spam Comments';
}elseif($_GET[a]=='defr'){
$zx = 'Multi Delete Friends';
}elseif($_GET[a]=='filedo'){
$zx = 'File Downloader';
}elseif($_GET[a]=='elfinder'){
$zx = 'elFinder WebHost Exploit';
}else{
$zx = 'Home';
}
$scNz = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>SGB Team</title>
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Ardy Muhammad Johan">
    <meta name="viewport" content="width=device-width, initial-scale=3">
    <meta name="keywords" content="Tools Facebook">
    <meta name="description" content="Free Tools Facebook">
    <link rel="icon" type="image/x-icon" href="https://www.sharinggilsblog.org/favicon.ico"/>
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    <link href="assets/css/default-dark.css" rel="stylesheet">
    
  </head>
  <body>
    <br>
     <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                
                    <div class="panel-heading"> 
            <center><h3>Facebook Tools</h3></center> <center><span class="label label-danger">Made with ❤ by @xrdyjoo </span></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="button" class="btn btn-lg btn-default btn-block" disabled="">Bot Like Beranda</button>
                <a href="<?php echo $scNz; ?>?a=eRYuij" <button type="submit" name="submit" class="btn btn-lg btn-default btn-block">Bom Like Beranda</button> </a>
                <a href="<?php echo $scNz; ?>?a=bkomen"  <button type="submit" name="submit" class="btn btn-lg btn-default btn-block">Bom Komen</button> </a>
                <a href="<?php echo $scNz; ?>?a=poss" <button type="submit" name="submit" class="btn btn-lg btn-default btn-block">Auto Post Group</button> </a>
                <a href="<?php echo $scNz; ?>?a=remote" <button type="submit" name="submit" class="btn btn-lg btn-default btn-block">Remote Access</button> </a>
                <a href="<?php echo $scNz; ?>?a=konfir" <button type="submit" name="submit" class="btn btn-lg btn-default btn-block">Auto Confirm Facebook</button> </a>
                <a href="<?php echo $scNz; ?>?a=dstatus" <button type="submit" name="submit" class="btn btn-lg btn-default btn-block">Auto Delete Post</button> </a>
                <a href="<?php echo $scNz; ?>?a=skomen" <button type="submit" name="submit" class="btn btn-lg btn-default btn-block">Spam Komen</button> </a>
                <a href="<?php echo $scNz; ?>?a=defr" <button type="submit" name="submit" class="btn btn-lg btn-default btn-block">Auto Delete Friend</button> </a>
                <a href="http://zfn-liker.me/generate.php" target="_blank" <button type="submit" name="submit" class="btn btn-lg btn-danger btn-block">Get Token</button> </a>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include 'tools.php';
include 'remote.php';
include 'confirm.php';
include 'visitor.php';
include 'bkomen.php';
include 'dstatus.php';
include 'skomen.php';
include 'defr.php';
include 'filedo.php';
include 'elfinanjeng.php';
?>
    <footer class="container-fluid bg-4 text-center">
  <p>© 2018 SGB TEAM. All Rights Reserved</p> 
</footer>
  <!-- JS -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/tablesorter.min.js"></script>
    <script src="assets/js/toolkit.js"></script>

    <script>
      $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
    </script>

</html>