<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, intial-scale=1">
<title> MySite </title>
<body>
<style>
    body{
        background-color:#F8F3EB;
    }
    ul{
        list-style:none;
        padding-left:0;
        width:100%;
        margin: 0 auto;
    }
    ul li{
        display:block;
        width:160px;
        height:50px;
        background-color:#243C43;
        line-height:50px;
        text-aligh:center;
        text-transform:uppercase;
        float:right;
    }
    ul li a{
        text-decoration:none;
        color:#DBD7CF;
        padding:5px;
        display:block;
        

    }
    ul li a:hover{
        color: black;
    } 


    
    </style>
</div>
</nav>


<header>
<div class="nav-header-main">
<a class="header-logo" href="index.php">
<img src="image/logo.png" alt="mmtuts logo">
</a>
</div>
<ul>
<li><a href="index.php"> ABOUT ME</a></li>
<li><a href="#"> PORTFOLIO</a></li>
<li><a href="#"> CONTACT</a></li>
</ul>
</div>
<div class="header-login">
<form action="includes/login.inc.php" method="post">
<input type="text" name="mailuid" placeholder="E-mail/Username">
<input type="password" name="pwd" placeholder="Password">
<button type="submit" name="logout-sumbit">Logout</button>
</form>
<a href="signup.php">Signup</a>
    <form action="includes/logout.inc.php" method="post">
<button type="submit" name="logout-submit">Logout</button>
</form>
</div>
</nav>
</header>
</body>
</html>

