<?php

class FrontendController extends AppController {
	
	//var $components = array('Auth', 'Session', 'SsMail', 'Paypal', 'DebugKit.Toolbar', 'Email', 'EmailService');
	var $helpers = array('Waterside');
	var $uses = NULL;
	var $layout = 'frontend';
	
	function index(){
		
		$next_event = $this->Event->get_next_event();
		$this->set(compact('next_event'));
	}
	
	function music()
	{
		$events = $this->Event->get_upcoming_events();
		$this->set(compact('events'));
	}
	
	function menu(){
		
	}
	
	function contact(){
		
	}
	
	
	
}
