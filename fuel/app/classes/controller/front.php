<?php

class Controller_Front extends Controller {

	public function action_index() {
		return Response::forge(View::forge('front/index'));
	}

	public function action_404() {
		Response::redirect('/');
	}
}
