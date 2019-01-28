<?PHP
// never store passwords in code
session_start();
// https://support.schoology.com/hc/en-us/community/posts/115006678667-RSS-feeds
if ($_POST['username']){
  $_SESSION['username'] == $_POST['username'];
  header('Location: index.php');
}
if ($_POST['password']){
  $_SESSION['password'] == $_POST['password'];
  header('Location: index.php');
}
if ($_POST['server']){
  $_SESSION['server'] == $_POST['server'];
  header('Location: index.php');
}
$username = '';
if (isset($_SESSION['username'])){
  $username = $_SESSION['username'];
}
$password = '';
if (isset($_SESSION['password'])){
  $password = $_SESSION['password'];
}
$server = '';
if (isset($_SESSION['server'])){
  $server = $_SESSION['server'];
}
?>
<form method='POST'>
  <input name='username' value='<?PHP echo $username;?>'>
  <input name='password' value='<?PHP echo $password;?>'>
  <input name='server' value='<?PHP echo $server;?>'>
  <input type='submit'>
</form>
<hr>
