<?php
use App\Lib\Api;
use Cake\Core\Configure;

// Create breadcrumb
$pageTitle = __('LABEL_DASHBOARD');
$this->Breadcrumb->setTitle($pageTitle)
    ->add(array(
        'name' => $pageTitle,
    ));

$data = Api::call(Configure::read('API.url_settings_general'), array());
$this->set('data', $data);