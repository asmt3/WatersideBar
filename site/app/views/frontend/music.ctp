<?php

	$this->set('title_for_layout', 'Music');

	$this->set('page_name', 'music');

	$this->set('asides', array(
		'facebook',
		// 'hunstantonWind',
	));
	
	$this->Html->script('music.js', false);

?>


<h2>Music @ The Waterside Bar</h2>
<p>Every Friday, The Waterside Bar plays host to some of the best cover bands in Norfolk. Entry is free and bands usually kick off at 9pm.</p>



<dl id="music-list">
	
	
	
<? foreach ($events as $event): ?>
	<dt>
		<?=$this->Waterside->nice_mysql_date($event['Event']['date'])?>: <br />
		<?=$event['Event']['title']?>
	</dt>
	<dd>
		<ul>
			<li>
				Free Entry | <?=$event['Event']['time']?>
			</li>
			<li>
				<p>
					<?=$event['Event']['description']?>
				</p>
			</li>
			
			<? if (trim($event['Event']['url_youtube'])): ?>
			
			<li>
				<?=$this->Waterside->embed_youtube($event['Event']['url_youtube']); ?>
			</li>
			
			<? endif; ?>
			
			
			<? if (trim($event['Event']['url_website'])): ?>
			
			<li>
				<a href="<?=$event['Event']['url_website']?>">Website Link</a>
			</li>
			
			<? endif; ?>
			
			<? if (trim($event['Event']['url_myspace'])): ?>
			
			<li>
				<a href="<?=$event['Event']['url_myspace']?>">MySpace Page</a>
			</li>
			
			<? endif; ?>
			
		</ul>
		<a class="more" href="#">Click for more info</a>
	</dd>
	
<? endforeach; ?>
	
	<!-- Repeat -->
	
	<!-- 	<dt>
			Friday 20 Jan: <br />
			Van Halen
		</dt>
		<dd>
			<ul>
				<li>
					Music starts at 9.30pm | Free Entry
				</li>
				<li>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</li>
				<li>
					<iframe width="560" height="315" src="http://www.youtube.com/embed/Mmc6xqwEqIs" frameborder="0" allowfullscreen></iframe>
				</li>
				
				<li>
					<a href="#">Website Link</a>
				</li>
				
			</ul>
			<a class="more" href="#">Click for more info</a>
		</dd> -->
	
	
	

</dl> <!-- #music-list -->

<div class="pub-quiz-answers">
<h3>Answers to the pub quiz questions on the home page:</h3>
<ul>
	<li>
		What did Winston Churchill call fish and chips? <strong>Good Companions</strong>
	</li>
	<li>
		Which X-Factor star owns a chip shop? <strong>Dermot O'Leary</strong>
	</li>
	<li>
		John Lennon liked to smother his chips with mayo, true or false? <strong>False! He preferred ketchup</strong>
	</li>
</ul>
</div>


