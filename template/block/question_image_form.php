<?php
  $q=$params['q'];
?>

<form id="question_<?php echo $q; ?>_image_form" enctype="multipart/form-data">

<div id="add_image" class="add_image">
  <div class="title">
    <span class="normal">Image:</span><span class="special">REQUIRED</span>
    <span id="question_<?php echo $q; ?>_image_form_note" style="color:red">    </span>
  </div>

  <div class="result" id="question_<?php echo $q; ?>_result" style="display:none">
      <div class="line"> 
          <span class="name">Result:</span> 
          <span class="value">Image has been uploaded successfully.</span> 
      </div>
      <div class="line"> 
          <span class="name">Image:</span> 
          <div class="img">
            <img id="question_<?php echo $q; ?>_success_image">
          </div>
      </div>
  </div>

    <div class="file">
      <input type="file" size="15" name="image">
    </div>

    <div class="button">
      <a onclick="question_upload_image(<?php echo $q; ?>);return false;">
        <img src="http://d1bye8fl443jlj.cloudfront.net/prod/images/ctp_upload.png">
      </a>
    </div>
  </div>

</form>

