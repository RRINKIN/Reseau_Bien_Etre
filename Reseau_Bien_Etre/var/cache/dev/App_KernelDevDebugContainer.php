<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSfr2KmC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSfr2KmC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSfr2KmC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSfr2KmC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSfr2KmC\App_KernelDevDebugContainer([
    'container.build_hash' => 'Sfr2KmC',
    'container.build_id' => 'f6b6a89a',
    'container.build_time' => 1706983836,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSfr2KmC');
