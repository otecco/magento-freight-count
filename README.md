Magento Freight Count
=====================

Override the number of items for Magento shipping Table Rates.

Upon installation the module creates a new product attribute "freight\_count"
with default value 1.

When calculating shipping rates for the Table Rates shipping method with
Condition set to "# of Items vs.  Destination", each product's number of items
in cart is multiplied by its Freight Count.

Developed for and tested with Magento 1.4.1.1.

