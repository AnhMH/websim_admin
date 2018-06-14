<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Pages page
 */
class PagesController extends AppController {
    
    /**
     * Pages page
     */
    public function index() {
        include ('Bus/Pages/index.php');
    }
    
    /**
     * Add/update infos
     */
    public function update($id = '') {
        include ('Bus/Pages/update.php');
    }
}