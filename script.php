<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;

class pkg_bookstockInstallerScript
{
    public function install($parent)
    {
        Factory::getApplication()->enqueueMessage('Componente e modulo installati con successo!', 'message');
        return true;
    }

    public function uninstall($parent)
    {
        Factory::getApplication()->enqueueMessage('Componente e modulo disinstallati con successo!', 'message');
        return true;
    }

    public function update($parent)
    {
        $this->install($parent);
        return true;
    }
}