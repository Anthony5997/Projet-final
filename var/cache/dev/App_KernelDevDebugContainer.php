<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerV6CDCno\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerV6CDCno/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerV6CDCno.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerV6CDCno\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerV6CDCno\App_KernelDevDebugContainer([
    'container.build_hash' => 'V6CDCno',
    'container.build_id' => '43902ae5',
    'container.build_time' => 1640948360,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerV6CDCno');
