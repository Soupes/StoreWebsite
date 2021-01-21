<!--banner-starts-->
<div class="bnr" id="home">
    <div  id="top" class="callbacks_container">
        <ul class="rslides" id="slider4">
            <li>
                <img src="images/bnr-1.png" alt=""/>
            </li>
            <li>
                <img src="images/ban-2.png" alt=""/>
            </li>
            <li>
                <img src="images/001.png" alt=""/>
            </li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<!--banner-ends-->


<!--product-starts-->
<?php if($hits): ?>
    <?php $curr = \ishop\App::$app->getProperty('currency'); ?>
<div class="product">
    <div class="container">
        <div class="product-top">
            <div class="product-one">
            <?php foreach($hits as $hit): ?>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="product/<?=$hit->alias;?>" class="mask"><img class="img-responsive zoom-img" src="images/<?=$hit->img;?>" alt="" /></a>
                        <div class="product-bottom">
                            <h3><a href="product/<?=$hit->alias;?>"><?=$hit->title;?></a></h3>
                            <p>Хит</p>
                            <h4>
                                <a data-id="<?=$hit->id;?>" class="add-to-cart-link" href="cart/add?id=<?=$hit->id;?>"><i></i></a> <span class=" item_price"><?=$curr['symbol_left'];?><?=$hit->price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                            <?php if($hit->old_price): ?>
                                <small><del><?=$curr['symbol_left'];?><?=$hit->old_price * $curr['value'];?><?=$curr['symbol_right'];?></del></small>
                            <?php endif; ?>
                            </h4>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!--product-end-->
