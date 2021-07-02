<?php
if(!defined('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'rooms',
    'Pi1',
    array('Static' => 'default'),
    array('Static' => 'default')
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'FILE:EXT:rooms/Classes/Controller/StaticController.php',
    'FILE:EXT:rooms/Configuration/FlexForms/FlexForm.xml'
);

//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('rooms', 'constants', ' <INCLUDE_TYPOSCRIPT: source="FILE:EXT:rooms/Configuration/TypoScript/constants.txt">');
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('rooms', 'setup', ' <INCLUDE_TYPOSCRIPT: source="FILE:EXT:rooms/Configuration/TypoScript/setup.txt">');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rooms/Configuration/PageTS/ContentElementWizard.ts">'
);


