<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => 'Mega Cash', // set false to total remove
            'description'  => 'Financial institution providing low cost quick online payday loans and fast cash advances in multiple repayments. Easy to apply and instant approval! Money by e-transfer all over Canada.', // set false to total remove
            'separator'    => '-',
            'keywords'     => ['online cash loans', 'money', 'cash', 'cash canada', 'fast cash', 'cash loans', 'quick cash', 'smart loans', 'payday', 'alberta', 'ontario', 'british columbia', 'nova scotia', 'Saskatchewan', 'Manitoba', 'financial', 'cash lenders', 'canada', 'canadian', 'online cash loan', 'loans', 'smart loan', 'cash loan', 'alternative payday', 'payday loans', 'payday loan', 'express approval', 'easy money', 'easy cash', 'cash advance', 'toronto', 'ottawa', 'vancouver', 'edmonton', 'calgary', 'bc', 'new brunswick', 'moncton'],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => false, // set false to total remove
            'description' => false, // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          //'card'        => 'summary',
          //'site'        => '@LuizVinicius73',
        ],
    ],
];
