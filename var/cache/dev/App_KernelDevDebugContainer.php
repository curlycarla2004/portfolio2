<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6eXW4mn\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6eXW4mn/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6eXW4mn.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6eXW4mn\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6eXW4mn\App_KernelDevDebugContainer([
    'container.build_hash' => '6eXW4mn',
    'container.build_id' => '39cefcaf',
    'container.build_time' => 1593516881,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6eXW4mn');
