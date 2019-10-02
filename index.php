_<?php
require_once 'style.php';
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
       <h2>ajouter une couleur</h2>
       <div></div>
       <h2>couleurs enregistrées</h2>
       <form>
       <input type='text' name='forml' placeholder='newname'>
       <input type='submit' name='formul'>
      
       
       
</form>
       <?php
      $recouleur="SELECT * FROM color";
      $envoicouleur= mysqli_query($conn,$recouleur);
      while($couleur= mysqli_fetch_assoc($envoicouleur)){ 
        ?>
          <div id='color'> <?php echo $couleur['name']; ?>
          <form method='post'>

         <input type='text' name='forml' placeholder='newname'>
         <input type='submit' name='formul<?php echo $couleur['id'];?>'value='modifier'>
         <input type='submit' name='formulaire<?php echo $couleur.$idcolor."'value='supprimer'>
  
         </form></div>";
         

         $idcolor = ("sup.php");
         if (isset($_POST['forml'.$idcolor])){
         header("location: sup.php?id=".$idcolor);
    
         };
      }
      ?>
    
      
      
      <?php
  if (isset($_POST['id'])) {
 $name= $_POST['couleur'];
 $reqid="SELECT id FROM color WHERE name = '$name'";
 $envoiid= mysqli_query($conn,$reqid);
 $id= mysqli_fetch_assoc($envoiid);
 echo $id["id"];
 
 if (isset($_POST['formul'.$color['id']])){
  $newname = htmlspecialchars($_POST['formu']);
  $id = intval($color['id']);
  $changereq = "UPDATE color SET name = '$newname' where id = '$id'";
  mysqli_query($conn,$changereq);
  header("location: index.php");
}
 
  }
  
  ?>

</body>
</html> 
