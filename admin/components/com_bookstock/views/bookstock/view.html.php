<?php
defined('_JEXEC') or die;

use Joomla\CMS\MVC\View\HtmlView;
use Joomla\CMS\Factory;
use Joomla\CMS\Toolbar\ToolbarHelper;
use Joomla\CMS\Language\Text;

class BookstockViewBookstock extends HtmlView
{
    protected $form;
    protected $item;

    public function display($tpl = null)
    {
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');

        $this->addToolbar();
        
        parent::display($tpl);
    }

    protected function addToolbar()
    {
        Factory::getApplication()->input->set('hidemainmenu', true);
        
        ToolbarHelper::title(Text::_('COM_BOOKSTOCK_MANAGER'), 'book');
        
        ToolbarHelper::apply('bookstock.apply');
        ToolbarHelper::save('bookstock.save');
        ToolbarHelper::cancel('bookstock.cancel', 'JTOOLBAR_CLOSE');
    }
}