<?php

use App\Form\UpdateCateForm;
use App\Lib\Api;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;

// Load detail
$data = null;
if (!empty($id)) {
    // Edit
    $param['id'] = $id;
    $data = Api::call(Configure::read('API.url_subcates_detail'), $param);
    $this->Common->handleException(Api::getError());
    if (empty($data)) {
        AppLog::info("Cate unavailable", __METHOD__, $param);
        throw new NotFoundException("Cate unavailable", __METHOD__, $param);
    }

    $pageTitle = __('LABEL_SUB_CATE_UPDATE');
} else {
    // Create new
    $pageTitle = __('LABEL_ADD_NEW');
}

$cates = $this->Common->arrayKeyValue(
        Api::call(Configure::read('API.url_cates_all'), array()),
        'id',
        'name'
);

// Create breadcrumb
$listPageUrl = h($this->BASE_URL . '/subcates');
$this->Breadcrumb->setTitle($pageTitle)
        ->add(array(
            'link' => $listPageUrl,
            'name' => __('LABEL_SUB_CATE_LIST'),
        ))
        ->add(array(
            'name' => $pageTitle,
        ));
// Create Update form 
$form = new UpdateCateForm();
$this->UpdateForm->reset()
    ->setModel($form)
    ->setData($data)
    ->setAttribute('autocomplete', 'off')
    ->addElement(array(
        'id' => 'id',
        'label' => __('LABEL_SUB_CATE'),
    ))
    ->addElement(array(
        'id' => 'name',
        'label' => __('LABEL_DISPLAY_NAME'),
        'required' => true,
    ))
    ->addElement(array(
        'id' => 'cate_id',
        'label' => __('LABEL_CATE_NAME'),
        'options' => $cates
    ))
    ->addElement(array(
        'type' => 'submit',
        'value' => __('LABEL_SAVE'),
        'class' => 'btn btn-primary',
    ))
    ->addElement(array(
        'type' => 'submit',
        'value' => __('LABEL_CANCEL'),
        'class' => 'btn',
        'onclick' => "return back();"
    ));

// Valdate and update
if ($this->request->is('post')) {
    // Trim data
    $data = $this->request->data();
    foreach ($data as $key => $value) {
        if (is_scalar($value)) {
            $data[$key] = trim($value);
        }
    }
    // Validation
    if ($form->validate($data)) {
        // Call API
        $id = Api::call(Configure::read('API.url_subcates_addupdate'), $data);
        if (!empty($id) && !Api::getError()) {
            $this->Flash->success(__('MESSAGE_SAVE_OK'));
            return $this->redirect("{$this->BASE_URL}/{$this->controller}/update/{$id}");
        } else {
            return $this->Flash->error(__('MESSAGE_SAVE_NG'));
        }
    }
}
