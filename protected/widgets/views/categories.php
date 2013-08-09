<h2>Products</h2>

<ul class="cate_list">
    <?php foreach ($categories as $category) { ?>
    <li>
        <?php echo CHtml::link($category->name, '#'); ?>
        <?php if($category->children){ ?>
        <ul>
            <?php foreach ($category->children as $child) { ?>
            <li><?php echo CHtml::link($child->name, array('product/category', 'id'=>$child->id)); ?></li>
            <?php } ?>
        </ul>
        <?php } ?>
    </li>
    <?php }?>
</ul>