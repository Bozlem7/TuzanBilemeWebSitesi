<?php include 'header.php'; ?>
<main class="content">
    <div class="content-wrapper">
        <h2 class="title-font">Bize Ulaşın</h2>
        <hr>
    </div>
    <div>
        <div class="ortala">
            <img src="./img/dukkanbackground.svg" alt="dukkan">
        </div>

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

        <div class="map-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1728.832681936149!2d36.4156838322636!3d41.23822625465072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4087df7fdaa73813%3A0x55d66b36a8426a5a!2zxLBzdGlrbGFsLCA1Ny4gU2suIE5vOjMyLCA1NTMwMCBUZWtrZWvDtnkvU2Ftc3VuLCBUw7xya2l5ZQ!5e0!3m2!1str!2sus!4v1781269841805!5m2!1str!2sus"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>



</main>
<?php include 'footer.php'; ?>