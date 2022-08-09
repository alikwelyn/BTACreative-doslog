    <section id="atuacao"> 
      <div class="container">
        <div class="row">
          <div class="col-md-12" data-aos="fade-up" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
            <h2>Áreas de Atuação</h2>
            <p>Trabalhamos com o transporte de diversos tipos de mercadorias, entre eles estão:</p>
            
          </div>
          
          <?php 
          $theme_options_code = 435;
          $expertise_areas_section = get_field('expertise_areas_section', $theme_options_code);
          foreach($expertise_areas_section as $value) {
          ?>

          <div class="col-md-4" data-aos="fade-right" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="10" data-aos-duration="1000">
            <div class="card">
              <div class="card-body">
                <p><?php echo $value; ?></p>
              </div>
            </div>
          </div>

          <?php } ?>

          <div class="col-md-12 text-center">
            <a href="#contato" class="btn btn_red">FAÇA SEU ORÇAMENTO</a>
          </div>
        </div>
      </div>

    </section>