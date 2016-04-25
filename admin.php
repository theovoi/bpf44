<!DOCTYPE html>
<meta charset="UTF-8" />
   <head>
    
    
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <p>Pour ne pas créer d'erreur dans la base de données , il faut faire attention avec les ' . Exemple : au lieu d'écrire "L'amour est dans le près" écrire "l'\amour est dans le près". La base de donnée retire ensuite l'anti-slash.</p>
  <div class='formulaire'>
<h1>Ajouter un groupe</h1>
<form action="addband.php" method="post" enctype="multipart/form-data">
<label>Nom du groupe : </label>
    <input class='form-control' type="text" name="name" />
    <label>Image du groupe : </label>
<input type="file" name="fileToUpload" id="fileToUpload">
<label>Description du groupe : </label>
    <input class='form-control' type="text" name="description" />
<label>Date de passage (écrire vendredi/samedi) : </label>
    <textarea class='form-control' type="text"  class="date" name="date"></textarea>
<input type="submit" value="Envoyer groupe" name="submit">
</form>
    </div>
    </br>
</br>
</br>
</br>

 <div class='formulaire'>
     <h2>Ajouter un média</h2>
     <form action="addmedia.php" method="post">
         <label>Pour quel groupe ? : </label>
         <select name="band">
             
              <?php
    $connect = mysql_connect("localhost","root","root");
                mysql_select_db("bpf");
                $query = mysql_query("SELECT * FROM band");
                while($rows = mysql_fetch_array($query)):
              $id = $rows['id'];
    $img = $rows['img'];
    $name = $rows['name'];
   echo"<option value='$id'>$name</option>";
    endwhile;
                ?>
  </select>
         <label>Quel type de média ? : </label>
            <select name="type">
             <option value='1'>Vidéo Youtube</option>
                <option value='2'>Musique Soundcloud</option>
  </select>
         <label>Lien du média : </label>
         <input class='form-control' type="text" name="media" />
         <p>Pour un lien Youtube aller dans 'partager' puis 'intégrer' en dessous d'une vidéo puis c/c le code ici.</p>
         <p>Pour un lien Souncloud aller dans 'share' puis 'embed' et c/c le code ici.</p>
         <input type="submit" value="Envoyer média" name="submit">
     </form>
    </div>
    
</body>