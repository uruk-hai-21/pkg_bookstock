<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Toolbar\ToolbarHelper;

$app = Factory::getApplication();
$input = $app->input;
$form = $this->getForm();
?>
<form action="<?php echo JRoute::_('index.php?option=com_bookstock'); ?>" method="post" name="adminForm" id="bookstock-form">
    <div class="form-horizontal">
        <fieldset class="adminform">
            <legend><?php echo Text::_('COM_BOOKSTOCK_LEGEND_DETAILS'); ?></legend>
            <div class="row-fluid">
                <div class="span6">
                    <?php echo $form->renderField('quantity'); ?>
                </div>
            </div>
        </fieldset>
    </div>
    <input type="hidden" name="task" value="" />
    <?php echo JHtml::_('form.token'); ?>
</form>