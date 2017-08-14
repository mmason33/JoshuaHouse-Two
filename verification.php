<?php
/**
 * Template Name: Verification
 */
?>
<?php get_template_part('includes/hero'); ?>
<div class="container ins-verify">
  <div class="verify row justify-content-center">
    <div class="col-md-7 text-right">
      <p class="step-counter">Step 1 of 6</p>
    </div>
    <div class="col-md-6">
        <?php echo do_shortcode('[contact-form-7 id="96" title="Verification"]'); ?>
        <div class="form-group button-wrap">
          <button class="btn btn-primary next">Next Step</button>
        </div>
    </div>
  </div>
</div>
