<?php
/**
 * @version		$Id: default_folders.php 14276 2010-01-18 14:20:28Z louis $
 * @package		Joomla.Administrator
 * @subpackage	com_media
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;
?>
<ul <?php echo $this->folders_id; ?>>
<?php if(isset($this->folders['children'])): ?>
<?php foreach ($this->folders['children'] as $folder) : ?>
	<li id="<?php echo $folder['data']->relative; ?>"><a href="index.php?option=<?php echo JACOMPONENT; ?>&amp;view=repolist&amp;tmpl=component&amp;folder=<?php echo $folder['data']->relative; ?>" target="folderframe"><?php echo $folder['data']->name; ?></a><?php echo $this->getFolderLevel($folder); ?></li>
<?php endforeach; ?>
<?php endif; ?>
</ul>
