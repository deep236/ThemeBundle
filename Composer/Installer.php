<?php
namespace Dalu\ThemeBundle\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;


class Installer extends LibraryInstaller
{
    public function getInstallPath(PackageInterface $package)
    {
        return 'Resources/public/' . $package->getPrettyName();
    }
}