<?php
/**
 *  Table.php
 *
 */

namespace TreasureData\API;

use TreasureData\Exception;
use TreasureData\API\Base;

/**
 *  TreasureData\API\Table
 *
 */
class Table extends Base
{
    const PATH = 'table';

    public function getList()
    {
        $path = sprintf('list/%s', $this->db_name);

        $result = $this->request($path);
        $json = json_decode($result);

        return $json;
    }
}
