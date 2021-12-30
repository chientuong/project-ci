<?php
namespace App\Libraries;

use function MongoDB\BSON\{toJSON, fromPHP};
use MongoDB\BSON\{Regex, UTCDatetime, Timestamp, ObjectID, Javascript};
use MongoDB\Driver\{Query, Manager, Command, BulkWrite, Cursor, WriteConcern, WriteResult, ReadPreference, ReadConcern};
use MongoDB\Driver\Exception\{Exception, ConnectionException, InvalidArgumentException};
class Mongo {
    private $mainDB = null;
    public $db_name = 'db_project';


    /**
     * @return MongoDB
     */
    function connect() {

        if (!$this->mainDB) {
            $mongo =  new Manager('mongodb://127.0.0.1:27017/'.$this->db_name);
            $this->mainDB = $mongo;
        }
        return $this->mainDB;
    }

}
