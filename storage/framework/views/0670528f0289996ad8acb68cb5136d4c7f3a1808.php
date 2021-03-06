<?php $__env->startSection('title', '新增采购'); ?>
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body class="gray-bg">
<div class="row">
    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><a href="/purchase">采购 </a> /  新增
                </h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>Q
                            <a href="form_basic.html#">选项1</a>
                        </li>
                        <li>
                            <a href="form_basic.html#">选项2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>


            
            <div class="modal" tabindex="-1"  id="select_client" data-backdrop="static" >
                <div class="modal-dialog">
                    <!-- 内容声明 -->
                    <div class="modal-content"  style="width: 750px;">
                        <!-- 头部 -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                            <h4 class="modal-title"> <span class="glyphicon glyphicon-plus"> 选择关联供应商</span>  </h4>
                        </div>
                        <!-- 主体 -->
                        <div class="modal-body" style="overflow: auto;max-height: 550px;" >
                            <div class="form-horizontal">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr >
                                        <th class="text-center">序号</th>
                                        <th  class="text-center">编号</th>
                                        <th  class="text-center">供应商类别</th>
                                        <th  class="text-center">名称</th>
                                        <th  class="text-center">联系人</th>
                                        <th  class="text-center">手机</th>
                                        <th  class="text-center">选择供应商</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center" id="add-ok-client">



                                    </tbody>
                                </table>
                                <div>
                                    <ul class="pager" count="<?php echo e($supplierManagement->count()); ?>" id="pages-client">
                                        <li class="disabled"><a href="#"  id="prve-client" prev="no">上一页</a></li>
                                        <li><a href="#" style="margin-left: 20px" next="1" id="next-client" >下一页</a></li>
                                        <li style="margin-left: 20px;">
                                            <select name="" id="jump-client">
                                            </select>
                                        </li>
                                        <li><a href="#" id="jumps-client">跳转</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- 注脚 -->
                    </div>
                </div>
            </div>

            
            <div class="modal" tabindex="-1"  id="select_shop" data-backdrop="static" test="" >
                <div class="modal-dialog">
                    <!-- 内容声明 -->
                    <div class="modal-content"  style="width: 750px;">
                        <!-- 头部 -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                            <h4 class="modal-title"> <span class="glyphicon glyphicon-plus"> 选择商品</span>  </h4>
                        </div>
                        <!-- 主体 -->
                        <div class="modal-body" style="overflow: auto;max-height: 550px;" >
                            <div class="form-horizontal">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr >
                                        <th class="text-center">序号</th>
                                        <th  class="text-center">商品编号</th>
                                        <th  class="text-center">商品名称</th>
                                        <th  class="text-center">预计采购单价</th>
                                        <th  class="text-center">规格型号</th>
                                        <th  class="text-center">计量单位</th>
                                        <th  class="text-center">当前库存总数量</th>
                                        <th  class="text-center">选择</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center" id="add-ok">

                                    </tbody>
                                </table>
                                <div>
                                    <ul class="pager" count="<?php echo e($goods->count()); ?>" id="pages">
                                        <li class="disabled"><a href="#"  id="prve" prev="no">上一页</a></li>
                                        <li><a href="#" style="margin-left: 20px" next="1" id="next" >下一页</a></li>
                                        <li style="margin-left: 20px;">
                                            <select name="" id="jump">
                                            </select>
                                        </li>
                                        <li><a href="#" id="jumps">跳转</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- 注脚 -->
                    </div>
                </div>
            </div>



            <div class="ibox-content">
                <div    class="form-horizontal" >

                    <div class="ibox-content" >
                        <table class="table table-bordered text-center">
                            <thead>
                            <div class="form-group">
                                <label class=" control-label col-sm-0">：供应商</label>
                                <div class="col-sm-3">
                                    <div class=" input-group">
                                        <input type="text" class="form-control " id="gys_name" readonly="" style="background-color: white">
                                        <div class="input-group-addon" id="add_gys"><span class="glyphicon glyphicon-search"></span></div>
                                    </div>
                                </div>
                            </div>
                            <tr>
                                <th class="text-center">商品</th>
                                <th class="text-center">单位</th>
                                <th class="text-center">仓库</th>
                                <th class="text-center">数量</th>
                                <th class="text-center">购货单价</th>
                                <th class="text-center">折扣率</th>
                                <th class="text-center">折扣额</th>
                                <th class="text-center">购货金额</th>
                                <th class="text-center" style="width: 200px">操作</th>
                            </tr>
                            </thead>
                            <tbody id="add_row">
                            <tr>
                                <td style="width: 200px;">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class=" input-group">
                                                <input type="text"   class="form-control  goods_name" goods_id=""  readonly=""  style="background-color: white">
                                                <div class="input-group-addon add_shop" test="1" ><span class="glyphicon glyphicon-search"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td style="width: 100px;">
                                    <div class="company"></div>
                                </td>

                                <td style="width: 200px;">
                                        <div class="col-sm-12">
                                            <select class="form-control m-b warehouse_name" name="account">
                                                <option></option>
                                                <?php $__currentLoopData = $warehouse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($value->id); ?>" warehouse_id="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                </td>

                                <td style="width: 100px;">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class=" input-group">
                                                <input type="text" class="form-control  number"  style="background-color: white">
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td style="width: 100px;">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class=" input-group">
                                                <input type="text" class="form-control  unit_purchase_price"  style="background-color: white">
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td style="width: 100px;">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class=" input-group">
                                                <input type="text" class="form-control  discount_rate"  style="background-color: white">
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td style="width: 100px;">
                                    <div class="zke"></div>
                                </td>

                                <td style="width: 100px;"  >
                                    <div class="purchase_amount"></div>
                                </td>
                                <td>
                                    <a  class="btn btn-warning btn-sm  add_row"  type="button"><i class="glyphicon glyphicon-plus"></i> 新增行</a>
                                    <a class="btn btn-danger btn-sm " type="button"><i class="glyphicon glyphicon-trash"></i> 删除</a>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th class="text-center" style="width: 55px;"colspan="9" rowspan="1">
                                    <div class="col-sm-4">总数量：<span id="sum_number"></span></div>
                                    <div class="col-sm-4">折扣额：<span id="sum_zke">0</span></div>
                                    <div class="col-sm-4">购货总金额：<span id="sum_purchase_amount"></span></div>
                                </th>
                            </tr>
                            <tr>
                               <td style="width: 55px;"colspan="9" rowspan="1">
                                   <div class="form-group">
                                       <div class="col-sm-12">
                                           <textarea  class="form-control" name="details" id="details" placeholder="简介..."></textarea>
                                       </div>
                                   </div>
                               </td>
                            </tr>

                            <tr>
                                <td style="width: 55px;"colspan="9" rowspan="1">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label class="col-sm-5 control-label">优惠率:</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="preferential_rate" id="preferential_rate" value="0">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <label class="col-sm-5 control-label">优惠金额:</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="yhje" id="yhje" disabled="disabled" value="0">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <label class="col-sm-5 control-label">优惠后金额:</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="yhhje" id="yhhje" disabled="disabled">
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 55px;"colspan="9" rowspan="1">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label class="col-sm-5 control-label">本次付款</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="paid" id="paid" value="0">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <label class="col-sm-5 control-label">结算账户:</label>
                                            <div class="col-sm-7">
                                                <select class="form-control m-b " id="settlement_account">
                                                    <option></option>
                                                    <?php $__currentLoopData = $account; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($value->id); ?>" account_id="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <label class="col-sm-5 control-label">本次欠款:</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="bcqk" id="bcqk" disabled>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>

                            </tfoot>
                        </table>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-primary" type="submit" id="add_purchase_data">保存内容</button>
                            <a onclick="window.history.go(-1);" class="btn btn-white" type="submit">取消</a>
                        </div>
                    </div>
                </div>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('layouts.loading', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('extend-js'); ?>
    <script src="../js/purchase.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>
    //传对象
    var yang=[];
    <?php $__currentLoopData = $warehouse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        yang["<?php echo e($key); ?>"] = '{"id":"<?php echo e($value->id); ?>","name":"<?php echo e($value->name); ?>"}';
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    // var yi =JSON.parse(yang[0]);
    // alert(yi['name'])
</script>
