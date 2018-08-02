<section class="invoice">
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-12 invoice-col">
          <address>
            <strong><?php echo $data['name'];?></strong><br>
            <?php echo $data['address'].', '.$data['ward'].', '.$data['district'].', '.$data['province'];?><br>
            Phone: <?php echo $data['phone']; ?><br>
          </address>
        </div>
      </row>

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>STT</th>
              <th>Hình ảnh</th>
              <th>Sim</th>
              <th>Giá</th>
            </tr>
            </thead>
            <tbody>
                <?php if (!empty($data['order_products'])): ?>
                <?php foreach ($data['order_products'] as $k => $p): ?>
                <tr>
                    <td><?php echo $k+1;?></td>
                    <td>
                        <?php if(!empty($p['product_image'])):?>
                        <img src="<?php echo $p['product_image'];?>" width="200" />
                        <?php endif;?>
                    </td>
                    <td><?php echo $p['product_name'];?></td>
                    <td><?php echo number_format($p['product_price']).' VNĐ';?></td>
                </tr>
                <?php endforeach; ?>    
                <?php endif; ?>
            
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Ghi chú:</p>

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            <?php echo $data['note'];?>
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p></p>
          <p class="lead pull-right">Tổng tiền: <?php echo number_format($data['total_price']).' VNĐ';?></p>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
            <button type="button" class="btn btn-primary pull-right">
               OK
            </button>
            <button type="button"  style="margin-right: 15px;" class="btn btn-success pull-right" onclick="window.location='<?php echo $BASE_URL.'/orders';?>'">
                 Quay lại
            </button>
        </div>
      </div>
    </section>