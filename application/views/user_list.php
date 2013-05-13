<div class="container">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="list_table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Auth</th>
                <th>
                    <a href="user/add" class="btn btn-primary">New User</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user) { ?>
                <tr>
                    <td class="span1"><?=$user['username'];?></td>
                    <td class="span2"><?=$user['password'];?></td>
                    <td class="span1"><?=$user['auth'];?></td>
                    <td class="span1">
                        <a href="user/remove/<?=$user['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div> <!-- /container -->
