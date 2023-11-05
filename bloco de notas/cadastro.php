<!DOCTYPE html>
<html lang="en">
<head>
    <?php
include("conexao.php");
$sql_bloco_de_notas= "SELECT * FROM 'anotacoes'";


    ?>
    <style>
    .menu-opcoes {
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #333;
    box-shadow: 0 1px 3px rgba(0,0,0,0.3);
  }
  .menu-opcoes a {
    color: white; 
    text-decoration: none;
    padding: 20px;  
    display: inline-block;
  }
  
  .menu-opcoes a:hover {
    background-color: #ddd;   
    color: black;
  } 
  
  .menu-opcoes ul {  
    margin: 0;
    padding: 0;  
    list-style: none;  
  }
  
  .menu-opcoes li {
    display: inline-block;  
  }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <nav class="menu-opcoes">
    <ul>
        <li><a	href="#">anotacoes</a></li>
        <li><a	href="">home</a></li>
    </ul></nav>
    
</head>
<body>
<title>anotacoes</title>
  
<table>
    <li><h2>titulos</h2></li>
    <?php 
 echo " <h1>as anotacoes feitas:</h1>";
 //usar um for each  
 echo "<li>$titulo</li><br>"  
    
    ?>
</table>
</body>
</html>