<div class="row">
    <div class="col-md-8">
        <div class="box box-primary box-update">   
            <div class="box-header with-border">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                <h3 class="box-title"></h3>
            </div>
            <div class="box-body">
                <div class="form-body">
                    <form 
                        method="post" 
                        enctype="multipart/form-data" 
                        accept-charset="utf-8" 
                        role="form" 
                        autocomplete="off" 
                        novalidate="novalidate" 
                        action="/products/update/<?php echo !empty($param['id']) ? $param['id'] : '';?>">
                        <div class="form-group">
                            <label><?php echo __('LABEL_PHONE');?></label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                  <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" name="id" class="form-control" value="<?php echo !empty($data['id']) ? $data['id'] : ''; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label><?php echo __('LABEL_PRICE');?></label>
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input type="text" name="price" class="form-control" value="<?php echo !empty($data['price']) ? $data['price'] : ''; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label><?php echo __('LABEL_AGENT_PRICE');?></label>
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input type="text" name="agent_price" class="form-control" value="<?php echo !empty($data['agent_price']) ? $data['agent_price'] : ''; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label><?php echo __('LABEL_SUPPLIER');?></label>
                            <select class="form-control" name="supplier_id" style="width: 100%;">
                                <?php if (!empty($data['suppliers'])): ?>
                                <?php foreach ($data['suppliers'] as $c): ?>
                                <option value="<?php echo $c['id'];?>" <?php echo $data['supplier_id'] == $c['id'] ? "selected='selected'" : "";?>><?php echo $c['name'];?></option>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><?php echo __('LABEL_CATEGORY');?></label>
                            <select class="form-control" name="cate_id" style="width: 100%;">
                                <?php if (!empty($data['cates'])): ?>
                                <?php foreach ($data['cates'] as $c): ?>
                                <option value="<?php echo $c['id'];?>" <?php echo $data['cate_id'] == $c['id'] ? "selected='selected'" : "";?>><?php echo $c['name'];?></option>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><?php echo __('LABEL_TAG');?></label>
                            <select class="form-control select2" name="tag_id[ ]" multiple="multiple"
                                    style="width: 100%;">
                                <option selected="selected" value="1">Alabama</option>
                                <option value="2">Alaska</option>
                                <option selected="selected" value="3">California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                        
                        <div class="form-group button-group">
                            <div class="form-group">
                                <input type="submit" value="Lưu" class="btn btn-primary"></div>
                                <div class="form-group"><input type="submit" value="Quay lại" class="btn" onclick="return back();"></div>
                                <div class="cls"></div>
                                    
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
