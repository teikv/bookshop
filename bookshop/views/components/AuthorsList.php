<?php
class AuthorsList {
    private $authors = [
        ['name' => 'Nguyễn Vĩnh Tiến', 'image' => './img/author/nguyenvinhtien.webp'],
        ['name' => 'Anonymous', 'image' => './img/author/Anomyous.webp'],
        ['name' => 'Alan Lightman', 'image' => './img/author/lightman.webp'],
        ['name' => 'Richard', 'image' => './img/author/Richard.webp'],
        ['name' => 'Georges Perec', 'image' => './img/author/perec.webp'],
        ['name' => 'Urakami Tetsuya', 'image' => './img/author/UrakamiTetsuya.webp'],
        ['name' => 'Caryl', 'image' => './img/author/Caryl.webp']
    ];

    public function render() {
        ?>
        <section class="authors-list">
            <h2>Featured Authors</h2>
            <div class="authors-grid">
                <?php foreach ($this->authors as $author): ?>
                    <div class="author-card">
                        <img src="<?php echo $author['image']; ?>" alt="<?php echo $author['name']; ?>">
                        <h3><?php echo $author['name']; ?></h3>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?php
    }
} 