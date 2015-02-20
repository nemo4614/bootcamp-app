<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Bootcamp</title>
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
  <div class="main">
    <h1><?php echo 'Hello world by PHP'; ?></h1>
    <?php for($i = 0; $i <= 4; $i++): ?>
    <ul>
      <li>First</li>
      <li>Second</li>
      <li>Third</li>
    </ul>
  <?php endfor; ?>
    <!--
    /**
      *Uncoment for redirect to saveComment.php and save input values in json file
      */
    <form action="saveComment.php" method="post"> -->
    <form action="saveCommentToDB.php" method="post">
      <label for="name" placeholder="$cookie_value">Name</label>
      <br>
      <input type="text" id="name" name="myname" value="<?php if(isset($_COOKIE["usersName"])){echo $_COOKIE["usersName"];}; ?>">
      <br>
      <label for"textfield">Text</label>
      <br>
      <textarea name="mycomment" id="textfield" cols="30" rows="10"></textarea>
      <br>
      <button type="submit">Send</button>
    </form>
    <?php
      $file = (file_get_contents('comment.json'));
      $commentArray = (json_decode($file,true));
      foreach($commentArray as $key=> $value){
         echo '<div class="comment">';
         echo 'Author: ' . $value['author'];
         echo '<br>';
         echo 'Comment: ' .$value['comment'];
         echo '<br>';
         echo '</div>';
      }
      try {
        $db = new PDO('mysql:host=localhost;port=80;dbname=bootcamp', 'homestead', 'secret', array( PDO::ATTR_PERSISTENT => false));

          echo '<h2>connected to bootcamp DB</h2>';

      } catch (PDOException $e) {
          print "Error!: " . $e->getMessage() . "<br/>";
          die();
      }

    $query = "SELECT * FROM Comments";
    $sth = $db->query($query);
    $result = $sth->fetchAll();

    foreach($result as $comment){
      echo '<div class="comment">';
      echo $comment['author'];
      echo '<br>';
      echo $comment['comment'];
      echo '<br>';
      echo '</div>';
    }

    ?>
    <br>
    <img src="http://lorempixel.com/output/technics-q-c-640-480-3.jpg" alt="funny meme">
    <br>
    <br>
    <a href="second.php">Link to other page</a>
  </div>
</body>
</html>
