#import <Foundation/Foundation.h>
#import "SWGRequest.h"
#import "SWGJobId.h"
#import "SWGApi.h"

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
*
* Licensed under the Apache License, Version 2.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
* http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*/


@interface SWGVrpApi: NSObject <SWGApi>

extern NSString* kSWGVrpApiErrorDomain;
extern NSInteger kSWGVrpApiMissingParamErrorCode;

+(instancetype) sharedAPI;

/// Solves vehicle routing problems
/// This endpoint for solving vehicle routing problems, i.e. traveling salesman or vehicle routing problems, and returns the solution. 
///
/// @param key your API key
/// @param body Request object that contains the problem to be solved
/// 
///  code:200 message:"A jobId you can use to retrieve your solution from server - see solution endpoint.",
///  code:400 message:"Error occurred when reading client request. Request is invalid.",
///  code:500 message:"Error occurred on server side."
///
/// @return SWGJobId*
-(NSNumber*) postVrpWithKey: (NSString*) key
    body: (SWGRequest*) body
    completionHandler: (void (^)(SWGJobId* output, NSError* error)) handler;



@end
