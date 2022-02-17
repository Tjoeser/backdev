<section>
    <nav>
    <?php include_once 'functions.php';
    $nav = [
        'Admin Home'=>'adminhome.php',
        'Nieuw bestand maken'=>'createfile.php',
        'Nieuwe opdrachten'=>'nieuweopdrachten.php',
    ];
    echo createlist($nav, 'sidebar');
    ?>
</nav>