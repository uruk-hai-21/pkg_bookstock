<?php
defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\Router\Route;

class BookstockController extends BaseController
{
    public function display($cachable = false, $urlparams = [])
    {
        // Carica la view "bookstock" se non specificata
        $input = \Joomla\CMS\Factory::getApplication()->input;
        $input->set('view', $input->getCmd('view', 'bookstock'));

        return parent::display($cachable, $urlparams);
    }
}
