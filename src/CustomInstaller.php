<?php
/**
 * Composer Custom Installer
 * Copyright 2019 Jamiel Sharief.
 *
 * Licensed under The MIT License
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * @copyright   Copyright (c) Jamiel Sharief
 * @link        https://github.com/jamielsharief/custom-installer
 * @license     https://opensource.org/licenses/mit-license.php MIT License
 */
/**
 * For more info see
 * @see https://getcomposer.org/doc/articles/custom-installers.md
 */
namespace CustomInstaller\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class PluginInstaller extends LibraryInstaller
{

    /**
     * Returns the path, you cant get pluginName from ns at this stage
     *
     * @param PackageInterface $package
     * @return void
     */
    public function getInstallPath(PackageInterface $package)
    {
        /**
         * Check composer.json for extra data
         */
        $extra = $package->getExtra();
        if (!empty($extra['directory'])) {
            return $extra['directory'];
        }
        return $package->getPrettyName();
    }
   
    /**
     * This is how the type is setup
     */
    public function supports($packageType)
    {
        return 'custom-installer' === $packageType;
    }
}
