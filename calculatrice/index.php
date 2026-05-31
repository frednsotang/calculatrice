<?php

   require  "./calcul_system.php";

    $cookie_name1="num"; 
    $cookie_value1="";

    $cookie_name2="op";
    $cookie_value2=""; 

    $result = 0;

   if($_POST["history"]) 
    {
       $num =  $_POST["history"];
    }else 
    {
       $num  = "";
    }
   
   foreach($_POST   as  $val) 
    {
      switch($val) 
      {
           case "+": 
             $num = "";
              $cookie_value2 = $val;
             setcookie($cookie_name2,$cookie_value2,time()+(86400 * 30),"/");
             $cookie_value1 = $_POST["history"];
             setcookie($cookie_name1,$cookie_value1,time()+(86400 *  30),"/");
           break;
           case "-": 
             $num = "";
              $cookie_value2 = $val;
             setcookie($cookie_name2,$cookie_value2,time()+(86400 * 30),"/");
             $cookie_value1 = $_POST["history"];
             setcookie($cookie_name1,$cookie_value1,time()+(86400 *  30),"/");
           break;
           case "*":
             $num = "";
              $cookie_value2 = $val;
             setcookie($cookie_name2,$cookie_value2,time()+(86400 * 30),"/");
             $cookie_value1 = $_POST["history"];
             setcookie($cookie_name1,$cookie_value1,time()+(86400 *  30),"/");
           break;
           case "/":
             $num = "";
              $cookie_value2 = $val;
             setcookie($cookie_name2,$cookie_value2,time()+(86400 * 30),"/");
             $cookie_value1 = $_POST["history"];
             setcookie($cookie_name1,$cookie_value1,time()+(86400 *  30),"/");
           break;
           case "clr":
            $num = "";
             $cookie_value2 = $val;
            setcookie($cookie_name2,$cookie_value2,time()+(86400 * 30),"/");
            $cookie_value1 = $_POST["history"];
            setcookie($cookie_name1,$cookie_value1,time()+(86400 *  30),"/");
           break;
           default:
             $num =  $_POST["history"].$val;
           break;
      }
    }


    if(isset($_POST["equal"])  AND !empty($_POST["equal"])) 
      {
         $num = "";
         $result = operation($_COOKIE["num"],$_POST["history"],$_COOKIE["op"]);

         $num =  $result;
      }


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
  <form  action="<?php  $_SERVER["PHP_SELF"] ?>" method="post">
    <div class="screen_section"  id="sec">
       <?php  echo $screen('history','screen',$num);
              echo  $history('save','save_part',$num);
       ?>
    </div>
    <div class="btn_section" id="sec">
      <?php echo  setButton()  ?>
    </div>
  </form>
</body>
</html>