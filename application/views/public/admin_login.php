<?php include 'public_header.php'; ?>
<div class="container">
    <?php echo form_open('login/admin_login',['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend>Admin Login</legend>
    <?php if($error=$this->session->flashdata('login_failed')){ ?>
     <div class="row">
        <div class="col-lg-6">
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><?php echo $error; ?></strong>
            </div>
        </div>
     </div>
    <?php } ?>
    <div class="row">
        <div class="col-lg-6">
             <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">User Name</label>
                <div class="col-lg-10">
                   <?php echo form_input(['class'=>'form-control','id'=>'username','name'=>'username','placeholder'=>'UserName','value'=> set_value('username')]); ?>
                </div>
             </div>
        </div>
         <div class="col-lg-6" >
            <?php echo form_error('username'); ?>
        </div>
    </div>
     <div class="row">
        <div class="col-lg-6">
             <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                   <?php echo form_input(['class'=>'form-control','id'=>'password','name'=>'password','placeholder'=>'Password']); ?>
                </div>
             </div>
        </div>
         <div class="col-lg-6" style="color: red;">
             <?php echo form_error('password'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
             <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']); ?>
                        <?php echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']); ?>
                    </div>
              </div>
        </div>
         <div class="col-lg-6">
            
        </div>
    </div>
  </fieldset>
</form>  
</div>
 <div class="col-lg-10 col-lg-offset-2"></div>
<?php include 'public_footer.php'; ?>