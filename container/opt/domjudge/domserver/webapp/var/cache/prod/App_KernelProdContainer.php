<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerU4tLbsx\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerU4tLbsx/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerU4tLbsx.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerU4tLbsx\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerU4tLbsx\App_KernelProdContainer([
    'container.build_hash' => 'U4tLbsx',
    'container.build_id' => '7f09fe66',
    'container.build_time' => 1664875382,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerU4tLbsx');