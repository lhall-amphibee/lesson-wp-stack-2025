<?php
/**
 * Renders the event program block on the server.
 *
 * @param array    $attributes Block attributes.
 * @param string   $content    Block default content.
 * @param WP_Block $block      Block instance.
 * @return string Returns the event program HTML.
 */

$title = isset($attributes['title']) ? $attributes['title'] : '';
$date = isset($attributes['date']) ? $attributes['date'] : '';
$location = isset($attributes['location']) ? $attributes['location'] : '';
$sessions = isset($attributes['sessions']) ? $attributes['sessions'] : [];

$wrapper_attributes = get_block_wrapper_attributes(['class' => 'event-program']);
?>

<div <?php echo $wrapper_attributes; ?>>
	<?php if (!empty($title)) : ?>
		<h2 class="event-program-title"><?php echo esc_html($title); ?></h2>
	<?php endif; ?>

	<div class="event-program-meta">
		<?php if (!empty($date)) : ?>
			<div class="event-date"><?php echo esc_html($date); ?></div>
		<?php endif; ?>

		<?php if (!empty($location)) : ?>
			<div class="event-location"><?php echo esc_html($location); ?></div>
		<?php endif; ?>
	</div>

	<?php if (!empty($sessions)) : ?>
		<div class="event-program-sessions">
			<h3><?php esc_html_e('Program Schedule', 'programme'); ?></h3>

			<?php foreach ($sessions as $session) : ?>
				<div class="event-session">
					<?php if (!empty($session['time'])) : ?>
						<div class="session-time"><?php echo esc_html($session['time']); ?></div>
					<?php endif; ?>

					<?php if (!empty($session['title'])) : ?>
						<h4 class="session-title"><?php echo esc_html($session['title']); ?></h4>
					<?php endif; ?>

					<?php if (!empty($session['speaker'])) : ?>
						<div class="session-speaker"><?php echo wp_kses_post($session['speaker']); ?></div>
					<?php endif; ?>

					<?php if (!empty($session['description'])) : ?>
						<div class="session-description"><?php echo wp_kses_post($session['description']); ?></div>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</div>
