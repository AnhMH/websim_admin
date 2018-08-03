<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Hotlines page
 */
class HotlinesController extends AppController {
    
    /**
     * Hotlines page
     */
    public function index() {
        include ('Bus/Hotlines/index.php');
    }
    
    /**
     * Add/update info
     */
    public function update($id = '') {
        include ('Bus/Hotlines/update.php');
    }
}
