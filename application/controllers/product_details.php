<?php

    Class Product_details extends Controller{
        public function index($slag){

            $slag = esc($slag);
            $user = $this->load_model('User');
            $user_data=$user->check_login();

            if(is_object($user_data)){
                $data['user_data']=$user_data;
            }
            $DB = Database::newInstance();
            $ROW = $DB->read("select * from products where slag = :slag",['slag'=>$slag]);
            $data['page_title'] ='Product_details';
            $data['ROW'] = is_array($ROW) ? $ROW[0]:false;
            $category = $this->load_model('Category');
            $data['categories'] = $category->get_all();
           $this->view('product_details',$data);
        }
    }
?>