<h2>Products</h2>

<ul>
    <?php foreach ($categories as $category) { ?>
    <li>
        <?php echo $category->name; ?>
        <?php if($category->children){ ?>
        <ul>
            <?php foreach ($category->children as $child) { ?>
            <li><?php echo CHtml::link($child->name, array('category/view', 'id'=>$child->id)); ?></li>
            <?php } ?>
        </ul>
        <?php } ?>
    </li>
    <?php }?>
</ul>