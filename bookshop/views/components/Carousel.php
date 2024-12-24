<?php
class Carousel {
    private $promotionSlides = [
        './img/promotion_1.jpg',
        './img/SALE.png',
        './img/SALE_1.png'
    ];

    private $trendingBooks = [
        'lichsutinhduc1khatkhaoduocbiet.jpg',
        'bobaphepthuatgauhoggsdungcamco.jpg',
        'bobaphepthuatumbalaanhsanghien.jpg',
        'bongdembatxichmon01e1717383369.jpg',
        'conthonguyenrua011e17173832478.jpg',
        'dinhluatmurphy01e1716776653238.jpg',
        'ketinhnghihoanmy01e17163433481.jpg',
        'hondonvakhuvuon01e171766606841.jpg',
        'vaitientruongan01e171677668510.jpg'
    ];

    public function render() {
        ?>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($this->promotionSlides as $slide): ?>
                    <div class="swiper-slide">
                        <img src="<?php echo $slide; ?>" alt="Promotion">
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <?php
    }
} 