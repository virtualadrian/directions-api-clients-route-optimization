#import <Foundation/Foundation.h>
#import "SWGObject.h"

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


#import "SWGAddress.h"
#import "SWGBreak.h"


@protocol SWGVehicle
@end

@interface SWGVehicle : SWGObject

/* Unique identifier of vehicle [optional]
 */
@property(nonatomic) NSString* vehicleId;
/* Unique identifier referring to the available vehicle types [optional]
 */
@property(nonatomic) NSString* typeId;

@property(nonatomic) SWGAddress* startAddress;

@property(nonatomic) SWGAddress* endAddress;

@property(nonatomic) SWGBreak* _break;
/* Indicates whether vehicle should return to start address or not. If not, it can end at any service activity. [optional]
 */
@property(nonatomic) NSNumber* returnToDepot;
/* earliest start of vehicle at its start location [optional]
 */
@property(nonatomic) NSNumber* earliestStart;
/* latest end of vehicle at its end location [optional]
 */
@property(nonatomic) NSNumber* latestEnd;
/* array of skills [optional]
 */
@property(nonatomic) NSArray<NSString*>* skills;

@end
