<?php
require_once('lib/print.php');
require_once('veiw/top.php');
?>
    <a href="create.php">create</a>
    <form action="create_process.php" method="POST">
      <p>
        <input type="text" name="title" placeholder="Title">
      </p>
      <p>
        <textarea name="description" placeholder="Description"></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
    <?php
require('veiw/bottom.php');
?>