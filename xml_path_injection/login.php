
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: black;  
}  
button {   
       background-color: white;   
       width: 100%;  
        color: black;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid white;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid white;  
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;
        background-color: black;  
    }   

.background-img{
    position:fixed;
right: 0px;
bottom: 0px;
top:60%;
}
</style>   
</head>    
<body>    
    <center> <h1> Login Form </h1> </center>   
    <form method="POST">  
        <div class="container">   
            <label style="color:white;">Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label style="color:white;">Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit">Login</button>
        </div>   
    </form>


<?php


$doc = new DOMDocument();
$doc->load("creds.xml");
$xpath = new DOMXPath($doc);
if(isset($_REQUEST["username"]) && isset($_REQUEST["password"])){
$query = "//login[Username/text()='"
                . $_REQUEST["username"]
                . "' and Password/text()='"
                . $_REQUEST["password"]
                . "']";
$check = $xpath->query($query);
if(count($check) > 0){
    echo ' <p style="color:white">succesfully logged in</p>';
            }
else
    {
        echo '<p style="color:white">Invalid credentials.';
    }

}
?>
</body>
</html>
