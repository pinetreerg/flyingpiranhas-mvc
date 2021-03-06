<?php

namespace flyingpiranhas\mvc\controller\interfaces;

use flyingpiranhas\mvc\interfaces\ModuleInterface;
use flyingpiranhas\mvc\views\interfaces\ViewInterface;

/**
 * Any controller component that is to be used by other FP components
 * should implement this interface.
 *
 * @category       controller
 * @package        flyingpiranhas.mvc
 * @license        Apache-2.0
 * @version        0.01
 * @since          2012-09-07
 * @author         Ivan Pintar
 */
interface ControllerInterface
{

    /**
     * @return string
     */
    public function getViewsDir();

    /**
     * @param ModuleInterface $oModule
     *
     * @return ControllerInterface
     */
    public function setModule(ModuleInterface $oModule);

    /**
     * @param string      $sAction
     * @param array|null  $aGetParams
     *
     * @return ViewInterface
     */
    public function runAction($sAction, array $aGetParams = null);

}