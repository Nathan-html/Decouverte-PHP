<header>
    <h1>L'animalerie du web</h1>

    <ul>
    <?php
        foreach($tablCat as $tempCat):
        ?>
       <li>
           <?php echo $tempCat; ?>
        </li>
        <?php endforeach; ?>
        <li></li>
    </ul>
</header>