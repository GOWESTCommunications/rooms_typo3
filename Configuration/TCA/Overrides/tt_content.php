<?php


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'GoWest.rooms_typo3',
    'Pi1',
    'Rooms (& Packages)'
);

$pluginSignature = 'roomstypo3_pi1';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,pages,recursive'; 
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    // Flexform configuration schema file
    'FILE:EXT:rooms_typo3/Configuration/FlexForms/FlexForm.xml'
);