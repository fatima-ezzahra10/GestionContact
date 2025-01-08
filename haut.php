<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>
    <div class="top">
        <a href="acceuil.php">
            <img src='phplogo.png' border='0' hspace='20' vspace='20' align='left' width="180" /></a>
        <span class="top">École Nationale Supérieure D'arts Et Métiers </span><br />
        ENSAM- Casablanca
    </div>

    <h4>
        <?php
        function afficherDate($lang)
        {
            /////La date sur le serveur
            $jours["AR"] = array("الأحد", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة", "السبت");
            $jours["FR"] = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
            $jours["EN"] = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

            $months["AR"] = ["يناير ", "فبراير", "مارس ", "أبريل", "ماي ", "يونيو", "يوليوز", "غشت ", "شتنبر", "أكتوبر", "نونبر", "دجنبر"];

            $months["EN"] = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

            $months["FR"] = ["Janvier", "Février", "Mars", "Avril", "Mai", "juin", "Juillet", "Aôut", "Septembre", "Octobre", "Novembre", "Décembre"];

            $d = getdate();

            $wj = $d["wday"];
            $mj = $d["mday"];
            $m = $d["mon"];
            $y = $d["year"];

            $d = $jours[$lang][$wj] . " " . $mj . " " . $months[$lang][$m - 1] . " " . $y;
            return $d;
        }

        echo afficherDate("FR"); ?>

    </h4>
    <br /><br />