<?php

/**
 * Model generator helper.
 *
 * @package    symfony
 * @subpackage generator
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfModelGeneratorHelper.class.php 22914 2009-10-10 12:24:29Z Kris.Wallsmith $
 */
abstract class sfModelGeneratorHelper
{
  abstract public function getUrlForAction($action);

  public function linkToNew($params)
  {
    return '<li class="sf_admin_action_new">'.link_to(__($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('new')).'</li>';
  }
<<<<<<< HEAD
=======
  
  public function linkToSimpleNew($params, $config)
  {
    return link_to(__($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('new'), $config);
  }
>>>>>>> d4d47658e03f05e92f8ebb503ccd79e715a2c01f

  public function linkToEdit($object, $params)
  {
    return '<li class="sf_admin_action_edit">'.link_to(__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('edit'), $object).'</li>';
  }

<<<<<<< HEAD
  public function linkToDelete($object, $params)
=======
  public function linkToDelete($object, $params, $config = null)
>>>>>>> d4d47658e03f05e92f8ebb503ccd79e715a2c01f
  {
    if ($object->isNew())
    {
      return '';
    }
<<<<<<< HEAD

    return '<li class="sf_admin_action_delete">'.link_to(__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('delete'), $object, array('method' => 'delete', 'confirm' => !empty($params['confirm']) ? __($params['confirm'], array(), 'sf_admin') : $params['confirm'])).'</li>';
  }

  public function linkToList($params)
  {
    return '<li class="sf_admin_action_list">'.link_to(__($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('list')).'</li>';
  }

  public function linkToSave($object, $params)
  {
    return '<li class="sf_admin_action_save"><input type="submit" value="'.__($params['label'], array(), 'sf_admin').'" /></li>';
  }

  public function linkToSaveAndAdd($object, $params)
=======
    
    $link_config = array('method' => 'delete', 'confirm' => !empty($params['confirm']) ? __($params['confirm'], array(), 'sf_admin') : $params['confirm']);
    
    if(!empty($config)) {
      $link_config['class'] = $config['class'];
    }

    return '<li class="sf_admin_action_delete">'.link_to(__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('delete'), $object, $link_config).'</li>';
  }

  public function linkToList($params, $config = null)
  {
    return '<li class="sf_admin_action_list">'.link_to(__($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('list'), $config).'</li>';
  }
  
  public function linkToSimpleList($params, $config = null)
  {
    return link_to(__($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('list'), $config);
  }

  public function linkToSave($object, $params, $cssclass = null)
  {
    return '<li class="sf_admin_action_save"><input type="submit" class="'.$cssclass.'" value="'.__($params['label'], array(), 'sf_admin').'" /></li>';
  }

  public function linkToSaveAndAdd($object, $params, $cssclass = null)
>>>>>>> d4d47658e03f05e92f8ebb503ccd79e715a2c01f
  {
    if (!$object->isNew())
    {
      return '';
    }

<<<<<<< HEAD
    return '<li class="sf_admin_action_save_and_add"><input type="submit" value="'.__($params['label'], array(), 'sf_admin').'" name="_save_and_add" /></li>';
=======
    return '<li class="sf_admin_action_save_and_add"><input type="submit" class="'.$cssclass.'" value="'.__($params['label'], array(), 'sf_admin').'" name="_save_and_add" /></li>';
>>>>>>> d4d47658e03f05e92f8ebb503ccd79e715a2c01f
  }
}
