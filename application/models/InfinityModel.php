<!--
 * InfinityScroll v1.1 (https://github.com/shahnewaz24557/ci-ajax-infinity-scroll)
 * Copyright (c) 2018 Shahnewaz Ahmed
 * Licensed under MIT (https://github.com/shahnewaz24557/ci-ajax-infinity-scroll/blob/master/LICENSE)
 -->
 
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class InfinityModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
}