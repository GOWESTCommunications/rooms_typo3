<?php
namespace GoWest\RoomsTypo3\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;

class StaticController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    function defaultAction() {
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump('test');
    }
}
