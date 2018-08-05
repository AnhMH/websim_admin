<?php

use App\Form\UpdatePageForm;
use App\Lib\Api;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;

// Load detail
$data = null;
if (!empty($id)) {
    // Edit
    $param['id'] = $id;
    $data = Api::call(Configure::read('API.url_pages_detail'), $param);
    $this->Common->handleException(Api::getError());
    if (empty($data)) {
        AppLog::info("Page unavailable", __METHOD__, $param);
        throw new NotFoundException("Page unavailable", __METHOD__, $param);
    }

    $pageTitle = __('LABEL_PAGE_UPDATE');
} else {
    // Create new
    $pageTitle = __('LABEL_ADD_NEW');
}

$footerMenuTypes = array(
    '1' => 'Chính sách bán hàng',
    '2' => 'Hỗ trợ chung',
    '3' => 'Thông tin liên hệ',
    '4' => 'Dịch vụ khác'
);

// Create breadcrumb
$listPageUrl = h($this->BASE_URL . '/pages');
$this->Breadcrumb->setTitle($pageTitle)
        ->add(array(
            'link' => $listPageUrl,
            'name' => __('LABEL_PAGE_LIST'),
        ))
        ->add(array(
            'name' => $pageTitle,
        ));
// Create Update form 
$form = new UpdatePageForm();
$this->UpdateForm->reset()
    ->setModel($form)
    ->setData($data)
    ->setAttribute('autocomplete', 'off')
    ->addElement(array(
        'id' => 'id',
        'type' => 'hidden',
        'label' => __('id'),
    ))
    ->addElement(array(
        'id' => 'name',
        'label' => __('LABEL_NAME'),
        'required' => true,
    ))
    ->addElement(array(
        'id' => 'is_main_menu',
        'label' => __('LABEL_IS_MAIN_MENU'),
        'options' => array(
            '0' => 'No',
            '1' => 'Yes'
        )
    ))
    ->addElement(array(
        'id' => 'footer_menu_type',
        'label' => __('LABEL_FOOTER_MENU_TYPE'),
        'options' => $footerMenuTypes,
        'empty' => '------'
    ))
    ->addElement(array(
        'id' => 'order',
        'label' => __('LABEL_ORDER')
    ))
    ->addElement(array(
        'id' => 'content',
        'label' => __('LABEL_CONTENT'),
        'required' => true,
        'type' => 'editor'
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
        $id = Api::call(Configure::read('API.url_pages_addupdate'), $data);
        if (!empty($id) && !Api::getError()) {
            $this->Flash->success(__('MESSAGE_SAVE_OK'));
            return $this->redirect("{$this->BASE_URL}/{$this->controller}/update/{$id}");
        } else {
            return $this->Flash->error(__('MESSAGE_SAVE_NG'));
        }
    }
}
