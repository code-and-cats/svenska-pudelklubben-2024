<?php
/*
* Template Name: Hänvisningssida
*/
get_header();
?>
<section class="page-section">
  <div class="hanvisning-wrapper">
<div class="hanvisning-right"><h1>Valphänvisning</h1></div>
  <div class="hanvisning-left">
  <p>Det är respektive uppfödares ansvar att inskickade uppgifter är korrekta och att kullen följer våra valphänvisningsregler. På SKKs avelsdata och hunddata kan du kontrollera individers hälsotester och tävlingsmeriter med mera. Sök med hjälp av hundens namn eller registreringsnummer.</p>
  <p>Vår valphänvisare når du på: valpformedling@pudelklubben.se</p>
<p>Svenska pudelklubbens valphänvisningsregler</p>

<p>SKK avelsdata</p>

<p>SKK hunddata</p>
</div>
</div>

<?php [ptb type="valp" orderby="valp_f_delsedatum" order="asc" masonry="0" offset="0" posts_per_page="50" style="grid2" logic="and"]

get_footer();
?>