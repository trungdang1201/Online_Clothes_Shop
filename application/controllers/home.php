<?php

    Class Home extends Controller{
         function index(){
            $user = $this->load_model('User');
            $image_class = $this->load_model('Image');
            $user_data=$user->check_login();
            $search = false;
            if(isset($_GET["find"])){
                $find = addslashes($_GET["find"]);
                $search = true;
            }
            if(is_object($user_data)){
                $data['user_data']=$user_data;
            }
            $DB = Database::newInstance();
            if($search){
                $arr['description'] = "%". $find . "%";
				$ROWS = $DB->read("select * from products where description like :description",$arr);
            }else{

                $ROWS = $DB->read("select * from products");
            }
            $data['page_title'] ='Home';
            if($ROWS){
                foreach($ROWS as $key=>$row){
                    $ROWS[$key]->image = $image_class->get_thumb_post($ROWS[$key]->image);
                }
            }

            $category = $this->load_model('Category');
            $data['categories'] = $category->get_all();
            $data['ROWS'] = $ROWS;
            $data['show_search'] = true;
            // show($_SESSION);
            
            $this->view('index',$data);
        }
    }
?>
