<?php
$title = "Exo 1";
require 'header.php';
?>

<!-- QUESTION 1 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 1</h2>
    <p class="exercice-txt">Evrivez la phrase suivante dans une balise HTML P en utilisant les 2 variables ci-dessous :</p>
    <p class="exercice-txt">"<i>Firstname</i> a obtenu <i>score</i> points à cette partie."</p>
    <div class="exercice-sandbox">
        <?php
        $firstname = "Michel";
        $score = 327;
        echo "<p> $firstname a obtenu $score points à cette partie </p>"
        ?>
    </div>
</section>


<!-- QUESTION 2 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 2</h2>
    <p class="exercice-txt">Afficher dans une liste HTML le nom des produits suivants et leurs prix.</p>
    <div class="exercice-sandbox">
        <?php
        $nameProduct1 = "arc";
        $priceProduct1 = 10.30;
        $nameProduct2 = "flèche";
        $priceProduct2 = 2.90;
        $nameProduct3 = "potion";
        $priceProduct3 = 5.20;
        echo "<ul>
                <li>$nameProduct1 : $priceProduct1</li>
                <li>$nameProduct2 : $priceProduct2</li>
                <li>$nameProduct3 : $priceProduct3</li>
                </ul>"
        ?>
    </div>
</section>

<!-- QUESTION 3 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 3</h2>
    <p class="exercice-txt">Calculer le montant total de la commande des produits ci-dessus avec les quantités ci-dessous et appliquez lui une remise de 10%.</p>
    <div class="exercice-sandbox">
        <?php
        $quantityProduct1 = 1;
        $quantityProduct2 = 10;
        $quantityProduct3 = 4;
        $total = (($priceProduct1 * $quantityProduct1) + ($priceProduct2 * $quantityProduct2) + ($priceProduct3 * $quantityProduct3)) * 0.9;
        echo "$total"
        ?>
    </div>
</section>


<!-- QUESTION 4 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 4</h2>
    <p class="exercice-txt">Affichez le prix le plus élevé des 3 produits ci-dessus.</p>
    <div class="exercice-sandbox">
        <?php echo max($priceProduct1, $priceProduct2, $priceProduct3) ?>
    </div>
</section>

<!-- QUESTION 5 -->
<?php

$text1 = "Le marchand m'a vendu un arc et des flèches.";

?>
<section class="exercice">
    <h2 class="exercice-ttl">Question 5</h2>
    <p class="exercice-txt">Affichez dans une liste HTML le nom des produits de la question 2 qui sont présents dans la phrase : "<?= $text1 ?>"</p>
    <div class="exercice-sandbox">
        <?php

        if (str_contains($text1, $nameProduct1)) {
            echo "<li>$nameProduct1</li>";
        }
        if (str_contains($text1, $nameProduct2)) {
            echo "<li>$nameProduct2</li>";
        }
        if (str_contains($text1, $nameProduct3)) {
            echo "<li>$nameProduct3</li>";
        }

        ?>
    </div>
</section>

<!-- QUESTION 6 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 6</h2>
    <p class="exercice-txt">Parmis les scores suivants, affichez le prénom des joueurs qui ont obtenus entre 50 et 150 points.</p>
    <div class="exercice-sandbox">
        <?php
        $namePlayer1 = "Tim";
        $scorePlayer1 = 67;
        $namePlayer2 = "Morgan";
        $scorePlayer2 = 198;
        $namePlayer3 = "Hamed";
        $scorePlayer3 = 21;
        $namePlayer4 = "Camille";
        $scorePlayer4 = 134;
        $namePlayer5 = "Kevin";
        $scorePlayer5 = 103;

        if (50 <= $scorePlayer1 && $scorePlayer1 <= 150) {
            echo "<li>$namePlayer1</li>";
        }
        if (50 <= $scorePlayer2 && $scorePlayer2 <= 150) {
            echo "<li>$namePlayer2</li>";
        }
        if (50 <= $scorePlayer3 && $scorePlayer3 <= 150) {
            echo "<li>$namePlayer3</li>";
        }
        if (50 <= $scorePlayer4 && $scorePlayer4 <= 150) {
            echo "<li>$namePlayer4</li>";
        }
        if (50 <= $scorePlayer5 && $scorePlayer5 <= 150) {
            echo "<li>$namePlayer5</li>";
        }

        ?>
        </ul>
    </div>
</section>


<!-- QUESTION 7 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 7</h2>
    <p class="exercice-txt">En réutilisant les scores de la question pécédente, afficher le nom du joueur ayant obtenu le plus grand score.</p>
    <div class="exercice-sandbox">
        <?php
        $maxScore = 0;
        $winnerName = '';
        $scores = [$scorePlayer1, $scorePlayer2, $scorePlayer3, $scorePlayer4, $scorePlayer5];
        $names = [$namePlayer1, $namePlayer2, $namePlayer3, $namePlayer4, $namePlayer5];
        for ($i = 0; $i < sizeof($scores); $i++) {
            if ($scores[$i] > $maxScore) {
                $maxScore = $scores[$i];
                $winnerName = $names[$i];
            }
        }
        echo "<p>Le gagnant est: $winnerName</p>";

        ?>
    </div>
</section>


<!-- QUESTION 8 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 8</h2>
    <p class="exercice-txt">Affichez le prénom du joueur le plus long en nombre de caractères.</p>
    <div class="exercice-sandbox">
        <?php
        $countLetters = 0;
        $longestName = '';
        $names = [$namePlayer1, $namePlayer2, $namePlayer3, $namePlayer4, $namePlayer5];
        for ($i = 0; $i < sizeof($names); $i++) {
            if (strlen($names[$i]) > $countLetters) {
                $countLetters = strlen($names[$i]);
                $longestName = $names[$i];
            }
        }
        echo "$longestName";
        ?>
    </div>
</section>

<!-- QUESTION 9 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 9</h2>
    <p class="exercice-txt">Créer une variable $players ayant pour valeur un tableau multidimensionnel contenant toutes les données des joueurs avec leurs scores ci-dessus et leurs ages ci-dessous.</p>
    <ul class="exercice-txt">
        <li>Tim : 25 ans</li>
        <li>Morgan : 34 ans</li>
        <li>Hamed : 27 ans</li>
        <li>Camille : 47 ans</li>
        <li>Kevin : 31 ans</li>
    </ul>
    <p class="exercice-txt">Afficher la valeur de cette variable avec tous les détails.</p>
    <div class="exercice-sandbox">
        <?php

        $players = [
            ["name" => $namePlayer1, "score" => $scorePlayer1, "age" => 25],
            ["name" => $namePlayer2, "score" => $scorePlayer2, "age" => 34],
            ["name" => $namePlayer3, "score" => $scorePlayer3, "age" => 27],
            ["name" => $namePlayer4, "score" => $scorePlayer4, "age" => 47],
            ["name" => $namePlayer5, "score" => $scorePlayer5, "age" => 31],
        ];
        foreach ($players as $nb => $infos) {
            echo 'User n°' . ($nb + 1) . ' :<br>';
            foreach ($infos as $c => $v) {
                echo $c . ' : ' . $v . '<br>';
            }
            echo '<br>';
        }
        // var_dump($players);
        ?>
    </div>
</section>

<!-- QUESTION 10 -->
<section class="exercice">
    <h2 class="exercice-ttl">Question 10</h2>
    <p class="exercice-txt">Afficher le prénom et l'âge du joueur le plus jeune dans une phrase dans une balise HTML P.</p>
    <div class="exercice-sandbox">
        <?php
        // $ageYounger = 100;
        // for ($i = 0; $i < sizeof($players); $i++) {
        //     if ($players[$i]['age'] < $ageYounger) {
        //         $ageYounger = $players[$i]['age'];
        //         $youngerPlayer = $players[$i]['name'];
        //     }
        // }
        // echo "<p> Le joueur le plus jeune est $youngerPlayer et son âge est de $ageYounger. </p>";

        for ($i = 0; $i < sizeof($players); $i++) {
            if (!isset($youngerIndex) || $players[$i]['age'] < $players[$youngerIndex]['age']) {
                $youngerIndex = $i;
            }
        }
        echo "<p> Le joueur le plus jeune est {$players[$youngerIndex]['name']} et son âge est de {$players[$youngerIndex]['age']}. </p>";

        foreach ($players as $player) {
            if (!isset($ageYounger2) || $player['age'] < $ageYounger2) {
                $ageYounger2 = $player['age'];
                $nameYounger2 = $player['name'];
            }
        }
        echo "<p> Le joueur le plus jeune est {$nameYounger2} et son âge est de {$ageYounger2}. </p>";
        ?>
    </div>
</section>
</div>
<?php
require 'footer.php';
?>
</body>

</html>