<?php

/**
 * @var Db $db
 */

    $cards_giro = $db->query("SELECT * FROM `card` WHERE `name`='Гироскутеры'")->findAll();
    $cards_samkat = $db->query("SELECT * FROM `card` WHERE `name`='Электросамокаты'")->findAll();

    require_once VIEWS . "/catalog.tpl.php";