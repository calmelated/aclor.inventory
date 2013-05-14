<link rel="stylesheet" href="css/jquery.fileupload-ui.css">

<div class="container">
    <div class="page-header">
        <h3>Upload Files</h3>
    </div>

    <!-- The file upload form used as target for the file upload widget -->
    <?php echo form_open_multipart('fileup/upitems', array('id' => 'fileupload', 'class' => 'form-horizontal'));?>
        <!-- The fileinput-button span is used to style the file input field as button -->
        <span class="btn btn-success fileinput-button">
            <i class="icon-plus icon-white"></i>
            <span>Item File</span>
            <!-- The file input field used as target for the file upload widget -->
            <input type="file" name="userfile" size="128"/>
        </span>

        <div id="itemlist"></div> <br> <br>

        <button type="submit" class="btn btn-primary start" disabled>
            <i class="icon-upload icon-white"></i>
            <span>Import</span>
        </button>
    </form>

    <?php var_dump($upload_status); ?>
</div>

<script>
$(function () {
    var fup = $('input[name=userfile]');
    fup.change(function () {
        //console.log(fup.val());
        $("#itemlist").html(fup.val());
        $("button[type=submit]").attr({'disabled':false});
    });
});
</script>
