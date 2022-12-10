<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Css animation</title>
    <style>
     .box3{

    background:  rgb(38, 219, 107);
    border-radius: 10px;
       animation-name: move;
    animation-duration: 5s;
    animation-delay: 2s;
    position: relative;
animation-timing-function:ease-in-out;
animation-fill-mode:forwards;

}
@keyframes move{
    0%{
        top: 0px;
        left: 0px;
         background-color: aliceblue;
    }
 25%{
        top: 0px;
        left: 200px;
        background-color: aqua;
    }
    50%{

        top:300px;
        left: 400px;
    }
    75%{
        top: 500px;
        left: 0px;
        background-color: darkmagenta;
    }
    90%{top: 200px;
        left: 300px;
        background-color: blueviolet;
    }

    100%{
        top: 0px;
        left: 0px;
        background-color: crimson;
    }


}
    </style>
</head>
<body>
<table class="box3"align="left" border="1" cellpadding="3" cellspacing="0">
<?php
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>
</table>
</body>
