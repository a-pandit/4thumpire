<div class="row-fluid">
	<div class="span12 well">
		<h4>Add Weekly Event</h4>
			<?php 
			echo $this->Form->create('AddWeeklyevent',array('url' => array('controller' => 'Social',
																	'action' => 'addWeeklyevent', 
																	'club' => $this->request->params['club'],
																	'admin' => 'true')));
			echo "<dl class=\"dl-horizontal\">";
				
				echo "<dt>";
					echo $this->Form->label('name', 'Weekly Event Name');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->input('name', array('label' => false));
				echo "</dd>";
				
				echo "<dt>";
					echo $this->Form->label('info', 'Information');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->textarea('info', array('label' => false,
															'rows' => '10'));
				echo "</dd>";
				
				echo "<dt>";
					echo $this->Form->label('date', 'Date');
				echo "</dt>";
				echo "<dd>";
					echo $this->Form->input('date', array('label' => false));
				echo "</dd>";
				
			echo "</dl>";
			echo $this->Form->submit('Add Weekly Event',array('class' => 'btn'));
			echo $this->Form->end();
			?>
	</div>
</div>
