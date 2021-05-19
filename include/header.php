<header>
    <h1>Animalerie</h1>

    <ul>
    <?php
        foreach($tablCat as $tempCat):
        ?>
       <li>
           <?php echo $tempCat; ?>
        </li>
        <?php endforeach; ?>
    </ul>
</header>