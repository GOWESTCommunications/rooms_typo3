<?php
if(!defined('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'GoWest.rooms_typo3',
    'Pi1',
    ['Static' => 'default']
);

//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
//    'FILE:EXT:rooms_typo3/Classes/Controller/StaticController.php',
//    'FILE:EXT:rooms_typo3/Configuration/FlexForms/FlexForm.xml'
//);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rooms_typo3/Configuration/PageTS/ContentElementWizard.ts">'
);

// Constants
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('rooms_typo3', 'constants', ' <INCLUDE_TYPOSCRIPT: source="FILE:EXT:rooms_typo3/Configuration/TypoScript/constants.typoscript">');

// Setup     
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('rooms_typo3', 'setup', ' <INCLUDE_TYPOSCRIPT: source="FILE:EXT:rooms_typo3/Configuration/TypoScript/setup.typoscript">');
