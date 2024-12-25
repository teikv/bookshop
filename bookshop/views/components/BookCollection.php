<?php
class BookCollection {
    private $books;

    public function __construct() {
        $this->books = [
            ['title' => 'Lịch sử tình dục', 'image' => 'img/book/lichsutinhduc1khatkhaoduocbiet.jpg'],
            ['title' => 'Bộ ba phép thuật', 'image' => 'img/book/bobaphepthuatgauhoggsdungcamco.jpg'],
            // ... thêm các sách khác
        ];
    }

    public function render() {
        ?>
        <section class="book-collection">
            <h2>Featured Books</h2>
            <div class="book-grid">
                <?php foreach ($this->books as $book): ?>
                    <div class="book-card">
                        <img src="<?php echo $book['image']; ?>" alt="<?php echo $book['title']; ?>">
                        <h3><?php echo $book['title']; ?></h3>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?php
    }
} 