<?php include_once 'admin_header.php'; ?>
<div class="container">
 <?php echo form_open("admin/update_article/{$article->id}",['class'=>'form-horizontal']); ?>
    
  <fieldset>
    <legend>Edit Article</legend>
   
    <div class="row">
        <div class="col-lg-6">
             <div class="form-group">
                <label for="inputEmail" class="col-lg-4 control-label">Title</label>
                <div class="col-lg-8">
                   <?php echo form_input(['class'=>'form-control','id'=>'title','name'=>'title','placeholder'=>'Title','value'=> set_value('title',$article->title)]); ?>
                </div>
             </div>
        </div>
         <div class="col-lg-2" >
            <?php echo form_error('title'); ?>
        </div>
    </div>
     <div class="row">
        <div class="col-lg-6">
             <div class="form-group">
                <label for="inputEmail" class="col-lg-4 control-label">Article Body</label>
                <div class="col-lg-8">
                   <?php echo form_textarea(['class'=>'form-control','id'=>'body','name'=>'body','placeholder'=>'Article Body','value'=> set_value('body',$article->body)]); ?>
                </div>
             </div>
        </div>
         <div class="col-lg-2" style="color: red;">
             <?php echo form_error('body'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
             <div class="form-group">
                    <div class="col-lg-8 col-lg-offset-4">
                        <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']); ?>
                        <?php echo form_submit(['name'=>'submit','value'=>'Update Article','class'=>'btn btn-primary']); ?>
                    </div>
              </div>
        </div>
         <div class="col-lg-6">
            
        </div>
    </div>
  </fieldset>
</form>
</div>
<?php include_once 'admin_footer.php'; ?>


