<?php
class Event extends AppModel {
	var $name = 'Event';
	
	
	
	function get_upcoming_events($limit = null)
	{
		
		$params = array(
			'conditions' => array(
				'Event.date >= CURRENT_DATE()',
				'Event.show' => 1,
			),
			'order' => 'Event.date ASC',
		);
		
		if (!is_null($limit)) {
			$params['limit'] = $limit;
		}
		
		return $this->find('all', $params);		
	}
	
	function get_next_event()
	{
		$events = $this->get_upcoming_events(1);
		
		if ($events) return $events[0];
	}
	
}
