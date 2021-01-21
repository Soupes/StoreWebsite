<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <!--<li><a href="index.html">Home</a></li>
                <li class="active">Single</li>-->
                <?=$breadcrumbs;?>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--start-single-->
<div class="single contact">
    <div class="container">
        <div class="single-main">
            <div class="col-md-9 single-main-left">
                <div class="sngl-top">
                    <div class="col-md-5 single-top-left">
                        <?php if($gallery): ?>
                            <div class="flexslider">
                                <ul class="slides">
                                    <?php foreach($gallery as $item): ?>
                                        <li data-thumb="images/<?=$item->img;?>">
                                            <div class="thumb-image"> <img src="images/<?=$item->img;?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php else: ?>
                            <img src="images/<?=$product->img;?>" alt="">
                        <?php endif; ?>
                        <!-- FlexSlider -->

                    </div>
                    <?php
                    $curr = \ishop\App::$app->getProperty('currency');
                    $cats = \ishop\App::$app->getProperty('cats');
                    ?>
                    <div class="col-md-7 single-top-right">
                        <div class="single-para simpleCart_shelfItem">
                            <h2><?=$product->title;?></h2>
                            <h5 class="item_price" id="base-price" data-base="<?=$product->price * $curr['value'];?>"><?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?></h5>
                            <?php if($product->old_price): ?>
                                <del><?=$curr['symbol_left'];?><?=$product->old_price * $curr['value'];?><?=$curr['symbol_right'];?></del>
                            <?php endif; ?>
                            <?=$product->content;?>
                            <?php if($mods): ?>
                            <div class="available">
                                <ul>
                                    <li>Color
                                        <select>
                                            <option>Выбрать цвет</option>
                                            <?php foreach($mods as $mod): ?>
                                                <option data-title="<?=$mod->title;?>" data-price="<?=$mod->price * $curr['value'];?>" value="<?=$mod->id;?>"><?=$mod->title;?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <ul class="tag-men">
                                <li><span>Category</span>
                                    <span>: <a href="category/<?=$cats[$product->category_id]['alias'];?>"><?=$cats[$product->category_id]['title'];?></a></span></li>
                            </ul>
                            <div class="quantity">
                                <input pattern="\d+"  onkeypress="return false" type="number" min="1" size="4" value="1" name="quantity" step="1">
                            </div>
                            <a id="productAdd" data-id="<?=$product->id;?>" href="cart/add?id=<?=$product->id;?>" class="add-cart item_add add-to-cart-link">ADD TO CART</a>


                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <?php if($related): ?>
                    <div class="latestproducts">
                        <div class="product-one">
                            <h3>С этим товаром также покупают:</h3>
                            <?php foreach($related as $item): ?>
                                <div class="col-md-4 product-left p-left">
                                    <div class="product-main simpleCart_shelfItem">
                                        <a href="product/<?=$item['alias'];?>" class="mask"><img class="img-responsive zoom-img" src="images/<?=$item['img'];?>" alt="" /></a>
                                        <div class="product-bottom">
                                            <h3><a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a></h3>
                                            <p>Explore Now</p>
                                            <h4>
                                                <a class="item_add add-to-cart-link" href="cart/add?id=<?=$item['id'];?>" data-id="<?=$item['id'];?>"><i></i></a>
                                                <span class="item_price"><?=$curr['symbol_left'];?><?=$item['price'] * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                                <?php if($item['old_price']): ?>
                                                    <del><?=$curr['symbol_left'];?><?=$item['old_price'] * $curr['value'];?><?=$curr['symbol_right'];?></del>
                                                <?php endif; ?>
                                            </h4>
                                        </div>
                                        <div class="srch">
                                            <span>-50%</span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($recentlyViewed): ?>
                    <div class="latestproducts">
                        <div class="product-one">
                            <h3>Недавно просмотренные:</h3>
                            <?php foreach($recentlyViewed as $item): ?>
                                <div class="col-md-4 product-left p-left">
                                    <div class="product-main simpleCart_shelfItem">
                                        <a href="product/<?=$item['alias'];?>" class="mask"><img class="img-responsive zoom-img" src="images/<?=$item['img'];?>" alt="" /></a>
                                        <div class="product-bottom">
                                            <h3><a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a></h3>

                                            <h4>
                                                <a class="item_add add-to-cart-link" href="cart/add?id=<?=$item['id'];?>" data-id="<?=$item['id'];?>"><i></i></a>
                                                <span class="item_price"><?=$curr['symbol_left'];?><?=$item['price'] * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                                <?php if($item['old_price']): ?>
                                                    <del><?=$curr['symbol_left'];?><?=$item['old_price'] * $curr['value'];?><?=$curr['symbol_right'];?></del>
                                                <?php endif; ?>
                                            </h4>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--end-single-->