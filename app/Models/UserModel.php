<?php

namespace App\Models;

use App\Libraries\Mongo;
use MongoDB\Driver\Query;

class UserModel extends Mongo {
    private $table = 'user';

    public function getByAttrArr($filter, $sort = ['_id' => -1], $projection = [], $skip = 0, $limit = 10) {
        try {
            $options = [
                'projection' => $projection,
                'sort' => $sort,
                'skip' => $skip,
                'limit' => $limit
            ];
            $query = new Query($filter, $projection);
            $cursor = $this->connect()->executeQuery($this->db_name.'.'.$this->table, $query);

            if ($limit == 1) {
                foreach ($cursor as $item) {
                    $res = $item;
                }
                if(!empty($res)){
                    $res = array(
                        'error' => 0,
                        'data' => $res
                    );
                }else{
                    $res = array(
                        'error' => 0,
                        'data' => false
                    );
                }

            }else {
                $res = [
                    'error' => 0,
                    'data'  => $cursor->toArray()
                ];
            }
        }catch (\Exception $e) {
            $res = [
                'error' => 0,
                'msg'  => $e->getMessage(),
            ];
        }
        return $res;

    }

}