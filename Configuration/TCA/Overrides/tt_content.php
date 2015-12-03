<?php

// ************************************************
// * Backup all default cTypes add new and resort *
// ************************************************

$backupCTypeItems = $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'];

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'] = array(
    array(
        'slickslider',
        '--div--'
    ),
);

include('CE/slickslider.php');

foreach ($backupCTypeItems as $key => $value) {
    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = $value;
}

unset($key);
unset($value);
unset($backupCTypeItems);
