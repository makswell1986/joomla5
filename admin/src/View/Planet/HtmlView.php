<?php

namespace TechFry\Component\Stars\Administrator\View\Planet;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

class HtmlView extends BaseHtmlView
{
    protected $form;
    protected $item;
    
    public function display($tpl = null) 
    {
        $this->form = $this->get('Form');
        $this->item  = $this->get('Item');
        
        parent::display($tpl);
    }
}

?>