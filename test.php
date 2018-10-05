<?php
//starting session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Base</title>
    <link href="testCSS.css" rel="stylesheet">
</head>

<body>
<div class="section" align="center">
    <h1>A Secure Database</h1>
    <p>A Secure Database Where You Can Store All Your Data</p>
    <small>We are committed to ensure the best security</small>
</div>

<div class="section" align="center">
    <h3>DATABASE ENTRY</h3>
    <p><b>Unauthorized Access Restricted</b></p>
    <form action="login.php" method="POST">
        <lebel for="email">Enter Email Address:</lebel><br/>
        <input style="padding: 5px" type="email" placeholder="Email" name="email" required /><br/><br/>
        <lebel for="pwd">Enter Password:</lebel><br/>
        <input style="padding: 5px" type="password" placeholder="Password" name="password" required /><br/><br/>
        <input type="submit" value="Enter Database"/>
    </form>
</div>

<?php
    if(isset($_SESSION['id'])){
        echo "<div class=\"section\" align=\"center\"><h2>Status:</h2><h2 align='center' style='color: green'>Logged In</h2></div>";
    }
    else {
        echo "<div class=\"section\" align=\"center\"><h2>Status:</h2><h2 align='center' style='color: red'>Not Logged In</h2></div>";
    }
?>

<div class="section" align="center">
    <h2>SIGN UP FOR FREE!</h2>
    <p><b>Get 10GB Cloud Storage for free!</b></p>
    <form action="signup.php" method="POST">
        <lebel for="Name">Enter Your Name:</lebel><br/>
        <input style="padding: 5px" type="text" placeholder="Name"  name="name" id="name" required /><br/><br/>
        <lebel for="email">Enter Email Address:</lebel><br/>
        <input style="padding: 5px" type="email" placeholder="Email" name="email" id="email" required /><br/><br/>
        <lebel for="pwd">Enter Password:</lebel><br/>
        <input style="padding: 5px" type="password" placeholder="Password" name="password"  id="password" required /><br/><br/>
        <button type="submit">Sign Up</button>
    </form>
</div>

<div class="section" align="center">
    <form action="logout.php">
        <button>Log Out</button>
    </form>
</div>

</body>
</html>

