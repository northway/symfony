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
  
  public function linkToSimpleNew($params, $config)
  {
    return link_to(__($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('new'), $config);
  }

  public function linkToEdit($object, $params)
  {
    return '<li class="sf_admin_action_edit">'.link_to(__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('edit'), $object).'</li>';
  }

  public function linkToDelete($object, $params, $config = null)
  {
    if ($object->isNew())
    {
      return '';
    }
    
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
  {
    if (!$object->isNew())
    {
      return '';
    }

    return '<li class="sf_admin_action_save_and_add"><input type="submit" class="'.$cssclass.'" value="'.__($params['label'], array(), 'sf_admin').'" name="_save_and_add" /></li>';
  }
}
