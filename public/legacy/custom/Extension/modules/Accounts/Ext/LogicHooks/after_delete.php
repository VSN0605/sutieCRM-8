<?php

$hook_array['after_delete'][] = [
    7,
    'After Delete Logic Hook',
    'custom/modules/Accounts/logic_hooks/AccountAfterDelete.php',
    'AccountAfterDelete',
    'handleAfterDelete'
];