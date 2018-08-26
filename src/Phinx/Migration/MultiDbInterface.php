<?php
/**
 * Created by PhpStorm.
 * User: jan
 * Date: 25/08/18
 * Time: 20:57
 */

namespace Phinx\Migration;


interface MultiDbInterface
{
    /**
     * This function shall return the label, which will be used later
     * for retrival of the database list, eg:
     * - `all` - will get the core/main database along with the all tenants databases
     * - `tenants` - will get the list of the tenants databases only
     *
     * @see getDbList()
     * @return string Label of the set of databases to be migrated
     */
    public function getDbGroup();

    /**
     * Return the list of the databases based on the passed $group
     *
     * @see getDbGroup()
     *
     * @param $group
     *
     * @return array List of the databases to run migrations on
     */
    public function getDbList($group);

}