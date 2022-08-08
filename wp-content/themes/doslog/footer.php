  <?php $obj_id = "97"; ?>
  <footer>
    <div class="footer-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-md-4 logo-client">
            <img src="<?php bloginfo('template_url'); ?>/assets/imgs/icone-logo.png" width="140" alt="<?php echo get_bloginfo( 'name' ) . ' - '. get_bloginfo( 'description' ); ?>">
          </div>
          <div class="col-xs-12 col-md-4 cnpj">
          </div>
          <div class="col-xs-12 col-md-4 bta-creative">
          <span>Desenvolvido por </span><a href="https://btacreative.com.br/"><img src="<?php bloginfo('template_url'); ?>/assets/imgs/logo-bta-principal.svg" width="75" alt="BTA Creative"></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
function VerTelefone(){ 
  $("#VerTelefone").text('<?php $phone = get_field('phone_default', $obj_id);
  $whatsapp = get_field('whatsapp_default', $obj_id);
  if($phone == ""){
    $whatsapp = "(".substr($whatsapp, 0, 2).") ".substr($whatsapp, 2, -4)."-".substr($whatsapp, -4);
    echo $whatsapp;
  } else {
    $phone = "(".substr($phone, 0, 2).") ".substr($phone, 2, -4)."-".substr($phone, -4);
    echo $phone;
  }
  ?>'); 
}
function VerEmail(){ 
  $("#VerEmail").text('<?php the_field('email_default', $obj_id);?>'); 
}
</script>
</body>
</html>