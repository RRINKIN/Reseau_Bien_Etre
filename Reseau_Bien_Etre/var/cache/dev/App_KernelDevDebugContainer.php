<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYYOAyNR\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYYOAyNR/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYYOAyNR.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYYOAyNR\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYYOAyNR\App_KernelDevDebugContainer([
    'container.build_hash' => 'YYOAyNR',
    'container.build_id' => '7fdb3fd6',
    'container.build_time' => 1703667348,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYYOAyNR');
