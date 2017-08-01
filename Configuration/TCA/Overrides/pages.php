<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// new columns
$tmp_porto_columns = array(
    'tx_porto_no_page_header' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:porto/Resources/Private/Language/locallang.xlf:pages.tca.no_page_header',
        'config' => array(
            'type' => 'check',
        ),
    )
);

// add new column to pages tca
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages',$tmp_porto_columns);

// add new column to field list and showitems
$GLOBALS['TCA']['pages']['interface']['showRecordFieldList'] .= ', tx_porto_no_page_header';
$GLOBALS['TCA']['pages']['types']['1']['showitem'] .= ',--div--;Porto, tx_porto_no_page_header';
