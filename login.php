<?php
  include("libs/load.php");
?>

<!doctype html>
<html lang="en">
  <?load_templete('_head');?>
  <body>
    <? load_templete('_header');?>
    <main>
      <? load_templete('_login'); ?>
    </main>
    <?load_templete('_footer');?>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>