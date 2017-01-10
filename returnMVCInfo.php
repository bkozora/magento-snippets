<?php

/*
 *Magento get current controller ,current module , current action and route name
 */

//1 . controller name
Mage::app()->getRequest()->getControllerName();// will return controller name

//2. action name
Mage::app()->getRequest()->getActionName();//will return action name

//3. module name
Mage::app()->getRequest()->getModuleName();// will return module name

//4. routes name
Mage::app()->getRequest()->getRouteName();//will return routes name:
