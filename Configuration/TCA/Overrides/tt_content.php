<?php

// Adds the porto_testimonial element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    array(
        'LLL:EXT:porto/Resources/Private/Language/locallang.xlf:porto_newcontentelement.title',
        'porto_testimonial',
        'EXT:porto/Resources/Public/Icons/ContentElements/porto_testimonial.png'
    ),
    'CType',
    'porto_testimonial'
);

// Configure backend fields for porto_testimonial
$GLOBALS['TCA']['tt_content']['types']['porto_testimonial'] = array(
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            bodytext;LLL:EXT:porto/Resources/Private/Language/locallang.xlf:porto_testimonial.testimonial,
            header;LLL:EXT:porto/Resources/Private/Language/locallang.xlf:porto_testimonial.name,
            subheader;LLL:EXT:porto/Resources/Private/Language/locallang.xlf:porto_testimonial.position,
            image;LLL:EXT:porto/Resources/Private/Language/locallang.xlf:porto_testimonial.photo,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,'
);



