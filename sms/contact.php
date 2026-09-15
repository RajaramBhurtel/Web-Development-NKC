<?php
session_start();
include('./functions/helper.php');

if (!is_user_logged_in()) {
    header("Location: login.php");
    exit();
}

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
                            <h3 class="card-title">Contact Us</h3>
                        </div>

                        <form method="post">

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="name"
                                        placeholder="Your name"
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="Your email"
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea
                                        class="form-control"
                                        id="message"
                                        name="message"
                                        rows="5"
                                        placeholder="Your message"
                                    ></textarea>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Send Message
                                </button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<?php include('./templates/foot.php'); ?>
