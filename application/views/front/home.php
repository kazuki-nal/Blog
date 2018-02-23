<?php
/**
 * Created by PhpStorm.
 * User: kazuki
 * Date: 2018/02/22
 * Time: 16:55
 */
?>
<?php $this->load->view('front/templates/header'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <div class="container border rounded">
                
            </div>
        </div>
        <div class="col-sm-3">
            <div class="container border rounded">
                <?php echo $this->calendar->generate(); ?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('front/templates/footer'); ?>
