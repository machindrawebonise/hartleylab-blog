<?php
  $terms = get_terms('category');
?>
<div class="blogListCat">
  <div class="container">
    <ul class="txtCenter">
      <li class=""><a href="index.php"><span>All</span></a></li>
      <?php
        foreach($terms as $term)
        { ?>
          <li><a href=""><span><?php echo $term->name; ?></span></a></li>
        <?php } ?>
    </ul>
  </div>
</div>