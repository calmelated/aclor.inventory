<div class="form-actions">
    <input type="hidden" name="cid" value="<?=$cid;?>">
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
        <?php } else { ?>
            <a href="<?=$add;?>" class="btn btn-primary">
                <i class="icon-ok icon-white"></i> Create Next
            </a>
        <?php } ?>
    <?php } else { ?>
        <button type="button" class="btn btn-info" onclick="javascript:window.history.back();">
            <i class="icon-share-alt icon-white"></i> Back
        </button>
    <?php } ?>

    <?php if(($this->session->userdata['user_auth'] > 1) &&  /* auth:2 admin */
             ($act == "detail" || $act == "detail_edit")) { ?>
        <a href="<?=$remove;?>" class="btn btn-danger pull-right">
            <i class="icon-trash icon-white"></i> Delete
        </a>
    <?php } ?>

    <?php if(($this->session->userdata['user_auth'] > 1) &&  /* auth:2 admin */
             ($act == "detail")) { ?>
        <a href="<?=$edit;?>" class="btn btn-info pull-right">
            <i class="icon-edit icon-white"></i> Edit
        </a>
    <?php } ?>
</div>
