<?php
/**
 * @link https://github.com/old-town/event-buss
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\EventBuss\PhpUnitTest;

/**
 * Class ModuleTest
 *
 * @package OldTown\EventBuss\PhpUnitTest
 */
trait  RabbitMqTestCaseTrait
{
    /**
     * @var RabbitMqTestManager
     */
    protected $rabbitMqTestManager;

    /**
     * Имя виртуального хоста используемого для тестов
     *
     * @var string
     */
    protected $testVirtualHost;

    /**
     * @return string
     * @throws \RuntimeException
     */
    public function getTestVirtualHost()
    {
        if (null === $this->testVirtualHost) {
            $errMsg = 'Необходимо установить testVirtualHost';
            throw new \RuntimeException($errMsg);
        }
        return $this->testVirtualHost;
    }

    /**
     * @param string $testVirtualHost
     * @return $this
     */
    public function setTestVirtualHost($testVirtualHost)
    {
        $this->testVirtualHost = (string)$testVirtualHost;

        return $this;
    }


    /**
     * @return RabbitMqTestManager
     *
     * @throws \RuntimeException
     */
    public function getRabbitMqTestManager()
    {
        if (null === $this->rabbitMqTestManager) {
            $errMsg = 'Необходимо установить rabbitMqTestManager';
            throw new \RuntimeException($errMsg);
        }
        return $this->rabbitMqTestManager;
    }

    /**
     * @param RabbitMqTestManager $rabbitMqTestManager
     * @return $this
     */
    public function setRabbitMqTestManager(RabbitMqTestManager $rabbitMqTestManager)
    {
        $this->rabbitMqTestManager = $rabbitMqTestManager;

        return $this;
    }

    /**
     * Определяет был ли установлен виртуальных хост на котором происходит тестирование
     *
     * @return bool
     */
    public function hasTestVirtualHost()
    {
        $has = null !== $this->testVirtualHost;
        return $has;
    }

    /**
     * Определяет был ли установлен менеджер для работы с кроликом
     *
     * @return bool
     */
    public function hasRabbitMqTestManager()
    {
        $has = null !== $this->rabbitMqTestManager;
        return $has;
    }
}
