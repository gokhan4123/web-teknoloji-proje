<html>
  <head>
    <title> Welcome!</title>  
  </head>  

  <body style="
       background: rgb(29,18,213);
       background: linear-gradient(125deg, rgba(29,18,213,1) 2%, rgba(201,23,23,0.908000700280112) 35%, rgba(28,99,190,1) 83%, rgba(125,63,12,1) 97%);
       font-size:30px;
       position:fixed;
       color:#ffff;
       top:40%;
       left:35%;  
   ">
    <?PHP 
        session_start();
      
        $name = 'g161210381';
        $password = '1234';

        if($_POST['username'] === $name && $_POST['password'] === $password){
            echo 'Merhaba ' , $name;
            echo "<script type='text/javascript'>
                                alert('Merhaba! Login Başarlı')
                  </script>";
        }
        else {
            $_SESSION["message"] = "Sizin kullanıcı adı g161210381 mıydı?";

            header("location: ./login.php");
        }
    ?>  
    <div style="margin: 20px 20px;">
        <button id="redirect" style="
                    background-color: #4CAF50; /* Green */
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: block;
                    font-size: 16px;
        ">Ana Sayfaya Dön</button>
    </div>


     <script src="../js/redirect.js"></script>    
    </body>
</html>