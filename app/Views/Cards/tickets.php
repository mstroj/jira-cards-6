<?php

require_once(dirname(__FILE__)."/../../Lib/CardsHelper.php");
$helper = new CardsHelper();

?>

<?php foreach( $tickets as $ticket ) { ?>
<div class="ticket">
	<div class="priority <?php echo strtolower($ticket['priority']) ?>"></div>
	<div class="issuetype <?php echo str_replace(' ', '', strtolower($ticket['issuetype'])) ?>"></div>
	<?php if( isset($ticket['epic']) ) { ?>
	<div class="epic epicgroup_<?php echo $helper->getEpicNumber($ticket['epickey']); ?>"><?php echo $ticket["epic"] ?></div>
	<?php } ?>
	<div class="number"><?php echo $ticket["key"] ?></div>
	<div class="summary"><?php echo $ticket["summary"] ?></div>
	<?php if(false) { //isset($ticket['rank']) ) { ?>
	<div class="rank"><?php echo $ticket["rank"] ?></div>
	<?php } ?>
	<div class="reporter"><?php echo $ticket["reporter"] ?></div>
	<div class="assignee"><?php echo $ticket["assignee"] ?></div>
	<?php if( isset($ticket['story_points']) ) { ?>
		<div class="story_points"><?php echo $ticket["story_points"] ?></div>
	<?php } ?>
</div>
<?php } ?>
