<?php

/**
 * Richard Eyre Bulk Redirect
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 *
 * @category    RichardEyre
 * @package     RichardEyre_BulkRedirect
 * @copyright   Copyright (c) 2013 Richard Eyre (http://richardeyre.me.uk)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
class RichardEyre_BulkRedirect_Adminhtml_BulkRedirectController extends Mage_Adminhtml_Controller_Action {
 
    /**
     * Initialize the action
     * @return \RichardEyre_BulkRedirect_Adminhtml_BulkRedirectController
     */
    protected function _initAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('catalog')
        ;
        return $this;
    }

    /**
     * Import URL rewrites from a CSV file
     */
    public function importAction()
    {

        $this->_initAction();
        $this->getLayout()->getBlock('head')->setTitle($this->__('Import / Rewrite Rules / Magento Admin'));
        $this->renderLayout();

    }

    /**
     * Export URL rewrites to a CSV file
     */
    public function exportCsvAction()
    {

        $fileName = 'bulk_redirect_export.csv';
        $content = $this->getLayout()
            ->createBlock('adminhtml/urlrewrite_grid')
            ->getCsvFile();
        $this->_prepareDownloadResponse($fileName, $content);

    }

}