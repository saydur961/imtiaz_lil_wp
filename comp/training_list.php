<?php

  require_once(__DIR__.'/../utils/parse_date.php');

  $custom_fields = get_post_custom( get_the_ID() );

?>

<div style="display: flex; align-items: center; justify-content: space-between;" >

  <div style="flex: 0 0 18%;" >
    
    <span> <?php echo parse_date($custom_fields['start_date'][0]); ?> </span>
    <span> - </span>
    <span> <?php echo parse_date($custom_fields['end_date'][0]); ?> </span>

  </div>

  <div style="flex: 0 0 40%;" >
    <h3>
      <a style="font-size: 14px;"
        href="<?php echo the_permalink(); ?>"
      >

        <?php if(isset($custom_fields['title_prefix']) && isset($custom_fields['title_prefix'][0])): ?>
          <span style="color: red;" > <?php echo $custom_fields['title_prefix'][0]; ?> </span>
        <?php endif; ?>

        <?php echo the_title(); ?>

        <?php if(isset($custom_fields['title_suffix']) && isset($custom_fields['title_suffix'][0])): ?>
          <span style="color: red;" > <?php echo $custom_fields['title_suffix'][0]; ?> </span>
        <?php endif; ?>
        


      </a>
    </h3>
  </div>

  <div style="flex: 0 0 12%;" >
      $<?php echo $custom_fields['tuition'][0]; ?>
  </div>

  <div>



  </div>

</div>