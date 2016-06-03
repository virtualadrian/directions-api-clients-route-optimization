package WWW::SwaggerClient::Object::Shipment;

require 5.6.0;
use strict;
use warnings;
use utf8;
use JSON qw(decode_json);
use Data::Dumper;
use Module::Runtime qw(use_module);
use Log::Any qw($log);
use Date::Parse;
use DateTime;

use base "WWW::SwaggerClient::Object::BaseObject";

#
#
#
#NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
#

my $swagger_types = {
    'id' => 'string',
    'name' => 'string',
    'pickup' => 'Stop',
    'delivery' => 'Stop',
    'size' => 'ARRAY[int]',
    'required_skills' => 'ARRAY[string]',
    'allowed_vehicles' => 'ARRAY[string]'
};

my $attribute_map = {
    'id' => 'id',
    'name' => 'name',
    'pickup' => 'pickup',
    'delivery' => 'delivery',
    'size' => 'size',
    'required_skills' => 'required_skills',
    'allowed_vehicles' => 'allowed_vehicles'
};

# new object
sub new { 
    my ($class, %args) = @_; 
    my $self = { 
        #Unique identifier of service
        'id' => $args{'id'}, 
        #name of shipment
        'name' => $args{'name'}, 
        #
        'pickup' => $args{'pickup'}, 
        #
        'delivery' => $args{'delivery'}, 
        #array of capacity dimensions
        'size' => $args{'size'}, 
        #array of required skills
        'required_skills' => $args{'required_skills'}, 
        #array of allowed vehicle ids
        'allowed_vehicles' => $args{'allowed_vehicles'}
    }; 

    return bless $self, $class; 
}  

# get swagger type of the attribute
sub get_swagger_types {
    return $swagger_types;
}

# get attribute mappping
sub get_attribute_map {
    return $attribute_map;
}

1;