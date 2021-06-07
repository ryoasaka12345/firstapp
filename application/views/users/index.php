<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1>List of User</h1>
        <?php echo form_open('users/delete_multi'); ?>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col"><input type="checkbox" name="select-All" id="select-All" onchange="checkAll()"></th>
                    <th scope="col">#</th>
                    <th scope="col">Pirst Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phpne Number</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <th sope="row"><input type="checkbox" name="ids[]" class="usrCheck" value="<?php echo $user["id"]; ?>"></th>
                        <th scope="row"><?php echo $user["id"]; ?></th>
                        <td><?php echo $user["first_name"]; ?></td>
                        <td><?php echo $user["last_name"]; ?></td>
                        <td><?php echo $user["phone_number"]; ?></td>
                        <td>
                            <a href="<?php echo site_url("users/view_user/$user[id]"); ?>"><span class="btn btn-primary btn-sm">View</span></button></a>
                            <a href="<?php echo site_url("users/update/$user[id]"); ?>"><span class="btn btn-outline-primary btn-sm">Edit</span></button></a>
                            <a onclick="return confirm ('Are you sure to delete this user?')" href="<?php echo site_url("users/dqelete/$user[id]") ?>">
                                <span class="btn btn-sm">Delete</span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p><button type="submit" class="btn btn-danger">Delete</button></p>
        <?php echo form_close(); ?>
    </div>
</main>
