<?php
include 'public_header.php';
?>


<div class="container">
    <h4>All Article</h4>
    <hr>
    <table class="table">
        <thead>
            <th>Sr No</th>
            <th>Article Title</th>
            <th>Published On</th>
        </thead>
        <tbody>
            <tr>
                <?php if(count($articles))
                { 
                    $count =$this->uri->segment(3,0) ;
                    foreach ($articles as $article)
                     { 
                        ?>
                            <td>
                                <?php echo ++$count; ?>
                            </td>
                            <td><?php echo $article->title; ?></td>
                            <td><?php  echo date('Y-m-d'); ?></td></tr>
                         <?php
                         
                     }
                }
                else
                       {?><tr>
                <td colspan="3">No Record Found</td>
                   <?php }?>
              </tr>
        </tbody>
    </table>
    <?php echo $this->pagination->create_links()?>
</div>

<?php
include 'public_footer.php';
?>