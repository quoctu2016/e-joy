<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE0wd6pw\EccubeProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE0wd6pw/EccubeProdProjectContainer.php') {
    touch(__DIR__.'/ContainerE0wd6pw.legacy');

    return;
}

if (!\class_exists(EccubeProdProjectContainer::class, false)) {
    \class_alias(\ContainerE0wd6pw\EccubeProdProjectContainer::class, EccubeProdProjectContainer::class, false);
}

return new \ContainerE0wd6pw\EccubeProdProjectContainer([
    'container.build_hash' => 'E0wd6pw',
    'container.build_id' => 'd676992c',
    'container.build_time' => 1593750031,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE0wd6pw');
