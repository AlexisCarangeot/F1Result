<?php

namespace ContainerTrD9RCQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Listener_Clean_TeamLogoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'vich_uploader.listener.clean.team_logo' shared service.
     *
     * @return \Vich\UploaderBundle\EventListener\Doctrine\CleanListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/BaseListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/CleanListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Adapter/ORM/DoctrineORMAdapter.php';

        return $container->privates['vich_uploader.listener.clean.team_logo'] = new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('team_logo', ($container->privates['vich_uploader.adapter.orm'] ?? ($container->privates['vich_uploader.adapter.orm'] = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter())), ($container->privates['vich_uploader.metadata_reader'] ?? $container->getVichUploader_MetadataReaderService()), ($container->services['vich_uploader.upload_handler'] ?? $container->load('getVichUploader_UploadHandlerService')));
    }
}
