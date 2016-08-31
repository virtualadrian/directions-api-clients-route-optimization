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

/*
 * SWGRelation.h
 * 
 * 
 */

#ifndef SWGRelation_H_
#define SWGRelation_H_

#include <QJsonObject>


#include <QList>
#include <QString>

#include "SWGObject.h"


namespace Swagger {

class SWGRelation: public SWGObject {
public:
    SWGRelation();
    SWGRelation(QString* json);
    virtual ~SWGRelation();
    void init();
    void cleanup();

    QString asJson ();
    QJsonObject* asJsonObject();
    void fromJsonObject(QJsonObject &json);
    SWGRelation* fromJson(QString &jsonString);

    QString* getType();
    void setType(QString* type);
QList<QString*>* getIds();
    void setIds(QList<QString*>* ids);
QString* getVehicleId();
    void setVehicleId(QString* vehicle_id);

private:
    QString* type;
QList<QString*>* ids;
QString* vehicle_id;
};

} /* namespace Swagger */

#endif /* SWGRelation_H_ */
