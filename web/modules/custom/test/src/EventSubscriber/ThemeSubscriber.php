<?php

namespace Drupal\test\EventSubscriber;

use Drupal\core_event_dispatcher\ThemeHookEvents;
use Drupal\core_event_dispatcher\Event\Theme\ThemeEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ThemeSubscriber implements EventSubscriberInterface
{
  /**
   * {@inheritDoc}
   */
  public static function getSubscribedEvents(): array
  {
    return [
      ThemeHookEvents::THEME => 'addTheme',
    ];
  }

  /**
   * @param ThemeEvent $event
   */
  public function addTheme(ThemeEvent $event): void
  {
    $event->addNewTheme('main', [
      'path' => 'modules/custom/test/templates',
      'variables' => [],
    ]);
  }
}
