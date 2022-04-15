<!-- container -->
<div class="container">

    <!-- show page header -->
    <div class="page-header">
        <h1><?php echo $title; ?></h1>
    </div>

    <section class="intro">
        <div class="product-container">
            <h2 class="intro-title">Комфорт и уют в&nbsp;<b>вашей</b> квартире</h2>
            <p>Разнообразные товары для дома с доставкой по всей планете</p>
        </div>
    </section>

    <section class="popular-products">
        <div class="product-container">
            <h3 class="visually-hidden">Популярные товары</h3>

            <ul class="products-list">
                <?php foreach ($items as $item): ?>
                    <li>
                        <a class="product-card" href="catalog/type/<?php echo $item['id']; ?>">
                            <h2><?=$item['title'];?></h2>
<!--                            <span class="price"><del>289</del> 288</span>-->
                            <img src="<?=$item['path'];?>"  alt="<?=$item['title'];?>">
                        </a>
                    </li>

                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <section class="features">
        <div class="product-container">
            <h3 class="features-title">Что <b>выделяет</b> нас среди конкурентов?</h3>
            <ul class="features-list">
                <li class="feature-unique">Уникальные товары не&nbsp;имеют аналогов</li>
                <li class="feature-organic">Используем только природные материалы</li>
                <li class="feature-protected">Устойчивы к кошачьим зубам и когтям</li>
            </ul>
        </div>
    </section>