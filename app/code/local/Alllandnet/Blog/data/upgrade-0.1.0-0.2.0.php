<?php

/*
echo 'Testing our upgrade script (upgrade-0.1.0-0.2.0.php) and halting execution to avoid updating the system version number';
die();
*/

$installer = $this;
$installer->startSetup();
$installer->getConnection()
    ->changeColumn($installer->getTable('blog/post'), 'post', 'post', array(
        'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
        'nullable' => false,
        'comment' => 'Post Body'
    )
);
$installer->endSetup();
die("You'll see why this is here in a second");