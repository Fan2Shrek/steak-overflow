<?php

namespace Drupal\test\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;


class TestController extends ControllerBase
{
    public function list(): array
    {
        return [
            '#theme' => 'main',
        ];
    }

    public function seeAll(): array
    {
        $nids = \Drupal::entityQuery('node')
            ->condition('type', 'question')
            ->accessCheck()
            ->sort('title')
            ->execute();

        $nodes =  Node::loadMultiple($nids);
        $viewBuilder = \Drupal::entityTypeManager()->getViewBuilder('node');

        return $viewBuilder->viewMultiple($nodes, 'teaser');
    }
}
