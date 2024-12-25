<?php
require_once 'components/Header.php';
require_once 'components/Carousel.php';
require_once 'components/BookCollection.php';
require_once 'components/AuthorsList.php';
require_once 'components/Footer.php';

class HomePage {
    private $header;
    private $carousel;
    private $bookCollection;
    private $authorsList;
    private $footer;

    public function __construct() {
        $this->header = new Header();
        $this->carousel = new Carousel();
        $this->bookCollection = new BookCollection();
        $this->authorsList = new AuthorsList();
        $this->footer = new Footer();
    }

    public function render() {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Book Store</title>
            <!-- CSS -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
            <link href="https://fonts.googleapis.com/css2?family=Cute+Font&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
            <?php
            $this->header->render();
            $this->carousel->render();
            $this->bookCollection->render();
            $this->authorsList->render();
            $this->footer->render();
            ?>

            <!-- Scripts -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.min.js"></script>
            <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        </body>
        </html>
        <?php
    }
} 