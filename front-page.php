<?php get_header(); ?>

<main>
    <section class="hero">
        <h1>Sklep Remoncik</h1>
        <p class="hero-subtitle">Twój lokalny sklep z materiałami remontowymi w Radziłowie</p>
        <div class="hero-info">
            <span>📍 Karwowska 7b, 19-213 Radziłów</span>
            <span>🕐 Pon-Pt: 7:00-16:00 | Sob: 7:00-14:00</span>
            <span>📞 602 658 773</span>
        </div>
    </section>

    <section class="mapa">
        <h2>Znajdź nas</h2>
        <p class="section-subtitle">Jesteśmy w centrum Radziłowa</p>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2864.4301186371736!2d22.408477512573246!3d53.410334069817964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e02be367d61bc1%3A0xb8cd54290939c5a2!2sSklep%20%22Remoncik%22!5e1!3m2!1spl!2spl!4v1787260740791!5m2!1spl!2spl"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="strict-origin-when-cross-origin">
        </iframe>
    </section>

    <section class="produkty-home">
        <h2>Nasze produkty</h2>
        <p class="section-subtitle">To co znajdziesz u nas w sklepie</p>
        <?php echo do_shortcode('[products limit="8" columns="4"]'); ?>
    </section>
</main>

<?php get_footer(); ?>