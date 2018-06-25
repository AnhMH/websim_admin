<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * News page
 */
class NewsController extends AppController {
    
    /**
     * News page
     */
    public function index() {
        include ('Bus/News/index.php');
    }
    
    /**
     * Add/update info
     */
    public function update($id = '') {
        include ('Bus/News/update.php');
    }
}
