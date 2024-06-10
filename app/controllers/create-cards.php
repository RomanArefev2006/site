<?php
    /**
     * @var Db $db
     */


    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errors = [];
        if (empty(trim($_POST['category']))) {
            $errors['category'] = 'Category is required';
        }
        if (empty(trim($_POST['name']))) {
            $errors['name'] = 'Name is required';
        }
        if (empty(trim($_POST['price']))) {
            $errors['price'] = 'Price is required';
        }
        if (empty($errors)) {
            $db->query("INSERT INTO `card` (`name`, `card-name`, `product-price-sale`, `price`) VALUES (?, ?, ?, ?)", [
                $_POST['category'],
                $_POST['name'],
                $_POST['sale'],
                $_POST['price']
            ]);
        }
    }

    require_once VIEWS . "/create-cards.tpl.php";