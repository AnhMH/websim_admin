<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo !empty($data['orders']['cnt']) ? $data['orders']['cnt'] : 0;?></h3>
                <p>Đơn hàng</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo $BASE_URL;?>/orders" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?php echo !empty($data['products']['cnt']) ? $data['products']['cnt'] : 0;?></h3>

                <p>Sim</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo $BASE_URL;?>/products" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?php echo !empty($data['suppliers']['cnt']) ? $data['suppliers']['cnt'] : 0;?></h3>

                <p>Nhà cung cấp</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo $BASE_URL;?>/suppliers" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?php echo !empty($data['news']['cnt']) ? $data['news']['cnt'] : 0;?></h3>

                <p>Tin tức</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo $BASE_URL;?>/news" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
