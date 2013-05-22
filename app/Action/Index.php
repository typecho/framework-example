<?php

namespace Example\Action;

use Example\Data\People;
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
     * @var \Example\Service\Db\People
     */
    private $peopleService;

    /**
     * word  
     * 
     * @var string
     * @access public
     */
    public $word;

    /**
     * @var \Example\Data\People
     */
    public $peoples;

    /**
     * @var \Example\Data\People
     */
    public $master;

    /**
     * 主执行程序
     * 
     * @access public
     * @return mixed
     */
    public function execute()
    {
        // 只要你把Action的属性设置为public状态，它就会被注入到模板中，你可以直接在模板中使用它们
        $this->word = 'Hello World';
        $this->peoples = new People($this->peopleService->listNewest(1, 20));
        $this->master = new People($this->peopleService->getByName('joyqi'));   // 不论你取出一行还是多行数据，都可以塞到Data对象中进行处理

        return array('template', 'index.php');
    }
}

