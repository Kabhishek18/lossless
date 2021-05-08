<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$setting['image_path'] = 'image/';
		$setting['image_name'] = '1.jpg';
		$setting['compress_path'] =  'images/';
		$setting['jpg_compress_level'] = 5;
		$setting['png_compress_level'] = 5;
		$setting['create_thumb'] = TRUE;
		$setting['width_thumb'] = 300;
		$setting['height_thumb'] = 300;
		$this->load->library('imgcompressor', $setting);
		$result = $this->imgcompressor->do_compress();
		var_dump($result);
	}
}
