<!-- container -->
<div class="container">

    <div class="row row-eq-height">
        <?php foreach ($items as $item): ?>
            <div class="col-md-4" >
                <div class="item">
                    <a href="catalog/type/<?php echo $item['id']; ?>">
                        <h3><i class="sprite sprite-right_o"></i><?=$item['title'];?></h3>
                        <div class="img-wrap">
                            <img src="<?=$item['path'];?>" alt="<?=$item['title'];?>" title="<?=$item['title'];?>">
                        </div>
                    </a>
                    <div class="tags">
                        <a href="#"><i class="sprite sprite-image"></i> Подробнее</a>
                        <a href="#"><i class="sprite sprite-calc_g"></i> Калькулятор</a>
                        <a href="#"><i class="sprite sprite-ruler_s"></i> Заказать проект</a>
                    </div>
<!--                    <a style="margin-top: 10px" href="oracal/" class="btnpdr">Подробнее</a>-->
                </div>
            </div>
        <?php endforeach; ?>



        <!-- -->
        <div class="col-md-4" style="height: 68px;">
            <a href="materialyi/" class="offer">
                <h3>Материалы</h3>
                <img src="files/pics/materials.png" alt="">
            </a>
        </div>
        <div class="col-md-4 col-md-push-4" style="height: 68px;">
            <a href="furnitura/" class="offer text-right">
                <h3>Фурнитура</h3>
                <img src="files/pics/furniture.png" alt="">
            </a>

        </div>
        <div class="col-md-4 col-md-pull-4" style="height: 68px;">
            <a href="materialyi/" class="offer">
                <h3>Цвета</h3>
                <img src="files/pics/materials.png" alt="">
            </a>
        </div>
    </div>

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>О нас</h2>
                    <p>Компания <strong>Aristo-Чехов</strong>  предлагает Вам услуги по разработке и изготовлению
                        нестандартных мебельных конструкций, которые сделают убранство Вашего дома удобным и красивым.
                        Шкафы-купе и гардеробные изготавливаются с использованием систем компании "ARISTO"- ведущего
                        мирового производителя легкосплавных и стальных профилей для мебельных конструкций, расчитанных
                        более чем на 30 лет бесперебойной работы.</p>
                    <p>Ваш интерьер преобразят наши витражи, зеркала с пескоструйными рисунками, фрески, цветные стекла,
                        стилизованные пластики, наш шкаф станет самой интересной деталью в комнате. В кухнях нашего
                        производства используются самые красивые и надежные фасады - МДФ с покрытием - эмаль и пластики
                        разнообразных фактур и цветов, массив ценных пород дерева итальянского производства, и фурнитура
                        лучших производителей. Мы выполним полный комплекс работ от замера до монтажа, причем замер
                        бесплатный.</p>
                    <p>Стаж работы наших специалистов в этом деле от 10 лет, мы знаем про мебельные конструкции все.
                        Это отличная возможность купить мебель в чехове выгодно. А умельцы могут приобрести у нас
                        отдельно все комплектующие и профили компании Aristo, заполнение для дверей-купе - зеркала,
                        витражи, фрески, дсп и создать свой шкаф.</p>
                </div>
            </div>
        </div>

    </section>