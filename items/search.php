<?php
$pageTitle = __('Search Items');
echo head(array('title' => $pageTitle,
           'bodyclass' => 'items advanced-search'));
?>
<div id="primary">
<h1><?php echo $pageTitle; ?></h1>

<?php echo $this->partial('items/search-form.php',
    array('formAttributes' =>
        array('id'=>'advanced-search-form'))); ?>



</div><!-- end primary -->

<div id="secondary">
    <ul class="items-nav navigation" id="secondary-nav">
        <?php echo public_nav_items(); ?>
    </ul>

    <!-- Featured Item -->
    <div id="featured-item" class="featured">
        <h2><?php echo __('Featured Item'); ?></h2>
        <?php echo random_featured_items(1); ?>
    </div><!--end featured-item-->

</div><!-- end secondary -->


<?php echo foot(); ?>
