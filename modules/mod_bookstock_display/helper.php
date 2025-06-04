<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\Database\DatabaseInterface;

class ModBookstockDisplayHelper
{
    public static function getStockQuantity()
    {
        try {
            $db = Factory::getContainer()->get(DatabaseInterface::class);
            $query = $db->getQuery(true)
                ->select($db->quoteName('quantity'))
                ->from($db->quoteName('#__bookstock'))
                ->where($db->quoteName('id') . ' = 1');
                
            return $db->setQuery($query)->loadResult();
        } catch (\Exception $e) {
            Factory::getApplication()->enqueueMessage($e->getMessage(), 'error');
            return 0;
        }
    }
}