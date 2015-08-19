
<aside id="music-next-up">
	<h3>
		<a href="#" class="ir">
			Music: Next Up @ The Waterside
		</a>
	</h3>
	<dl>
		

<? foreach ($sidebar_events as $sidebar_event): ?>
		
		<dt><a href="/music">
		<?=$this->Waterside->nice_mysql_date($sidebar_event['Event']['date'], 0); ?> 
		@ 
		<?=$sidebar_event['Event']['time']?>:</a></dt>
		<dd><a href="/music"><?=$sidebar_event['Event']['title']?></a></dd>
		
<? endforeach; ?>

	</dl>
</aside>