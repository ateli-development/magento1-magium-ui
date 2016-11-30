<?php

class Magium_Ui_Block_Adminhtml_Execution_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    protected function _construct()
    {
        parent::_construct();
        $this->setId('switch_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle($this->__('Test Execution'));
    }

    protected function _beforeToHtml()
    {
        $integrations = Mage::getConfig()->getNode('magium/execution');
        foreach ($integrations->children() as $event => $integration) {
            $label = (string)$integration->label;
            $this->addTab($event, array(
                'label' => $this->__($label),
                'title' => $this->__($label)
            ));

        }


        return parent::_beforeToHtml();
    }
}
