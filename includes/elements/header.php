<?php
/**
 * @version    2.1
 * @package    Radiowave Generic Player (module)
 * @author     JoomlaWorks - https://www.joomlaworks.net
 * @copyright  Copyright (c) 2006 - 2020 JoomlaWorks Ltd. All rights reserved.
 * @license    GNU/GPL license: https://www.gnu.org/licenses/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

require_once(dirname(__FILE__).'/base.php');

class JWElementHeader extends JWElement
{
    public function fetchElement($name, $value, &$node, $control_name)
    {
        $document = JFactory::getDocument();
        $document->addStyleDeclaration('
            .jwHeaderClr {clear:both;height:0;line-height:0;border:0;float:none;background:0 0;padding:0;margin:0;}
            .jwHeaderContainer {clear:both;font-weight:700;font-size:12px;color:#369;margin:12px 0 4px;padding:0;background:#d5e7fa;border-bottom:2px solid #96b0cb;float:left;width:100%;}
            .jwHeaderContent {padding:6px 8px;}
        ');
        return '<div class="jwHeaderContainer"><div class="jwHeaderContent">'.JText::_($value).'</div><div class="jwHeaderClr"></div></div>';
    }

    public function fetchTooltip($label, $description, &$node, $control_name, $name)
    {
        return null;
    }
}

class JFormFieldHeader extends JWElementHeader
{
    public $type = 'header';
}

class JElementHeader extends JWElementHeader
{
    public $_name = 'header';
}
