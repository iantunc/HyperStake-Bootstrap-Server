<html>
  <head profile="http://www.w3.org/2005/10/profile">


<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="icon" href="/favicon.ico" type="image/x-icon"> 
   <title>HyperStake Bootstrap Server</title>
    <script src="//use.edgefonts.net/averia-libre;doppio-one.js"></script>

<style type="text/css">
p h1 {
    font-family: doppio-one, sans-serif;
    font-size:100%;
}
body, html {
margin:0px;
padding:0px;
height: 100%;
}

body {

background-color: #ccc;
}

div.container {top: 0; left: 0; width: 100%; height: 100%;
    position: relative; min-height:405px; display: table;}

p {display: table-cell; vertical-align: middle}

 p {text-align: center;font-family: doppio-one, sans-serif;font-size:150%;color:#333}

p a:link, a:visited, a:active {
font-family: doppio-one, sans-serif;
    font-size:60%;
#color:#77915D;
#color:#637A4C;
color:4C5E39;
text-decoration:none
}

p a:hover {
font-family: doppio-one, sans-serif;
    font-size:60%;
color:#775D91;
#color:#4B395E;
text-decoration:none}

p .wallet {font-size:45%}
p .wallet a:link, a:visited, a:active, a:hover {font-size:inherit}

</style>

<!--[if IE]>
    <style type="text/css">
img.displayed {
margin-top:60px}
    </style>
    <![endif]-->

  </head>
  <body>
<div class="container">

   <p style="line-height: 80%;">

<img
    alt="[hyperstake logo]" class=displayed
    src="hyperstake-128.png">
</br>
</br>
HyperStake Bootstrap Server
   </br>
</br>
</br>

<a href="bootstrap.zip"> Get bootstrap file (updated hourly)</a>

<?php

 require_once(__DIR__.'/jsonRPCClient.php');

    try {

     // Change yourRPCUser, yourRPCPass, yourIp, yourRPCPort to your actual data

$bitcoin = new jsonRPCClient('http://yourRPCUser:yourRPCPass@yourIp:yourRPCPort/');

    $info = $bitcoin->getinfo();
    $hash = $bitcoin->getblockhash($info["blocks"]);	

echo '<br>';
echo '<br>';
echo '<span style="font-size: 70%">Current top block: ' . '<a href="http://www.presstab.pw/phpexplorer/HYP/block.php?height=' . $info["blocks"]  . '">' . $info["blocks"] . " (" . substr($hash, 0, 5) . "..." . substr($hash, -5) . ")</a></span></span>";

    } catch (Exception $e) {
        
//        echo "Server is down for maintenance";

    }

 ?>


</br>   </br></br><span class="wallet">Don't have a wallet?<a href=https://github.com/hyperstake/HyperStake/releases> Download here</a>
</br>
Don't know what is HyperStake?<a href=https://bitcointalk.org/index.php?topic=678849.0> Read here</a> and <a href=http://hyperstake.wikia.com/wiki/HyperStake_Wiki>here</a>
</span>


</div>

  </body>
</html>
