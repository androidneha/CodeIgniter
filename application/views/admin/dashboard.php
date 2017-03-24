<?php include 'admin_header.php'; ?>
<div class="container">
     <div class="row">
         <div class="col-lg-10 col-lg-offset-10">
             <a href="<?php echo base_url('admin/add_article'); ?>" class="btn btn-primary">Add Article</a>
         </div>
     </div>
    <?php if($error=$this->session->flashdata('feedback')){ 
        $feedback_class=$this->session->flashdata('feedback_class') ?>
     <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="alert alert-dismissible <?php  echo $feedback_class ;?>">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><?php echo $error; ?></strong>
            </div>
        </div>
     </div>
    <?php } ?>
    <table class="table">
        <thead>
            <th>Sr No</th>
            <th>User Id</th>
            <th>Title</th>
            <th>body</th>
            <th>Article</th>
        </thead>
        <tbody>
            <?php
            if(count($articles))
            {
                $i=$this->uri->segment(3,0);
                foreach ($articles as $art)
                {
                    ?>
                    <tr>
                        <td><?php echo ++$i; ?></td>
                        <td> <?php
                                echo $art->user_id;
                                //print_r($art);
                            ?></td>
                        <td>
                            <?php
                                echo $art->title;
                                //print_r($art);
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $art->body;
                                //print_r($art);
                            ?>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-lg-2">
                                     <?php 
            //                            By GET METHOD
                                        echo anchor("admin/edit_article/{$art->id}","Edit",['class'=>'btn btn-primary']);?>
                                        <!--<a href="#" class="btn btn-primary">Edit</a>--> 
                                </div>
                                <div class="col-lg-2" style="margin-left: 10px">
                                     <?php
                                        // BY POST METHOD
                                        echo form_open('admin/delete_article');
                                        echo form_hidden('article_id',$art->id);
                                        echo form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']);
                                        echo form_close();
                                        ?>
                                </div>
                            </div>
                          </td>
                    </tr>
                    <?php
                }
            }
            else {?>
                    <tr><td colspan="3">No Record Found</td></tr>  
            <?php }
           ?>
        </tbody>
    </table>
   <?php echo $this->pagination->create_links() ?>
</div>
<?php include 'admin_footer.php'; ?>

