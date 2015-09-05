<?php
/**
 * @link https://github.com/old-town/event-buss
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\EventBuss\Driver\RabbitMqDriver\Adapter;

use \OldTown\EventBuss\Driver\RabbitMqDriver\MetadataReader\Metadata;

/**
 * Interface AdapterInterface
 *
 * @package OldTown\EventBuss\Driver\RabbitMqDriver\Adapter
 */
interface AdapterInterface
{
    /**
     * Инициализация шины
     *
     * @param Metadata[] $metadata
     */
    public function initEventBuss(array $metadata = []);


    /**
     * Настройки соеденения
     *
     * @return array
     */
    public function getConnectionConfig();
}
