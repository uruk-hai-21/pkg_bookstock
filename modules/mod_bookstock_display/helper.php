<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;

class ModBookstockDisplayHelper
{
    public static function getBookQty()
    {
        $db = Factory::getDbo();
        $query = $db->getQuery(true)
            ->select($db->quoteName('qty'))
            ->from($db->quoteName('#__bookstock'))
            ->where($db->quoteName('id') . ' = 1');
        $db->setQuery($query);
        $result = $db->loadResult();

        return $result !== null ? (int) $result : 0;
    }
}
