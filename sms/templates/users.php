<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Users
                </h3>
            </div>
            <div class="card-body">
                <?php
                if(isset($_GET['success']) && $_GET['success'] == 1){
                    echo "<div class='alert alert-success'>User deleted successfully.</div>";
                } elseif(isset($_GET['error']) && $_GET['error'] == 1){
                    echo "<div class='alert alert-danger'>Error deleting user.</div>";
                }
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM users";
                        $result = mysqli_query($conn, $sql);
                        $i=1;
                        while ($user =mysqli_fetch_assoc($result)): 
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $user['fname']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['user_role']; ?></td>
                            <td><?php echo $user['created_at']; ?></td>
                            <td>
                                <a href="edit_user.php?id=<?php echo $user['id']; ?>" class="btn btn-primary">Edit</a>
                                <a href="./functions/delete_user.php?id=<?php echo $user['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        <?php
                        endwhile;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>