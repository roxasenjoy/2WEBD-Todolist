<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBKMpPSX\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBKMpPSX/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBKMpPSX.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBKMpPSX\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBKMpPSX\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'BKMpPSX',
    'container.build_id' => '8653c311',
    'container.build_time' => 1585211012,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBKMpPSX');
