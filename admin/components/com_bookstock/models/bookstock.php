<?php
defined('_JEXEC') or die;

use Joomla\CMS\MVC\Model\AdminModel;
use Joomla\CMS\Factory;
use Joomla\Database\DatabaseInterface;

class BookstockModelBookstock extends AdminModel
{
    public function getForm($data = [], $loadData = true)
    {
        $form = $this->loadForm(
            'com_bookstock.bookstock',
            'bookstock',
            ['control' => 'jform', 'load_data' => $loadData]
        );

        return $form;
    }

    protected function loadFormData()
    {
        $db = Factory::getContainer()->get(DatabaseInterface::class);
        $query = $db->getQuery(true)
            ->select('*')
            ->from($db->quoteName('#__bookstock'))
            ->where($db->quoteName('id') . ' = 1');
            
        $db->setQuery($query);
        return $db->loadObject();
    }

    public function save($data)
    {
        $db = Factory::getContainer()->get(DatabaseInterface::class);
        $query = $db->getQuery(true)
            ->update($db->quoteName('#__bookstock'))
            ->set($db->quoteName('quantity') . ' = ' . (int)$data['quantity'])
            ->where($db->quoteName('id') . ' = 1');
            
        $db->setQuery($query)->execute();
        return true;
    }
}