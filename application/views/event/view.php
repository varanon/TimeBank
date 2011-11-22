<h2>Info for event "<?= $event->name; ?>"</h2>
	<?= Form::open('event/apply'); ?> 
<ul>
	<input type="hidden" name="event_id"  value="<?= $event->id ?>" />
    <li>Name: <?= $event->name; ?></li>
    <li>Open date: <?= $event->open_date; ?></li>
    <li>End date: <?= $event->end_date; ?></li>

    <li>Status: <?= $event_status[$event->status]; ?></li>
    <li>location: <?= $locations[$event->location_id]; ?></li>
    <li>company: <?= HTML::anchor('company/view/'.$event->company->id, $event->company->name); ?></li>

    <li>Phone: <?= $event->phone; ?></li>
    <li>contractor_name: <?= $event->contractor_name; ?></li>
    <li>user_need_count: <?= $event->user_need_count; ?></li>
    <li>Time cost: <?= $event->time_cost; ?></li>
    <li>Detail: <?= $event->detail; ?></li>
    <li>Pic 1: <img src="<?= url::base().'media/upload/'.$event->pic_1; ?>" /></li>
    <li>Pic 2: <img src="<?= url::base().'media/upload/'.$event->pic_2; ?>" /></li>
    <li>Pic 3: <img src="<?= url::base().'media/upload/'.$event->pic_3; ?>" /></li>
    <li>Pic 4: <img src="<?= url::base().'media/upload/'.$event->pic_4; ?>" /></li>
    <li>Pic 5: <img src="<?= url::base().'media/upload/'.$event->pic_5; ?>" /></li>
</ul>

<?= Form::submit('apply', 'apply'); ?>

<h2>Comments</h2>
<ol>
<?php foreach($event->comments->find_all() as $comment): ?>
	<li><?= $comment->user->nickname ? $comment->user->nickname : $comment->ip; ?>, <?= $comment->comment; ?></li>
<? endforeach ?>
</ol>

<?= Form::open('event/addcomment/'.$event->id); ?>

<?= Form::label('comment', 'comment'); ?>
<?= Form::textarea('comment'); ?>

<?= Form::submit('submit', 'Add comment'); ?>
<?= Form::close(); ?>
