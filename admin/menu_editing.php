<?php
include 'header.php';
if (!empty($_SESSION['current_user'])) {
    ?>
    <div class="main-content">
        <h1><?= !empty($_GET['id']) ? ((!empty($_GET['task']) && $_GET['task'] == "copy") ? "Copy danh mục" : "Sửa danh mục") : "Thêm danh mục" ?></h1>
        <div id="content-box">
            <?php
            if (isset($_GET['action']) && ($_GET['action'] == 'add' || $_GET['action'] == 'edit')) {
                if (isset($_POST['ten_loai']) && !empty($_POST['ten_loai']) ) {
                    if (empty($_POST['ten_loai'])) {
                        $error = "Bạn phải nhập tên danh mục";
                    }
                    if (!isset($error)) {
                        if ($_GET['action'] == 'edit' && !empty($_GET['id'])) { //Cập nhật lại danh mục                            
                            $result = mysqli_query($con, "UPDATE `loaisp` SET `ten_loai` = '".$_POST['ten_loai']."' WHERE `loaisp`.`id_loai` = ".$_GET['id'].";");
                        } else { //Thêm danh mục
                            $result = mysqli_query($con, "INSERT INTO `loaisp`(`id_loai`, `ten_loai`) VALUES (NULL, '".$_POST['ten_loai']."');");
                        }
                        if (!$result) { //Nếu có lỗi xảy ra
                            $error = "Có lỗi xảy ra trong quá trình thực hiện.";
                        } 
                    }
                } else {
                    $error = "Bạn chưa nhập thông tin danh mục.";
                }
                ?>
                <div class = "container">
                    <div class = "error"><?= isset($error) ? $error : "Cập nhật thành công" ?></div>
                    <a href = "menu_listing.php">Quay lại danh sách danh mục</a>
                </div>
                <?php
            } else {
                if (!empty($_GET['id'])) {
                    $result = mysqli_query($con, "SELECT * FROM `loaisp` WHERE `id_loai` = " . $_GET['id']);
                    $currentMenu = $result->fetch_assoc();
                    
                }
                ?>
                <form id="editing-form" method="POST" action="<?= (!empty($currentMenu) && !isset($_GET['task'])) ? "?action=edit&id=" . $_GET['id'] : "?action=add" ?>"  enctype="multipart/form-data">
                    <input type="submit" title="Lưu danh mục" value="" />
                    <div class="clear-both"></div>
                    <div class="wrap-field">
                        <label>Tên danh mục: </label>
                        <input style="text-transform: uppercase; " type="text" name="ten_loai" value="<?= (!empty($currentMenu) ? $currentMenu['ten_loai'] : "") ?>" />
                        <div class="clear-both"></div>
                    
                </form>
                <div class="clear-both"></div>
            <?php } ?>
        </div>
    </div>

    <?php
}
include './footer.php';
?>