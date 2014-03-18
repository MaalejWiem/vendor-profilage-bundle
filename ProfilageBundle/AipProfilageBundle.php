<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Aip\ProfilagedBundle;

use Claroline\KernelBundle\Bundle\ConfigurationProviderInterface;
use Claroline\KernelBundle\Bundle\ConfigurationBuilder;
class AipProfilageBundle extends PluginBundle implements ConfigurationProviderInterface

{
    public function getConfiguration($environements)
    {
        $config= new ConfigurationBuilder();
		return $config->addRoutingResource(__DIR__.'/Resource/config/routing.yml',null,'/');
    }
	 public function suggestConfigurationFor(Bundle $bundle, $environment)
    {
        if ($bundle instanceof MyThirdPartyBundle) {
            $config = new ConfigurationBuilder();
        
            // ajout d'un fichier de routing valable pour tous les environnements
            $config->addRoutingResource(__DIR__.'/Resource/config/routing.yml',null,'/');
         
            return $config;
        }
    }
}

