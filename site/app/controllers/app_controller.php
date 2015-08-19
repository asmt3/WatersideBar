<?php

class AppController extends Controller {
	
	//var $components = array('Auth', 'Session', 'SsMail', 'Paypal', 'DebugKit.Toolbar', 'Email', 'EmailService');
	var $helpers = array('Session', 'Form', 'Waterside');
	
	function beforeFilter(){
		
		parent::beforeFilter();
		
		$this->loadModel('Event');
		
		$sidebar_events = $this->Event->get_upcoming_events(4);
		$this->set('sidebar_events', $sidebar_events);
	
	}
	
	
}
