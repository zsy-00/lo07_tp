
<!-- ----- début viewInsert -->
 
<?php 
require ($root . '/app/view/fragment/fragmentVaccinHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentVaccinMenu.html';
      include $root . '/app/view/fragment/fragmentVaccinJumbotron.html';
    ?> 

    <form role="form" method='get' action='router.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='centreCreated'>                               
        <label for="id">label : </label><input type="text" name='label' size='75' value=''>
        <label for="id">adresse : </label><input type="text" name='adresse'size='75' value=''>                
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentVaccinFooter.html'; ?>

<!-- ----- fin viewInsert -->



