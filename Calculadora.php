<!DOCTYPE HTML>

<?php
$c = " ";
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op= $_POST['operacao'];
   $fat = $_POST['num3'];
   
   
   if( !empty($op) ) {
      if($op == 'fatorial'){
         $c = 1;
         $count=1;

         while($count <=$fat){
            $c *= $count;
            $count++;
         }

      }
      else{
         if(($a == "") && ($b == ""))
            $c = "Digite algum valor a ser calculado";
         else{
            if($op == '+')
               $c = $a + $b;
            else if($op == '-')
               $c = $a - $b;
            else if($op == '*')
               $c = $a*$b;
            else{
               if($b != 0){
                  $c = $a/$b;
               }
               else{  
                  $c =  "não pode ser feita divisão por 0";

               }
            }  
         }          
      }  
      
   }


}
?>  

<html lang = "pt-br">

<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>
<body class="fundo">
<section>
  <div class="Orbit">
    <div class="Electron"></div>
    <div class="Electron2"></div>
  </div>
</section>
<div class="centraliza">
   <div class="bloco-form">
      <form action="" method="post" >

      <div>
         Primeiro Número: <input name="num1" type="text">
      </div>
      <div>
         Segundo  Número: <input name="num2" type="text">
      </div>
         
      <div class="area-botoes">
         <input type="submit" name="operacao" value="+">     
         <input type="submit" name="operacao" value="-">     
         <input type="submit" name="operacao" value="*">     
         <input type="submit" name="operacao" value="/">     
      </div>

      <div class="area-fatorial">
         <input type="submit" name="operacao" value="fatorial">
         <input name="num3" type="text">
      </div>

      <div class="area-resultado">      
         <input readonly value="<?php echo $c ?>"></input>
      </div>
      </form> 
   </div>
</div>
     
</body>


<style>

.Orbit{
border-radius: 50%;
  width: 100px;
  height: 100px;
  /* position: relative; */

 
  position: absolute;
    /* top: 74px;
    left: 100px; */ */
}

@keyframes rotate{
      0%{
        transform: rotateZ(0deg) translateX(50px);
       }
      100%{
        transform: rotateZ(360deg) translateX(50px);
       }
   }

.Electron{
border-radius: 50%;
  width: 20px;
  height: 20px;
  position: absolute;
  top: 40px;
  left: 40px;
  background-color: #c3d0f1;
  animation: rotate 4s infinite linear;
}

.Electron2{
border-radius: 50%;
  width: 15px;
  height: 15px;
  position: absolute;
  top: 40px;
  left: 40px;
  background-color: #c3d0f1;
  animation: rotate 2s infinite linear;
}

.Orbit{
  border: solid 2px #ccc;
}


   .fundo{
      /* background-color: #363538; */
      color: #dcd6d6;
      background-image: url("https://cdn.hipwallpaper.com/m/17/2/Wvqf6Q.jpg");    
      background-image: url(http://avante.biz/wp-content/uploads/Math-Pictures-Wallpapers/Math-Pictures-Wallpapers-034.jpg);
   }

   .centraliza{
      display: flex;
      align-items: center;
      justify-content: center;
      height: 588px;
   }

   .bloco-form{
      width: 300px;
      height: 320px;
    opacity: 98%;
    border-radius: 11px;
    padding: 20px;
    background-color: #393840;  
   }

   .bloco-form input{
      border-radius: 4px;
    -webkit-appearance: none;
    border-style: none;
    height: 30px;
    background-color: #c3d0f1;
    text-align: center;
   }

   .bloco-form div{
      margin-bottom: 15px;
   }

   .area-botoes{
      display: flex;
    justify-content: space-evenly;
    margin-top: 30px
   }

   .area-botoes input{
      width: 40px;
    height: 40px;
   }

   .area-fatorial{
      margin: 25px 30px;
   }

   .area-fatorial div:first-child{
      width: 100px;    
      margin: 0 10px 0 26px;
   }

   .area-fatorial div:last-child{
      width: 50px;
   }

   .area-resultado{
      bottom: -35px;
    position: relative;
    
   }

   .area-resultado input {
    width: 100%;
    height: 55px;
    
}
</style>


</html>