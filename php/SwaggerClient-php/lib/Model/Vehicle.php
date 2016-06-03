<?php
/**
 * Vehicle
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * Vehicle Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Vehicle implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'vehicle_id' => 'string',
        'type_id' => 'string',
        'start_address' => '\Swagger\Client\Model\Address',
        'end_address' => '\Swagger\Client\Model\Address',
        'break' => '\Swagger\Client\Model\Break',
        'return_to_depot' => 'bool',
        'earliest_start' => 'int',
        'latest_end' => 'int',
        'skills' => 'string[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'vehicle_id' => 'vehicle_id',
        'type_id' => 'type_id',
        'start_address' => 'start_address',
        'end_address' => 'end_address',
        'break' => 'break',
        'return_to_depot' => 'return_to_depot',
        'earliest_start' => 'earliest_start',
        'latest_end' => 'latest_end',
        'skills' => 'skills'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'vehicle_id' => 'setVehicleId',
        'type_id' => 'setTypeId',
        'start_address' => 'setStartAddress',
        'end_address' => 'setEndAddress',
        'break' => 'setBreak',
        'return_to_depot' => 'setReturnToDepot',
        'earliest_start' => 'setEarliestStart',
        'latest_end' => 'setLatestEnd',
        'skills' => 'setSkills'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'vehicle_id' => 'getVehicleId',
        'type_id' => 'getTypeId',
        'start_address' => 'getStartAddress',
        'end_address' => 'getEndAddress',
        'break' => 'getBreak',
        'return_to_depot' => 'getReturnToDepot',
        'earliest_start' => 'getEarliestStart',
        'latest_end' => 'getLatestEnd',
        'skills' => 'getSkills'
    );
  
    
    /**
      * $vehicle_id Unique identifier of vehicle
      * @var string
      */
    protected $vehicle_id;
    
    /**
      * $type_id Unique identifier referring to the available vehicle types
      * @var string
      */
    protected $type_id;
    
    /**
      * $start_address 
      * @var \Swagger\Client\Model\Address
      */
    protected $start_address;
    
    /**
      * $end_address 
      * @var \Swagger\Client\Model\Address
      */
    protected $end_address;
    
    /**
      * $break 
      * @var \Swagger\Client\Model\Break
      */
    protected $break;
    
    /**
      * $return_to_depot Indicates whether vehicle should return to start address or not. If not, it can end at any service activity.
      * @var bool
      */
    protected $return_to_depot;
    
    /**
      * $earliest_start earliest start of vehicle at its start location
      * @var int
      */
    protected $earliest_start;
    
    /**
      * $latest_end latest end of vehicle at its end location
      * @var int
      */
    protected $latest_end;
    
    /**
      * $skills array of skills
      * @var string[]
      */
    protected $skills;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->vehicle_id = $data["vehicle_id"];
            $this->type_id = $data["type_id"];
            $this->start_address = $data["start_address"];
            $this->end_address = $data["end_address"];
            $this->break = $data["break"];
            $this->return_to_depot = $data["return_to_depot"];
            $this->earliest_start = $data["earliest_start"];
            $this->latest_end = $data["latest_end"];
            $this->skills = $data["skills"];
        }
    }
    
    /**
     * Gets vehicle_id
     * @return string
     */
    public function getVehicleId()
    {
        return $this->vehicle_id;
    }
  
    /**
     * Sets vehicle_id
     * @param string $vehicle_id Unique identifier of vehicle
     * @return $this
     */
    public function setVehicleId($vehicle_id)
    {
        
        $this->vehicle_id = $vehicle_id;
        return $this;
    }
    
    /**
     * Gets type_id
     * @return string
     */
    public function getTypeId()
    {
        return $this->type_id;
    }
  
    /**
     * Sets type_id
     * @param string $type_id Unique identifier referring to the available vehicle types
     * @return $this
     */
    public function setTypeId($type_id)
    {
        
        $this->type_id = $type_id;
        return $this;
    }
    
    /**
     * Gets start_address
     * @return \Swagger\Client\Model\Address
     */
    public function getStartAddress()
    {
        return $this->start_address;
    }
  
    /**
     * Sets start_address
     * @param \Swagger\Client\Model\Address $start_address 
     * @return $this
     */
    public function setStartAddress($start_address)
    {
        
        $this->start_address = $start_address;
        return $this;
    }
    
    /**
     * Gets end_address
     * @return \Swagger\Client\Model\Address
     */
    public function getEndAddress()
    {
        return $this->end_address;
    }
  
    /**
     * Sets end_address
     * @param \Swagger\Client\Model\Address $end_address 
     * @return $this
     */
    public function setEndAddress($end_address)
    {
        
        $this->end_address = $end_address;
        return $this;
    }
    
    /**
     * Gets break
     * @return \Swagger\Client\Model\Break
     */
    public function getBreak()
    {
        return $this->break;
    }
  
    /**
     * Sets break
     * @param \Swagger\Client\Model\Break $break 
     * @return $this
     */
    public function setBreak($break)
    {
        
        $this->break = $break;
        return $this;
    }
    
    /**
     * Gets return_to_depot
     * @return bool
     */
    public function getReturnToDepot()
    {
        return $this->return_to_depot;
    }
  
    /**
     * Sets return_to_depot
     * @param bool $return_to_depot Indicates whether vehicle should return to start address or not. If not, it can end at any service activity.
     * @return $this
     */
    public function setReturnToDepot($return_to_depot)
    {
        
        $this->return_to_depot = $return_to_depot;
        return $this;
    }
    
    /**
     * Gets earliest_start
     * @return int
     */
    public function getEarliestStart()
    {
        return $this->earliest_start;
    }
  
    /**
     * Sets earliest_start
     * @param int $earliest_start earliest start of vehicle at its start location
     * @return $this
     */
    public function setEarliestStart($earliest_start)
    {
        
        $this->earliest_start = $earliest_start;
        return $this;
    }
    
    /**
     * Gets latest_end
     * @return int
     */
    public function getLatestEnd()
    {
        return $this->latest_end;
    }
  
    /**
     * Sets latest_end
     * @param int $latest_end latest end of vehicle at its end location
     * @return $this
     */
    public function setLatestEnd($latest_end)
    {
        
        $this->latest_end = $latest_end;
        return $this;
    }
    
    /**
     * Gets skills
     * @return string[]
     */
    public function getSkills()
    {
        return $this->skills;
    }
  
    /**
     * Sets skills
     * @param string[] $skills array of skills
     * @return $this
     */
    public function setSkills($skills)
    {
        
        $this->skills = $skills;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}