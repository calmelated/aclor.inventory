<div class="container">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="list_table">
        <thead>
            <tr>
                <th>Company</th>
                <th>Contact</th>
                <th>Tel</th>
                <th>Fax</th>
                <th>Email</th>
                <th>Address</th>
                <th>
                    <a href="comp/add" class="btn btn-primary">New</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($comps as $comp) { ?>
                <tr>
                    <td class="span1"><?=$comp['name'];?></td>
                    <td class="span1"><?=$comp['contact'];?></td>
                    <td class="span1"><?=$comp['tel'];?></td>
                    <td class="span1"><?=$comp['fax'];?></td>
                    <td class="span1"><?=$comp['email'];?></td>
                    <td class="span2"><?=$comp['address'];?></td>
                    <td class="span2">
                        <a href="comp/edit/<?=$comp['id']  ;?>" class="btn btn-info">Edit</a>
                        <a href="comp/remove/<?=$comp['id'];?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div> <!-- /container -->
