<?php
/*
 * Get full Action controller name in Observer
 */
$request = Mage::app()->getRequest();
$module = $request->getControllerModule();
$module_controller = $request->getControllerName();
$module_controller_action = $request->getActionName();
        
$fullActionName = $module."_".$module_controller."_".$module_controller_action;

echo $fullActionName;
Mage::log($fullActionName, null,'custom.log');
