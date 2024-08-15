<?php
/*
* Template Name: Omplacering
*/
get_header();
?>
<section>
  <div class="hanvisning-wrapper">
<div class="hanvisning-right">
  <div class="hanvisningscontent"><h1 class="hanvisning-h1"><?php the_title();?></h1>
<p>Här hittar du aktuella omplaceringar inom Svenska Pudelklubben.</p>
<p>De hundar som finns noterade på denna sida är över sex månader och är i alla storlekar. De har anmälts för hänvisning till klubbens vuxenhänvisare. Annonsen finns på sidan i en månad, förlängning med 14 dagar i taget.</p></div>
</div>  
<div class="hanvisning-left">
<div class="hanvisningscontent">
  <h3>Anmäl hund för omplacering</h3>
    <p>Fyll i <a href="#">formuläret för omplacering</a>. Hunden ska vara registrerad i SKK. </p>

<p>För annonsering av omplacering kontakta: <a href="mailto:valpformedling@pudelklubben.se">valpformedling@pudelklubben.se</a></p>
<p>Allt arbete inom Svenska Pudelklubben sker ideellt på fritiden vilket innebär att det kan ta någon vecka innan hänvisningen publiceras. Vår målsättning är att det ska uppdateras minst 2 gånger i veckan.</a></p>
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