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
?>
<form method='POST'>
  <input name='username' value='<?PHP echo $_SESSION['username'];?>'>
  <input name='password' value='<?PHP echo $_SESSION['password'];?>'>
  <input name='server' value='<?PHP echo $_SESSION['server'];?>'>
  <input type='submit'>
</form>
<hr>
