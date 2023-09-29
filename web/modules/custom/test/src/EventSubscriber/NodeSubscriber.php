<?php

namespace Drupal\test\EventSubscriber;

use Drupal\entity_events\Event\EntityEvent;
use Drupal\entity_events\EventSubscriber\EntityEventInsertSubscriber;

final class NodeSubscriber extends EntityEventInsertSubscriber
{
    public function onEntityInsert(EntityEvent $event)
    {
        // $node = $event->getEntity();
        // $node->save();
    }
}
