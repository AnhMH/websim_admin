<?php

/**
 * API's Url
 */
use Cake\Core\Configure;

Configure::write('API.Timeout', 60);
Configure::write('API.secretKey', 'maishop');
Configure::write('API.rewriteUrl', array());

Configure::write('API.url_admins_login', 'admins/login');
Configure::write('API.url_admins_updateprofile', 'admins/updateprofile');

Configure::write('API.url_customers_list', 'customers/list');
Configure::write('API.url_customers_detail', 'customers/detail');
Configure::write('API.url_customers_addupdate', 'customers/addupdate');

Configure::write('API.url_suppliers_list', 'suppliers/list');
Configure::write('API.url_suppliers_all', 'suppliers/all');
Configure::write('API.url_suppliers_detail', 'suppliers/detail');
Configure::write('API.url_suppliers_addupdate', 'suppliers/addupdate');

Configure::write('API.url_tags_list', 'tags/list');
Configure::write('API.url_tags_all', 'tags/all');
Configure::write('API.url_tags_detail', 'tags/detail');
Configure::write('API.url_tags_addupdate', 'tags/addupdate');

Configure::write('API.url_products_list', 'products/list');
Configure::write('API.url_products_detail', 'products/detail');
Configure::write('API.url_products_addupdate', 'products/addupdate');

Configure::write('API.url_pages_list', 'pages/list');
Configure::write('API.url_pages_all', 'pages/all');
Configure::write('API.url_pages_detail', 'pages/detail');
Configure::write('API.url_pages_addupdate', 'pages/addupdate');

Configure::write('API.url_subcates_list', 'subcates/list');
Configure::write('API.url_subcates_all', 'subcates/all');
Configure::write('API.url_subcates_detail', 'subcates/detail');
Configure::write('API.url_subcates_addupdate', 'subcates/addupdate');

Configure::write('API.url_cates_list', 'cates/list');
Configure::write('API.url_cates_all', 'cates/all');
Configure::write('API.url_cates_detail', 'cates/detail');
Configure::write('API.url_cates_addupdate', 'cates/addupdate');