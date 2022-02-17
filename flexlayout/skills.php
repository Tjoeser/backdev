<?php include 'header.php';?>
<?php include 'sidebar.php';?>
<?php include_once 'functions.php'?>

<article>
<h2>My Skills</h2>
<!--
<h3>Projecten</h3>
<p>ICTer van de toekomst</p>
<div class="container">
  <div class="skills ICTer">100%</div>
</div>
<h3>ICT skills</h3>
<p>Outlook</p>
<div class="container">
  <div class="skills outlook">50%</div>
</div>

<p>Hardware</p>
<div class="container">
  <div class="skills hardware">50%</div>
</div>

<p>Software</p>
<div class="container">
  <div class="skills software">50%</div>
</div>

<p>Office pakketten</p>
<div class="container">
  <div class="skills office">50%</div>
</div>
-->
<?php 
echo createSkillbar("HTML","70"," #1abc9c");
echo createSkillbar("CSS 3","50","#2ecc71");
echo createSkillbar("JavaScript es6","20","#3498db");
echo createSkillbar("PHP 8","50","#9b59b6");
echo createSkillbar("Nederlands","60","#34495e");
echo createSkillbar("Scrum","70","#16a085");
echo createSkillbar("ICT Skills","100","#e74c3c");
?>
</article>
<?php include 'footer.php';?>