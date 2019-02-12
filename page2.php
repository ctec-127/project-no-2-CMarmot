<?php
// this will include all the things



require 'includes/header.php';

?>

<html>
    <p>
        You are going to choose an animal, a color, a genre of music, an entree, a drink, a quote, and a season.
        <br><br>

        Animals 
        <br>
            animal=fox
            <br>
            animal=goat
            <br>
        <br>
        Color
        <br>
            color=blue
            <br>
            color=pink
            <br>
        <br>
        Music
        <br>
            music=pop
            <br>
            music=punk
            <br>
        <br>

        Entree
        <br>
            entree=cheesePizza 
            <br>
            entree=supremePizza
            <br>

        <br>
        Drink<br>
            drink=amber         
            <br>
            drink=hefe
            <br>
        <br>

        Picture<br>
            pict=inspire
            <br>
            pict=notInspire
            <br>
        <br>

        Season<br>
            season=spring 
            <br>
            season=summer
            <br>
</p>

<p>
Helpful shortcuts:<br><br>

page2.php?animal=fox&color=pink&music=pop&entree=cheesePizza&drink=amber&pict=notInspire&season=spring
<br><br>

page2.php?animal=goat&color=blue&music=punk&entree=supremePizza&drink=hefe&pict=inspire&season=summer

</p>



<?php
$_GET['$animal'] = "";
if (isset($_GET['animal'])) {

    if ($_GET['animal'] == 'cat'){
    require 'includes/catContent.php';
    }

    else if ($_GET['animal'] == 'goat'){
    require 'includes/goatContent.php';
    }

    else if ($_GET['animal'] == 'fox'){
    require 'includes/foxContent.php';
    }

} else {
    require 'includes/errorboxAnimal.php';
}

$_GET['$color'] = "";
if (isset($_GET['color'])) {

    if ($_GET['color'] == 'blue') {
    require 'includes/blueContent.php';
    }

    if ($_GET['color'] == 'pink'){
    require 'includes/pinkContent.php';
    }

} else {
    require 'includes/errorboxColor.php';
}

$_GET['$music'] = "";
if (isset($_GET['music'])) {

    if ($_GET['music'] == 'pop') {
    require 'includes/popContent.php';
    }

    if ($_GET['music'] == 'punk'){
    require 'includes/punkContent.php';
    }

} else {
    require 'includes/errorboxMusic.php';
}


$_GET['$entree'] = "";
if (isset($_GET['entree'])) {

    if ($_GET['entree'] == 'cheesePizza') {
    require 'includes/cheeseContent.php';
    }

    if ($_GET['entree'] == 'supremePizza'){
    require 'includes/supremeContent.php';
    }

} else {
    require 'includes/errorboxEntree.php';
}

$_GET['$drink'] = "";
if (isset($_GET['drink'])) {

    if ($_GET['drink'] == 'amber') {
    require 'includes/amberContent.php';
    }

    if ($_GET['drink'] == 'hefe'){
    require 'includes/hefeContent.php';
    }

} else {
    require 'includes/errorboxDrink.php';
}

$_GET['$pict'] = "";
if (isset($_GET['pict'])) {

    if ($_GET['pict'] == 'inspire') {
    require 'includes/inspireContent.php';
    }

    if ($_GET['pict'] == 'notInspire'){
    require 'includes/notInspireContent.php';
    }

} else {
    require 'includes/errorboxPict.php';

}

$_GET['$season'] = "";
if (isset($_GET['season'])) {

    if ($_GET['season'] == 'spring') {
    require 'includes/springContent.php';
    }

    if ($_GET['season'] == 'summer'){
    require 'includes/summerContent.php';
    }

} else {
    require 'includes/errorboxSeason.php';
}

require 'includes/footer.php';


?>

