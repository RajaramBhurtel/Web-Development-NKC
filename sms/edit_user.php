<?php
session_start();
include('./functions/helper.php');
include('./functions/config.php');

$id = $_GET['id'] ?? null;
$sql = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

include('./templates/header.php');
include('./templates/navbar.php');
?>
<div class="content-wrapper">
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="card card-primary mt-4">

                        <div class="card-header">
                            <h3 class="card-title">Edit User</h3>
                        </div>

                        <form method="post" action="./functions/edit_user.php">

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="fname"
                                        value ="<?php echo $user['fname']; ?>"
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email"    
                                        value="<?php echo $user['email']; ?>"
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="password"
                                        name="password"
                                        value=""
                                    >
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Update User
                                </button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('./templates/foot.php');
?>