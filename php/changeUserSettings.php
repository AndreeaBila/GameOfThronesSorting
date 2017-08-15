<?php
  session_start();
  require 'User.php';
  require 'createConnection.php';
  //get the data from the clinet
  $user = new User(
    $_SESSION['id'],
    strip_tags($_POST["settingsName"]),
    strip_tags($_POST["settingsPassword"]),
    null,
    strip_tags($_POST["settingsEmail"]),
    strip_tags($_POST['settingsTitle']),
    strip_tags($_POST["settingsDob"]),
    null
  );

  if($user->password == "" || $user->password == null){
    $result = $db->query("SELECT Password, Salt FROM users WHERE(UserID = $user->userID)");
    $resultArr = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $user->password = $resultArr['Password'];
    $user->salt = $resultArr['Salt'];
  }else{
    $salt = sha1(time());
    $user->password = sha1($salt."--".$user->password);
    $user->salt = $salt;
  }

  $query = "UPDATE users SET Name = ?,  Password = ?, Salt = ?, Email = ?, Title = ?, DoB = ? WHERE(UserID = $user->userID)";
  $stmt = $db->prepare($query);
  $stmt->bind_param("ssssss", $user->name, $user->password, $user->salt, $user->email, $user->title, $user->dob);
  $stmt->execute();
  $stmt->close();
?>