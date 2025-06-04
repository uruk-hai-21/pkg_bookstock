<?php
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

// Includi il file helper
require_once __DIR__ . '/helper.php';

// Ottieni la quantità disponibile
$quantity = ModBookstockDisplayHelper::getStockQuantity();

// Carica il layout predefinito
require ModuleHelper::getLayoutPath('mod_bookstock_display', $params->get('layout', 'default'));