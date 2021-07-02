<?php
if(!defined('TYPO3_MODE')) die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'rooms',
    'Pi1',
    'Rooms (& Packages)'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['rooms_pi1'] = 'layout,select_key,pages,recursive'; 
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['rooms_pi1']     = 'pi_flexform';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'rooms_pi1',
    'FILE:EXT:rooms/Configuration/FlexForms/FlexForm.xml'
);
