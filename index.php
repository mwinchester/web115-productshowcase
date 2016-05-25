<!doctype html>
<html lang="en">
<head>
    <title>Product Showcase - demo of Javascript and PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class="container">
    <header>
        <?php include 'header.php';?>
    </header>
    <main>
        <p>For this project you will create a front page that introduces a product of your choice,
        then you will add two product pages. Each product page needs to have thumbnails that
        when clicked change a main image. For extra credit, change the text that appears when you
        change the image.</p>

        <div id="bouvier-des-flanders">
        <img src="images/ollieandnessie.jpg" alt="Bouviers Ollie and Nessie hanging out in the
        back yard"  />

        <p>My sample site will include pictures of my dogs, who absolutely are not for sale,
        but I do have multiple pictures of them which makes them the perfect subject for the
        style of the site.</p></div>
    </main>
    <footer><?php include 'footer.php';?></footer>
</div>
</html>