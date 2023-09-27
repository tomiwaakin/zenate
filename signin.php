<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/signin.css">
</head>
<body>
    <div id="logo">
        <h1 id="z">Zenate</h1>
    </div>
    <form action="backend/reg.php" method="post">
     
     <div>
        <label for="name">Username</label>
        <input type="text" id="name" name="username" required>
     </div>
     <div> <label for="email">Email</label>
        <input type="text" id="email" name="email" required></div>
     <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <label for="password">Confirm Password</label>
        <input type="password" id="cpassword" name="cpassword" required>
    </div>
        <button type="submit" onclick="return chk()">Submit</button>
    </form>
    <h3>Have registered <a href="login.html">Log In</a></h3>
    <script>

        function chk(){
            
        var ps = document.getElementById("password").value;
        var cps = document.getElementById("cpassword").value;
            if (ps!=""){
                if(ps !=cps){
                    alert("incorrect password");
                    return false
                }

            }else{
                alert("input password");
            }
        }
    </script>
</body>
</html>