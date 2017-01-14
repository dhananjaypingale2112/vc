<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {

	function __construct(){
		// Call the Model constructor
		parent::__construct();
	}
	public function selectCategory()
	{
		return $this->db->query("SELECT cat.*, cat_desc.* FROM oc_category cat JOIN oc_category_description cat_desc ON(cat.category_id = cat_desc.category_id)")->result_array();
	}
	public function selectProduct($catId)
	{
		//print_r("SELECT pro.*, pro_desc.*, pro_cat.*, cat_desc.name as cat FROM oc_product pro JOIN oc_product_description pro_desc ON(pro.product_id = pro_desc.product_id) JOIN oc_product_to_category pro_cat ON(pro.product_id = pro_cat.product_id) JOIN oc_category_description cat_desc ON(pro_cat.category_id = cat_desc.category_id) WHERE  pro_cat.category_id = $catId");exit;
		return $this->db->query("SELECT pro.*, pro_desc.*, pro_cat.*,cat_desc.name as catName FROM oc_product pro JOIN oc_product_description pro_desc ON(pro.product_id = pro_desc.product_id) JOIN oc_product_to_category pro_cat ON(pro.product_id = pro_cat.product_id) JOIN oc_category_description cat_desc ON(pro_cat.category_id = cat_desc.category_id) WHERE  pro_cat.category_id = $catId")->result_array();
	}
	public function selectSingelProduct($proId)
	{
		return $this->db->query("SELECT pro.*, pro_desc.*, pro_cat.*, cat_desc.name FROM oc_product pro JOIN oc_product_description pro_desc ON(pro.product_id = pro_desc.product_id) JOIN oc_product_to_category pro_cat ON(pro.product_id = pro_cat.product_id) JOIN oc_category_description cat_desc ON(pro_cat.category_id = cat_desc.category_id) WHERE  pro.product_id = $proId")->result_array();
	}
}
?>