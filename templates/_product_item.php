<div class="col-sm-6 col-md-6 col-lg-4">
    <article class="card mb-4">
        <div class="card-top">

            <?php if ($product["sale"]) { ?>
                <div class="card-top__sale">Sale</div>
            <?php }?>

            <?php if ($product["new"]) { ?>
                <div class="card-top__sale">New</div>
            <?php }?>

            <div class="card-top__cat"><?php print_r($product["category"]); ?></div>
        </div>
        <div class="product-img">
            <img src="img/products/<?php print_r($product["img"]); ?>">
        </div>
        <div class="card-body">
            <h4 class="item-title"><a href="product-page.html"><?php print_r($product["title"]); ?></a></h4>
            <div class="card-btn">
                <div class="card-btn__price">
                    <?php echo(number_format($product["price"], 0, "", " ")); ?> ₽
                </div>
                <div class="card-btn__btn">
                    Купить
                </div>
            </div>
        </div>
    </article>
</div>