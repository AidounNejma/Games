<?php
    $title = "Pendu";
    $css = "hangman";
    $js = "hangman";
?>

<?php ob_start(); ?>

<div class="wrapper">
    <h1>Le pendu</h1>
    <p>Utilisez l'alphabet ci-dessous pour deviner le mot ou cliquez sur "indice"</p>
</div>
<div class="wrapper">
    <div id="buttons">
    </div>  
    <p id="catagoryName"></p>
    <div id="hold"></div>
    <p id="mylives"></p>
    <p id="clue">Clue -</p>  
        <canvas id="stickman">Ce texte apparaîtra si le navigateur ne supporte PAS les balises Canvas HTML5.</canvas>
    <div class="container">
        <button id="hint">Indice</button>
        <button id="reset">Rejouer</button>
    </div>
</div>
    
<?php $content = ob_get_clean(); ?>