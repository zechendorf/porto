<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'ZECHENDORF.' . $_EXTKEY,
    'Accordion',
    array('Accordion' => 'show'),
    array()
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'ZECHENDORF.' . $_EXTKEY,
    'RevolutionSlider',
    array('RevolutionSlider' => 'show'),
    array()
);

// TCEMAIN
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/PageTS/TCEMAIN.txt">');

// TCEFORM
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/PageTS/TCEFORM.txt">');


// Backend Layouts
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/PageTS/Mod/WebLayout/BackendLayouts.txt">');


// Wizard Items
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/PageTS/Mod/Wizards/NewContentElement/WizardItems.txt">');

// RTE Config
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['porto_default'] = 'EXT:porto/Configuration/PageTS/Rte/Default.yaml';

// PAge tree: use nav_title
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('options.pageTree.showNavTitle = 1');
