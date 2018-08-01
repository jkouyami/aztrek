<?php
require_once 'model/database.php';
$list_pays = getAllEntities("pays");
?>
<nav class="main-nav">
    <ul class="menu">

        <li>
            <a href="#">Destinations</a>
            <ul class="sous-menu">
                
                <?php foreach ($list_pays as $pays) : ?>
                    <li>
                        <a href="pays.php?id=<?php echo $pays["id"]; ?>">
                            <?php echo $pays["nom"]; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                  
            </ul>
        </li>
        <li>
            <a href="#">Notre agence</a>
            <ul class="sous-menu">
                <li>
                    <a href="#">Présentation</a>
                </li>
                <li>
                    <a href="#">L'équipe</a>
                </li>
                <li>
                    <a href="#">Nos conseils</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Communauté</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul>
</nav>