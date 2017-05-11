<?php
class Alllandnet_Blog_IndexController extends Mage_Core_Controller_Front_Action {       
    public function indexAction() {
    	echo 'Blog Setup!'
    	/*
    	$blog = Mage::getModel('blog/post');
    	$blog = load(1);
    	var_dump($blog);
    	*/
    }

    public function populateEntriesAction() {
    for ($i=0;$i<10;$i++) {
        $weblog2 = Mage::getModel('blog/post');
        $weblog2->setTitle('This is a test '.$i);
        $weblog2->setContent('This is test content '.$i);
        $weblog2->setDate(now());
        $weblog2->save();
    }
    echo 'Done';
}

public function showCollectionAction() {
    $weblog2 = Mage::getModel('blog/post');
    $entries = $weblog2->getCollection()
        ->addAttributeToSelect('title')
        ->addAttributeToSelect('content');
    $entries->load();
    foreach($entries as $entry)
    {
        // var_dump($entry->getData());
        echo '<h2>' . $entry->getTitle() . '</h2>';
        echo '<p>Date: ' . $entry->getDate() . '</p>';
        echo '<p>' . $entry->getContent() . '</p>';
    }
    echo '</br>Done</br>';
} 

    public function testModelAction() {
    	echo 'Blog Setup!'
    	/*
        $params = $this->getRequest()->getParams();
        $blogpost = Mage::getModel('blog/post');
        echo("Loading the blogpost with an ID of ".$params['id']);
        $blogpost->load($params['id']);
        $data = $blogpost->getData();
        var_dump($data);
        */
    }
}