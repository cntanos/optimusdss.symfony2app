<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'messages' => 
  array (
    'Analyze' => 'Analyze',
    'Admin' => 'Administration',
    'Logged as' => 'Logged as',
    'Log out' => 'Log out',
    'List of buildings' => 'List of buildings',
    'Building description' => 'Building description',
    'Global indicators' => 'Global indicators',
    'Real time indicators' => 'Real time indicators',
    'Last action' => 'Last action',
    'no data' => 'no data',
    'Building use' => 'Building use',
    'Use building' => 'Use building',
    'Street' => 'Street',
    'City' => 'City',
    'Address' => 'Address',
    'Year of construction' => 'Year of construction',
    'Surface' => 'Building floor area',
    'Floors' => 'Floors',
    'Occupancy' => 'Occupancy',
    'Energy rating' => 'Energy rating',
    'Electricity consumption' => 'Electricity consumption',
    'Gas consumption' => 'Gas consumption',
    'Energy production from RES' => 'Energy production from RES',
    'Electricity energy cost' => 'Electricity energy cost',
    'Gas energy cost' => 'Gas energy cost',
    'Action Plans' => 'Action Plans',
    'Scheduling the on/off of the heating system' => 'Scheduling the on/off of the heating system',
    'Scheduling the PV maintenance' => 'Scheduling the PV maintenance',
    'Scheduling the sale/consumption of the electricity produced through PV system' => 'Scheduling the sale/consumption of the electricity produced through PV system',
    'Status' => 'Status',
    'No action required' => 'No action required',
    'Action required' => 'Action required',
    'Historical and Forecasted data' => 'Historical and Forecasted data',
    'Energy production' => 'Energy production',
    'Total consumption' => 'Total consumption',
    'Last forecast calculated' => 'Last forecast calculated',
    'Dates' => 'Dates',
    'View' => 'View',
    'Action Plan' => 'Action Plan',
    'Description' => 'Description',
    'Optimization of the boost time of the heating/cooling system taking into account the forecasting of the outdoor air temperature and the occupancy of the building.' => 'Optimization of the boost time of the heating/cooling system taking into account the forecasting of the outdoor air temperature and the occupancy of the building.',
    'Heating' => 'Heating',
    'Cooling' => 'Cooling',
    'Baseline' => 'Baseline',
    'Please confirm the action plan' => 'Please confirm the action plan',
    'Unknown' => 'Unknown',
    'Accepted' => 'Accepted',
    'Declined' => 'Declined',
    'Detection of the need for maintenance of the PV system and communication with the user with an alert prompting for appropriate maintenance actions; identification of abnormalities and possible problems can be facilitated.' => 'Detection of the need for maintenance of the PV system and communication with the user with an alert prompting for appropriate maintenance actions; identification of abnormalities and possible problems can be facilitated.',
    'Historical electricity produced through PV system' => 'Historical electricity produced through PV system',
    'Predicted electricity produced through PV system' => 'Predicted electricity produced through PV system',
    'Historical solar radiation' => 'Historical solar radiation',
    'Predicted solar radiation' => 'Predicted solar radiation',
    'show schedule (per hours)' => 'show schedule (per hours)',
    'Difference between</br> predicted and historical </br> PV Production(in KW/h)' => 'Difference between</br> predicted and historical </br> PV Production(in KW/h)',
    'Alarm status' => 'Alarm status',
    'Optimization of selling/self-consumption of electricity produced by a PV system considering different scenarios of energy market (green strategy, finance strategy, intermediate strategy, peak strategy, load factor strategy)' => 'Optimization of selling/self-consumption of electricity produced by a PV system considering different scenarios of energy market (green strategy, finance strategy, intermediate strategy, peak strategy, load factor strategy)',
    'Strategy selected' => 'Strategy selected',
    'UNDEFINED' => 'UNDEFINED',
    'GREEN' => 'GREEN',
    'FINANCE' => 'FINANCE',
    'PEAK' => 'PEAK',
    'Electricity produced through PV system' => 'Electricity produced through PV system',
    'Energy demand' => 'Energy demand',
    'Difference between energy demand and electricity produced' => 'Difference between energy demand and electricity produced',
    'Purchase energy price' => 'Purchase energy price',
    'Selling energy price' => 'Selling energy price',
    'Daily Energy Cost(Production in KW/h) ' => 'Daily Energy Cost(Production in KW/h)',
    'Schedule stretch 1' => 'Schedule stretch 1',
    'buy/auto' => 'buy/auto',
    'sell surplus' => 'sell surplus',
    'sell all' => 'sell all',
    'Total sold of produced' => 'Total sold of produced',
    'CO� emissions (TnCO2)' => 'CO� emissions (TnCO2)',
    'Total sold of produced (�) (week)' => 'Total sold of produced (�) (week)',
    'CO� emissions (TnCO2) (week) ' => 'CO� emissions (TnCO2) (week) ',
    'Activity stream' => 'Activity stream',
    'declines' => 'declines',
    'accepts' => 'accepts',
    'unknows' => 'unknows',
    'has carried out a new prediction for the next 7 days' => 'has carried out a new prediction for the next 7 days',
    ' has changed strategy to Green' => ' has changed strategy to Green',
    ' has changed strategy to Finance' => ' has changed strategy to Finance',
    ' has changed strategy to Intermediate' => ' has changed strategy to Intermediate',
    'on' => 'on',
    'Configuration' => 'Configuration',
    'delete' => 'delete',
    'edit' => 'edit',
    'Zones' => 'Zones',
    'Sensors' => 'Sensors',
    'ADD BUILDING' => 'ADD BUILDING',
    'Create Building' => 'Create Building',
    'Edit Building' => 'Edit Building',
    'SAVE ZONE' => 'SAVE ZONE',
    'ADD SENSOR' => 'ADD SENSOR',
    'Sensor data' => 'Sensor data',
    'Last data received' => 'Last data received',
    'Actions' => 'Actions',
    'Color' => 'Color',
    'Display' => 'Display',
    'Url service' => 'Url service',
    'Url' => 'Url',
    'Units' => 'Units',
    'predictionmodelparameters' => 'Prediction model parameters',
    'Create Sensor' => 'Create Sensor',
    'Edit Sensor' => 'Edit Sensor',
    'Actions Plans' => 'Actions Plans',
    'Name' => 'Name',
    'Enable' => 'Enable',
    'Mappings' => 'Mappings',
    'view mapping' => 'view mapping',
    'Edit Action Plan' => 'Edit Action Plan',
    'Add sensor' => 'Add sensor',
    'Delete' => 'Delete',
    'Edit' => 'Edit',
    'Select sensor' => 'Select sensor',
    'Edit Sensor Partition' => 'Edit Sensor Partition',
  ),
));


return $catalogue;
