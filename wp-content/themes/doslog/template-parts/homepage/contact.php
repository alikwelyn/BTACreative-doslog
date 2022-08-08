<?php 

$obj_id = "97";

?>
    <div id="contato"> 
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
            <div class="col-md-6">
              <h2>contato</h2>
              <div class="border"></div>
              <div class="row">
                <div class="col-md-12 mx-auto">
                  <div class="row">
                    <div class="col-md-12">
                      <p class="end">
                        <?php the_field('endereco', $obj_id); ?><br>
                        <?php the_field('bairro_cidade', $obj_id); ?><br>
                        <?php //the_field('cep', $obj_id); ?><br>
                        <?php //the_field('horarios', $obj_id); ?>
                      </p>
                    </div>
                    <div class="col-md-6">
                      <div class="btn btn_white btn-block" id="VerTelefone" onclick="VerTelefone()">VER TELEFONE</div>
                    </div>
                    <div class="col-md-6">
                      <div class="btn btn_white btn-block" id="VerEmail" onclick="VerEmail()">VER EMAIL</div>
                    </div>
                    <div class="col-md-6">
                      <div class="btn btn_white btn-block mt-2">trabalhe conosco</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mx-auto">
                  <ul class="styled-icons icon-theme-colored list-inline">
                  <?php
                  $social_media_footer = get_field('social_media_footer', $obj_id);
                  $social_media_choose_footer = get_field('social_media_choose_footer', $obj_id);
                  if($social_media_footer == true){ 
                  ?>
                    <?php if($social_media_choose_footer && in_array('Facebook', $social_media_choose_footer)) { ?>
                      <li><a href="<?php the_field('link_facebook', $obj_id); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <?php } ?>
                    <?php if($social_media_choose_footer && in_array('Instagram', $social_media_choose_footer)) { ?>
                      <li><a href="<?php the_field('link_instagram', $obj_id); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <?php } ?>
                    <?php if($social_media_choose_footer && in_array('Youtube', $social_media_choose_footer)) { ?>
                      <li><a href="<?php the_field('link_youtube', $obj_id); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    <?php } ?>
                    <?php if($social_media_choose_footer && in_array('Twitter', $social_media_choose_footer)) { ?>
                      <li><a href="<?php the_field('link_twitter', $obj_id); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <?php } ?>
                    <?php if($social_media_choose_footer && in_array('Linkedin', $social_media_choose_footer)) { ?>
                      <li><a href="<?php the_field('link_linkedin', $obj_id); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <?php } ?>
                  <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 mx-auto">
              <h2>orçamento</h2>
              <div class="border"></div>
              <?php echo do_shortcode ('[contact-form-7 id="20"]'); ?>
            </div>
        </div>
      </div>
    </div>