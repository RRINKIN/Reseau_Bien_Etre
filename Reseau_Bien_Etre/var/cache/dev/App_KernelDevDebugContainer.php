<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJA4F6Yz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJA4F6Yz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJA4F6Yz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJA4F6Yz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJA4F6Yz\App_KernelDevDebugContainer([
    'container.build_hash' => 'JA4F6Yz',
    'container.build_id' => 'bb9d730f',
    'container.build_time' => 1706215608,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJA4F6Yz');
