/* 
 * Route Optimization API
 *
 * Our Route Optimization API solves the so called vehicle routing problem fast. It calculates an optimal tour for a set of vehicles, services and constraints
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

package graphhopper

type VehicleType struct {

	// Unique identifier for the vehicle type
	TypeId string `json:"type_id,omitempty"`

	// Profile of vehicle type
	Profile string `json:"profile,omitempty"`

	// array of capacity dimensions
	Capacity []int32 `json:"capacity,omitempty"`

	// speed_factor of vehicle type
	SpeedFactor float64 `json:"speed_factor,omitempty"`

	// service time factor of vehicle type
	ServiceTimeFactor float64 `json:"service_time_factor,omitempty"`
}
