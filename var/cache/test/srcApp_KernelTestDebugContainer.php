<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6lVD3Hb\srcApp_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6lVD3Hb/srcApp_KernelTestDebugContainer.php') {
    touch(__DIR__.'/Container6lVD3Hb.legacy');

    return;
}

if (!\class_exists(srcApp_KernelTestDebugContainer::class, false)) {
    \class_alias(\Container6lVD3Hb\srcApp_KernelTestDebugContainer::class, srcApp_KernelTestDebugContainer::class, false);
}

return new \Container6lVD3Hb\srcApp_KernelTestDebugContainer([
    'container.build_hash' => '6lVD3Hb',
    'container.build_id' => 'fcd4dbe7',
    'container.build_time' => 1585849085,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6lVD3Hb');
