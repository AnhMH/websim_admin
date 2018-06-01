<?php

// Create breadcrumb
$pageTitle = __('LABEL_DASHBOARD');
$this->Breadcrumb->setTitle($pageTitle)
    ->add(array(
        'name' => $pageTitle,
    ));