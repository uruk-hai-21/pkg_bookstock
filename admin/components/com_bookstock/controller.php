<?php
defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Factory;

class BookstockController extends BaseController
{
    public function display($cachable = false, $urlparams = [])
    {
        $input = Factory::getApplication()->input;
        $input->set('view', $input->getCmd('view', 'bookstock'));

        return parent::display($cachable, $urlparams);
    }
}
