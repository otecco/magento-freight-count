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

$installer = $this;
$installer->startSetup();
 
$installer->addAttribute('catalog_product', 'freight_count', array(
    'group'             => 'General',
    'type'              => 'varchar',
    'default'           => '1',
    'backend'           => '',
    'frontend'          => '',
    'label'             => 'Freight Count',
    'input'             => 'text',
    'frontend_class'    => 'validate-digits',
    'source'            => '',
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible'           => true,
    'required'          => false,
    'user_defined'      => false,
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'visible_on_front'  => false,
    'unique'            => false,
));

$installer->endSetup();

