<title><?= $_GET['category'] ?></title>
<meta name="description" content="<?= $_GET['category'] ?>">
<meta name="keywords" content="<?= $_GET['category'] ?>">
</head>
<body>
<?php include_once("./navbar.php"); ?>
<ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope
        itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="/">
            <span itemprop="name">Home</span></a>
        <meta itemprop="position" content="1" />
    </li>
    <li itemprop="itemListElement" itemscope
        itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="/<?= $_GET['category'] ?>">
            <span itemprop="name"><?= $_GET['category'] ?></span></a>
        <meta itemprop="position" content="2" />
    </li>
</ul>
<h1><?= $_GET['category'] ?></h1>
<p><?= $_GET['category'] ?></p>
<div class='container'>
    <div>
        <?php
        // Nội dung trang category
        $files = glob('pages/' . $_GET['category'] . '/*');
        foreach ($files as $file) {
            echo '<a href="' . $_GET['category'] . '/' . pathinfo(basename($file), PATHINFO_FILENAME) . '">' . pathinfo(basename($file), PATHINFO_FILENAME) . '</a><br>';
        }
        ?>
    </div>
</div>