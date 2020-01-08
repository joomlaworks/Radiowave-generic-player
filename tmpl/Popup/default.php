<?php
/**
 * @version    2.1
 * @package    Radiowave Generic Player (module)
 * @author     JoomlaWorks - http://www.joomlaworks.net
 * @copyright  Copyright (c) 2006 - 2020 JoomlaWorks Ltd. All rights reserved.
 * @license    GNU/GPL license: https://www.gnu.org/licenses/gpl-3.0.html
 */

// no direct access
defined('_JEXEC') or die;

?>

<div class="playingNow" style="margin:30px auto;">
    <div id="jquery_jplayer_<?php echo $module->id; ?>" class="jp-jplayer playingNow"></div>
    <div id="jp_container_1" class="jp-audio-stream<?php if($moduleclass_sfx) echo ' '.$moduleclass_sfx; ?>" role="application" aria-label="media player">
        <div class="jp-type-single">
            <div class="jp-gui jp-interface">
                <ul class="jp-controls">
                    <li>
                        <a href="#play" style="display:block;" class="jp-play" title="Play"><i class="icon-play"></i><span><?php echo JText::_('MOD_JW_RADIOWAVE_LISTEN_LIVE'); ?></span></a>
                        <a href="#pause" style="display:none;" class="jp-pause" title="Pause"><i class="icon-pause"></i><span><?php echo JText::_('MOD_JW_RADIOWAVE_PAUSE'); ?></span></a>
                    </li>
                    <li>
                        <a href="#up" style="display:block;" class="jp-mute" title="Mute"><i class="icon-volume-up"></i></a>
                        <a href="#down" style="display:none;" class="jp-unmute" title="Unmute"><i class="icon-volume-off"></i></a>
                    </li>
                </ul>
            </div>
            <div class="jp-no-solution">
                <?php echo JText::_('MOD_JW_RADIOWAVE_UPDATE_NOTICE'); ?>
            </div>
        </div>
    </div>
</div>
