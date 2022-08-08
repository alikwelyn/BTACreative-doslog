    <section id="servicos-consignacao"> 
      <div id="servicos" class="container">
        <div class="row">
          <div class="col-md-12" data-aos="fade-up" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
            <h2>SERVIÇOS</h2>
            <div class="border"></div>
          </div>

          <?php 
          $posts = get_posts(array('posts_per_page'	=> -1,'post_type'			=> 'servicos','order' => 'ASC'));
          if( $posts ): ?>

	        <?php foreach( $posts as $post ): setup_postdata( $post ); ?>

          <div class="col-md-3" data-aos="fade-right" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
            <div class="card">
                <img class="card-img-top" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>" alt="<?php the_title(); ?>"/>
              <div class="card-body">
                <h4><?php the_title(); ?></h4>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          <?php wp_reset_postdata(); ?>
          <?php endif; ?>

          <div class="col-md-12 text-center">
            <a href="#contato" class="btn btn_white">FAÇA SEU ORÇAMENTO</a>
          </div>
        </div>
      </div>

      <div id="consignacao" class="container">
        <div class="row justify-content-center">
          <div class="col-md-12" data-aos="fade-up" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
            <h2>consignação</h2>
            <div class="border"></div>
          </div>

          <?php 
          $posts = get_posts(array('posts_per_page'	=> -1,'post_type'			=> 'consignacao','order' => 'ASC'));
          if( $posts ): ?>

	        <?php foreach( $posts as $post ): setup_postdata( $post ); ?>

          <div class="col-md-3" data-aos="fade-right" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
            <div class="card">
                <img class="card-img-top" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>" alt="<?php the_title(); ?>"/>
              <div class="card-body">
                <h4><?php the_title(); ?></h4>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          <?php wp_reset_postdata(); ?>
          <?php endif; ?>

          <div class="col-md-12 text-center">
            <a href="#contato" class="btn btn_white">FAÇA SEU ORÇAMENTO</a>
          </div>
        </div>
      </div>

    </section>

    <section id="locacao"> 
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12" data-aos="fade-up" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
            <h2>locação de equipamentos</h2>
            <div class="border"></div>
          </div>

          <?php 
          $posts = get_posts(array('posts_per_page'	=> -1,'post_type'			=> 'locacao-equipamentos','order' => 'ASC'));
          if( $posts ): ?>

	        <?php foreach( $posts as $post ): setup_postdata( $post ); ?>

          <div class="col-md-6" data-aos="fade-right" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
            <div class="card-locacao">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6 justify-content-center  d-flex align-items-center">
                    <h4><?php the_title(); ?></h4>
                  </div>
                  <div class="col-md-6">
                    <img class="card-img-top" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>" alt="<?php the_title(); ?>"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          <?php wp_reset_postdata(); ?>
          <?php endif; ?>

          <div class="col-md-12 text-center">
            <a href="#contato" class="btn btn_orange">FAÇA SEU ORÇAMENTO</a>
          </div>
        </div>
      </div>
    </section>