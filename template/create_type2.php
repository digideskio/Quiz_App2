<div class="quiz_create">
  <div class="create_new_quiz">
    <h1>Create A New Quiz</h1>
  </div>

  <!-- waring -->
  <?php //render("block/warning.php"); ?>

  <div class="top-nav"> 
    <?php include_once(dirname(__FILE__)."/block/create_nav2.php"); ?>
  </div>

<div class="quiz_createWOAY">
  <div id="part1" class="part1">
    <?php include(dirname(__FILE__)."/quiz.php"); ?>
  </div>
  <div id="part2" class="part2">
    <?php include(dirname(__FILE__)."/answer.php"); ?>
  </div>
  <div id="part3" class="part3">
    <?php include(dirname(__FILE__)."/preview.php"); ?>
  </div>
</div>

</div>
<script type="text/javascript">
  jQuery(document).ready(function(){
      show_part(1,3);
  });
</script>
<?php //include('footer.php'); ?>