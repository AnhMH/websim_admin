<?php
use App\Lib\Api;
use Cake\Core\Configure;

$this->doGeneralAction();
$pageSize = Configure::read('Config.PageSize');

// Create breadcrumb
$pageTitle = __('LABEL_HOTLINE_LIST');
$this->Breadcrumb->setTitle($pageTitle)
        ->add(array(
            'name' => $pageTitle,
        ));

// Create search form
$dataSearch = array(
    'disable' => 0, 
    'limit' => $pageSize
);
$this->SearchForm
        ->setAttribute('type', 'get')
        ->setData($dataSearch)
        ->addElement(array(
            'id' => 'name',
            'label' => __('LABEL_NAME')
        ))
        ->addElement(array(
            'id' => 'phone',
            'label' => __('LABEL_TEL')
        ))
        ->addElement(array(
            'id' => 'limit',
            'label' => __('LABEL_LIMIT'),
            'options' => Configure::read('Config.searchPageSize'),
        ))
        ->addElement(array(
            'type' => 'submit',
            'value' => __('LABEL_SEARCH'),
            'class' => 'btn btn-primary',
        ));

$param = $this->getParams(array(
    'limit' => $pageSize,
    'disable' => 0
));

$result = Api::call(Configure::read('API.url_hotlines_list'), $param);
$total = !empty($result['total']) ? $result['total'] : 0;
$data = !empty($result['data']) ? $result['data'] : array();

// Show data
$this->SimpleTable
        ->setDataset($data)
        ->addColumn(array(
            'id' => 'item',
            'name' => 'items[]',
            'type' => 'checkbox',
            'value' => '{id}',
            'width' => 20,
        ))
        ->addColumn(array(
            'id' => 'name',
            'title' => __('LABEL_NAME'),
            'type' => 'link',
            'href' => $this->BASE_URL . '/' . $this->controller . '/update/{id}',
            'empty' => '',
            'width' => 300
        ))
        ->addColumn(array(
            'id' => 'phone',
            'title' => __('LABEL_TEL'),
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'order',
            'title' => __('LABEL_ORDER'),
            'width' => 150,
            'empty' => 0
        ))
        ->addColumn(array(
            'id' => 'created',
            'type' => 'dateonly',
            'title' => __('LABEL_CREATED'),
            'width' => 100,
            'empty' => '',
        ))
        ->addColumn(array(
            'type' => 'link',
            'title' => __('LABEL_EDIT'),
            'href' => $this->BASE_URL . '/' . $this->controller . '/update/{id}',
            'button' => true,
            'width' => 50,
        ))
        ->addButton(array(
            'type' => 'submit',
            'value' => __('LABEL_ADD_NEW'),
            'class' => 'btn btn-success btn-addnew',
        ))
        ->addButton(array(
            'type' => 'submit',
            'value' => __('LABEL_DELETE'),
            'class' => 'btn btn-danger btn-disable',
        ));

$this->set('pageTitle', $pageTitle);
$this->set('total', $total);
$this->set('param', $param);
$this->set('limit', $param['limit']);
$this->set('data', $data);