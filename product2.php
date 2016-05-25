<!doctype html>
<html lang="en">
<head>
    <title>Product Showcase - Ollie Bear</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<div class="container">
    <header>
        <?php include 'header.php';?>
    </header>
    <main>
        <div class="thumbnails">
            <a href="#"><img src="images/ollie01.jpg" alt="Ollie image 1" width="100" onclick = "ollie1()"></a>
            <a href="#"><img src="images/ollie02.jpg" alt="Ollie image 2" width="100" onclick = "ollie2()"></a>
            <a href="#"><img src="images/ollie03.jpg" alt="Ollie image 3" width="100" onclick = "ollie3()"></a>
            <a href="#"><img src="images/ollie04.jpg" alt="Ollie image 4" width="100" onclick = "ollie4()"></a>
            <a href="#"><img src="images/ollie05.jpg" alt="Ollie image 5" width="100" onclick = "ollie5()"></a>
        </div>

        <div class="large-image">
            <img src="images/ollie01.jpg" alt="Ollie-Bear" id="large">
        </div>

        <div class="about">
            <h2>Ollie-Bear</h2>
            <p id ="about-ollie"> Ollie-Bear - This picture was taken at about five months old, after his first fur cut</p>
        </div>

    </main>

    <footer>
        <?php include 'footer.php';?></footer>
</div>
</html>