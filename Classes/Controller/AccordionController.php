<?php
namespace ZECHENDORF\Porto\Controller;
/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Christopher Zechendorf
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
 
/**
 * The Controller for Accordions
 */
class AccordionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
  /**
   * accordionRepository
   * 
   * @var \ZECHENDORF\Porto\Domain\Repository\AccordionRepository
   * @inject
   * 
   */
  protected $accordionRepository = null;
  
  /**
   * action show
   * 
   * @return void
   */
  public function showAction(){
    if($this->settings['entries']){
      $uids = explode(',',$this->settings['entries']);
      foreach($uids as $uid){
        $accordionElements[] = $this->accordionRepository->findByUid($uid);
      }
    }
    $this->view->assign('accordionElements', $accordionElements);
    $this->view->assign('settings', $this->settings);
    $this->view->assign('contentObject', $this->configurationManager->getContentObject()->data);
  }
  
}
