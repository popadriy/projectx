<?php

/**
 * Index page controller
 *
 * PHP version 5
 *
 * @category   tutorial
 * @author     Sauciuc Dragos George <dragos.sauciuc@qinsoft.ro>
 * @since      File available since Release 1.0.1
 */

/**
 * Controller class
 *
 * @category   tutorial
 * @author     Sauciuc Dragos George <dragos.sauciuc@qinsoft.ro>
 * @since      File available since Release 1.0.1
 */
class AnalizaController extends Zend_Controller_Action
{

    /**
     * Init()
     *
     * @return none
     */
    public function init()
    {
        // Called for every action.
        $this->_helper->layout->setLayout('analiza');
    }


    /**
     * Default Action
     *
     * @return null
     */
    public function indexAction()
    {
        $analiza = new Application_Model_AnalizaMapper();
        $this->view->entries = $analiza->fetchAll();
    }


    /**
     * Sign Action
     *
     * @return null
     */
    public function signAction()
    {
        $request = $this->getRequest();
        $form    = new Application_Form_Analiza();

        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                $comment = new Application_Model_Analiza($form->getValues());
                $mapper  = new Application_Model_AnalizaMapper();
                $mapper->save($comment);
                return $this->_helper->redirector('index');
            }
        }

        $this->view->form = $form;
    }
}