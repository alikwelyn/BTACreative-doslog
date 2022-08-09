    <section id="sobre">
        <div class="container-fluid h-100">
            <div class="row h-100 justify-content-center align-items-center align-content-center">
                <div class="col-md-7"></div>
                <div class="col-md-5" data-aos="fade-up" data-aos-once="false" data-aos-easing="ease-in-out"
                    data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
                    <h2>quem somos</h2>
                    <?php $theme_options_code = 435; ?>
                    <?php if( have_rows('about_section', $theme_options_code) ): ?>
                    <?php while( have_rows('about_section', $theme_options_code) ): the_row();?>
                    <p><?php the_sub_field('text_about', $theme_options_code); ?></p>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>