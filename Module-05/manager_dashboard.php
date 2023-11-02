<?php include_once './templates/header.php'; ?>
<?php
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'manager') {
    header("Location: index.php");
}
?>
<div class="container py-3">
    <div class="row">
        <div class="col-md-12">
            <h3>Hello,
                <?php echo $_SESSION['username'] ?? ''; ?>
            </h3>
        </div>
    </div>
</div>

<?php include_once './templates/footer.php'; ?>