<?php include_once './templates/header.php'; ?>
<div class="container py-3">
    <div class="row">
        <div class="col-md-12">
            <form action="process_registration.php" method="post">
                Username: <input type="text" name="username" required><br>
                Email: <input type="email" name="email" required><br>
                Password: <input type="password" name="password" required><br>
                <input type="submit" class="btn btn-primary" value="Register">
            </form>
        </div>
    </div>
</div>



<?php include_once './templates/footer.php'; ?>