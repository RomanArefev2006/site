<?php
/**
 * @var Db $db
 */

    $id = $_GET['id'] ?? 0;
    $card = $db->query("SELECT * FROM `card` WHERE `id`=?", [$id])->findOrFail();

    require_once VIEWS . "/card.tpl.php";