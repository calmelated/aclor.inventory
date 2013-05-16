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
        <label class="control-label">Qty<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="unit" class="input-small adjodr" value="<?php if(isset($item['unit'])) echo $item['unit']?>">
            <?php echo '<div style="color:red">'.form_error('unit').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Qty1</label>
        <div class="controls">
            <input type="text" name="unit1" class="input-small adjodr" value="<?php if(isset($item['unit1'])) echo $item['unit1']?>">
            <?php echo '<div style="color:red">'.form_error('unit1').'</div>';?>
        </div>
    </div>

    <div class="form-actions">
        <input type="hidden" name="add_next" value="0">

        <?php if($this->session->userdata['user_auth'] > 0) { /* auth: operator, manager, admin  */ ?>
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
            <?php } ?>
        <?php } else { ?>
            <button type="button" class="btn btn-info" onclick="javascript:window.history.back();">
                <i class="icon-share-alt icon-white"></i> Back
            </button>
        <?php } ?>

        <?php if(($this->session->userdata['user_auth'] > 1) &&   /* auth:2 admin */
                 ($act == "detail_edit")) { ?>
            <a href="item/remove/<?=$item['id']; ?>" class="btn btn-danger pull-right">
                <i class="icon-trash icon-white"></i> Delete
            </a>
        <?php } ?>
    </div>

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
