<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: New in V1.6.0 $
 */

define('NAVBAR_TITLE_1', 'Checkout');
define('NAVBAR_TITLE_2', 'Success - Thank You');

define('HEADING_TITLE', 'Thank You! We Appreciate your Business!');

define('TEXT_SUCCESS', '');
define('TEXT_NOTIFY_PRODUCTS', 'Please notify me of updates to these products');
define('TEXT_SEE_ORDERS', 'You can view your order history by going to the <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '" name="linkMyAccount">My Account</a> page and by clicking on "View All Orders".');
define('TEXT_SEE_ORDERS_GUEST', 'You can view your order history by going to the <a href="' . zen_href_link(FILENAME_ORDER_STATUS, '', 'SSL') . '" name="linkMyAccount">Order Status</a> page.');
define('TEXT_CONTACT_STORE_OWNER', 'Please direct any questions you have to <a href="' . zen_href_link(FILENAME_CONTACT_US, '', 'SSL') . '" name="linkContactUs">customer service</a>.');
define('TEXT_THANKS_FOR_SHOPPING', 'Thanks for shopping with us online!');

define('TABLE_HEADING_COMMENTS', '');

define('FOOTER_DOWNLOAD', 'You can also download your products at a later time at \'%s\'');

define('TEXT_YOUR_ORDER_NUMBER', '<strong>Your Order Number is:</strong> ');

define('TEXT_CHECKOUT_LOGOFF_GUEST', '');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', 'Thank you for shopping. Please click the Log Off link to ensure that your receipt and purchase information is not visible to the next person using this computer.');

define('HEADING_ORDER_NUMBER', 'Order #%s');
define('HEADING_ORDER_DATE', 'Order Date:');
define('HEADING_ORDER_TOTAL', 'Order Total:');

define('HEADING_DELIVERY_ADDRESS', 'Delivery Address');
define('HEADING_SHIPPING_METHOD', 'Shipping Method');

define('HEADING_PRODUCTS', 'Products');
define('HEADING_TAX', 'Tax');
define('HEADING_TOTAL', 'Total');
define('HEADING_QUANTITY', 'Qty.');

define('HEADING_BILLING_ADDRESS', 'Billing Address');
define('HEADING_PAYMENT_METHOD', 'Payment Method');

define('HEADING_ORDER_HISTORY', 'Status History &amp; Comments');
define('TEXT_NO_COMMENTS_AVAILABLE', 'No comments available.');
define('TABLE_HEADING_STATUS_DATE', 'Date');
define('TABLE_HEADING_STATUS_ORDER_STATUS', 'Order Status');
define('TABLE_HEADING_STATUS_COMMENTS', 'Comments');
define('QUANTITY_SUFFIX', '&nbsp;ea.  ');
define('ORDER_HEADING_DIVIDER', '&nbsp;-&nbsp;');
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');

define('TEXT_EMAIL_ONLY_SHIPPING_METHOD', '&nbsp;-&nbsp;');
define('TEXT_EMAIL_ONLY_PAYMENT_METHOD', '&nbsp;-&nbsp;');
