<?php
  $terms = get_terms('category');
?>
<div class="blogListCat">
  <div class="container">
    <ul class="txtCenter">
      <li class="<?php if($_GET['cat_id'] == '') { echo "active"; } ?>"><a href="index.php"><span>All</span></a></li>
      <?php
        foreach($terms as $term)
        { ?>
          <li class ="<?php if($term->term_id == $_GET['cat_id']) { echo "active"; } ?>"><a href="<?php echo home_url(); ?>?cat_id=<?php echo $term->term_id; ?>"><span><?php echo $term->name; ?></span></a></li>
        <?php } ?>
    </ul>
  </div>
</div>