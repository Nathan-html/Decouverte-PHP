<h1>
    *****
</h1>
<article>
    <?php
        foreach($tablProd as $tempTitreProd):
    ?>
    <div>
        <h2>
            <?php echo $tempTitreProd['titre'] ?>
        </h2>
        <img src =
            <?php
                echo $tempTitreProd['imgsrc']
            ?>>
        <p>
            <?php echo $tempTitreProd['def'] ?>
        </p>
    </div>
    <?php
        endforeach;
    ?>
<article>