<?php
/*
* Template Name: Hänvisningssida
*/
get_header();
?>
<section>
  <div class="hanvisning-wrapper">
<div class="hanvisning-right">
  <div class="hanvisningscontent"><h1 class="hanvisning-h1"><?php the_title();?></h1>
<p>Här hittar du aktuella valpkullar inom Svenska Pudelklubben.</p>
<p>Läs mer om att <a href="#">skaffa pudel på våra sidor!</a></p></div>
</div>  
<div class="hanvisning-left">
<div class="hanvisningscontent">
  <p>Det är respektive uppfödares ansvar att inskickade uppgifter är korrekta och att kullen följer våra valphänvisningsregler. På SKKs avelsdata och hunddata kan du kontrollera individers hälsotester och tävlingsmeriter med mera. Sök med hjälp av hundens namn eller registreringsnummer.</p>
  <p>Vår valphänvisare når du på: valpformedling@pudelklubben.se</p>
<a href="#"><p>Svenska pudelklubbens valphänvisningsregler</p></a>
<a href="#"><p>SKK avelsdata</p></a>
<a href="#"><p>SKK hunddata</p></a>
<a href="#"><p>För uppfödare - lägg in kull</p></a>
</div>
</div>
</div>
<div class="puppies">
<?php
            the_content();
?>
</div>
<?php
get_footer();
?>