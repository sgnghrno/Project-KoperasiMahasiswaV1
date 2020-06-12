<?php
    class template {
        protected $_ci;
        function __construct(){
            $this->_ci = & get_instance();
        }

        function views($template = NULL, $data = NULL){
            if ($template != NULL) {
                //Head  
                $data['head'] = $this->_ci->load->view('Admin/_Template/head', $data, TRUE);
                //Topbar
                $data['topbar'] = $this->_ci->load->view('Admin/_Template/topbar', $data, TRUE);
                //Sidebar
                $data['sidebar'] = $this->_ci->load->view('Admin/_Template/sidebar', $data, TRUE);
                //Isi
                $data['isi'] = $this->_ci->load->view($template, $data, TRUE);
                //Content
                $data['content'] = $this->_ci->load->view('Admin/_Template/content', $data, TRUE);
                //Footer
                $data['footer'] = $this->_ci->load->view('Admin/_Template/footer', $data, TRUE);
                //Template
                echo $data['Template']= $this->_ci->load->view('Admin/_Template/Template', $data, TRUE);
            }
        }
    }

?>