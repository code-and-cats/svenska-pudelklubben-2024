<?php
/*
* Template Name: Hänvisningssida
*/
get_header();
?>
<div class="main-content">
<section>
  <div class="hanvisning-wrapper">
<div class="hanvisning-right">
  <div class="hanvisningscontent"><h1 class="hanvisning-h1"><?php the_title();?></h1>
<p>Här hittar du aktuella valpkullar inom Svenska Pudelklubben.</p>
<p>Är du särskilt intresserad av mentalitet? Vi har samlat alla <a href="https://www.pudelklubben.se/uppfodare-med-bph-diplom/">uppfödare med BPH-diplom</a> på denna sida.</p>
<p>Läs mer om att <a href="https://www.pudelklubben.se/kopapudel/">skaffa pudel på våra sidor!</a></p></div>
</div>  
<div class="hanvisning-left">
<div class="hanvisningscontent">
<h3>Regler för valphänvisning</h3>
<p>Dessa annonser är publicerade och uppdaterade av uppfödarna själva. Klubben tar ner annonser när valpkullen blivit 12 veckor, eller om uppfödaren inte uppdaterat på 3 veckor.</p>
<p>Valphänvisningsannonser får tidigast publiceras 9 veckor före beräknad födsel. Valpar får hänvisas till och med 6 månaders ålder.</p>
<p><a href="https://www.pudelklubben.se/lagg-in-valpkull/"><p>För uppfödare - lägg in kull</a></p>
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
</div>