<?php

// porto_testimonial: add the element to the "type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    array(
        'LLL:EXT:porto/Resources/Private/Language/locallang.xlf:porto_newcontentelement.title',
        'porto_testimonial',
        'EXT:porto/Resources/Public/Icons/ContentElements/porto_testimonial.png'
    ),
    'CType',
    'porto_testimonial'
);

// porto_testimonial: TCA
$GLOBALS['TCA']['tt_content']['types']['porto_testimonial'] = array(
    'columnsOverrides' => array(
        'bodytext' => array(
            'config' => array(
                'enableRichtext' => 1,
                'richtextConfiguration' => 'default'
            )
        ),
        'layout' => array(
            'config' => array(
                'items' => array(
                    array('Default', 0),
                    array('Primary Color', 1),
                    array('Secondary Color', 2),
                    array('Tertiary Color', 3),
                    array('Quaternary Color', 4),
                    array('Style 2', 5),
                    array('Style 3', 6),
                    array('Style 4', 7),
                    array('Style 5', 8)
                )
            )
        )
    ),
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            layout,
            bodytext;LLL:EXT:porto/Resources/Private/Language/locallang.xlf:porto_testimonial.testimonial,
            header;LLL:EXT:porto/Resources/Private/Language/locallang.xlf:porto_testimonial.name,
            subheader;LLL:EXT:porto/Resources/Private/Language/locallang.xlf:porto_testimonial.position,
            image;LLL:EXT:porto/Resources/Private/Language/locallang.xlf:porto_testimonial.photo,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,'
);


// porto_page_header
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    array(
        'LLL:EXT:porto/Resources/Private/Language/locallang.xlf:porto_page_header',
        'porto_page_header',
        'EXT:porto/Resources/Public/Icons/ContentElements/porto_page_header.png'
    ),
    'CType',
    'porto_page_header'
);

$GLOBALS['TCA']['tt_content']['types']['porto_page_header'] = array(
    'columnsOverrides' => array(
        'layout' => array(
            'config' => array(
                'items' => array(
                    // array('Default', 0),
                    array('Parallax', 1)
                )
            )
        )
    ),
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            layout,
            header;LLL:EXT:porto/Resources/Private/Language/locallang.xlf:porto_page_header.title,
            subheader;LLL:EXT:porto/Resources/Private/Language/locallang.xlf:porto_page_header.subtitle,
            image;LLL:EXT:porto/Resources/Private/Language/locallang.xlf:porto_page_header.image,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,'
);

$GLOBALS['TCA']['tt_content']['types']['image']['columnsOverrides']['layout']['config']['items'] = array(
    array('Default', 0),
    array('Team List', 1)
);




