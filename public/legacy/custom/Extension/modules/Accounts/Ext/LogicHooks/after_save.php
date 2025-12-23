<?php

$hook_array['after_save'][] = [
    5,
    'After save logic hook',
    'custom/modules/Accounts/logic_hooks/AccountAfterSave.php',
    'AccountAfterSave',
    'handleAfterSave'
];

