<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Invoice
        <small>#007612</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Invoice</li>
    </ol>
</section>

<!-- Main content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="cate_wrapper">
                <h3><?php echo __('LABEL_CATEGORY_LIST');?></h3>
                <select>
                    <option value="1">aa</option>
                    <option value="2">bb</option>
                    <option value="3">cc</option>
                </select>
            </div>
            <div class="product_wrapper">
                <h3><?php echo __('LABEL_PRODUCT_LIST');?></h3>
                <?php for ($i = 1; $i <= 10; $i++): ?>
                <div class="col-sm-6 col-md-4">
                    <div class="product_detail">
                        <img src="<?php echo $BASE_URL;?>/img/sp.jpg" alt=""/>
                        <h4 class="product_name">San pham <?php echo $i;?></h4>
                        <p>123.456</p>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
            
        </div>
        <div class="col-md-6">
            a
        </div>
    </div>
</div>
<!-- /.content -->
<div class="clearfix"></div>
