<?php
/**
 * Patch testing component for the Joomla! CMS
 *
 * @copyright  Copyright (C) 2011 - 2012 Ian MacLennan, Copyright (C) 2013 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later
 */

/** @type  \PatchTester\View\DefaultHtmlView  $this */

JHtml::_('jquery.framework');
JHtml::_('script', 'com_patchtester/fetcher.js', false, true);

?>

<div id="patchtester-container">
	<h1 id="patchtester-progress-header"><?php echo \JText::_('COM_PATCHTESTER_FETCH_INITIALIZING'); ?></h1>
	<p id="patchtester-progress-message"><?php echo \JText::_('COM_PATCHTESTER_FETCH_INITIALIZING_DESCRIPTION'); ?></p>
	<input id="patchtester-token" type="hidden" name="<?php echo JFactory::getSession()->getFormToken(); ?>" value="1" />
</div>
