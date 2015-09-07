<?php
/**
 * @link https://github.com/old-town/event-bus
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\EventBus\PhpUnit\Test\EventBussManager;

use OldTown\EventBus\EventBussManager\ManagerInfoContainer;
use PHPUnit_Framework_TestCase;


/**
 * Class ManagerInfoContainerTest
 *
 * @package OldTown\EventBus\PhpUnit\Test\EventBussManagerFacade
 */
class ManagerInfoContainerTest extends PHPUnit_Framework_TestCase
{
    /**
     * Создаем ManagerInfoContainer с пустым конфигом
     *
     * @expectedException \OldTown\EventBus\EventBussManager\Exception\InvalidEventBussManagerConfigException
     * @expectedExceptionMessage Отсутствует секция driver
     */
    public function testConfigContainsSectionDriver()
    {
        new ManagerInfoContainer();
    }

    /**
     * Создаем ManagerInfoContainer с пустым конфигом
     *
     */
    public function testSetPluginName()
    {
        $expected = 'example';
        $managerInfoContainer = new ManagerInfoContainer([
            ManagerInfoContainer::PLUGIN_NAME => $expected,
            ManagerInfoContainer::DRIVER => 'default'
        ]);


        static::assertEquals($expected, $managerInfoContainer->getPluginName());
    }
}
