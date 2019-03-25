<!DOCTYPE html>
<head>
  <head>
  <meta charset="utf-8">
  <title>Sweepme</title>
  <!-- CSS her
  <link rel="stylesheet" href=""/>
-->
  </head>

<body>
  <h1> Sign in </h1>

<form action="action_page.php">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Password" name="psw" required>

    <button type="submit">Sign in</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> remember me
    </label>
  </div>
