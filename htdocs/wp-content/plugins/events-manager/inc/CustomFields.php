<?php

namespace EventsManager;

use Geniem\ACF\ConditionalLogicGroup;
use Geniem\ACF\Field\Text;
use Geniem\ACF\Group;
use Geniem\ACF\RuleGroup;

class CustomFields
{
    public function register(): void
    {
        $field_group = new Group("Codifier fields");
        $field_group
            ->set_key('codifier_fields')
            ->register();

        $rule_group = new RuleGroup();
        $rule_group->add_rule( 'post_type', '==', PostType::POST_TYPE );

        $field_group->add_rule_group( $rule_group );

        $text_field = new Text("Organisateur");
        $field_group->add_field($text_field);
    }
}
