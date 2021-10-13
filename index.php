<?php
    $myName = 'Ilya';
    echo $myName."\n";

    $myAge = 19;
    echo $myAge."\n";

    $numPi = 3.14;
    echo $numPi."\n";

    $arr1 = [
        'alex',
        'vova',
        'tolya'
    ];
    print_r($arr1);

    $arr2 = [
        'alex',
        'vova',
        'tolya',
        [
            'kostya',
            'olya'
        ]
    ];
    print_r($arr2);

    $arr3 = [
        'alex',
        'vova',
        'tolya',
        [
            'kostya',
            'olya',
            [
                'gosha',
                'mila'
            ]
        ]
    ];
    print_r($arr3);

    $arr4 = [
        [
            'alex',
            'vova',
            'tolya'
        ],
        [
            'kostya',
            'olya'
        ],
        [
            'gosha',
            'mila'
        ]
    ];
    print_r($arr4);