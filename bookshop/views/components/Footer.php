<?php
class Footer {
    public function render() {
        ?>
        <footer class="footer">
            <div class="footer__logo">
                <img src="./resource/logo2.jpg" alt="Book Store Logo">
            </div>
            <div class="footer__content">
                <div class="footer__links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer__social">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <p>&copy; 2024 Book Store. All rights reserved.</p>
            </div>
        </footer>
        <?php
    }
} 