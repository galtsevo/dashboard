<div class="container">
    <div class="page-header">
        <h1><?php echo $ctype; ?></h1>
    </div>

    <section class="intro">
        <div class="product-container">
            <h2 class="intro-title">Дизайнерские тенденции последнего времени демонстрируют постепенное возвращение к классическому стилю интерьера.
                И не удивительно.</h2>
            <p>Что может быть красивее правильных линий и четко выверенных пропорции. Без этого невозможно представить интерьер в классическом стиле.
                Новые двери ARISTO, созданные для классических интерьеров, сразу же покорят вас естественностью, лаконичностью и элегантностью.
                Строгие формы придадут помещению великолепия и представительный вид.</p>
        </div>
    </section>

    <section class="popular-products">
        <div class="product-container">
            <ul class="products-list">
                <?php foreach ($items as $item): ?>
                    <li>
                        <a class="product-card" href="#">
                            <h2><?=$item['title'];?></h2>
                            <!--                            <span class="price"><del>289</del> 288</span>-->
                            <img src="<?=$item['path'];?>"  alt="<?=$item['title'];?>">
                        </a>
                    </li>

                <?php endforeach; ?>
            </ul>
        </div>
    </section>
</div>
<!--<link rel="stylesheet" href="../../public/css/custom.css" />-->