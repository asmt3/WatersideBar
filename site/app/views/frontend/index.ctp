<?php

	$this->set('title_for_layout', 'Home');
	
	$this->set('page_name', 'home');

	$this->set('asides', array(
		'facebook',
		'music',
		'hunstantonWind',
	));

?>




<h2>Welcome</h2>
<p>
	The Waterside Bar in Hunstanton, perched above the promenade, has a great view over the sea. Because of Hunstanton's location, this means you can watch the sunset while enjoying our <a href="/menu">fish and chips or our special homemade steak pie</a>.
</p>

<p>
	Great home-cooked food is served in a family atmosphere all day, every day from 11am to 9pm. A full children's menu is available. Pets welcome.
</p>
	

<img id="home-photos" src="img/home-photos.jpg" alt="Waterside" />


<h2>Thursday: Pub Quiz</h2>
<p>
	Come and join us at 9pm every Thursday for our weekly pub quiz with cash prizes! The pub quiz is followed by a game of &quot;Play Your Cards Right&quot; where you can win up to &pound;100.
</p>

<p>
	Some questions to get you warmed up:
	What did Winston Churchill call fish and chips?
	Which X-Factor star owns a chip shop?
	John Lennon liked to smother his chips with mayo, true or false?
	<em>(Answers at the bottom of <a href="/music">the &quot;Music&quot; page</a>)</em>
</p>


<h2>Friday: Band Night</h2>
<p>
	Every Friday, The Waterside Bar plays host to some of the best cover bands in Norfolk. Entry is free and bands usually kick off at 9pm. 
	
	
	<? if ($next_event): ?>
	The next band playing is <?=$next_event['Event']['title']?> on <?=$this->Waterside->nice_mysql_date($next_event['Event']['date'])?>. 
	<? endif; ?>
	
	
	<a href="/music">Click here for full music listings</a>.
</p>

<h2>Saturday: Race Night</h2>
<p>
	And they're off! Every Saturday, one of our lovely bar staff plays the part of John McCririck, hosting a night of horse, dog and sometimes even hog racing! Bets are &pound; and the races begin at 9.00pm.
</p>



<h2>Sunday: Bandioke</h2>
<p>
	Fancy yourself as a lead singer or the drummer in a band? Now's your chance! 
</p>

<p>The Bandioke band headed by John King of Roxoff have a huge repertoire of songs they can play and they're good enough to make you sound almost bearable! ;-) Starts at 9pm. </p>
