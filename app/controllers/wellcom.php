<?php

class wellcom extends Controller {
	public function index()
	{
		$data['title'] = 'Wellcome';
		$this->view('templates/header', $data);
		$this->view('templates/navbar');
		$this->view('wellcom/index');
		$this->view('templates/footer');
	}
}
