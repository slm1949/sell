 <?php
$this->breadcrumbs=array(
    'Products'=>array('category/index'),
    'Search'
);
?>

<h1>Search Keyword of "<?php echo $keyword ?>" Products</h1>

<ul class="clearfix thumbnails products_grid">
    <?php foreach ($model as $key => $product) { ?>
    <li class="span3">
        <?php
        $image = $this->widget('ext.SAImageDisplayer', array(
                'image' => $product->image,
                'group' => 'product',
                'size' => 'thumb',
                'title' => $product->name
            ), true);

        echo CHtml::link($image, array('product/view', 'id'=>$product->id), array(
            'class' => 'thumbnail'
        ));
        echo CHtml::link($product->name, array('product/view', 'id'=>$product->id));
        ?>
    </li>
    <?php } ?>
</ul>

<?php
if(!$model){
    echo '<p><strong>No Product</strong></p>';
}
?>

<div class="pagination">
    <?php
    // the pagination widget with some options to mess
    $this->widget('bootstrap.widgets.TbPager', array(
        'currentPage'=>$pages->getCurrentPage(),
        'itemCount'=>$item_count,
        'pageSize'=>$page_size,
        'maxButtonCount'=>5,
    ));
    ?>
</div>