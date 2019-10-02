<?php
require_once 'sup.php';
?>

<!DOCTYPE html>
 <html>
     <head>
         <meta charset="utf-8">
         <title>projet2</title>
         <link rel="stylesheet" type="text/css" href="style.css"/>
        
</head>
     <body>
       <h1>gestions de couleur</h1>
       <form method="post">
            <input type='submit' name='confirm' value='confirmer'>
            <input type='submit' name='return' value='retour'>
</form>
<div></div>
<body>
    </html>
    <?php

    if (isset($_POST['return'])){
        header("location: index.php");
    };
    
    if (isset ($_POST['confirm'])){
        $id = intval($_GET['id']);
        $col = "DELETE FROM color where id='$id'";
        mysqli_query($conn,$col);
        header("location: index.php");
    }  
    

?>