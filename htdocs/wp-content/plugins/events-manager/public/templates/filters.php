<?php
// Get choices
$area_object = get_field_object('event_type');
$choices = $area_object['choices'];

// Form setup
global $wp;
$action = home_url($wp->request);
?>
<form method="post" action="<?php echo $action ?>">
    <select name="filter-event_type">
        <?php foreach ($choices as $value => $choice) : ?>
            <option
                    value="<?php echo $value ?>"
                <?php echo $_POST && $_POST['filter-event_type'] === $value ? 'selected' : '' ?>
            >
                <?php echo $choice ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="OK">
</form>
