<?php

namespace ContainerUMD1zZp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoaderInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.C9JCBPC.Symfony\Component\Config\Loader\LoaderInterface' shared service.
     *
     * @return \Symfony\Component\Config\Loader\LoaderInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot autowire service ".service_locator.C9JCBPC": it references interface "Symfony\\Component\\Config\\Loader\\LoaderInterface" but no such service exists. You should maybe alias this interface to one of these existing services: "routing.loader.xml", "routing.loader.yml", "routing.loader.php", "routing.loader.glob", "routing.loader.directory", "routing.loader.container", "routing.loader", "routing.loader.annotation", "routing.loader.annotation.directory", "routing.loader.annotation.file".');
    }
}
