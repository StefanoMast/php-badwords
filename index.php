<h1>
<?php
    $par = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
    ?>

    <h2>Stampo paragrafo</h2>
    <p>
        <?php
        echo $par;
        ?>
    </p>

    <h2>Divido la stringa in base al delimitatore con explode</h2>
    <p>
        <?php
        $parExplode = explode(" ", $par);
        var_dump($parExplode);
        ?>
    </p>

    <h2>Lunghezza della stringa</h2>
    <p>
        <?php
        $loremLength = strlen($par);
        echo "La stringa è lunga " . $loremLength . " caratteri";
        ?>
    </p>

    <h2>Sostituizione di una sottostringa con replace</h2>
    <p>
        <?php
        $word = $_GET['word'];
        $newWord= str_replace($word, "*****", $par);
        echo $newWord;
        ?>
    </p>

</h1>
