<?php


$people = [

    ['Taro', 25,'men'],
    ['Jiro', 25,'men'],
    ['hanako', 25,'women'],
];

foreach( $people as $person) {
    echo $person[0] . '('.$person[1] . '歳' . $person[2] . ')'. '<br />';
}

