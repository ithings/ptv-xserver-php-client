<?php
/**
 * Clustering
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * xServer
 *
 * PTV xServer 2.26.0 - 2.26 API document
 *
 * OpenAPI spec version: 2.26
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Clustering Class Doc Comment
 *
 * @category Class
 * @description Contains parameter values for the basic clustering use cases. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.clusterplanningprofile.Clustering
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Clustering implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Clustering';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'compactness_level' => '\Swagger\Client\Model\CompactnessLevel',
'approximation_tolerance' => '\Swagger\Client\Model\ApproximationTolerance',
'perform_preprocessing_step' => 'bool',
'boost_activity_importance' => 'bool',
'maximum_number_of_iterations' => '\Swagger\Client\Model\PositiveInteger',
'minimum_relative_improvement' => '\Swagger\Client\Model\MinimumRelativeImprovement',
'maximum_number_of_starts' => '\Swagger\Client\Model\PositiveInteger',
'maximum_number_of_samplings' => '\Swagger\Client\Model\PositiveInteger',
'number_of_nearest_neighbors' => '\Swagger\Client\Model\NumberOfNearestNeighbors',
'reassignment_method' => '\Swagger\Client\Model\ReassignmentMethod'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'compactness_level' => null,
'approximation_tolerance' => null,
'perform_preprocessing_step' => null,
'boost_activity_importance' => null,
'maximum_number_of_iterations' => null,
'minimum_relative_improvement' => null,
'maximum_number_of_starts' => null,
'maximum_number_of_samplings' => null,
'number_of_nearest_neighbors' => null,
'reassignment_method' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'compactness_level' => 'compactnessLevel',
'approximation_tolerance' => 'approximationTolerance',
'perform_preprocessing_step' => 'performPreprocessingStep',
'boost_activity_importance' => 'boostActivityImportance',
'maximum_number_of_iterations' => 'maximumNumberOfIterations',
'minimum_relative_improvement' => 'minimumRelativeImprovement',
'maximum_number_of_starts' => 'maximumNumberOfStarts',
'maximum_number_of_samplings' => 'maximumNumberOfSamplings',
'number_of_nearest_neighbors' => 'numberOfNearestNeighbors',
'reassignment_method' => 'reassignmentMethod'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'compactness_level' => 'setCompactnessLevel',
'approximation_tolerance' => 'setApproximationTolerance',
'perform_preprocessing_step' => 'setPerformPreprocessingStep',
'boost_activity_importance' => 'setBoostActivityImportance',
'maximum_number_of_iterations' => 'setMaximumNumberOfIterations',
'minimum_relative_improvement' => 'setMinimumRelativeImprovement',
'maximum_number_of_starts' => 'setMaximumNumberOfStarts',
'maximum_number_of_samplings' => 'setMaximumNumberOfSamplings',
'number_of_nearest_neighbors' => 'setNumberOfNearestNeighbors',
'reassignment_method' => 'setReassignmentMethod'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'compactness_level' => 'getCompactnessLevel',
'approximation_tolerance' => 'getApproximationTolerance',
'perform_preprocessing_step' => 'getPerformPreprocessingStep',
'boost_activity_importance' => 'getBoostActivityImportance',
'maximum_number_of_iterations' => 'getMaximumNumberOfIterations',
'minimum_relative_improvement' => 'getMinimumRelativeImprovement',
'maximum_number_of_starts' => 'getMaximumNumberOfStarts',
'maximum_number_of_samplings' => 'getMaximumNumberOfSamplings',
'number_of_nearest_neighbors' => 'getNumberOfNearestNeighbors',
'reassignment_method' => 'getReassignmentMethod'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['compactness_level'] = isset($data['compactness_level']) ? $data['compactness_level'] : null;
        $this->container['approximation_tolerance'] = isset($data['approximation_tolerance']) ? $data['approximation_tolerance'] : null;
        $this->container['perform_preprocessing_step'] = isset($data['perform_preprocessing_step']) ? $data['perform_preprocessing_step'] : null;
        $this->container['boost_activity_importance'] = isset($data['boost_activity_importance']) ? $data['boost_activity_importance'] : null;
        $this->container['maximum_number_of_iterations'] = isset($data['maximum_number_of_iterations']) ? $data['maximum_number_of_iterations'] : null;
        $this->container['minimum_relative_improvement'] = isset($data['minimum_relative_improvement']) ? $data['minimum_relative_improvement'] : null;
        $this->container['maximum_number_of_starts'] = isset($data['maximum_number_of_starts']) ? $data['maximum_number_of_starts'] : null;
        $this->container['maximum_number_of_samplings'] = isset($data['maximum_number_of_samplings']) ? $data['maximum_number_of_samplings'] : null;
        $this->container['number_of_nearest_neighbors'] = isset($data['number_of_nearest_neighbors']) ? $data['number_of_nearest_neighbors'] : null;
        $this->container['reassignment_method'] = isset($data['reassignment_method']) ? $data['reassignment_method'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets compactness_level
     *
     * @return \Swagger\Client\Model\CompactnessLevel
     */
    public function getCompactnessLevel()
    {
        return $this->container['compactness_level'];
    }

    /**
     * Sets compactness_level
     *
     * @param \Swagger\Client\Model\CompactnessLevel $compactness_level compactness_level
     *
     * @return $this
     */
    public function setCompactnessLevel($compactness_level)
    {
        $this->container['compactness_level'] = $compactness_level;

        return $this;
    }

    /**
     * Gets approximation_tolerance
     *
     * @return \Swagger\Client\Model\ApproximationTolerance
     */
    public function getApproximationTolerance()
    {
        return $this->container['approximation_tolerance'];
    }

    /**
     * Sets approximation_tolerance
     *
     * @param \Swagger\Client\Model\ApproximationTolerance $approximation_tolerance approximation_tolerance
     *
     * @return $this
     */
    public function setApproximationTolerance($approximation_tolerance)
    {
        $this->container['approximation_tolerance'] = $approximation_tolerance;

        return $this;
    }

    /**
     * Gets perform_preprocessing_step
     *
     * @return bool
     */
    public function getPerformPreprocessingStep()
    {
        return $this->container['perform_preprocessing_step'];
    }

    /**
     * Sets perform_preprocessing_step
     *
     * @param bool $perform_preprocessing_step Perform preprocessing to reduce the complexity of the optimization problem. For example by excluding forbidden or redundant combinations. For large problems the preprocessing itself can be very time-consuming.
     *
     * @return $this
     */
    public function setPerformPreprocessingStep($perform_preprocessing_step)
    {
        $this->container['perform_preprocessing_step'] = $perform_preprocessing_step;

        return $this;
    }

    /**
     * Gets boost_activity_importance
     *
     * @return bool
     */
    public function getBoostActivityImportance()
    {
        return $this->container['boost_activity_importance'];
    }

    /**
     * Sets boost_activity_importance
     *
     * @param bool $boost_activity_importance Setting this parameter will privilege important locations with high activity when determining territory centers.
     *
     * @return $this
     */
    public function setBoostActivityImportance($boost_activity_importance)
    {
        $this->container['boost_activity_importance'] = $boost_activity_importance;

        return $this;
    }

    /**
     * Gets maximum_number_of_iterations
     *
     * @return \Swagger\Client\Model\PositiveInteger
     */
    public function getMaximumNumberOfIterations()
    {
        return $this->container['maximum_number_of_iterations'];
    }

    /**
     * Sets maximum_number_of_iterations
     *
     * @param \Swagger\Client\Model\PositiveInteger $maximum_number_of_iterations maximum_number_of_iterations
     *
     * @return $this
     */
    public function setMaximumNumberOfIterations($maximum_number_of_iterations)
    {
        $this->container['maximum_number_of_iterations'] = $maximum_number_of_iterations;

        return $this;
    }

    /**
     * Gets minimum_relative_improvement
     *
     * @return \Swagger\Client\Model\MinimumRelativeImprovement
     */
    public function getMinimumRelativeImprovement()
    {
        return $this->container['minimum_relative_improvement'];
    }

    /**
     * Sets minimum_relative_improvement
     *
     * @param \Swagger\Client\Model\MinimumRelativeImprovement $minimum_relative_improvement minimum_relative_improvement
     *
     * @return $this
     */
    public function setMinimumRelativeImprovement($minimum_relative_improvement)
    {
        $this->container['minimum_relative_improvement'] = $minimum_relative_improvement;

        return $this;
    }

    /**
     * Gets maximum_number_of_starts
     *
     * @return \Swagger\Client\Model\PositiveInteger
     */
    public function getMaximumNumberOfStarts()
    {
        return $this->container['maximum_number_of_starts'];
    }

    /**
     * Sets maximum_number_of_starts
     *
     * @param \Swagger\Client\Model\PositiveInteger $maximum_number_of_starts maximum_number_of_starts
     *
     * @return $this
     */
    public function setMaximumNumberOfStarts($maximum_number_of_starts)
    {
        $this->container['maximum_number_of_starts'] = $maximum_number_of_starts;

        return $this;
    }

    /**
     * Gets maximum_number_of_samplings
     *
     * @return \Swagger\Client\Model\PositiveInteger
     */
    public function getMaximumNumberOfSamplings()
    {
        return $this->container['maximum_number_of_samplings'];
    }

    /**
     * Sets maximum_number_of_samplings
     *
     * @param \Swagger\Client\Model\PositiveInteger $maximum_number_of_samplings maximum_number_of_samplings
     *
     * @return $this
     */
    public function setMaximumNumberOfSamplings($maximum_number_of_samplings)
    {
        $this->container['maximum_number_of_samplings'] = $maximum_number_of_samplings;

        return $this;
    }

    /**
     * Gets number_of_nearest_neighbors
     *
     * @return \Swagger\Client\Model\NumberOfNearestNeighbors
     */
    public function getNumberOfNearestNeighbors()
    {
        return $this->container['number_of_nearest_neighbors'];
    }

    /**
     * Sets number_of_nearest_neighbors
     *
     * @param \Swagger\Client\Model\NumberOfNearestNeighbors $number_of_nearest_neighbors number_of_nearest_neighbors
     *
     * @return $this
     */
    public function setNumberOfNearestNeighbors($number_of_nearest_neighbors)
    {
        $this->container['number_of_nearest_neighbors'] = $number_of_nearest_neighbors;

        return $this;
    }

    /**
     * Gets reassignment_method
     *
     * @return \Swagger\Client\Model\ReassignmentMethod
     */
    public function getReassignmentMethod()
    {
        return $this->container['reassignment_method'];
    }

    /**
     * Sets reassignment_method
     *
     * @param \Swagger\Client\Model\ReassignmentMethod $reassignment_method reassignment_method
     *
     * @return $this
     */
    public function setReassignmentMethod($reassignment_method)
    {
        $this->container['reassignment_method'] = $reassignment_method;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
