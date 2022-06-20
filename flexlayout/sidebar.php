<link rel="stylesheet" href="media/styles003.css">
<section>
    <nav>
    <?php include_once 'functions.php';
    $nav = [
        'Een'=>'index.php',
        'Twee'=>'news.php',
        'Drie'=>'contacts.php',
    ];
    echo createlist($nav, '');
    ?>
</nav>