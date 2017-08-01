<?php
return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:porto/Resources/Private/Language/locallang.xlf:tx_porto_domain_model_iconbox',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => TRUE,
        'sortby' => 'sorting',
        'versioningWS' => 2,
        'versioning_followPages' => TRUE,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'searchFields' => 'title, subtitle, content',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('porto') . 'Resources/Public/Icons/tx_porto_domain_model_restaurantspecial.svg'
    ),
    'interface' => array(
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, color, icon, title, content',
    ),
    'types' => array(
        '1' => array(
            'showitem' => '
                sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1,
                color,
                icon,
                title,
                content,
                --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
                    starttime, endtime'),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(
        'sys_language_uid' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => array(
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
                ),
            ),
        ),
        'l10n_parent' => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_porto_domain_model_accordion',
                'foreign_table_where' => 'AND tx_porto_domain_model_accordion.pid=###CURRENT_PID### AND tx_porto_domain_model_accordion.sys_language_uid IN (-1,0)',
            ),
        ),
        'l10n_diffsource' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        't3ver_label' => array(
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            )
        ),

        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'starttime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'endtime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'color' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:porto/Resources/Private/Language/locallang.xlf:tx_porto_domain_model_iconbox.color',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array('Primary','primary'),
                    array('Secondary','secondary'),
                    array('Tertiary','tertiary'),
                    array('Quaternary','quaternary')
                )
            ),
        ),
        'icon' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:porto/Resources/Private/Language/locallang.xlf:tx_porto_domain_model_iconbox.icon',
            'config' => array(
                'type' => 'input',
                'size' => 120,
                'eval' => 'trim'
            ),
        ),
        'title' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:porto/Resources/Private/Language/locallang.xlf:tx_porto_domain_model_iconbox.title',
            'config' => array(
                'type' => 'input',
                'size' => 120,
                'eval' => 'trim'
            ),
        ),
        'content' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:porto/Resources/Private/Language/locallang.xlf:tx_porto_domain_model_iconbox.content',
            'config' => array(
                'type' => 'text',
                'enableRichtext' => true
            ),
        ),
    )
);
