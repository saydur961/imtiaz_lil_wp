<?php

  // get all category
  $all_categories = get_categories();

  foreach($all_categories as $category) {

?>

<h2>
  <?php echo  $category->name; ?>
</h2>

<?php

  // query for category data
  $query = new WP_Query( array(
    'post_type' => 'training',
    'posts_per_page' => -1,
    'meta_key' => 'start_date',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'tax_query' => array(
        array (
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $category->term_id,
        )
    ),
  ) );

  while($query->have_posts()) {
    $query->the_post();
?>

    <?php require __DIR__.'/training_list.php'; ?>

<?php
  }
  wp_reset_postdata();
  unset($query);
}
?>