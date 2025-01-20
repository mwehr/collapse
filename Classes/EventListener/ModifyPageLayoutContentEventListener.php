<?php

namespace B13\Collapse\EventListener;

use TYPO3\CMS\Backend\Controller\Event\ModifyPageLayoutContentEvent;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;

final class ModifyPageLayoutContentEventListener
{
    public function __invoke(ModifyPageLayoutContentEvent $event): void
    {
        GeneralUtility::makeInstance(PageRenderer::class)
            ->loadJavaScriptModule('@b13/collapse/PageModuleCollapse.js');
    }
}