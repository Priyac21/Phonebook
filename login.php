<?php


?>
<html>
<head>
<title>Phone Book</title>
<link rel="stylesheet" href="loginstyle.css">
<script src="loginjs.js"></script>
</head>
<body>
<div class="container">
    <form class="signUp">
        <h3>Create Your Account</h3>
        <p>Just enter your email address</br>
and your password for join.
        </p>
        <input class="w100" type="email" placeholder="Insert eMail" reqired autocomplete='off' />
        <input type="password" placeholder="Insert Password" reqired />
        <input type="password" placeholder="Verify Password" reqired />
        <button class="form-btn sx log-in" type="button">Log In</button>
        <button class="form-btn dx" type="submit">Sign Up</button>
    </form>
    <form class="signIn">
        <h3>Welcome</br>Back !</h3>
        <button class="fb" type="button">Log In With Facebook</button>
        <p>- or -</p>
        <input type="email" placeholder="Insert eMail" autocomplete='off' reqired />
        <input type="password" placeholder="Insert Password" reqired />
        <button class="form-btn sx back" type="button">Back</button>
        <button class="form-btn dx" type="submit">Log In</button>
    </form>
</div>