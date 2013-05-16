<div class="page-header">
   <h3 style="text-indent: 3em;"> Add Reqisition </h3>
</div>

<?php
    if($outodrs != null) {
        $cid    = unserialize($outodrs[0]['cid']);
        $item_num = unserialize($outodrs[0]['item_num']);
        $qty    = unserialize($outodrs[0]['qty']);
        $unit   = unserialize($outodrs[0]['unit']);
        $qty1   = unserialize($outodrs[0]['qty1']);
        $unit1  = unserialize($outodrs[0]['unit1']);
    }

    if($act == "detail_edit") {
        $outodr = $outodrs[0];
        echo form_open('outodr/id_edit/'.$outodr['id'], array('id' => 'reqisition_form', 'class' => 'form-horizontal'));
    } else if($act == "detail_add"){
        echo form_open('outodr/add', array('id' => 'reqisition_form', 'class' => 'form-horizontal'));
    } else {
        $outodr = $outodrs[0];
        echo form_open('', array('id' => 'reqisition_form', 'class' => 'form-horizontal'));
    }
?>

    <?php if($act == "detail") { ?>
        <div class="control-group">
            <label class="control-label">Create Date</label>
            <div class="controls">
                <label><?php if(isset($outodr['cre_date'])) echo $outodr['cre_date'];?></label>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Modifier</label>
            <div class="controls">
                <label><?php if(isset($outodr['modifier'])) echo $outodr['modifier'];?></label>
            </div>
        </div>
    <?php } ?>

    <div class="control-group">
        <label class="control-label">Reqisition Date<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="req_date" class="outodr" placeholder="Format: 2013-01-01" value="<?php if(isset($outodr['req_date'])) echo $outodr['req_date'];?>">
            <?php echo '<div style="color:red">'.form_error('req_date').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Work Order #<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="wo_num" class="outodr" value="<?php if(isset($outodr['wo_num'])) echo $outodr['wo_num'];?>">
            <?php echo '<div style="color:red">'.form_error('wo_num').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Finished Product #<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="fin_prod" class="outodr" value="<?php if(isset($outodr['fin_prod'])) echo $outodr['fin_prod'];?>">
            <?php echo '<div style="color:red">'.form_error('fin_prod').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Raw Material #<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="raw_num" class="outodr" value="<?php if(isset($outodr['raw_num'])) echo $outodr['raw_num'];?>">
            <?php echo '<div style="color:red">'.form_error('raw_num').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Item #<span class="star"> * </span></label>
        <?php for($i = 0; $i < MAX_ITEMS; $i = $i + 1) { ?>
            <div class="controls">
                <input type="text" name="item_num_<?=$i;?>" class="input-medium outodr" value="<?php if(!empty($item_num[$i])) echo $item_num[$i]?>" data-provide="typeahead">
                <input type="text" name="qty_<?=$i;?>"      class="input-mini outodr"   value="<?php if(!empty($qty[$i]))   echo $qty[$i]?>"         >
                <input type="text" name="unit_<?=$i;?>"     class="input-mini outodr"   value="<?php if(!empty($unit[$i]))  echo $unit[$i]?>"        data-provide="typeahead">
                <input type="text" name="qty1_<?=$i;?>"     class="input-mini outodr"   value="<?php if(!empty($qty1[$i]))  echo $qty1[$i]?>"        >
                <input type="text" name="unit1_<?=$i;?>"    class="input-mini outodr"   value="<?php if(!empty($unit1[$i])) echo $unit1[$i]?>"       data-provide="typeahead">
                <?php echo '<div style="color:red">'.form_error('item_num_' . $i).'</div>';?>
                <?php echo '<div style="color:red">'.form_error('qty_'      . $i).'</div>';?>
                <?php echo '<div style="color:red">'.form_error('unit_'     . $i).'</div>';?>
                <?php echo '<div style="color:red">'.form_error('qty1_'     . $i).'</div>';?>
                <?php echo '<div style="color:red">'.form_error('unit1_'    . $i).'</div>';?>
                <input type="hidden" name="cid_<?=$i;?>" value="<?php if(!empty($cid[$i])) echo $cid[$i];?>">
            </div>
        <?php } ?>
    </div>

    <div class="control-group">
        <label class="control-label">Approved By<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="prod_approved" class="outodr" value="<?php if(isset($outodr['prod_approved'])) echo $outodr['prod_approved'];?>" placeholder="Warehouse">
            <input type="text" name="wh_approved"   class="outodr" value="<?php if(isset($outodr['wh_approved'])) echo $outodr['wh_approved'];?>"     placeholder="Production">
            <?php echo '<div style="color:red">'.form_error('prod_approved').'</div>';?>
            <?php echo '<div style="color:red">'.form_error('wh_approved').'</div>';?>
        </div>
    </div>

    <?php
        $data['act']    = $act;
        $data['add']    = 'outodr/add';
        $data['remove'] = (isset($outodr['id']))  ? 'outodr/id_del/'  . $outodr['id'] : '';
        $data['edit']   = (isset($outodr['id']))  ? 'outodr/id_edit/' . $outodr['id'] : '';
        $data['cid']    = (isset($outodr['cid'])) ? $outodr['cid']                    : -1;
        $this->load->view('formact', $data);
    ?>

</form>

<script src="script/scripts.js"></script>
<script>
    $(document).ready(function() {
        <?php if ($act == "detail") { ?>
            // set some field can't editable
            $("input[type='text']").each(function() {
                $(".outodr").addClass("uneditable-input");
            }).attr({readonly:true});

            $("input[type=submit]").click(function(event){
                return false;
            });
        <?php } else { ?>
            // set datepicker, the init value need to be reset again.
            $("input[name='req_date']").datepicker();
            $("input[name='req_date']").datepicker("option", "dateFormat", "yy-mm-dd");
            $("input[name='req_date']").attr({'autocomplete': 'off'});

            <?php if ($act == "detail_add") { ?>
                // clear exist value
                $("input[type='text']").each(function() {
                    $(".outodr").attr({value:""});
                });
            <?php } else if ($act == "detail_edit") { ?>
                $("input[name='req_date']").val("<?php if(isset($outodr['req_date'])) echo $outodr['req_date'];?>");
            <?php } ?>

            // set placeholder
            $("input[name='item_num_0']").attr({'placeholder': 'Item #'});
            $("input[name='qty_0']").attr({'placeholder': 'Qty'});
            $("input[name='unit_0']").attr({'placeholder': 'Unit'});
            $("input[name='qty1_0']").attr({'placeholder': 'Qty1'});
            $("input[name='unit1_0']").attr({'placeholder': 'Unit1'});

            // set type ahead for some field
            var items = <?=$items;?>;
            var units = <?=$units;?>;

            <?php for($i = 0; $i < MAX_ITEMS; $i = $i + 1) { ?>
                input_typeahead('item_num_<?=$i;?>', items);
                input_typeahead('unit_<?=$i;?>' , units);
                input_typeahead('unit1_<?=$i;?>', units);
            <?php } ?>

            form_validate("#reqisition_form");
        <?php } ?>
    });
</script>
