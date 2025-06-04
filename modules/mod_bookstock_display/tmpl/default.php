<?php
defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

$quantity = ModBookstockDisplayHelper::getStockQuantity();
?>
<div class="bookstock-display-module">
    <h3><?php echo Text::_('MOD_BOOKSTOCK_DISPLAY_TITLE'); ?></h3>
    <div class="stock-quantity" data-bookstock="<?php echo $quantity; ?>">
        <?php echo Text::sprintf('MOD_BOOKSTOCK_DISPLAY_QUANTITY', $quantity); ?>
    </div>
</div>