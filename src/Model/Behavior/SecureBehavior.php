<?php
namespace App\Model\Behavior;

use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\ORM\Behavior;
use Cake\Core\Configure;
use Cake\Event\EventInterface;
use ArrayObject;

class SecureBehavior extends Behavior
{
    public function afterMarshal(EventInterface $event, EntityInterface $entity, ArrayObject $data, ArrayObject $options)
    {
        $prefix = substr($event->getSubject()->getTable(), 0, 4);
        if ($entity->isNew())
        {
            $entity->set($prefix.'_created', date('Y-m-d H:i:s'));
            $current_usua_codigo = $entity->get($prefix.'_usua_codigo');
            if (empty($current_usua_codigo) && isset($_SESSION['Auth']->usua_codigo))
            {
                $entity->set($prefix.'_usua_codigo', $_SESSION['Auth']->usua_codigo);
            }
            $current_clie_codigo = $entity->get($prefix.'_clie_codigo');
            if (empty($current_clie_codigo) && isset($_SESSION['Auth']->usua_clie_codigo))
            {
                $entity->set($prefix.'_clie_codigo', $_SESSION['Auth']->usua_clie_codigo);
            }
        } else {
            $entity->set($prefix.'_modified', date('Y-m-d H:i:s'));
        }
    }

    public function beforeFind($event, $query, $options, $primary)
    {
        $prefix = substr($event->getSubject()->getTable(), 0, 4);
        $alias = $event->getSubject()->getRegistryAlias();
        $schema = $event->getSubject()->getSchema();
        
        if ($schema->getColumn($prefix.'_clie_codigo')) {
            if (isset($_SESSION) && isset($_SESSION['Auth']->usua_clie_codigo)) {
                $query->where([$alias.'.'.$prefix.'_clie_codigo' => $_SESSION['Auth']->usua_clie_codigo]);
            }
        }
    }
}