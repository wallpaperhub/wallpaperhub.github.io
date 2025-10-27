<?php
if (!empty($_GET)) {
    if (!empty($_GET['post_slug'])) {
        // Lấy slug từ URL
        $slug = $_GET['category'] . "/" . $_GET['post_slug'];
        // Kiểm tra xem slug có tồn tại hay không
        if (file_exists('pages/' . $slug . '.php')) {
            // Nếu tồn tại, bao gồm file đó
            include 'pages/' . $slug . '.php';
        } else {
            // Nếu không tồn tại, hiển thị thông báo lỗi
            echo 'Page not found';
        }
    } else {
        // Nội dung trang category
        include 'static/category.php';
    }
} else {
    // Nội dung trang chính
    include 'static/home.php';
}