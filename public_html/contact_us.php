<?php $mobil_banner_gizle = true; ?>
<?php include 'header.php'; ?>
<main class="content">
    <div class="content-wrapper">
        <h2 class="title-font">Bize Ulaşın</h2>
        <hr>
    </div>
    <div>
        <div class="map-section">
            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.9536233970275!2d36.416804899999995!3d41.238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4087df002471fbd9%3A0x1180295bf7ce1d9b!2sTuzan%20Bileme!5e1!3m2!1str!2str!4v1786542645695!5m2!1str!2str"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="connact-foto"></div>
        <div class="contact-layout">

            <div>
                <h1 class="gradient-text">Bize Ulaşın</h1>
                <p class="aciklamastyle">Herhangi bir sorunuz veya yorumunuz varsa, <br> bizimle iletişime geçmekten çekinmeyin.</p>
            </div>
            <div><!-- From Uiverse.io by somshri16 -->
                <form class="form" action="gonder.php" method="POST">
                    <div class="flex">
                        <label>
                            <input required="" name="isim" placeholder="" type="text" class="input">
                            <span>İsim</span>
                        </label>

                        <label>
                            <input required="" name="soyisim" placeholder="" type="text" class="input">
                            <span>Soyisim</span>
                        </label>
                    </div>

                    <label>
                        <input required="" name="email" placeholder="" type="email" class="input">
                        <span style="white-space: nowrap">E-Mail</span>
                    </label>

                    <label>
                        <input required="" name="telefon" type="tel" placeholder="" class="input">
                        <span style="white-space: nowrap">Telefon Numarası</span>
                    </label>
                    <label>
                        <textarea required="" name="mesaj" rows="3" placeholder="" class="input01"></textarea>
                        <span>Mesaj</span>
                    </label>

                    <button class="button">
                        <span class="shadow"></span>
                        <span class="edge"></span>
                        <span class="front">
                            <span>Gönder</span>
                        </span>
                    </button>
                </form>
            </div>
        </div>





</main>
<?php include 'footer.php'; ?>