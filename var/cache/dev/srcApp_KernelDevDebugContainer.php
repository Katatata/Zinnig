<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLRZD8u4\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLRZD8u4/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLRZD8u4.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLRZD8u4\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerLRZD8u4\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'LRZD8u4',
    'container.build_id' => '075fefe9',
    'container.build_time' => 1555321017,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLRZD8u4');
