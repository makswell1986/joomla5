<?php
namespace TechFry\Component\Stars\Administrator\Model;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Model\AdminModel;

class PlanetModel extends AdminModel
{
    public function getForm($data = array(), $loadData = true)
    {
        $form = $this->loadForm('com_stars.planet', 'planet', array('control' => 'jform', 'load_data' => $loadData));

        if (empty($form))
        {
            return false;
        }
        
        return $form;
    }
}