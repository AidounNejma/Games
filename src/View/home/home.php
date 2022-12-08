<?php
    $title = "Accueil";
    $css = "home";
    $js = "home";
?>

<?php ob_start(); ?>

<section class="container d-flex m-2">
    <div class="card m-4">
        Pendu
    </div>
    <div class="card m-4">
        Tetris
    </div>
    <div class="card m-4">
        Memories
    </div>
    <div class="card m-4">
        Motus
    </div>
</section>
    
    
<?php $content = ob_get_clean(); ?>
