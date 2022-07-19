<?php

class Shop extends Controller
{
    public function index()
    {
        $search = false;
        if (isset($_GET["find"])) {
            $find = addslashes($_GET["find"]);
            $search = true;
        }
        $user = $this->load_model('User');
        $image_class = $this->load_model('Image');
        $user_data = $user->check_login();

        if (is_object($user_data)) {
            $data['user_data'] = $user_data;
        }
        $DB = Database::newInstance();

        if ($search) {
            $arr['description'] = "%" . $find . "%";
            $ROWS = $DB->read("select * from products where description like :description", $arr);
        } else {

            $ROWS = $DB->read("select * from products");
        }
        $data['page_title'] = 'Shop';
        if ($ROWS) {
            foreach ($ROWS as $key => $row) {
                // $ROWS[$key]->image = $image_class->get_thumb_post($ROWS[$key]->image);
                $ROWS[$key]->image = $ROWS[$key]->image;
            }
        }
        $category = $this->load_model('Category');
        $data['categories'] = $category->get_all();
        $data['ROWS'] = $ROWS;
        $data['show_search'] = true;
        $this->view('shop', $data);
    }

    public function category($cat_id)
    {
        
        $limit = 10;
        $offset = Page::get_offset($limit);

        $User = $this->load_model('User');
        $category = $this->load_model('category');
        $image_class = $this->load_model('Image');
        $user_data = $User->check_login();

        if (is_object($user_data)) {
            $data['user_data'] = $user_data;
        }

        $DB = Database::newInstance();
        $ROWS = $DB->read("select * from products where category = :cat_id  limit $limit offset $offset ", ["cat_id" => $cat_id]);

        $data['page_title'] = "Shop";

        if ($ROWS) {
            foreach ($ROWS as $key => $row) {
                // $ROWS[$key]->image = $image_class->get_thumb_post($ROWS[$key]->image);
                $ROWS[$key]->image = $ROWS[$key]->image;
            }
        }

     
        $data['categories'] = $category->get_all();


        $data['ROWS'] = $ROWS;
        $data['show_search'] = true;

        $this->view("shop", $data);
    }

    public function products_parent_categogy($cat_id)
    {
        
        $limit = 10;
        $offset = Page::get_offset($limit);

        $User = $this->load_model('User');
        $category = $this->load_model('category');
        $image_class = $this->load_model('Image');
        $user_data = $User->check_login();

        if (is_object($user_data)) {
            $data['user_data'] = $user_data;
        }

        $DB = Database::newInstance();
        $ROWS = $DB->read("select * from products where category in (select id from categories where parent = :cat_id) limit $limit offset $offset ", ["cat_id" => $cat_id]);

        $data['page_title'] = "Shop";

        if ($ROWS) {
            foreach ($ROWS as $key => $row) {
                // $ROWS[$key]->image = $image_class->get_thumb_post($ROWS[$key]->image);
                $ROWS[$key]->image = $ROWS[$key]->image;
            }
        }

     
        $data['categories'] = $category->get_all();


        $data['ROWS'] = $ROWS;
        $data['show_search'] = true;

        $this->view("shop", $data);
    }
}
