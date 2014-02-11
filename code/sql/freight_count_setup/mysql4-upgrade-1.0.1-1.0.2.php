<?php
/*
    Shopix_FreightCount - Override the number of items for Magento shipping Table Rates
    Copyright (C) 2014 Shopix Pty Ltd (http://www.shopix.com.au)

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

$installer = new Mage_Sales_Model_Mysql4_Setup('core_setup');
$installer->startSetup();

/**
 * Add 'custom_attribute' attribute for entities
 */
$entities = array(
    'quote_item',
    'order_item'
);

$options = array(
    'type'     => Varien_Db_Ddl_Table::TYPE_VARCHAR,
    'visible'  => false,
    'required' => false
);

foreach ($entities as $entity) {
    $installer->addAttribute($entity, 'freight_count', $options);
}

$installer->endSetup();

