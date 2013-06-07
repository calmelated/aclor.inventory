<div class="page-header">
   <h3 style="text-indent: 3em;"> Add Customer PO </h3>
</div>
<script>var items = <?=$items;?>;</script>

<?php
    if($act == "detail_edit") {
        $cpo = $cpos[0];
        echo form_open('cpo/edit/'.$cpo['id'], array('id' => 'cpo_form', 'class' => 'form-horizontal'));
    } else if($act == "detail_add"){
        echo form_open('cpo/add', array('id' => 'cpo_form', 'class' => 'form-horizontal'));
    } else {
        $cpo = $cpos[0];
        echo form_open('', array('id' => 'cpo_form', 'class' => 'form-horizontal'));
    }
?>
    <table cellpadding="0" cellspacing="0" border="0">

    <?php if($act == "detail_edit") { ?>
    <tr>
        <td class="control-group">
            <label class="control-label">Create Date</label>
            <div class="controls">
                <label><strong><?php if(isset($cpo['cre_date'])) echo $cpo['cre_date'];?></strong></label>
            </div>
        </td>
        <td class="control-group">
            <label class="control-label">Modifier</label>
            <div class="controls">
                <label><strong><?php if(isset($cpo['modifier'])) echo $cpo['modifier'];?></strong></label>
            </div>
        </td>
    </tr>
    <?php } ?>

    <tr>
       <td class="control-group">
           <label class="control-label">Customer PO #<span class="star"> * </span></label>
           <div class="controls">
               <input type="text" name="customer_po" class="cpo" value="<?php if(isset($cpo['customer_po'])) echo $cpo['customer_po'];?>">
               <?php echo '<div style="color:red">'.form_error('customer_po').'</div>';?>
           </div>
       </td>
       <td class="control-group">
           <label class="control-label">Due Date<span class="star"> * </span></label>
           <div class="controls">
               <input type="text" name="due_date" class="cpo" placeholder="Format: 2013-01-01" value="<?php if(isset($cpo['due_date'])) echo $cpo['due_date'];?>">
               <?php echo '<div style="color:red">'.form_error('due_date').'</div>';?>
           </div>
        </td>
    </tr>
    <tr>
        <td class="control-group">
            <label class="control-label">Invoice #</label>
            <div class="controls">
                <input type="text" name="invoice" class="cpo" value="<?php if(isset($cpo['invoice'])) echo $cpo['invoice'];?>">
            <?php echo '<div style="color:red">'.form_error('invoice').'</div>';?>
           </div>
        </td>
        <td class="control-group">
            <label class="control-label">Ship Date</label>
            <div class="controls">
                <input type="text" name="ship_date" class="cpo" placeholder="Format: 2013-01-01" value="<?php if(isset($cpo['ship_date'])) echo $cpo['ship_date'];?>">
                <?php echo '<div style="color:red">'.form_error('ship_date').'</div>';?>
            </div>
        </td>
    </tr>
    <tr>
        <td class="control-group">
            <label class="control-label">Carrier Name</label>
            <div class="controls">
                <input type="text" name="carrier" class="cpo" value="<?php if(isset($cpo['carrier'])) echo $cpo['carrier'];?>">
            <?php echo '<div style="color:red">'.form_error('carrier').'</div>';?>
           </div>
        </td>
        <td class="control-group">
            <label class="control-label">Comment</label>
            <div class="controls">
                <input type="text" name="comment" class="cpo input-xlarge" placeholder="Special Instructions" value="<?php if(isset($cpo['comment'])) echo $cpo['comment'];?>">
                <?php echo '<div style="color:red">'.form_error('comment').'</div>';?>
            </div>
        </td>
    </tr>
    </table><hr>
    <table cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td class="control-group">
            <label class="control-label">Customer Name<span class="star"> * </span></label>
            <div class="controls">
                <input type="text" name="ship_name" class="cpo" value="<?php if(isset($cpo['ship_name'])) echo $cpo['ship_name'];?>" data-provide="typeahead">
                <?php echo '<div style="color:red">'.form_error('ship_name').'</div>';?>
            </div>
        </td>
        <td class="control-group">
            <label class="control-label">Ship Address<span class="star"> * </span></label>
            <div class="controls">
                <input type="text" name="ship_address" class="cpo input-xlarge" value="<?php if(isset($cpo['ship_address'])) echo $cpo['ship_address'];?>">
                <?php echo '<div style="color:red">'.form_error('ship_address').'</div>';?>
            </div>
        </td>
    </tr>
    <tr>
        <td class="control-group">
            <label class="control-label">Ship TEL<span class="star"> * </span></label>
            <div class="controls">
                <div class="row-fluid">
                    <input type="tel" name="ship_tel" class="cpo" value="<?php if(isset($cpo['ship_tel'])) echo $cpo['ship_tel'];?>">
                    <?php echo '<div style="color:red">'.form_error('ship_tel').'</div>';?>
                </div>
            </div>
        </td>
        <td class="control-group">
            <label class="control-label">City/State/Zip<span class="star"> * </span></label>
            <div class="controls">
                <input type="text" name="ship_city" class="cpo input-xlarge" value="<?php if(isset($cpo['ship_city'])) echo $cpo['ship_city'];?>">
                <?php echo '<div style="color:red">'.form_error('ship_city').'</div>';?>
            </div>
        </td>
    </tr>
    </table><hr>
    <table cellpadding="0" cellspacing="0" border="0">
    <tr>
       <td class="control-group">
            <label class="control-label">Billing Name</label>
            <div class="controls">
                <input type="text" name="billing_name" class="cpo" value="<?php if(isset($cpo['billing_name'])) echo $cpo['billing_name'];?>" data-provide="typeahead">
                <?php echo '<div style="color:red">'.form_error('billing_name').'</div>';?>
            </div>
        </td>
        <td class="control-group">
            <label class="control-label">Billing Address</label>
            <div class="controls">
                <input type="text" name="billing_address" class="cpo input-xlarge" value="<?php if(isset($cpo['billing_address'])) echo $cpo['billing_address'];?>">
                <?php echo '<div style="color:red">'.form_error('billing_address').'</div>';?>
            </div>
        </td>
    </tr>
    <tr>
        <td class="control-group">
            <label class="control-label">Billing TEL</label>
            <div class="controls">
                <input type="tel" name="billing_tel" class="cpo" value="<?php if(isset($cpo['billing_tel'])) echo $cpo['billing_tel'];?>">
                <?php echo '<div style="color:red">'.form_error('billing_tel').'</div>';?>
            </div>
        </td>
        <td class="control-group">
            <label class="control-label">City/State/Zip</label>
            <div class="controls">
                <input type="text" name="billing_city" class="cpo  input-xlarge" value="<?php if(isset($cpo['billing_city'])) echo $cpo['billing_city'];?>">
                <?php echo '<div style="color:red">'.form_error('billing_city').'</div>';?>
            </div>
        </td>
    </tr>
    </table><hr>
    <table cellpadding="0" cellspacing="0" border="0">
    <tr>
       <td class="control-group">
            <label class="control-label">Vender Name<span class="star"> * </span></label>
            <div class="controls">
                <input type="text" name="vender_name" class="cpo" value="<?php if(isset($cpo['vender_name'])) echo $cpo['vender_name'];?>" data-provide="typeahead">
                <?php echo '<div style="color:red">'.form_error('vender_name').'</div>';?>
            </div>
        </td>
        <td class="control-group">
            <label class="control-label">Vender Address<span class="star"> * </span></label>
            <div class="controls">
                <input type="text" name="vender_address" class="cpo input-xlarge" value="<?php if(isset($cpo['vender_address'])) echo $cpo['vender_address'];?>">
                <?php echo '<div style="color:red">'.form_error('vender_address').'</div>';?>
            </div>
        </td>
    </tr>
    <tr>
        <td class="control-group">
            <label class="control-label">Vender TEL<span class="star"> * </span></label>
            <div class="controls">
                <input type="tel" name="vender_tel" class="cpo" value="<?php if(isset($cpo['vender_tel'])) echo $cpo['vender_tel'];?>">
                <?php echo '<div style="color:red">'.form_error('vender_tel').'</div>';?>
            </div>
        </td>
        <td class="control-group">
            <label class="control-label">City/State/Zip<span class="star"> * </span></label>
            <div class="controls">
                <input type="text" name="vender_city" class="cpo  input-xlarge" value="<?php if(isset($cpo['vender_city'])) echo $cpo['vender_city'];?>">
                <?php echo '<div style="color:red">'.form_error('vender_city').'</div>';?>
            </div>
        </td>
    </tr>
    </table><hr>
    <table cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td class="control-group">
            <label class="control-label">Manufacturer<span class="star"> * </span></label>
            <div class="controls">
                <input type="text" name="factory_name" class="cpo" value="<?php if(isset($cpo['factory_name'])) echo $cpo['factory_name'];?>" data-provide="typeahead">
                <?php echo '<div style="color:red">'.form_error('factory_name').'</div>';?>
            </div>
        </td>
        <td class="control-group">
            <label class="control-label">Manufacturer Address<span class="star"> * </span></label>
            <div class="controls">
                <input type="text" name="factory_address" class="cpo  input-xlarge" value="<?php if(isset($cpo['factory_address'])) echo $cpo['factory_address'];?>">
                <?php echo '<div style="color:red">'.form_error('factory_address').'</div>';?>
            </div>
        </td>
    </tr>
    <tr>
        <td class="control-group">
            <label class="control-label">Manufacturer TEL<span class="star"> * </span></label>
            <div class="controls">
                <input type="text" name="factory_tel" class="cpo" value="<?php if(isset($cpo['factory_tel'])) echo $cpo['factory_tel'];?>">
                <?php echo '<div style="color:red">'.form_error('factory_tel').'</div>';?>
            </div>
        </td>
        <td class="control-group">
            <label class="control-label">City/State/Zip<span class="star"> * </span></label>
            <div class="controls">
                <input type="text" name="factory_city" class="cpo  input-xlarge" value="<?php if(isset($cpo['factory_city'])) echo $cpo['factory_city'];?>">
                <?php echo '<div style="color:red">'.form_error('factory_city').'</div>';?>
            </div>
        </td>
    </tr>
    </table>
    <input type="hidden" name="cid" value="<?php if(!empty($cid)) echo $cid;?>"><hr>

    <div style="margin-left:50px;">
        <table cellpadding="0" cellspacing="0" border="0" class="">
            <thead>
                <tr>
                    <th class="span1">Total Qty</th>
                    <th class="span1">Pack Qty</th>
                    <th class="span1">Pallet</th>
                    <th class="span1">Item #</th>
                    <th class="span1">Customer #</th>
                    <th class="span1">Net WT(lbs)</th>
                    <th class="span1">Gross WT(lbs)</th>
                    <th class="span1"></th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($cpocs)) { ?>
                    <?php foreach($cpocs as $idx => $cpoc) { ?>
                        <tr id="cpocs_row_<?=$idx;?>">
                            <td><input type="text" name="all_qty_<?=$idx;?>"      class="cpo input-small" value="<?php if(isset($cpoc['all_qty']))      echo $cpoc['all_qty'];?>"></td>
                            <td><input type="text" name="pack_qty_<?=$idx;?>"     class="cpo input-small" value="<?php if(isset($cpoc['pack_qty']))     echo $cpoc['pack_qty'];?>"></td>
                            <td><input type="text" name="pallet_<?=$idx;?>"       class="cpo input-small" value="<?php if(isset($cpoc['pallet']))       echo $cpoc['pallet'];?>"></td>
                            <td><input type="text" name="item_num_<?=$idx;?>"     class="cpo input-small" value="<?php if(isset($cpoc['item_num']))     echo $cpoc['item_num'];?>">
                                <input type="hidden" name="item_desc_<?=$idx;?>"  class="cpo input-small" value="<?php if(isset($cpoc['item_desc']))    echo $cpoc['item_desc'];?>"></td>
                            <td><input type="text" name="cust_item_<?=$idx;?>"    class="cpo input-small" value="<?php if(isset($cpoc['cust_item']))    echo $cpoc['cust_item'];?>"></td>
                            <td><input type="text" name="net_weight_<?=$idx;?>"   class="cpo input-small" value="<?php if(isset($cpoc['net_weight']))   echo $cpoc['net_weight'];?>"></td>
                            <td><input type="text" name="gross_weight_<?=$idx;?>" class="cpo input-small" value="<?php if(isset($cpoc['gross_weight'])) echo $cpoc['gross_weight'];?>"></td>
                            <td><i class="icon-remove" onclick="remove_cpocs_row(<?=$idx;?>);"></i></td>
                        </tr>
                        <tr>
                            <td><?php echo '<div style="color:red">'.form_error("all_qty_<?=$idx;?>").'</div>';?></td>
                            <td><?php echo '<div style="color:red">'.form_error("pack_qty_<?=$idx;?>").'</div>';?></td>
                            <td><?php echo '<div style="color:red">'.form_error("pallet_qty_<?=$idx;?>").'</div>';?></td>
                            <td><?php echo '<div style="color:red">'.form_error("item_num_<?=$idx;?>").'</div>';?></td>
                            <td><?php echo '<div style="color:red">'.form_error("cust_item_<?=$idx;?>").'</div>';?></td>
                            <td><?php echo '<div style="color:red">'.form_error("net_weight_<?=$idx;?>").'</div>';?></td>
                            <td><?php echo '<div style="color:red">'.form_error("gross_weight_<?=$idx;?>").'</div>';?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <tr id="cpocs_row_space">
                    <td colspan="8" class="text-center">
                        <a href="javascript:add_cpocs_row(items);" class="btn" style="margin-top:5px;">
                            <i class="icon-plus"></i> Add More Row
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="row_idx" id="row_idx" value="<?=(empty($cpocs))?0:count($cpocs);?>">
        <input type="hidden" name="max_row_idx" id="max_row_idx" value="<?=(empty($cpocs))?0:count($cpocs);?>">

        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 id="myModalLabel">Warning !!</h3>
            </div>
            <div class="modal-body">
                <p>The last one row, cannot be removed !!</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
    </div>

    <?php
        $data['act']    = $act;
        $data['add']    = 'cpo/add';
        $data['remove'] = (isset($cpo['id']))  ? 'cpo/remove/'  . $cpo['id'] : '';
        $data['edit']   = (isset($cpo['id']))  ? 'cpo/edit/'    . $cpo['id'] : '';
        $data['cid']    = (isset($cpo['cid'])) ? $cpo['cid']                 : -1;
        $this->load->view('formact', $data);
    ?>

</form>

<script src="script/cpo.js"></script>
<script src="script/scripts.js"></script>
<script>
    $(document).ready(function() {
        <?php if ($act == "detail") { ?>
            // set some field can't editable
            $("input[type='text']").each(function() {
                $(".cpo").addClass("uneditable-input");
            }).attr({readonly:true});

            $("input[type=submit]").click(function(event){
                return false;
            });
        <?php } else { ?>
            var items = <?=$items;?>;
            var companies = <?=$companies;?>;
            set_cpo_autocomplete(items, companies);

            <?php if ($act == "detail_add") { ?>
                // clear exist value
                $("input[type='text']").each(function() {
                    $(".cpo").attr({value:""});
                });
                add_cpocs_row(items);
            <?php } else if ($act == "detail_edit") { ?>
                $("input[name='ship_date']").val("<?php if(isset($cpo['ship_date'])) echo $cpo['ship_date'];?>");
                $("input[name='due_date']").val("<?php if(isset($cpo['due_date'])) echo $cpo['due_date'];?>");
            <?php } ?>

            //form_validate("#cpo_form");
        <?php } ?>
    });
</script>
