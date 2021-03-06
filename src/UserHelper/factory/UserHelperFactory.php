<?php

use Doctrine\ORM\EntityManager;

/**
 * @author Ricardo Fiorani
 */
class UserHelperFactory {

    /**
     * @param ServiceManager $serviceManager
     * @return \UserHelper
     */
    public function __invoke(ServiceManager $serviceManager) {
        /* @var $em EntityManager */
        $em = $serviceManager->get('EntityManager');
        /* @var $config ConfigManager */
        $config = $serviceManager->get('ConfigManager');
        return new UserHelper($em,$config->getConfig('userEntityName'));
    }

}
