<?php
namespace TechFry\Component\Stars\Administrator\Controller;
use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Controller\FormController;

class PlanetController extends FormController
{
   
    protected function loadFormData()
{
    $app  = Factory::getApplication();
    $data = $app->getUserState('com_stars.edit.planet.data', []);

    if (empty($data)) 
    {
        $data = $this->getItem();
    }

    return $data;
}

}