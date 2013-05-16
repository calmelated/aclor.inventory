<div class="container">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="list_table">
        <thead>
            <tr>
                <th>Item #</th>
                <th>Unit</th>
                <th>Unit1</th>
                <th>
                    <a href="fileup/items" class="btn">Import</a>
                    <a href="item/add" class="btn btn-primary">New</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($items as $item) { ?>
                <tr>
                    <td class="span2"><?=$item['name'];?></td>
                    <td class="span1"><?=$item['unit'];?></td>
                    <td class="span1"><?=$item['unit1'];?></td>
                    <td class="span1">
                        <a href="item/edit/<?=$item['id']  ;?>" class="btn btn-info">Edit</a>
                        <a href="item/remove/<?=$item['id'];?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div> <!-- /container -->
