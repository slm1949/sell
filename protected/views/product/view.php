 <?php
$this->breadcrumbs=array(
    $product->category->name=>array('product/category', 'id'=>$product->category->id),
    $product->name
);
?>

<h1><?php echo $product->name; ?></h1>

<div>
    <p>
    <?php
    if($product->imageExists){
        $this->widget('ext.SAImageDisplayer', array(
            'image' => $product->image,
            'group' => 'product',
            'size' => 'big',
            'title' => $product->name
        ));
    }
    ?>
    </p>

    <p>Model:<?php echo $product->model; ?></p>
    
    <?php echo $product->description; ?>
</div>
