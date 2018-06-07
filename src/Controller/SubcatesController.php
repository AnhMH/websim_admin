<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Cates page
 */
class SubcatesController extends AppController {
    
    /**
     * Cates page
     */
    public function index() {
        include ('Bus/Subcates/index.php');
    }
    
    /**
     * Add/update infos
     */
    public function update($id = '') {
        include ('Bus/Subcates/update.php');
    }
}
