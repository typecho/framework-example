<?php
/**
 * People.php
 *
 * @project framework-example
 * @author joyqi
 * @date 2013-05-22 17:20
 * @copyright 2013 SegmentFault Team
 */

namespace Example\Service\Db;

use TE\Mvc\Service\Db\AbstractTable;

/**
 * Class People
 *
 * @package Example\Service\Db
 */
class People extends AbstractTable
{
    /**
     * 这是个只做演示的初始化
     * 在实际生产环境中你可以根据类名得到表名
     *
     */
    public function init()
    {
        $this->setTable('people');
        $this->setPrimaryKey('id');
    }

    /**
     * listNewest
     *
     * @param $page
     * @param $pageSize
     * @return array
     */
    public function listNewest($page, $pageSize)
    {
        return $this->listBy(array(), $page, $pageSize, array('created' => 'DESC'));

        // 更复杂的查询可以直接用serviceDb构建sql, 比如
        return $this->serviceDb->select('people')
            ->where('name = ?', 'joyqi')
            ->page(1, 20)
            ->fetchAll();
    }

    /**
     * getByName
     *
     * @param $name
     * @return mixed
     */
    public function getByName($name)
    {
        return $this->findBy('name', $name);
    }
}
