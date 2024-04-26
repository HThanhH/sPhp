<?php
include 'header.php';
$config_name = "menu";
$config_title = "danh mục";
if (!empty($_SESSION['current_user'])) {
    if (!empty($_GET['action']) && $_GET['action'] == 'search' && !empty($_POST)) {
        $_SESSION[$config_name . '_filter'] = $_POST;
        header('Location: ' . $config_name . '_listing.php');
        exit;
    }
    if (!empty($_SESSION[$config_name . '_filter'])) {
        $where = "";
        foreach ($_SESSION[$config_name . '_filter'] as $field => $value) {
            if (!empty($value)) {
                switch ($field) {
                    case 'name':
                        $where .= (!empty($where)) ? " AND " . "`" . $field . "` = '" . $value . "'" : "`" . $field . "` = '" . $value . "'";
                        break;
                    default:
                        $where .= (!empty($where)) ? " AND " . "`" . $field . "` = " . $value . "" : "`" . $field . "` = " . $value . "";
                        break;
                }
            }
        }
        extract($_SESSION[$config_name . '_filter']);
    }
    $item_per_page = (!empty($_GET['per_page'])) ? $_GET['per_page'] : 10;
    $current_page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $offset = ($current_page - 1) * $item_per_page;
    if(!empty($where)){
        $totalRecords = mysqli_query($con, "SELECT * FROM `loaisp` where (".$where.")");
    }else{
        $totalRecords = mysqli_query($con, "SELECT * FROM `loaisp`");
    }
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);
    if(!empty($where)){
        $loaisp = mysqli_query($con, "SELECT * FROM `loaisp` where (".$where.") ORDER BY `id_loai` DESC LIMIT " . $item_per_page . " OFFSET " . $offset);
    }else{
        $loaisp = mysqli_query($con, "SELECT * FROM `loaisp` ORDER BY `id_loai` DESC LIMIT " . $item_per_page . " OFFSET " . $offset);
    }
    mysqli_close($con);
    ?>
    <div class="main-content">
        <h1>Danh sách danh mục</h1>
        <div class="listing-items">
            <div class="buttons">
                <a href="./<?= $config_name ?>_editing.php">Thêm <?= $config_title ?></a>
            </div>
            
            <ul id="<?= $config_name ?>-list">
                <li class="listing-item-heading">
                    <div class="listing-prop listing-name"  style="width:643px;">Tên <?= $config_title ?></div>
                    <div class="listing-prop listing-button">
                        Xóa
                    </div>
                    <div class="listing-prop listing-button">
                        Sửa
                    </div>
                    <div class="listing-prop listing-button">
                        Copy
                    </div>
                    
                    <div class="clear-both"></div>
                </li>
                <?php
                while ($row = mysqli_fetch_array($loaisp)) {
                    ?>
                    <li>
                        
                        <div class="listing-prop listing-name"style="width:643px;"><?= $row['ten_loai'] ?></div>
                        <div class="listing-prop listing-button">
                            <a href="./<?=$config_name?>_delete.php?id=<?= $row['id_loai'] ?>">Xóa</a>
                        </div>
                        <div class="listing-prop listing-button">
                            <a href="./<?=$config_name?>_editing.php?id=<?= $row['id_loai'] ?>">Sửa</a>
                        </div>
                        <div class="listing-prop listing-button">
                            <a href="./<?=$config_name?>_editing.php?id=<?= $row['id_loai'] ?>&task=copy">Copy</a>
                        </div>
                        
                        <div class="clear-both"></div>
                    </li>
                <?php } ?>
            </ul>
            <div class="clear-both"></div>
        </div>
    </div>
    <?php
}
include './footer.php';
?>