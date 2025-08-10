<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Robots" content="index, follow" />
<meta name="Keywords" content="lutnik, artysta lutnik, lutnictwo, lubin, Tadeusz Jasiurkowski, skrzypce, altówka, wiolonczela, altówka, naprawa, budowa, sprzedaż, smyczek" />
<meta name="Description" content="Lutnictwo - artysta lutnik Tadeusza Jasiukowskiego - budowa i renowacja instrumentów lutniczych. Skrzypce, altówki, wiolonczele. Naprawa smyczków, nabijanie włosia.
" /> 
<title>LUTNICTWO | Artysta Lutnik TADEUSZ JASIURKOWSKI | Skrzypce Altówka - Sprzedaż Naprawa</title>

<link rel="stylesheet" type="text/css" href="style.css" />

<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAP38kZGZJP9O4M4eorzkD9BTMGs_SEobFDcjFNtQTTAwUk6DGaRTAhdQelPc5M0rqsdze1izzJWM8kA" type="text/javascript"></script>

<script type="text/javascript">
 //<![CDATA[
 function load() {
   if (GBrowserIsCompatible()) {
     var map = new GMap2(document.getElementById("map"));
     map.addControl(new GLargeMapControl());
     map.setCenter(new GLatLng(51.384705,16.201841), 13);
    var marker = new GMarker(new GLatLng (51.384705,16.201841));
    var text = "<b>artystyczna pracownia lutnicza<br />Tadeusza Jasiurkowskiego</b><br />ul. Leśna 13/5<br />59-300 Lubin";
    GEvent.addListener(marker, "click", function(){
    marker.openInfoWindowHtml(text);});
    map.addOverlay(marker);
    marker.openInfoWindowHtml(text);
   }
 }
 //]]>
 </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43332166-1', 'artystalutnik.pl');
  ga('send', 'pageview');

</script>
</head>
<body onload="load()" onunload="GUnload()">

<div id="wrapper">

    <div id="banner">
    <h1>artysta lutnik Tadeusz Jasiurkowski</h1>
    </div>
    
    <div id="mainNav">
      <ul>
        <li><a href="index.html">O mnie</a></li>
        <li><a href="nagrody.html">Nagrody</a></li>
        <li><a href="oferta.html">Oferta</a></li>
        <li><a id="zaznaczone" href="kontakt.php">Kontakt</a></li>
      </ul>
    </div>
  
  <div id="contentWrapper">
    
    <div id="main">
      <div class="tlo">
      <h2>Kontakt</h2>
      <p class="pierwszy">
      <p id="adres">
      
      Tadeusz Jasiurkowski <br />
      ul. Leśna 13/5 <br />
      59-300 Lubin <br />
      tel. +48 76 8424634 <br />
      e-mail: <a href="mailto:tjasiurkowski@op.pl">tjasiurkowski@op.pl</a> <br />
      
      </p>

<div id="map"></div>


<p class="ostatni">
</p> 
    </div>
    </div>
    
  
    

    <div id="rightSidebar">
    <div class="tlo">
       
        <?php


$autor=nl2br(htmlspecialchars($_POST['autor']));
$tresc=htmlspecialchars($_POST['tresc']);
$mail=nl2br(htmlspecialchars($_POST['mail']));


if ($_POST['wyslij']){
if (!($autor&&$tresc)){
print "<p class=\"ostrzezenie\">Uzupełnij pola!</p>";

} else{

$naglowek="List od: ".$autor.", ".$mail;
if(mail('tjasiurkowski@op.pl','List ze strony', "$tresc", "$naglowek")){

print "<p class=\"dodano\">Twoja wiadomosc została wysłana!</p>";

$autor=$tresc=$mail="";
} else {

print "Błąd";
}}}

print "\t<p class=\"dodaj\">Wyślij wiadomość:</p>\n";
print "\t<form method=\"post\"><p><textarea rows=\"10\" name=\"tresc\">$tresc";

print  "</textarea></p>\n\t";

print "\t<p class=\"podpis\"><input type=\"text\" name=\"autor\" value=\"$autor\" /><br />Podpis </p>\n\t<p class=\"mail\">  <input type=\"text\" name=\"mail\" value=\"$mail\" /><br /> Mail (opcjonalnie)</p>\n\t<p class=\"submit\"><input type=\"hidden\" name=\"wyslij\" value=\"1\" /></p>\n\t";
print "<p class=\"przycisk\"><input type=\"submit\" value=\"Wyślij\" /></form></p>\n";


?>
        
        
        <div id="ostatni"></div>
    </div>
    </div>
    
    <div id="licznik">
    <img src="licznik.php" alt="licznik" />
    </div>
    
    <div id="copyright">
    Copyright &copy; 2008 Tadeusz Jasiurkowski
    </div>
  
  </div>
</div>


</body>
</html>


