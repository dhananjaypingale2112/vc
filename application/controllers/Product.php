<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('cart');
        // $this->load->helper('session');
    }
	public function productView($catId="")
	{
		$data['cat'] = $this->Product_model->selectCategory();
		
		if(empty($catId)){
			foreach ($data['cat'] as $key => $value){
				if($value['parent_id'] == 0){
					foreach ($data['cat'] as $key1 => $value1){
						if($value1['parent_id'] != 0 && $value['category_id'] == $value1['parent_id'] )
						{
							$catId = $value1['category_id'];
							break;
						}elseif(!empty($catId))
						{
							break;
						}
					}
				} 
			}
		}
		$data['products'] = $this->Product_model->selectProduct($catId);
		//echo "<pre>";print_r($data['products']);exit;
		$this->load->view('product/productList',$data);
	}
	public function productDetails($proId="")
	{
		$data['cat'] = $this->Product_model->selectCategory();
 
		$data['products'] = $this->Product_model->selectSingelProduct($proId);
		//echo "<pre>";print_r($data['products']);exit;
		$this->load->view('product/productDetails',$data);
	}
	public function cartView()
	{ 
		foreach ($this->cart->contents() as $items)
		{
			echo "<pre>";print_r($items);
		}
		$this->load->view('product/cartView');
	}
	public function checkOut()
	{
		$this->load->view('product/checkOut');
	}
	public function addToCart()
	{
		$productId = $this->input->post('productId');
		$qty = $this->input->post('qty');
		$price = $this->input->post('price');
		$name = $this->input->post('name');
		$image = $this->input->post('image');

		$data = array(
		        'id'      => $productId,
		        'qty'     => $qty,
		        'price'   => $price,
		        'name'    => $name,
		        'image'    => $image
		);
		// print_r($data);exit();
		$ans = $this->cart->insert($data);
		//$this->cart->destroy();
		echo $ans;
	}


	/*******************************************/
}
