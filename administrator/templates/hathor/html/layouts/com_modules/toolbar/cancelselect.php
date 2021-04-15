<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_modules
 *
 * @copyright   (C) 2013 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$text = JText::_('JTOOLBAR_CANCEL');
?>
<a onclick="location.href='index.php?option=com_modules'" class="toolbar" title="<?php echo $text; ?>">
	<span class="icon-32-cancel"></span> <?php echo $text; ?>
</a>
