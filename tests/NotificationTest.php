<?php

namespace tests;

use Bazalt\Notification;

class NotificationTest extends \tests\BaseCase
{
    protected $view;

    protected function setUp()
    {
        Notification::createNewDispatcher();
    }

    protected function tearDown()
    {
    }

    public function testDispatch()
    {
        Notification::addListener('OnAdd', function ($event) {
            $this->assertEquals($event->getName(), 'OnAdd');
        });

        Notification::dispatch('OnAdd', $this, ['test']);


        /*$this->assertEquals(['test' => __DIR__ . DIRECTORY_SEPARATOR .  'templates'], $this->view->folders());

        $this->view->folders([
            'test'  => __DIR__ . DIRECTORY_SEPARATOR . 'templates',
            'test2' => __DIR__ . DIRECTORY_SEPARATOR . 'templates2'
        ]);

        $this->assertEquals([
            'test'  => __DIR__ . DIRECTORY_SEPARATOR . 'templates',
            'test2' => __DIR__ . DIRECTORY_SEPARATOR . 'templates2'
        ], $this->view->folders());*/
    }

    /**
     * @expectedException Exception
     
    public function testFetchError()
    {
        //$this->assertEquals('-', $this->view->fetch('test-invalid'));
    }*/
}