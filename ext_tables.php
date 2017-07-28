<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
  'ZECHENDORF.' . $_EXTKEY,
  'Accordion',
  'Accordion'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
  'ZECHENDORF.' . $_EXTKEY,
  'RestaurantSpecials',
  'RestaurantSpecials'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
  'ZECHENDORF.' . $_EXTKEY,
  'RevolutionSlider',
  'RevolutionSlider'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'porto - Template');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_porto_domain_model_accordion');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_porto_domain_model_revolutionslider');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_porto_domain_model_restaurantspecial');

$pluginSignature = 'porto_accordion';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue( $pluginSignature, 'FILE:EXT:porto/Configuration/FlexForms/Accordion.xml');

$pluginSignature = 'porto_revolutionslider';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue( $pluginSignature, 'FILE:EXT:porto/Configuration/FlexForms/RevolutionSlider.xml');
