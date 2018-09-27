<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'loginform')
{
   $success_page = '';
   $error_page = './inicio.html';
   $usernames = array();
   $passwords = array();
   $fullnames = array();
   $crypt_pass = md5($_POST['password']);
   $found = false;
   $fullname = '';
   $session_timeout = 192;
   for($i=0; $i<count($usernames); $i++)
   {
      if ($usernames[$i] == $_POST['username'] && $passwords[$i] == $crypt_pass)
      {
         $found = true;
         $fullname = $fullnames[$i];
      }
   }
   if($found == false)
   {
      header('Location: '.$error_page);
      exit;
   }
   else
   {
      if (session_id() == "")
      {
         session_start();
      }
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['fullname'] = $fullname;
      $_SESSION['expires_by'] = time() + $session_timeout;
      $_SESSION['expires_timeout'] = $session_timeout;
      $rememberme = isset($_POST['rememberme']) ? true : false;
      if ($rememberme)
      {
         setcookie('username', $_POST['username'], time() + 3600*24*30);
         setcookie('password', $_POST['password'], time() + 3600*24*30);
      }
      header('Location: '.$success_page);
      exit;
   }
}
$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
$password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<meta name="generator" content="WYSIWYG Web Builder 14 - http://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="cook.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
</head>
<body>
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7-overlay"></div>
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_Heading3" style="display:inline-block;width:100%;z-index:0;">
<h1 id="Heading3">O QUE COMEU?</h1>
</div>
<div id="wb_IconFont1" style="display:inline-block;width:130px;height:131px;text-align:center;z-index:1;">
<div id="IconFont1"><i class="material-icons">&#xe853;</i></div>
</div>
<div id="wb_Login1" style="display:inline-block;width:100%;z-index:2;">
<form name="loginform" method="post" accept-charset="UTF-8" action="<?php echo basename(__FILE__); ?>" id="loginform">
<input type="hidden" name="form_name" value="loginform">
<table id="Login1">
<tr>
   <td class="header">Log In</td>
</tr>
<tr>
   <td class="row"><input class="input" name="username" type="text" id="username" value="<?php echo $username; ?>" placeholder="User Name"></td>
</tr>
<tr>
   <td class="row"><input class="input" name="password" type="password" id="password" value="<?php echo $password; ?>" placeholder="Password"></td>
</tr>
<tr>
   <td class="row"><input id="rememberme" type="checkbox" name="rememberme"><label for="rememberme">Remember me</label></td>
</tr>
<tr>
   <td style="text-align:center;vertical-align:bottom"><input class="button" type="submit" name="login" value="Log In" id="login"></td>
</tr>
</table>
</form>

</div>
<div id="wb_Heading1" style="display:inline-block;width:100%;z-index:3;">
<h1 id="Heading1"><a href="./inicio.html">Criar conta</a></h1>
</div>
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
</body>
</html>