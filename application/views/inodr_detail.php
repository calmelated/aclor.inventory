<div class="page-header">
   <h3 style="text-indent: 3em;"> Add Receipt </h3>
</div>

<?php
    if($act == "detail_edit") {
        $inodr = $inodrs[0];
        echo form_open('inodr/id_edit/'.$inodr['id'], array('id' => 'receipt_form', 'class' => 'form-horizontal'));
    } else if($act == "detail_add"){
        echo form_open('inodr/add', array('id' => 'receipt_form', 'class' => 'form-horizontal'));
    } else {
        $inodr = $inodrs[0];
        echo form_open('', array('id' => 'receipt_form', 'class' => 'form-horizontal'));
    }
?>

    <?php if($act == "detail") { ?>
        <div class="control-group">
            <label class="control-label">Create Date</label>
            <div class="controls">
                <label><?php if(isset($inodr['cre_date'])) echo $inodr['cre_date'];?></label>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Modifier</label>
            <div class="controls">
                <label><?php if(isset($inodr['modifier'])) echo $inodr['modifier'];?></label>
            </div>
        </div>
    <?php } ?>

    <div class="control-group">
        <label class="control-label">Receive Date</label>
        <div class="controls">
            <input type="text" name="rcv_date" class="inodr" placeholder="Format: 2013-01-01" value="<?php if(isset($inodr['rcv_date'])) echo $inodr['rcv_date'];?>">
            <?php echo '<div style="color:red">'.form_error('rcv_date').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Material Owner</label>
        <div class="controls">
            <input type="text" name="owner" class="inodr" value="<?php if(isset($inodr['owner'])) echo $inodr['owner'];?>" data-provide="typeahead">
            <?php echo '<div style="color:red">'.form_error('owner').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Material Vendor</label>
        <div class="controls">
            <input type="text" name="vendor" class="inodr" value="<?php if(isset($inodr['vendor'])) echo $inodr['vendor'];?>" data-provide="typeahead">
            <?php echo '<div style="color:red">'.form_error('vendor').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Item #</label>
        <div class="controls">
            <input type="text" name="item_num" class="inodr" value="<?php if(isset($inodr['item_num'])) echo $inodr['item_num']?>" data-provide="typeahead">
            <?php echo '<div style="color:red">'.form_error('item_num').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Import Pedimendo #</label>
        <div class="controls">
            <input type="text" name="import_num" class="inodr" value="<?php if(isset($inodr['import_num'])) echo $inodr['import_num']?>">
            <?php echo '<div style="color:red">'.form_error('import_num').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">PO #</label>
        <div class="controls">
            <input type="text" name="po_num" class="inodr" value="<?php if(isset($inodr['po_num'])) echo $inodr['po_num']?>">
            <?php echo '<div style="color:red">'.form_error('po_num').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Qty</label>
        <div class="controls">
            <input type="text" name="qty"  class="input-small inodr" value="<?php if(isset($inodr['qty']))  echo $inodr['qty']?>">
            <input type="text" name="unit" class="input-small inodr" value="<?php if(isset($inodr['unit'])) echo $inodr['unit']?>" placeholder="Unit" data-provide="typeahead">
            <?php echo '<div style="color:red">'.form_error('qty').'</div>';?>
            <?php echo '<div style="color:red">'.form_error('unit').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Qty1</label>
        <div class="controls">
            <input type="text" name="qty1"  class="input-small inodr" value="<?php if(isset($inodr['qty1']))  echo $inodr['qty1']?>">
            <input type="text" name="unit1" class="input-small inodr" value="<?php if(isset($inodr['unit1'])) echo $inodr['unit1']?>" placeholder="Unit" data-provide="typeahead">
            <?php echo '<div style="color:red">'.form_error('qty1').'</div>';?>
            <?php echo '<div style="color:red">'.form_error('unit1').'</div>';?>
        </div>
    </div>

    <div class="form-actions">
        <input type="hidden" name="cid" value="<?php if(isset($inodr['cid'])) echo $inodr['cid'];?>">
        <input type="hidden" name="add_next" value="0">

        <?php if($act == "detail_add") { ?>
            <button type="submit" class="btn btn-primary" onclick='javascript:$("input[name=add_next]").val(1);'>
                <i class="icon-ok icon-white"></i> Save &amp; Next
            </button>
            <button type="submit" class="btn btn-info">
                <i class="icon-ok icon-white"></i> Save
            </button>
            <button type="reset" class="btn btn-link">Cancel</button>
        <?php } else if($act == "detail_edit") { ?>
            <button type="submit" class="btn btn-info">
                <i class="icon-ok icon-white"></i> Save
            </button>
            <button type="reset" class="btn btn-link">Cancel</button>
        <?php } else { ?>
            <a href="inodr/add" class="btn btn-primary">
                <i class="icon-ok icon-white"></i> Create Next
            </a>
        <?php } ?>

        <?php if(($this->session->userdata['user_auth'] > 1) &&  /* auth:2 admin */
                 ($act == "detail" || $act == "detail_edit")) { ?>
            <a href="inodr/id_del/<?=$inodr['id']; ?>" class="btn btn-danger pull-right">
                <i class="icon-trash icon-white"></i> Delete
            </a>
        <?php } ?>

        <?php if(($this->session->userdata['user_auth'] > 1) &&  /* auth:2 admin */
                 ($act == "detail")) { ?>
            <a href="inodr/id_edit/<?=$inodr['id']; ?>" class="btn btn-info pull-right">
                <i class="icon-edit icon-white"></i> Edit
            </a>
        <?php } ?>
    </div>

</form>

<script src="script/scripts.js"></script>
<script>
    $(document).ready(function() {
        <?php if ($act == "detail") { ?>
            // set some field can't editable
            $("input[type='text']").each(function() {
                $(".inodr").addClass("uneditable-input");
            }).attr({readonly:true});

            $("input[type=submit]").click(function(event){
                return false;
            });
        <?php } else if ($act == "detail_add") { ?>
            // clear exist value
            $("input[type='text']").each(function() {
                $(".inodr").attr({value:""});
            });

            // set datepicker
            $("input[name='owner']").val("Aclor International Inc.");
            $("input[name='rcv_date']").datepicker();
            $("input[name='rcv_date']").datepicker( "option", "dateFormat", "yy-mm-dd");

            // set type ahead for some field
            var companies = '<?=$companies;?>';
            var items = '<?=$items;?>';
            var units = '<?=$units;?>';

            $("input[name='rcv_date']").attr({'autocomplete': 'off'});
            $("input[name='owner']").attr({'autocomplete': 'off', 'data-source': companies});
            $("input[name='vendor']").attr({'autocomplete': 'off', 'data-source': companies});
            $("input[name='item_num']").attr({'autocomplete': 'off', 'data-source': items});
            $("input[name='unit']").attr({'autocomplete': 'off', 'data-source': units});
            $("input[name='unit1']").attr({'autocomplete': 'off', 'data-source': units});

            form_validate("#receipt_form");
        <?php } else if ($act == "detail_edit") { ?>
            // set datepicker, the init value need to be reset again.
            $("input[name='rcv_date']").datepicker();
            $("input[name='rcv_date']").datepicker("option", "dateFormat", "yy-mm-dd");
            $("input[name='rcv_date']").val("<?php if(isset($inodr['rcv_date'])) echo $inodr['rcv_date'];?>");

            // set type ahead for some field
            var companies = '<?=$companies;?>';
            var items = '<?=$items;?>';
            var units = '<?=$units;?>';

            $("input[name='rcv_date']").attr({'autocomplete': 'off'});
            $("input[name='owner']").attr({'autocomplete': 'off', 'data-source': companies});
            $("input[name='vendor']").attr({'autocomplete': 'off', 'data-source': companies});
            $("input[name='item_num']").attr({'autocomplete': 'off', 'data-source': items});
            $("input[name='unit']").attr({'autocomplete': 'off', 'data-source': units});
            $("input[name='unit1']").attr({'autocomplete': 'off', 'data-source': units});

            form_validate("#receipt_form");
        <?php } ?>
    });
</script>
