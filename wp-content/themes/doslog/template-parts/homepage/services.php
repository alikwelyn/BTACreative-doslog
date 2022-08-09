    <section id="servicos"> 
      <div class="container">
        <div class="row">
          <div class="col-md-12" data-aos="fade-up" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
            <h2>Serviços</h2>
          </div>

          <?php 
          $posts = get_posts(array('posts_per_page'	=> -1,'post_type'			=> 'servicos','order' => 'ASC'));
          if( $posts ): ?>

          
          <?php foreach( $posts as $post ): setup_postdata( $post ); ?>
          <div class="col-md-4" data-aos="fade-right" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
            <div class="card">
                <img class="card-img-top" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>" alt="<?php the_title(); ?>"/>
              <div class="card-body">
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          <?php wp_reset_postdata(); ?>
          <?php endif; ?>

          <div class="col-md-12 text-center">
            <a href="#contato" class="btn btn_red">FAÇA SEU ORÇAMENTO</a>
          </div>
        </div>
      </div>

    </section>