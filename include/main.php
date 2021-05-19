<?php
    foreach($tablProd as $tempTitreProd):
?>
<div>
    <h2>
        <?php echo $tempTitreProd['titre'] ?>
    </h2>
    <p>
        <?php echo $tempTitreProd['cat'] ?>
    </p>
    <p>
        <?php echo $tempTitreProd['def'] ?>
    </p>
    <img src =
        <?php
            echo $tempTitreProd['imgsrc']
        ?>
    >
</div>
<?php
    endforeach;
?>