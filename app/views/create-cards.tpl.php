<!doctype html>
<html lang="en">
    <?= require_once VIEWS . "/incs/head.php"; ?>
<body>
    <?= require_once VIEWS . "/incs/header.php"; ?>
    <div class="wrapper">
        <h1 style="font-size: 50px; margin-bottom: 30px">Создать карточку</h1>
        <div>
            <div>
                <form action="" method="post">
                    <label for="category">Категория</label>
                    <br>
                    <input type="text" placeholder="Категория" name="category" style="margin-bottom: 30px;margin-top: 10px; padding: 10px 20px; border: none; background-color: #e2e2e2; border-radius: 10px; width: 100%; height: 50px">
                    <?php if(!empty($errors['category'])): ?>
                        <div style="color: red">
                            <p><?= $errors['category'] ?></p>
                        </div>
                    <?php endif; ?>
                    <br>
                    <label for="name">Имя карточки</label>
                    <br>
                    <input type="text" placeholder="Имя карточки" name="name" style="margin-bottom: 30px;margin-top: 10px; padding: 10px 20px; border: none; background-color: #e2e2e2; border-radius: 10px; width: 100%; height: 50px">
                    <?php if(!empty($errors['name'])): ?>
                        <div style="color: red">
                            <p><?= $errors['name'] ?></p>
                        </div>
                    <?php endif; ?>
                    <br>
                    <label for="sale">Скидка</label>
                    <br>
                    <input type="text" name="sale" placeholder="Скидка" style="margin-bottom: 30px;margin-top: 10px; padding: 10px 20px; border: none; background-color: #e2e2e2; border-radius: 10px; width: 100%; height: 50px">
                    <br>
                    <label for="price">Цена</label>
                    <br>
                    <input type="text" placeholder="Цена" name="price" style="margin-bottom: 30px;margin-top: 10px; padding: 10px 20px; border: none; background-color: #e2e2e2; border-radius: 10px; width: 100%; height: 50px">
                    <?php if(!empty($errors['price'])): ?>
                        <div style="color: red">
                            <p><?= $errors['price'] ?></p>
                        </div>
                    <?php endif; ?>
                    <br>
                    <button style="cursor:pointer;background-color: black; color: white; padding: 20px 30px; border-radius: 10px; border: none" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>
    <?= require_once VIEWS . "/incs/footer.php"; ?>
</body>
</html>