<?php
class Controller
{
	public function render($view, $data = []) {
		include 'views/' . $view;
	}
}