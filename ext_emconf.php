<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'porto',
    'description' => 'Website Template based on porto okler. IMPORTANT: You need to buy the template in order for this extension to work: https://goo.gl/MpLeUN',
    'category' => 'plugin',
    'author' => 'Christopher Zechendorf',
    'author_email' => 'christopher@zechendorf.com',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '1',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '0.9.3',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.7.0-8.7.99',
            'rte_ckeditor' => '8.7.0-8.7.99',
            'indexed_search' => '8.7.0-8.7.99'
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
