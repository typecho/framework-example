<?php

namespace Example\Action;

use TE\Mvc\Action\AbstractAction;

/**
 * Index  
 * 
 * @uses AbstractAction
 * @copyright Copyright (c) 2012 Typecho Team. (http://typecho.org)
 * @author Joyqi <magike.net@gmail.com> 
 * @license GNU General Public License 2.0
 */
class Index extends AbstractAction
{
    /**
     * word  
     * 
     * @var string
     * @access public
     */
    public $word;

    /**
     * 主执行程序
     * 
     * @access public
     * @return mixed
     */
    public function execute()
    {
        $this->word = 'Hello World';
        return array('template', 'index.php');
    }
}

