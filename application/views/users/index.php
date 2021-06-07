<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1>List of User</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th><input type="checkbox" id="usrCheckAll" onchange="checkAll()"></th>
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
                        <td><input type="checkbox" class="usrCheck" value="<?php echo $user["id"]?>"></td>
                        <th scope="row"><?php echo $user["id"]; ?></th>
                        <td><?php echo $user["first_name"]; ?></td>
                        <td><?php echo $user["last_name"]; ?></td>
                        <td><?php echo $user["phone_number"]; ?></td>
                        <td>
                            <?php $test=1?>
                            <a href="<?php echo site_url("users/view_user/$user[id]");?>"><button class="btn btn-primary btn-sm">View</button></a>
                            <a href="<?php echo site_url("users/update/$user[id]") ?>"><button class="btn btn-outline-primary btn-sm">Edit</button></a>
                            <a onclick="return confirm ('Are you sure to delete this user?')" href="<?php echo site_url("users/delete/$user[id]") ?>">
                                <button class="btn btn-sm">Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p><button onclick="selectChecked()">Delete</button></p>
        <p><span class = "testOutput">aaa</span></p>
    </div>
</main>
