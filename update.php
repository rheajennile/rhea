<!DOCTYPE html>
<html>
<head>
    <title> Form</title>
    <style type="text/css">
        div {
            justify-content: center;
            display: flex;
            margin: 100px;
        

        }
        header { 
            background-color: #fff; 
            padding: 20px; 
            color: black; 

        }
        form {
            padding: 90px;
            cursor: pointer;
            border-radius: 10px;
        }
        input { 
            font-size: 15px; 
            border-radius: 15px;
            padding: 12px 15px; 
            width: 400px;
        }
        button{
            font-size: 15px;
            border:none;
            border-radius: 8px;
            width: 150px;
        }
        button { 
            padding :10px; 
           width: 40%;
            padding: 15px;
        }


    </style>
</head>
<body>
    <header>
        <h3>SYSTEM</h3>
    </header>
    <div>
        <form>
            <h4 style="font-size: 30px;">Login Here</h4>
            <input type="text" name="email" placeholder="Username or Email"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <button type="submit" name="login">Login</button>
            <p><a href="#">Forgot Password?</a></p><br><br><hr>
        </form>
    </div>
    <hr>
</body>
</html>