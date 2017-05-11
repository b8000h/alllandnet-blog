<?php

$installer = $this;
throw new Exception("This is an exception to stop the installer from completing");

/*
    $installer = $this;
    $installer->startSetup();
    $installer->addEntityType('blog_post', array(
        //entity_mode is the URI you'd pass into a Mage::getModel() call
        'entity_model'    => 'blog/post',
        //table refers to the resource URI blog/post
        //<blog_resource>...<post><table>posts</table>
        'table'           =>'blog/post',
    ));
    $installer->createEntityTables(
        $this->getTable('blog/post')
    );
    $this->addAttribute('blog_post', 'title', array(
        'type'              => 'varchar', // the EAV attribute type, NOT a MySQL varchar
        'label'             => 'Title',
        'input'             => 'text',
        'class'             => '',
        'backend'           => '',
        'frontend'          => '',
        'source'            => '',
        'required'          => true,
        'user_defined'      => true,
        'default'           => '',
        'unique'            => false,
    ));
    $this->addAttribute('blog_post', 'content', array(
        'type'              => 'text',
        'label'             => 'Content',
        'input'             => 'textarea',
    ));
    $this->addAttribute('blog_post', 'date', array(
        'type'              => 'datetime',
        'label'             => 'Post Date',
        'input'             => 'datetime',
        'required'          => false,
    ));
    $installer->endSetup();
*/