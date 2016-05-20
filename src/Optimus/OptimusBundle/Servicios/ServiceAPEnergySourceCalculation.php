<?php

namespace Optimus\OptimusBundle\Servicios;

use Doctrine\ORM\EntityManager;

use Optimus\OptimusBundle\Entity\APCalculation;
use Optimus\OptimusBundle\Entity\APFlowsOutput;
use Optimus\OptimusBundle\Entity\APFlowsOutputDay;
use Optimus\OptimusBundle\Entity\Prediction;
use Optimus\OptimusBundle\Entity\RegisterPredictions;
use Optimus\OptimusBundle\Servicios\ServiceOntologia;

class ServiceAPEnergySourceCalculation
{
	// Members ------------------------------------------------------------------------------------
	
	// Static members:
    protected $em;
	protected $ontologia;
	
	private static $sensor_1_airtemperature_name = "Air temperature (forecast) (C)";	
	private static $sensor_2_relativehumidity_name = "Relative humidity (forecast) (%)";	
	private static $sensor_3_airpressure_name = "Air pressure (forecast) (mbar)";	
	private static $sensor_4_solarradiation_name = "Solar radiation (forecast) (W/m2)";	
	private static $sensor_5_energyproduction_name = "Energy production (Kwh)";	
	private static $sensor_6_powerexchangednetwork_name = "Electrical power exchanged with the external network (Kwh)";	
	private static $sensor_7_powerexchangedfiamm_name = "Electrical power exchanged by the FIAMM SoNick storage system (Kwh)";	
	private static $sensor_8_electricaldualmodemicroturbine_name = "Electrical power generated by the dual mode Capstone microturbine (Kwh)";	
	private static $sensor_9_electricalgridmicroturbine_name = "Electrical power generated by the grid connected Capstone microturbine (Kwh)";	
	private static $sensor_10_thermaldualmodemicroturbine_name = "Thermal power delivered by the dual mode Capstone microturbine (Kwh)";	
	private static $sensor_11_thermalgridmicroturbine_name = "Thermal power delivered by the the grid connected Capstone microturbine (Kwh)";	
	private static $sensor_12_thermalboilers_name = "Thermal power delivered by the boilers (Kwh)";
	
	public function getAirtemperatureName(){return self::$sensor_1_airtemperature_name;}
	public function getRelativehumidityName(){return self::$sensor_2_relativehumidity_name;}
	public function getAirpressureName(){return self::$sensor_3_airpressure_name;}
	public function getSolarradiationName(){return self::$sensor_4_solarradiation_name;}
	public function getEnergyproductionName(){return self::$sensor_5_energyproduction_name;}
	public function getPowerexchangednetworkName(){return self::$sensor_6_powerexchangednetwork_name;}
	public function getPowerexchangedfiammName(){return self::$sensor_7_powerexchangedfiamm_name;}
	public function getElectricaldualmodemicroturbineName(){return self::$sensor_8_electricaldualmodemicroturbine_name;}
	public function getElectricalgridmicroturbineName(){return self::$sensor_9_electricalgridmicroturbine_name;}
	public function getThermaldualmodemicroturbineName(){return self::$sensor_10_thermaldualmodemicroturbine_name;}
	public function getThermalgridmicroturbineName(){return self::$sensor_11_thermalgridmicroturbine_name;}
	public function getThermalboilersName(){return self::$sensor_12_thermalboilers_name;}

	// variable names:	
	private static $datetime_name = "datetime";
	private static $date_name = "date";
	private static $load_name = "load";
	private static $grid_name = "grid";
	private static $res_name = "res";
    private static $shaving_name = "finalsugs"; //"shaving";  IS THAT CORRECT????
	private static $load_original_name = "load_original";
	private static $grid_original_name = "grid_original";
	private static $storage_name = "storage";
	private static $ThA_name = "ThA";
	private static $ThB_name = "ThB";
	private static $Aon_name = "Aon";
	private static $Bon_name = "Bon";
	
	protected $invokePredictData; 
	protected $events; 

	// Constructors -------------------------------------------------------------------------------
	
    public function __construct(EntityManager $em,
								ServiceOntologia $ontologia,
								ServicePredictDataInvoke $invokePredictData,
								ServiceEvents $events)
    {       
		$this->em=$em;
		$this->ontologia=$ontologia;
		$this->invokePredictData=$invokePredictData;
		$this->events=$events;
    }	

	public function insertNewCalculation($aoRelSensorsActionPlan, $from,  $calculation, $idBuilding, $ip, $user)
	{
		
		$actionPlan = $aoRelSensorsActionPlan['actionPlan'];
		//$start=\DateTime::createFromFormat('Y-m-d H:i:s', $from)->modify(" -1441 hour")->format("Y-m-d H:i:s");
		$start=\DateTime::createFromFormat('Y-m-d H:i:s', $from)->modify(" -1 hour")->format("Y-m-d H:i:s");
		$dateHistorical=\DateTime::createFromFormat('Y-m-d H:i:s', $from)->modify(" -673 hour")->format("Y-m-d H:i:s");
		
		// 1.Init data structure:	
		$from = $this->getDateString($from, 0);			
		$sCurrentDatetime = $from;
		$aValues=array("historical" => null, "predicted" => null, "hour" => null);
		$window = 1441;
		$horizon = 1441;
		$nDays = 7;
		
		// We are getting the sensors ID for sending them to the rapidminer service.
		$airtemperature_sensor = "";
		$relativehumidity_sensor = "";
		$airpressure_sensor = "";
		$solarradiation_sensor = "";
		$energyproduction_sensor = "";
		$powerexchangednetwork_sensor = "";
		$powerexchangedfiamm_sensor = "";
		$electricaldualmodemicroturbine_sensor = "";
		$electricalgridmicroturbine_sensor = "";
		$thermaldualmodemicroturbine_sensor = "";
		$thermalgridmicroturbine_sensor = "";
		$thermalboilers_sensor = "";
		
		foreach($aoRelSensorsActionPlan['sensors'] as $sensors_partition)
        {
			foreach($sensors_partition as $apsensor){	
				
				switch ($apsensor->getName()){
					case self::$sensor_1_airtemperature_name:
						$airtemperature_sensor = $apsensor->getFkSensor()->getId();
						break;
					case self::$sensor_2_relativehumidity_name:
						$relativehumidity_sensor = $apsensor->getFkSensor()->getId();
						break;
					case self::$sensor_3_airpressure_name:
						$airpressure_sensor = $apsensor->getFkSensor()->getId();
						break;
					case self::$sensor_4_solarradiation_name:
						$solarradiation_sensor = $apsensor->getFkSensor()->getId();
						break;
					case self::$sensor_5_energyproduction_name:
						$energyproduction_sensor = $apsensor->getFkSensor()->getId();
						break;
					case self::$sensor_6_powerexchangednetwork_name:
						$powerexchangednetwork_sensor = $apsensor->getFkSensor()->getId();
						break;
					case self::$sensor_7_powerexchangedfiamm_name:
						$powerexchangedfiamm_sensor = $apsensor->getFkSensor()->getId();
						break;
					case self::$sensor_8_electricaldualmodemicroturbine_name:
						$electricaldualmodemicroturbine_sensor = $apsensor->getFkSensor()->getId();
						break;
					case self::$sensor_9_electricalgridmicroturbine_name:
						$electricalgridmicroturbine_sensor = $apsensor->getFkSensor()->getId();
						break;
					case self::$sensor_10_thermaldualmodemicroturbine_name:
						$thermaldualmodemicroturbine_sensor = $apsensor->getFkSensor()->getId();
						break;
					case self::$sensor_11_thermalgridmicroturbine_name:
						$thermalgridmicroturbine_sensor = $apsensor->getFkSensor()->getId();
						break;
					case self::$sensor_12_thermalboilers_name:
						$thermalboilers_sensor = $apsensor->getFkSensor()->getId();
						break;
				}
			}
			$sensors = $airtemperature_sensor."_".$relativehumidity_sensor."_".$airpressure_sensor."_".$solarradiation_sensor."_".$energyproduction_sensor."_".$powerexchangednetwork_sensor."_".$powerexchangedfiamm_sensor."_".$electricaldualmodemicroturbine_sensor."_".$electricalgridmicroturbine_sensor."_".$thermaldualmodemicroturbine_sensor."_".$thermalgridmicroturbine_sensor."_".$thermalboilers_sensor;
			$sensors = str_replace("__", "", $sensors);
		}
		
		$building=$this->em->getRepository('OptimusOptimusBundle:Building')->find($idBuilding);
		switch ($building->getCity())
		{
			case "Savona":
				switch ($building->getName())
				{	
					case "Campus":
						$url = "http://optimusdss.epu.ntua.gr:8080/RAWS/process/Savona/ActionPlan_EnergySource_R";
						break;
					default:
						$url = "http://optimusdss.epu.ntua.gr:8080/RAWS/process/Savona/ActionPlan_EnergySource_R";
				}
				break;
		}
		
		$startR = substr_replace($start,"T",10,1);
		$startR = $startR."Z";	
		$dateHistorical = substr_replace($dateHistorical,"T",10,1);
		$dateHistorical = $dateHistorical."Z";		
		
		$prevXml = $this->PredictData($url, $startR, $dateHistorical, $window, $horizon, $sensors);

		libxml_use_internal_errors(true);
		$xml = simplexml_load_string($prevXml);
		
		if($xml!==false){
			$aValues = $this->readXML_Maintenance($xml);
		} else {
			echo "Error invoking service\n\n </br></br>";
		}
		
		$iHourStart = 0;
		$lastCalculations = $this->em->getRepository('OptimusOptimusBundle:APCalculation')->findLastCalculationWithESOutput($actionPlan->getId());
		if(count($lastCalculations) > 0){
			$lastCalculationID = $lastCalculations[0]->getId();
			$lastESOutputHour = $this->em->getRepository('OptimusOptimusBundle:APFlowsOutput')->findLastOutputByCalculation($lastCalculationID)[0]->getHour_timestamp();
			$startingHour = $lastESOutputHour->modify(" + 1 hour")->format("Y-m-d H:i:s");
			
			$t1 = StrToTime ( $from );
			$t2 = StrToTime ( $startingHour );
			$diff = $t2 - $t1;
			$iHourStart = $diff / ( 60 * 60 ) ;
		}
		if($iHourStart<0){
			$iHourStart = 0;
		}
		
		//echo 'start: '.$start;
		//echo 'startingHour: '.$startingHour;
		//echo 'Calc: '.$lastCalculationID;
		//echo 'Start: '.$iHourStart;
	    //echo 'Count: '.count($aValues['peak']);
	    // 3.Insert values on DB (APFlowsOutput): -> for the previous week
		for($iHour=$iHourStart; $iHour<count($aValues['peak']); $iHour++)
		{
			$value = $aValues['peak'][$iHour];;
			$output = new APFlowsOutput();
			$output->setFkApCalculation($calculation);	
			
			$value[self::$datetime_name] = str_replace("T"," ",$value[self::$datetime_name]);
			$value[self::$datetime_name] = str_replace("Z","",$value[self::$datetime_name]);
			$dateTime = \DateTime::createFromFormat('Y-m-d H:i:s', $value[self::$datetime_name]);
			$output->setHour_timestamp($dateTime);
			//print_r($dateTime);
						
			$output->setLoad_value($value[self::$load_name]);
			$output->setGrid($value[self::$grid_name]);
			$output->setRes($value[self::$res_name]);
			$output->setShaving($value[self::$shaving_name]); 
			
			$batteryValue = $aValues['battery'][$iHour];
			$output->setLoad_original($batteryValue[self::$load_name]);
			$output->setGrid_original($batteryValue[self::$grid_name]);
			$output->setStorage($batteryValue[self::$storage_name]);
			
			$energyValue = $aValues['energy'][$iHour];
			$output->setThA($energyValue[self::$ThA_name]);
			$output->setThB($energyValue[self::$ThB_name]);
			$output->setAon($energyValue[self::$Aon_name]);
			$output->setBon($energyValue[self::$Bon_name]);
			
			$this->em->persist($output);
			$this->em->flush();
		}
		
		for($iDay=0; $iDay<$nDays; $iDay++)
		{
			$sCurrentDate = $this->getDateString($from, $iDay);
			$currentDate=\DateTime::createFromFormat('Y-m-d', $sCurrentDate );
    
			// 4.To manage inputs from users:	
			$outputDay = new APFlowsOutputDay();
			$outputDay->setDate($currentDate);
			
			// Specific for this action plan:
			$outputDay->setStatus(0);						// Alarm status by user
			$outputDay->setFkApCalculation($calculation);
    
			$this->em->persist($outputDay);
			$this->em->flush();
		}
	}
	
	public function PredictData($url='', $dateForecast='', $dateHistorical='', $window='', $horizon='', $listofsensors)
	{
		$windowForecast=169;
		$windowHistorical=673;
		$horizon=169;
		$server='http%3A%2F%2Foptimusdss.epu.ntua.gr%2Fsavona&';
		
		if($dateForecast == ''){ 
			$dateForecast = '2015-03-03T00:00:00Z'; 
			//dump("invoke prediction service error: parameter 'date' is not specified"); 
		}
		if($dateHistorical == ''){ 
			$dateForecast = '2015-03-03T00:00:00Z'; 
			//dump("invoke prediction service error: parameter 'date' is not specified"); 
		}
		if($window == ''){ 
			$window = window; 
			//dump("invoke prediction service error: parameter 'window' is not specified"); 
		}
		if($horizon == ''){ 
			$horizon = horizon; 
			//dump("invoke prediction service error: parameter 'horizon' is not specified"); 
		}
		if($url == '' || $listofsensors == ''){ 
			//dump("invoke prediction service error: parameter 'url' is not specified");
			return;
		}
		
		// Generate the full URL:
		$serviceCall = $url."?sensors=".$listofsensors."&dateHistorical=".$dateHistorical."&dateForecast=".$dateForecast."&windowForecast=".$windowForecast."&server=".$server."&windowHistorical=".$windowHistorical;
		//$serviceCall = $url."?date=".$date."&window=".$window."&sensors=".$listofsensors;
		
		//echo "!!!!!!!Service call: ".$serviceCall."\n\n";
		
		// Invoke and extract data from the web service:
		return $this->invokePredictData->InvokePredictionService($serviceCall);
	}
	
	//!!!!!!!modify according to the values returned for ES!!!!!!!!!!!!
	private function readXML_Maintenance($xml)
	{
	//print_r($xml->collection->{'example-set'}[0]->example[0]->Grid);
		$set = 0;
		$aValues = array();
		foreach($xml->collection->{'example-set'} as $exampleSet){
			switch ($set)
			{
				case 0: 
					$peakValues = array();
					foreach ($exampleSet->example as $example)
					{
						$peak_grid = (float)$example->Grid;
						$peak_datetime = $example->datetime;
						$peak_load = (float)$example->Load;
						$peak_finalsuggestions = (float)$example->FinalSuggestions;
						$peak_res = (float)$example->RES;
						
						$aValue = array("datetime" => $peak_datetime, "grid" => $peak_grid, "load" => $peak_load, "finalsugs" => $peak_finalsuggestions, "res" => $peak_res);
						$peakValues[] = $aValue;
					}
					$aValues['peak'] = $peakValues;
					break;
					
				case 1: 
					$batteryValues = array();
					foreach ($exampleSet->example as $example)
					{
						$battery_grid = (float)$example->Grid;
						$battery_datetime = $example->datetime;
						$battery_load = (float)$example->Load;
						$battery_storage = (float)$example->Storage;
						$battery_res = (float)$example->RES;
						
						$aValue = array("datetime" => $battery_datetime, "grid" => $battery_grid, "load" => $battery_load, "storage" => $battery_storage, "res" => $battery_res);
						$batteryValues[] = $aValue;
					}
					$aValues['battery'] = $batteryValues;
					break;
				case 2: 
					$energyValues = array();
					foreach ($exampleSet->example as $example)
					{
						$energy_Aon = (int)$example->Aon;
						$energy_datetime = $example->datetime;
						$energy_Bon = (int)$example->Bon;
						$energy_ThA = (float)$example->ThA;
						$energy_ThB = (float)$example->ThB;
						
						$aValue = array("datetime" => $energy_datetime, "Aon" => $energy_Aon, "Bon" => $energy_Bon, "ThA" => $energy_ThA, "ThB" => $energy_ThB);
						$energyValues[] = $aValue;
					}
					$aValues['energy'] = $energyValues;
					break;
			}			
			$set = $set + 1;
		}
		return $aValues;
	}
	
	private function getDateString($from, $iDay)
	{
		$currentDay=\DateTime::createFromFormat('Y-m-d H:i:s', $from);
		if(!$currentDay){
			$currentDay=\DateTime::createFromFormat('Y-m-d', $from);
		}
		return $currentDay->modify(" +".$iDay." day")->format("Y-m-d");
	}
	
	public function getDataVariablesInput()
	{
		$aVariablesInput=array();
		
		$aVariablesInput[].=self::$sensor_1_airtemperature_name;
		$aVariablesInput[].=self::$sensor_2_relativehumidity_name;
		$aVariablesInput[].=self::$sensor_3_airpressure_name;
		$aVariablesInput[].=self::$sensor_4_solarradiation_name;
		$aVariablesInput[].=self::$sensor_5_energyproduction_name;
		$aVariablesInput[].=self::$sensor_6_powerexchangednetwork_name;
		$aVariablesInput[].=self::$sensor_7_powerexchangedfiamm_name;
		$aVariablesInput[].=self::$sensor_8_electricaldualmodemicroturbine_name;
		$aVariablesInput[].=self::$sensor_9_electricalgridmicroturbine_name;
		$aVariablesInput[].=self::$sensor_10_thermaldualmodemicroturbine_name;
		$aVariablesInput[].=self::$sensor_11_thermalgridmicroturbine_name;
		$aVariablesInput[].=self::$sensor_12_thermalboilers_name;
		

		return $aVariablesInput;
	}
	
}

?>