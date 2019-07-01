<?php
/**
 * @version    2.0
 * @package    Radiowave Generic Player (module)
 * @author     JoomlaWorks - http://www.joomlaworks.net
 * @copyright  Copyright (c) 2006 - 2019 JoomlaWorks Ltd. All rights reserved.
 * @license    GNU/GPL license: https://www.gnu.org/licenses/gpl-3.0.html
 */

// no direct access
defined('_JEXEC') or die;

// JoomlaWorks reference parameters
$mod_name   = "mod_jw_radiowave_player";

// Conventions
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

// API
$app      = JFactory::getApplication();
$document = JFactory::getDocument();

// Assign paths
$sitePath = JPATH_SITE;
$siteUrl  = substr(JURI::base(), 0, -1);

// Module parameters
$moduleclass_sfx = $params->get('moduleclass_sfx', '');
$stream          = $params->get('stream_id', 'https://listen.radionomy.com/abc-jazz');
$template        = $params->get('template', 'Default');

// JS
JHtml::_('jquery.framework');
$document->addScript($siteUrl.'/modules/mod_jw_radiowave_player/includes/dist/jplayer/jquery.jplayer.min.js');
$document->addScriptDeclaration('

    /* Radiowave Generic Player */
    (function($) {
        $(document).ready(function() {
            var stream = {
                    mp3: "'.$stream.'"
                },
                ready = false;
            $("#jquery_jplayer_'.$module->id.'").jPlayer({
                ready: function(event) {
                    ready = true;
                    $(this).jPlayer("setMedia", stream);
                },
                pause: function() {
                    $(this).jPlayer("clearMedia");
                },
                error: function(event) {
                    if (ready && event.jPlayer.error.type === $.jPlayer.error.URL_NOT_SET) {
                        $(this).jPlayer("setMedia", stream).jPlayer("play");
                    }
                },
                swfPath: "../dist/jplayer",
                supplied: "mp3",
                preload: "none",
                wmode: "window",
                useStateClassSkin: true,
                autoBlur: false,
                keyEnabled: true
            });
        });
    })(jQuery);

');

// Output content with template
require(JModuleHelper::getLayoutPath($mod_name, $template.'/default'));
