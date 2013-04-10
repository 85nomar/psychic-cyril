<?php require('inc/layout.php');

$Layout->title = 'Sellingform';

$Layout->start(); ?>


<section id="sellingform" class="span9">

    <div id="step1">
        <form class="form-horizontal">
        <fieldset>

        <!-- Form Name -->
        <legend>Step 1</legend>
        <!-- Appended Input-->
        <div class="control-group">
          <label class="control-label">Add prduct name</label>
          <div class="controls">
            <div class="input-append">
              <input id="appendedtext" name="appendedtext" class="span4" placeholder="placeholder" type="text">
              <span class="add-on">append</span>
            </div>
            
          </div>
        </div>
        
        <?php require('sellingform-step1-selecttree.php'); ?>

        </fieldset>
        </form>
    </div>
    <div id="step2">
      
    </div>
</section>

<?php $Layout->end(); ?>