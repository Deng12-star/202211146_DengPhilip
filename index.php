<?php
$activePage = 'home';
require __DIR__ . '/header.php';
?>

 <div class="container" >
    <h1>Our courses</h1>
    <div class="cards-grid">
      <div class="cards">
        <img src="images/c%2B%2B.png" alt="course 1">
        <h3>C++ programming</h3>
        <p>High performance,good for games</p>
        <a href="https://youtu.be/UcfOIfa5kvE?si=NQ4hXajLex1A1cHe" class="button">Watch video</a>
      </div>

      <div class="cards">
        <img src="images/python.jpeg" alt="course 2">
        <h3>Python programming</h3>
        <p>Easy to learn,good for data science</p>
        <a href="https://youtu.be/UcfOIfa5kvE?si=NQ4hXajLex1A1cHe" class="button">Watch video</a>
      </div>

      <div class="cards">
        <img src="images/java.png" alt="course 3">
        <h3>Java programming</h3>
        <p>Widely used,good for enterprise applications</p>
        <a href="https://youtu.be/UcfOIfa5kvE?si=NQ4hXajLex1A1cHe" class="button">Watch video</a>
      </div>
    </div>
 </div>

<?php require __DIR__ . '/footer.php'; ?>