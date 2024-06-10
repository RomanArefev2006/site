<!DOCTYPE html>
<html lang="en">

<?php require_once "incs/head.php"?>

<body>
    <?php require_once "incs/header.php"?>
    <main class="main">
        <div class="wrapper">
            <div class="filter">
                <h1 class="filter__title">Фильтр Товаров</h1>
                <div class="filter__buttons">
                    <button class="filter__btn" id="all"><span>Все</span></button>
                    <button class="filter__btn" id="gyrobtn"><span>Гироскутеры</span></button>
                    <button class="filter__btn" id="sambtn"><span>Электросамокаты</span></button>
                </div>
            </div>
            <h1 class="bestsellers__title title__giro">Гироскутеры</h1>
            <section class="bestsellers gyro">
                <?php foreach ($cards_giro as $item): ?>
                    <div class="product__card">
                        <div class="product__img-box">
                            <img src="/public/img/products/siegway2.png" class="product__img" alt="">
                        </div>
                        <h3 class="product__subtitle"><?= $item['name'] ?></h3>
                        <h1 class="product__title"><?= $item['card-name'] ?></h1>
                        <a href="#"><img src="/public/img/products/rating1.svg" class="product__rating" alt=""></a>

                        <div class="card__interection">
                            <div class="price">
                                <h2 class="product__price sale"><?= $item['product-price-sale'] ?></h2>
                                <h2 class="product__price"><?= $item['price'] ?></h2>
                            </div>
                            <div class="interction">
                                <a href="#"><img src="/public/img/products/like.svg" class="product__interaction" alt=""></a>
                                <a href="#"> <img src="/public/img/products/compare.svg" class="prodict__interaction" alt=""></a>
                            </div>
                        </div>

                        <div class="product__buying">
                            <a href="/card?id=<?=$item["id"]?>" class="product__buying-btn">Купить в 1 клик</a>
                            <a href="#"><img src="/public/img/products/cart.svg" alt=""></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
            <h1 class="bestsellers__title title__samkat">Электросамокаты</h1>
            <section class="bestsellers samkat">
                <?php foreach ($cards_samkat as $item): ?>
                    <div class="product__card">
                        <div class="product__img-box">
                            <img src="/public/img/products/samkat1.png" class="product__img" alt="">
                        </div>
                        <h3 class="product__subtitle"> <?= $item['name'] ?> </h3>
                        <h1 class="product__title"><?= $item['card-name'] ?></h1>
                        <a href="#"><img src="/public/img/products/rating1.svg" class="product__rating" alt=""></a>

                        <div class="card__interection">
                            <div class="price">
                                <h2 class="product__price sale"><?= $item['product-price-sale'] ?></h2>
                                <h2 class="product__price"><?= $item['price'] ?></h2>
                            </div>
                            <div class="interction">
                                <a href="#"><img src="/public/img/products/like.svg" class="product__interaction" alt=""></a>
                                <a href="#"> <img src="/public/img/products/compare.svg" class="prodict__interaction" alt=""></a>
                            </div>
                        </div>

                        <div class="product__buying">
                            <a href="/card?id=<?=$item["id"]?>" class="product__buying-btn">Купить в 1 клик</a>
                            <a href="#"><img src="/public/img/products/cart.svg" alt=""></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
        </div>
    </main>

    <?php require_once "incs/footer.php"?>
    <script src="../../public/src/js.js"></script>
</body>

</html>

<!-- 𝕂𝕃𝕍ℕ𝕄ℝ𝕋 -->