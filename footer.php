<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="anas.css">
  <meta http-equiv="refresh" content="1"/>
  <title>footer</title>
</head>
<body>
  <footer class="foot">
  
         <p><?php
         date_default_timezone_set('Asia/Kolkata');
         $a = time();
         
         echo date("D-M-Y H-i-s A",$a);
        // echo $b;
         ?></p>
      

  </footer>

</body>
</html>