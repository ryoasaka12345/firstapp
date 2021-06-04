<div class="container pt-4 pb-4">
    <h1> Information of <?php echo $user->first_name . " " . $user->last_name;?></h1>   
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">EMAIL</th>
                <th scope="col">PHONE NUMBER</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo $user->id?></th>
                <td><?php echo $user->email?></td>
                <td><?php echo $user->phone_number?></td>
            </tr>
        </tbody>
    </table>
</div>
