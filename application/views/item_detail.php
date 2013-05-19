<div class="page-header">
   <h3 style="text-indent: 3em;"> Edit Item List</h3>
</div>

<?php
    if($act == "detail_edit") {
        $item = $items[0];
        echo form_open('item/edit/'.$item['id'], array('id' => 'item_form', 'class' => 'form-horizontal'));
    } else if($act == "detail_add"){
        echo form_open('item/add', array('id' => 'item_form', 'class' => 'form-horizontal'));
    }
?>

    <div class="control-group">
        <label class="control-label">Item #<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="item_num" class="item" value="<?php if(isset($item['name'])) echo $item['name']?>">
            <?php echo '<div style="color:red">'.form_error('item_num').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Unit<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="unit" class="input-small adjodr" value="<?php if(isset($item['unit'])) echo $item['unit']?>">
            <?php echo '<div style="color:red">'.form_error('unit').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Unit1</label>
        <div class="controls">
            <input type="text" name="unit1" class="input-small adjodr" value="<?php if(isset($item['unit1'])) echo $item['unit1']?>">
            <?php echo '<div style="color:red">'.form_error('unit1').'</div>';?>
        </div>
    </div>

    <?php
        $data['act']    = $act;
        $data['add']    = 'item/add';
        $data['remove'] = (isset($item['id'] )) ? 'item/remove/'. $item['id'] : '';
        $data['edit']   = (isset($item['id'] )) ? 'item/edit/'  . $item['id'] : '';
        $data['cid']    = (isset($item['cid'])) ? $item['cid']                : -1;
        $this->load->view('formact', $data);
    ?>

</form>

<script src="script/scripts.js"></script>
<script>
    $(document).ready(function() {
        <?php if ($act == "detail_add") { ?>
            // clear exist value
            $("input[type='text']").each(function() {
                $(".item").attr({value:""});
            });
        <?php } ?>

        form_validate("#item_form");
    });
</script>
