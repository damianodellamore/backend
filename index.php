<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizi Giorno 1 php</title>
</head>

<body>

    <?php

    echo '<h1> Esercizio 1 </h1>';

    setlocale(LC_TIME, 'it_IT');

    $dataOggi = new DateTime();

    $giornoSettimana = strftime('%A', $dataOggi->getTimestamp());
    $giorno = strftime('%d', $dataOggi->getTimestamp());
    $mese = strftime('%B', $dataOggi->getTimestamp());
    $anno = $dataOggi->format('Y');

    $dataFormattata = "$giornoSettimana, $giorno $mese $anno";

    echo "Data di oggi: $dataFormattata";
    echo '<br>';
    echo '<hr>';
    echo '<br>';

    echo '<h1> Esercizio 2 </h1>';

    $squadreSerieA = array(
        "Juventus",
        "Inter",
        "AC Milan",
        "AS Roma",
        "Napoli",
        "Lazio",
        "Atalanta",
        "Fiorentina",
        "Sampdoria",
        "Torino",
        "Bologna",
        "Cagliari",
        "Genoa",
        "Udinese",
        "Verona",
        "Spezia",
        "Empoli",
        "Salernitana",
        "Venezia"
    );

    $formazioni = array(
        "Juventus" => array("Buffon", "Chiellini", "Bonucci", "Chiesa", "Morata"),
        "Inter" => array("Handanovic", "De Vrij", "Barella", "Lautaro", "Perisic"),
        "AC Milan" => array("Donnarumma", "Kjaer", "Ibrahimovic", "Rebic", "Calabria"),
        "AS Roma" => array("Pellegrini", "Mancini", "Tammy Abraham", "Mkhitaryan", "Veretout"),
        "Napoli" => array("Ospina", "Koulibaly", "Insigne", "Osimhen", "Fabian Ruiz"),
        "Lazio" => array("Strakosha", "Acerbi", "Immobile", "Alberto", "Marusic"),
        "Atalanta" => array("Sportiello", "Muriel", "Gosens", "Pessina", "Zapata"),
        "Fiorentina" => array("Dragowski", "Vlahovic", "Ribery", "Castrovilli", "Caceres"),
        "Sampdoria" => array("Audero", "Quagliarella", "Candreva", "Thorsby", "Colley"),
        "Torino" => array("Sirigu", "Belotti", "Verdi", "Rincon", "Izzo"),
        "Bologna" => array("Skorupski", "Medel", "Barrow", "Orsolini", "Svanberg"),
        "Cagliari" => array("Cragno", "Ceppitelli", "Joao Pedro", "Simeone", "Nandez"),
        "Genoa" => array("Perin", "Zapata", "Zajc", "Shomurodov", "Strootman"),
        "Udinese" => array("Musso", "De Paul", "Okaka", "Molina", "Nuytinck"),
        "Verona" => array("Silvestri", "Barak", "Lasagna", "Faraoni", "Ceccherini"),
        "Spezia" => array("Provedel", "Agudelo", "Farias", "Nzola", "Saponara"),
        "Empoli" => array("Vicario", "Bajrami", "Pinamonti", "Kouame", "Stulac"),
        "Salernitana" => array("Belec", "Gyomber", "Ricci", "Ribero", "Vuletich"),
        "Venezia" => array("Maenpaa", "Di Mariano", "Henry", "Johnsen", "Modolo")
    );

    foreach ($squadreSerieA as $squadra) {
        echo "<h2>$squadra</h2>";

        if (isset($formazioni[$squadra])) {
            echo "<ul>";
            foreach ($formazioni[$squadra] as $giocatore) {
                echo "<li>$giocatore</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Formazione non disponibile</p>";
        }

        echo "<hr>";

        echo '<br>';
        echo '<hr>';
        echo '<br>';
    }

    echo '<h1> Esercizio 3 </h1>';

    $squadreSerieA = array(
        "Juventus",
        "Inter",
        "AC Milan",
        "AS Roma",
        "Napoli",
        "Lazio",
        "Atalanta",
        "Fiorentina",
        "Sampdoria",
        "Torino",
        "Bologna",
        "Cagliari",
        "Genoa",
        "Udinese",
        "Verona",
        "Spezia",
        "Empoli",
        "Salernitana",
        "Venezia"
    );

    $formazioni = array(
        "Juventus" => array("Buffon", "Chiellini", "Bonucci", "Chiesa", "Morata"),
        "Inter" => array("Handanovic", "De Vrij", "Barella", "Lautaro", "Perisic"),
        "AC Milan" => array("Donnarumma", "Kjaer", "Ibrahimovic", "Rebic", "Calabria"),
        "AS Roma" => array("Pellegrini", "Mancini", "Tammy Abraham", "Mkhitaryan", "Veretout"),
        "Napoli" => array("Ospina", "Koulibaly", "Insigne", "Osimhen", "Fabian Ruiz"),
        "Lazio" => array("Strakosha", "Acerbi", "Immobile", "Alberto", "Marusic"),
        "Atalanta" => array("Sportiello", "Muriel", "Gosens", "Pessina", "Zapata"),
        "Fiorentina" => array("Dragowski", "Vlahovic", "Ribery", "Castrovilli", "Caceres"),
        "Sampdoria" => array("Audero", "Quagliarella", "Candreva", "Thorsby", "Colley"),
        "Torino" => array("Sirigu", "Belotti", "Verdi", "Rincon", "Izzo"),
        "Bologna" => array("Skorupski", "Medel", "Barrow", "Orsolini", "Svanberg"),
        "Cagliari" => array("Cragno", "Ceppitelli", "Joao Pedro", "Simeone", "Nandez"),
        "Genoa" => array("Perin", "Zapata", "Zajc", "Shomurodov", "Strootman"),
        "Udinese" => array("Musso", "De Paul", "Okaka", "Molina", "Nuytinck"),
        "Verona" => array("Silvestri", "Barak", "Lasagna", "Faraoni", "Ceccherini"),
        "Spezia" => array("Provedel", "Agudelo", "Farias", "Nzola", "Saponara"),
        "Empoli" => array("Vicario", "Bajrami", "Pinamonti", "Kouame", "Stulac"),
        "Salernitana" => array("Belec", "Gyomber", "Ricci", "Ribero", "Vuletich"),
        "Venezia" => array("Maenpaa", "Di Mariano", "Henry", "Johnsen", "Modolo")
    );

    $partiteSerieA = array();

    foreach ($squadreSerieA as $squadraCasa) {
        foreach ($squadreSerieA as $squadraTrasferta) {
            if ($squadraCasa !== $squadraTrasferta) {
                $formazioneCasa = $formazioni[$squadraCasa];
                $formazioneTrasferta = $formazioni[$squadraTrasferta];

                $partiteSerieA[] = array(
                    "squadraCasa" => $squadraCasa,
                    "squadraTrasferta" => $squadraTrasferta,
                    "formazioneCasa" => $formazioneCasa,
                    "formazioneTrasferta" => $formazioneTrasferta
                );
            }
        }
    }

    foreach ($partiteSerieA as $partita) {
        echo "<h2>{$partita['squadraCasa']} vs {$partita['squadraTrasferta']}</h2>";

        echo "<h3>{$partita['squadraCasa']}</h3>";
        echo "<ul>";
        foreach ($partita['formazioneCasa'] as $giocatore) {
            echo "<li>$giocatore</li>";
        }
        echo "</ul>";

        echo "<h3>{$partita['squadraTrasferta']}</h3>";
        echo "<ul>";
        foreach ($partita['formazioneTrasferta'] as $giocatore) {
            echo "<li>$giocatore</li>";
        }
        echo "</ul>";

        echo "<hr>";
    }

    ?>



</body>

</html>