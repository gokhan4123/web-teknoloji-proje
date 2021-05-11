<html>
  <head>
    <title> Bilgiler!</title>  
  </head>

  <body style="
        background-image: url(../css/background-img/postForm.png);
        height: 100vh;
        width: auto;
        position: relative;
        overflow: hidden;
        box-sizing: border-box;
  ">
  
  <div class="container-fluid" style="
        position:relative;
        left:35%;
        top:25%;
        width:30%;
        padding:10px 10px;
        background-color:	#add8e6;
        overflow:hidden;
        color:darkblue;
        border-radius:20px;"
    >
    <div class="row">   

      <?PHP 
          session_start();
          echo '<h2>Adı</h2> ' , $_POST['name'];        
          echo '<h2>Mail</h2> ' , $_POST['email'];        
          echo '<h2>Mesaj</h2> ' , $_POST['message'];
      ?>
    
    <div style="margin: 20px 0; margin-left:30%;">
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
    </div>
  </div>
  
  
  <script src="../js/redirect.js"></script>  
  </body>
</html>