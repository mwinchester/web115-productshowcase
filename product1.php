<!doctype html>
<html lang="en">
<head>
    <title>Product Showcase - demo of Javascript and PHP</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
<div class="container">
    <header>
        <?php include 'header.php';?>
    </header>
    <main>
        <div class="thumbnails">
            <a href="#"> <img src="images/nessie01.jpg" alt="nessie image 1" width="100" onclick="nessie1()"></a>
            <a href="#"><img src="images/nessie02.jpg" alt="nessie image 2" width="100" onclick="nessie2()"></a>
            <a href="#"><img src="images/nessie03.jpg" alt="nessie image 3" width="100" onclick="nessie3()"></a>
            <a href="#"><img src="images/nessie04.jpg" alt="nessie image 4" width="100" onclick="nessie4()"></a>
            <a href="#"><img src="images/ollieandnessie.jpg" alt="nessie and ollie" width="100" onclick="nessie5()"></a>
        </div>

        <div class="large-image">
            <img src="images/nessie01.jpg" alt="Nessie image 1" id="large">
        </div>

        <div class="about">
            <h2>Nessie</h2>
            <p id ="about-nessie"> Nurse Nessie - My oldest son, Josh, was very ill and in the hospital. We got Nessie
            wear a nurses hat for this picture. We sent the picture to Josh to cheer him up.</p>
        </div>

    </main>

    <footer><?php include 'footer.php';?>
        </footer>
</div>
</html>