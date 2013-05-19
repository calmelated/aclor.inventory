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
        <label class="control-label">Receive Date<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="rcv_date" class="inodr" placeholder="Format: 2013-01-01" value="<?php if(isset($inodr['rcv_date'])) echo $inodr['rcv_date'];?>">
            <?php echo '<div style="color:red">'.form_error('rcv_date').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Material Owner<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="owner" class="inodr" value="<?php if(isset($inodr['owner'])) echo $inodr['owner'];?>" data-provide="typeahead">
            <?php echo '<div style="color:red">'.form_error('owner').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Material Vendor<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="vendor" class="inodr" value="<?php if(isset($inodr['vendor'])) echo $inodr['vendor'];?>" data-provide="typeahead">
            <?php echo '<div style="color:red">'.form_error('vendor').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Item #<span class="star"> * </span></label>
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
        <label class="control-label">PO #<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="po_num" class="inodr" value="<?php if(isset($inodr['po_num'])) echo $inodr['po_num']?>">
            <?php echo '<div style="color:red">'.form_error('po_num').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Qty<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="qty"  class="input-small inodr" value="<?php if(isset($inodr['qty']))  echo $inodr['qty']?>">
            <input type="text" name="unit" class="input-small inodr" value="<?php if(isset($inodr['unit'])) echo $inodr['unit']?>" placeholder="Unit">
            <?php echo '<div style="color:red">'.form_error('qty').'</div>';?>
            <?php echo '<div style="color:red">'.form_error('unit').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Qty1</label>
        <div class="controls">
            <input type="text" name="qty1"  class="input-small inodr" value="<?php if(isset($inodr['qty1']))  echo $inodr['qty1']?>">
            <input type="text" name="unit1" class="input-small inodr" value="<?php if(isset($inodr['unit1'])) echo $inodr['unit1']?>" placeholder="Unit">
            <?php echo '<div style="color:red">'.form_error('qty1').'</div>';?>
            <?php echo '<div style="color:red">'.form_error('unit1').'</div>';?>
        </div>
    </div>

    <?php
        $data['act']    = $act;
        $data['add']    = 'inodr/add';
        $data['remove'] = (isset($inodr['id']))  ? 'inodr/id_del/'  . $inodr['id'] : '';
        $data['edit']   = (isset($inodr['id']))  ? 'inodr/id_edit/' . $inodr['id'] : '';
        $data['cid']    = (isset($inodr['cid'])) ? $inodr['cid']                   : -1;
        $this->load->view('formact', $data);
    ?>

</form>

<script src="script/scripts.js"></script>
<script src="script/jquery-selectboxes.js"></script>
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
        <?php } else { ?>
            $("input[name='rcv_date']").datepicker();
            $("input[name='rcv_date']").datepicker( "option", "dateFormat", "yy-mm-dd");

            <?php if ($act == "detail_add") { ?>
                // clear exist value
                $("input[type='text']").each(function() {
                    $(".inodr").attr({value:""});
                });

                // set datepicker
                $("input[name='owner']").val("Aclor International Inc.");
            <?php } else if ($act == "detail_edit") { ?>
                $("input[name='rcv_date']").val("<?php if(isset($inodr['rcv_date'])) echo $inodr['rcv_date'];?>");
            <?php } ?>

            // set type ahead for some field
            var companies = <?=$companies;?>;
            var items = <?=$items;?>;

            $("input[name='rcv_date']").attr({'autocomplete': 'off'});
            input_typeahead("owner", companies);
            input_typeahead("vendor", companies);
            input_typeahead("item_num", items);

            form_validate("#receipt_form");
        <?php } ?>

        $("input[name='item_num']").change(function () {
            $.ajax({
                type: "GET",
                url: 'item/getunit/' + $(this).val(),
                cache: false,
                data: '',
                success: function(data){
                    rst = JSON.parse(data);
                    //console.log(unit.item_num);
                    $("input[name='unit']").val(rst.unit);
                    $("input[name='unit1']").val(rst.unit1);
                }
            });
        });
    });
</script>
