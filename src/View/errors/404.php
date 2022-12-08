<?php
    $title = "Page non trouvée";
    $css = "error404";
    $js = "error404";
?>

<?php ob_start(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Error 404 - Page non trouvée</h1>
                <p class="text-center">La page que vous avez demandée n'existe pas.</p>
            </div>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>