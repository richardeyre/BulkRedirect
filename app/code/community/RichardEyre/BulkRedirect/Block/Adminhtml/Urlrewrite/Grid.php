<?php

class RichardEyre_BulkRedirect_Block_Adminhtml_Urlrewrite_Grid extends Mage_Adminhtml_Block_Urlrewrite_Grid {

    protected function _prepareColumns()
    {
        $this->addExportType('bulkredirect/adminhtml_bulkredirect/exportCsv', $this->__('CSV'));
        return parent::_prepareColumns();
    }

}