<?php
include 'header.php';
if (!empty($_SESSION['current_user'])) {
    ?>
    <div class="main-content">
        <h1>Xóa danh mục</h1>
        <div id="content-box">
            <?php
            $error = false;
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                include '../connect_db.php';
                $result = mysqli_query($con, "DELETE FROM `loaisp` WHERE `id_loai` = " . $_GET['id']);
                if (!$result) {
                    $error = "Không thể xóa danh mục sản phẩm.";
                }
                mysqli_close($con);
                if ($error !== false) {
                    ?>
                    <div id="error-notify" class="box-content">
                        <h2>Thông báo</h2>
                        <h4><?= $error ?></h4>
                        <a href="./menu_listing.php">Danh sách danh mục sản phẩm</a>
                    </div>
        <?php } else { ?>
                    <div id="success-notify" class="box-content">
                        <h2>Xóa sản phẩm thành công</h2>
                        <a href="./menu_listing.php">Danh sách danh mục sản phẩm</a>
                    </div>
                <?php } ?>
    <?php } ?>
        </div>
    </div>
    <?php
}
include 'footer.php';
?>