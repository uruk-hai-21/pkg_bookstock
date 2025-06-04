<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Model\FormModel;

class BookstockModelBookstock extends FormModel
{
    protected function loadFormData()
    {
        $db = Factory::getDbo();

        $query = $db->getQuery(true)
            ->select('*')
            ->from($db->quoteName('#__bookstock'))
            ->where($db->quoteName('id') . ' = 1');

        $db->setQuery($query);
        $data = $db->loadAssoc();

        if (!$data) {
            $data = ['qty' => 0];
        }

        return $data;
    }
}
