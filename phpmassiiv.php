<?php
include('filmid.html');
$filmid = array(
    array('nimi'=>'Matrix', 'pikkus'=>136, 'aasta'=>1999, 'reiting'=>8.7, 'peaosa'=>'Keanu Reeves', "zanr"=>"ulmepõnevik"),
    array('nimi'=>'Inception', 'pikkus'=>148, 'aasta'=>2010, 'reiting'=>8.8, 'peaosa'=>' Leonardo DiCaprio', "zanr"=>"ulmepõnevik"),
    array('nimi'=>'Gladiator', 'pikkus'=>155, 'aasta'=>2000, 'reiting'=>8.5, 'peaosa'=>'Russell Crowe', "zanr"=>"ajalooline põnevusfilm"),
    array('nimi'=>'Aliens', 'pikkus'=>137, 'aasta'=>1986, 'reiting'=>8.4, 'peaosa'=>'Sigourney Weaver', "zanr"=>"ulmepõnevik"),
    array('nimi'=>'Braveheart', 'pikkus'=>178, 'aasta'=>1995, 'reiting'=>8.4, 'peaosa'=>'Mel Gibson', "zanr"=>"ajalooline draama"),

);
echo "<div class = 'filmid'><h1>Parimad filmid</h1>";
foreach($filmid as $film){
    echo "<div class = 'film'>";
    echo "<p>{$film['nimi']} on {$film['aasta']}. aasta {$film['zanr']} pikkusega {$film['pikkus']} minutit reitinguga {$film['reiting']} ja mille peaosatäitja on {$film['peaosa']}</p>";
    echo "</div>";
}
echo "</div>";