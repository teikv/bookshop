<?php
class Header {
    public function render() {
        ?>
        <header class="header">
            <div class="header__logo">
                <img src="resource/logo2.jpg" alt="Book Store Logo">
            </div>
            <nav class="header__nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Books</a></li>
                    <li><a href="#">Authors</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
            <div class="header__icons">
                <a href="#" class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href="#" class="cart-icon"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="#" class="user-icon"><i class="fa-solid fa-circle-user"></i></a>
            </div>
        </header>
        <?php
    }
} 