<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4Ltvrvr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4Ltvrvr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4Ltvrvr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4Ltvrvr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4Ltvrvr\App_KernelDevDebugContainer([
    'container.build_hash' => '4Ltvrvr',
    'container.build_id' => 'cd28c0bc',
    'container.build_time' => 1619101324,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4Ltvrvr');
