<?php


class Magentotutorial_Varien_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $collection_of_products = Mage::getModel('catalog/product')
            ->getCollection();
        $collection_of_products->addFieldToFilter('sku', 'msj000');

        //another neat thing about collections is you can pass them into the count      //function.  More PHP5 powered goodness
        echo "Our collection now has " . count($collection_of_products) . ' item(s)';
        var_dump((string)$collection_of_products->getSelect());
    }

    public function indoxAction()
    {
        ini_set('xdebug.var_display_max_depth', 10);
        ini_set('xdebug.var_display_max_data', -1);
        echo '<pre>';
        echo var_dump(__FILE__ . ': Line ' . __LINE__ . ' -- : <br />',             (string)
            Mage::getModel('catalog/product')
                ->getCollection()
                ->addAttributeToSelect('*')
                ->addFieldToFilter('short_description','Made with wrinkle resistant cotton twill, this French-cuffed luxury dress shirt is perfect for Business Class frequent flyers.')
                ->getSelect()
);
        echo '</pre>';
        
    }
}