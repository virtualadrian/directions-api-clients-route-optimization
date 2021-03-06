/**
 * Route Optimization API
 * Our Route Optimization API solves the so called vehicle routing problem fast. It calculates an optimal tour for a set of vehicles, services and constraints
 *
 * OpenAPI spec version: 1.0
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */

package io.swagger.client.model


case class Service (
  /* Unique identifier of service */
  id: String,
  /* type of service */
  _type: String,
  /* priority of service, i.e. 1 = high, 2 = normal, 3 = low. default is 2. */
  priority: Integer,
  /* name of service */
  name: String,
  address: Address,
  /* duration of service, i.e. time in ms the corresponding activity takes */
  duration: Long,
  /* array of time windows. currently, only a single time window is allowed */
  timeWindows: List[TimeWindow],
  /* array of capacity dimensions */
  size: List[Integer],
  /* array of required skills */
  requiredSkills: List[String],
  /* array of allowed vehicle ids */
  allowedVehicles: List[String]
)
