<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="StyleSheet/loginStyleSheet.css">

    
<style type="text/css">
    
    .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
    float: right;
    top: -15%;
    right: 15px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>



</head>
<body>

<div class="dropdown">
  <button class="dropbtn">Home</button>
  <div class="dropdown-content">
    <a href="home.html">Go Home</a>
    
  </div>
</div>
    <div class="login-box">
    <img src="StyleSheet/images/avatar.png" class="avatar">
        <h1>Login</h1>
            <form method="POST" action="funcforstd.php">
            <p>StudentID</p>
            <input type="text" name="studentid" placeholder="Enter ID">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login" value="Login">
            <a href="#">Forget Password</a>    
            </form>
        
        </div>

</body>
</html>