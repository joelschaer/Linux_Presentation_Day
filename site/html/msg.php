<?php include("includes/a_config.php"); ?>

<?php

$pdo = new PDO('sqlite:database/db.db');

if(!$pdo){
    echo $pdo->lastErrorMsg();
}

if( isset($_POST['formNom']) )
{
    $nom = $_POST['formNom'];
    $comment = $_POST['formCommentaire'];

    $qry = $pdo->prepare('INSERT INTO t_message(nom, message) VALUES (?,?)');
    $qry->execute(array($nom, $comment));

}

$sql= "SELECT * FROM t_message";
$commentaires= $pdo->query($sql);
?>

<?php include("includes/header.php"); ?>

<body>

<section id="body" class="width">
  <aside id="sidebar" class="column-left">

      <?php include("includes/nav.php"); ?>

  </aside>

  <section id="content" class="column-right">
    <div class="column">

      <div class="title">
        <h3><?php echo $PAGE_TITLE ?></h3>
      </div>


      <div id="comment"><span>Commenter</span></div>

      <div id="commentForm">

        <h3>Laissez nous un commentaire</h3>

        <form action="msg.php" method="post">
          <input name="formNom" placeholder="Nom" type="text" required />
          <textarea name="formComment" placeholder="Commentaire" required maxlength="1500"></textarea>
          <input class="formBtn" type="submit" />
        </form>
      </div>


      <?php
        foreach($commentaires as $row){
          print("<article>");
          print("<h3>".$row['nom']."</h3>");
          print("<p>".$row['message']."</p>");
          print("</article>");
          print("<p>&nbsp;</p>");
        }
        ?>


    </div>

      <?php include("includes/footer.php"); ?>
  </section>

  <div class="clear"></div>

</section>

<script src="js/form.js"></script>

</body>
</html>
