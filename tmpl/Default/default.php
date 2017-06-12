<?php
/**
 * @version     1.0
 * @package     Radiowave Generic Player (module)
 * @author      JoomlaWorks - http://www.joomlaworks.net
 * @copyright   Copyright (c) 2006 - 2016 JoomlaWorks Ltd. All rights reserved.
 * @license     GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
	
	// Set the stream's id
	if($stream_id)
	{
	 	$stream = $stream_id;
	}
	else 
	{
		$stream = 'http://listen.radionomy.com/abc-jazz';
	}

	//Initiliasation script
	$init_script = '(function($){' . "\n";
	$init_script .= '	$(document).ready(function(){' . "\n";
	$init_script .= '		var stream = {' . "\n";
	$init_script .= '		  // Replace the stream with your own link' . "\n";
	$init_script .= '			mp3: "'. $stream .'"' . "\n";
	$init_script .= '		},' . "\n";
	$init_script .= '		ready = false;' . "\n";
	$init_script .= '		$("#jquery_jplayer_'. $module->id .'").jPlayer({' . "\n";
	$init_script .= '			ready: function (event) {' . "\n";
	$init_script .= '				ready = true;' . "\n";
	$init_script .= '				$(this).jPlayer("setMedia", stream);' . "\n";
	$init_script .= '			},' . "\n";
	$init_script .= '			pause: function() {' . "\n";
	$init_script .= '				$(this).jPlayer("clearMedia");' . "\n";
	$init_script .= '			},' . "\n";
	$init_script .= '			error: function(event) {' . "\n";
	$init_script .= '				if(ready && event.jPlayer.error.type === $.jPlayer.error.URL_NOT_SET) {' . "\n";
	$init_script .= '					// Setup the media stream again and play it.' . "\n";
	$init_script .= '					$(this).jPlayer("setMedia", stream).jPlayer("play");' . "\n";
	$init_script .= '				}' . "\n";
	$init_script .= '			},' . "\n";
	$init_script .= '			swfPath: "../dist/jplayer",' . "\n";
	$init_script .= '			// Change this if needed' . "\n";
	$init_script .= '			supplied: "mp3",' . "\n";
	$init_script .= '			preload: "none",' . "\n";
	$init_script .= '			wmode: "window",' . "\n";
	$init_script .= '			useStateClassSkin: true,' . "\n";
 	$init_script .= '			autoPlay: true,' . "\n";
	$init_script .= '			autoBlur: false,' . "\n";
	$init_script .= '			keyEnabled: true' . "\n";
	$init_script .= '		});' . "\n";
	$init_script .= '	});' . "\n";
	$init_script .= '})(jQuery);';

	$document->addScriptDeclaration($init_script);

?>
<div class="playingNow small-16 large-13 left">
	<div id="jquery_jplayer_<?php echo $module->id; ?>" class="jp-jplayer"></div>
	<div id="jp_container_1" class="jp-audio-stream<?php if($moduleclass_sfx) echo ' '.$moduleclass_sfx; ?>" role="application" aria-label="media player">
		<div class="jp-type-single">
			<div class="jp-gui jp-interface">
				<ul class="jp-controls">
					<li>
						<a href="javascript:;" style="display:block;" class="jp-play" title="Play"><i class="icon-play"></i><span><?php echo JText::_('MOD_JW_RADIOWAVE_LISTEN_LIVE'); ?></span></a>
						<a href="javascript:;" style="display:none;" class="jp-pause" title="Pause"><i class="icon-pause"></i><span><?php echo JText::_('MOD_JW_RADIOWAVE_PAUSE'); ?></span></a>
					</li>
					<li>
						<a href="javascript:;" style="display:block;" class="jp-mute" title="Mute"><i class="icon-volume-up"></i></a>
						<a href="javascript:;" style="display:none;" class="jp-unmute" title="Unmute"><i class="icon-volume-off"></i></a>
					</li>
					<li>
			        	<a class="popup" href="index.php?tmpl=popup" onclick="window.open(this.href,'targetWindow','width=690,height=600,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=yes,');return false;"><i class="icon-popup"></i></a>
			        </li>
				</ul>
			</div>
			<div class="jp-no-solution">
				<?php echo JText::_('MOD_JW_RADIOWAVE_UPDATE_NOTICE'); ?>
			</div>
		</div>
	</div>
</div>
