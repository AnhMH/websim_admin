<?php
use App\Lib\Api;
use Cake\Core\Configure;

// Load detail
$data = null;
if (!empty($id)) {
    // Edit
    $param['id'] = $id;
    $data = Api::call(Configure::read('API.url_orders_detail'), $param);
    $this->Common->handleException(Api::getError());
    if (empty($data)) {
        die('Error');
    }
    $pageTitle = __('LABEL_ORDER_UPDATE');
} else {
    // Create new
    die('Error');
}

// Create breadcrumb
$listPageUrl = h($this->BASE_URL . '/orders');
$this->Breadcrumb->setTitle($pageTitle)
        ->add(array(
            'link' => $listPageUrl,
            'name' => __('LABEL_ORDER_LIST'),
        ))
        ->add(array(
            'name' => $pageTitle,
        ));

$this->set('data', $data);