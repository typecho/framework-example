<?php
/**
 * People.php
 *
 * @project framework-example
 * @author joyqi
 * @date 2013-05-22 17:14
 * @copyright 2013 SegmentFault Team
 */

namespace Example\Data;

use TE\Mvc\Data\AbstractData;

/**
 * Class People
 *
 * @package Example\Data
 */
class People extends AbstractData
{
    /**
     * getCreatedDate
     *
     * @param string $format
     * @return bool|string
     */
    public function getCreatedDate($format = 'Y年m月d日 H时i分')
    {
        // 可以直接用指针访问当前某一栏的值
        return date($format, $this->created);
    }
}
