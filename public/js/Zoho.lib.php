<?
	require_once("InterfaceZoho.lib.php");
	class Zoho implements InterfaceZoho{

		public function getLeadRecordEmail($email)	{
			$token = 'f6f40a068b74f2377e64d4d32ccfe5aa'; //'$this->token;
		    $url = "https://crm.zoho.com/crm/private/json/Leads/getRecords";
		    $param= "authtoken=".$token."&scope=crmapi&newFormat=2&selectColumns=All";

		    $ch = curl_init();
		    curl_setopt($ch, CURLOPT_URL, $url);
		    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		    curl_setopt($ch, CURLOPT_POST, 1);
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);

		    // FIX THIS
		    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);        

		    $result = curl_exec($ch);
		    $arra = json_decode($result, true);
		    $res = $arra['response'];
		    $re = $res['result'];
		    $cont = $re['Leads'];
		    $row = $cont['row'];
		    $pos = $row[0];
		    $fl = $pos['FL'];
		    $content = $fl[0];
		    $content2 = $fl[1];
		    $leadID = $content['content'];
		    $leadSMOWNERID = $content2['content'];

		    
		    $arra = $row;
			$datos = array();
			$sal = "";
			foreach ($arra as $key) {

				if ($email === $key['FL'][7]['content']) {
					$datos['leadid']= $key['FL'][0]['content'];
					$datos['smownerid']= $key['FL'][1]['content'];
					$datos['email']= $key['FL'][7]['content'];
					break;
				}

			}

		    

		    //$array = array('ID' => $leadID , 'SMOWNERID' => $leadSMOWNERID);
		    return $datos; 
		    curl_close($ch);
		}

		public function checkEmail($email){
			$token = 'f6f40a068b74f2377e64d4d32ccfe5aa'; //'$this->token;
		    $url = "https://crm.zoho.com/crm/private/json/Leads/getRecords";
		    $param= "authtoken=".$token."&scope=crmapi&newFormat=2&selectColumns=All";
		    $ch = curl_init();
		    curl_setopt($ch, CURLOPT_URL, $url);
		    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		    curl_setopt($ch, CURLOPT_POST, 1);
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);        
		    $result = curl_exec($ch);
		    $arra = json_decode($result, true);
		    curl_close($ch);
		    $res = $arra['response'];
		    $re = $res['result'];
		    $cont = $re['Leads'];
		    $row = $cont['row'];
		    for($i = 0; $i<=sizeof($row)-1; $i++){
			    $pos = $row[$i];
			    $fl = $pos['FL'];
			    $content = $fl[7];
			    $email1 = $content['content'];
			    $array[] = $email1;
		    }

		    //echo sizeof($row);








		    $url = "https://crm.zoho.com/crm/private/json/Contacts/getRecords";
		    $param= "authtoken=".$token."&scope=crmapi&newFormat=2&selectColumns=All";
		    $ch = curl_init();
		    curl_setopt($ch, CURLOPT_URL, $url);
		    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		    curl_setopt($ch, CURLOPT_POST, 1);
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);        
		    $result = curl_exec($ch);
		    $arra = json_decode($result, true);
		    curl_close($ch);
		    $res = $arra['response'];
		    $re = $res['result'];
		    $cont = $re['Contacts'];
		    $row1 = $cont['row'];

		    $tamaño = sizeof($row1);
		    //echo $tamaño;
		    
		    for($i = 0; $i<=$tamaño-1; $i++){
	    		$pos1 = $row1[$i];
		    	$fl1 = $pos1['FL'];
			    $content1 = $fl1[10];
			    $email2 = $content1['content'];
			    $array[] = $email2;
		    }






		    //echo "<pre>";
		    //var_dump($array);
		    $checker = 0;
		    for($i = 0; $i<=sizeof($array)-1; $i++){
		    	if($email === $array[$i]){
		    		$checker++;
		    	}
		    }
		    echo $checker;
		   	//echo "</pre>";
		}
		public function redirect(){
			header("Location: redirect.php?form=1");
		}
		public function getLeadRecords(){
			$token = 'f6f40a068b74f2377e64d4d32ccfe5aa'; //'$this->token;
		    $url = "https://crm.zoho.com/crm/private/json/Leads/getRecords";
		    $param= "authtoken=".$token."&scope=crmapi&newFormat=2&selectColumns=All";

		    $ch = curl_init();
		    curl_setopt($ch, CURLOPT_URL, $url);
		    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		    curl_setopt($ch, CURLOPT_POST, 1);
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);

		    // FIX THIS
		    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);        

		    $result = curl_exec($ch);
		    $arra = json_decode($result, true);
		    $res = $arra['response'];
		    $re = $res['result'];
		    $cont = $re['Leads'];
		    $row = $cont['row'];
		    $pos = $row[0];
		    $fl = $pos['FL'];
		    $content = $fl[0];
		    $content2 = $fl[1];
		    $leadID = $content['content'];
		    $leadSMOWNERID = $content2['content'];
		    $array = $row;
		    //$array = array('ID' => $leadID , 'SMOWNERID' => $leadSMOWNERID);
		    return $array; 
		    curl_close($ch);
		}

		public function getContactRecordEmail($email)	{
			$token = 'f6f40a068b74f2377e64d4d32ccfe5aa'; //'$this->token;
		    $url = "https://crm.zoho.com/crm/private/json/Contacts/getRecords";
		    $param= "authtoken=".$token."&scope=crmapi&newFormat=2&selectColumns=All";

		    $ch = curl_init();
		    curl_setopt($ch, CURLOPT_URL, $url);
		    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		    curl_setopt($ch, CURLOPT_POST, 1);
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);

		    // FIX THIS
		    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);        

		    $result = curl_exec($ch);
		    $arra = json_decode($result, true);
		    $res = $arra['response'];
		    $re = $res['result'];
		    $cont = $re['Contacts'];
		    $row = $cont['row'];
		    $pos = $row[0];
		    $fl = $pos['FL'];
		    $content = $fl[0];
		    $content2 = $fl[1];
		    $leadID = $content['content'];
		    $leadSMOWNERID = $content2['content'];

		    $arra = $row;
			$datos = array();
			$sal = "";
			foreach ($arra as $key) {

				if ($email === $key['FL'][10]['content']) {
					$datos['contactid']= $key['FL'][0]['content'];
					$datos['smownerid']= $key['FL'][1]['content'];
					$datos['email']= $key['FL'][10]['content'];
					break;
				}

			}
		    $array = array('ID' => $leadID , 'SMOWNERID' => $leadSMOWNERID);
		    return $datos;
		    curl_close($ch);
		}

		public function getContactRecords(){
			$token = 'f6f40a068b74f2377e64d4d32ccfe5aa'; //'$this->token;
		    $url = "https://crm.zoho.com/crm/private/json/Contacts/getRecords";
		    $param= "authtoken=".$token."&scope=crmapi&newFormat=2&selectColumns=All";

		    $ch = curl_init();
		    curl_setopt($ch, CURLOPT_URL, $url);
		    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		    curl_setopt($ch, CURLOPT_POST, 1);
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);

		    // FIX THIS
		    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);        

		    $result = curl_exec($ch);
		    $arra = json_decode($result, true);
		    $res = $arra['response'];
		    $re = $res['result'];
		    $cont = $re['Contacts'];
		    $row = $cont['row'];
		    $pos = $row[0];
		    $fl = $pos['FL'];
		    $content = $fl[0];
		    $content2 = $fl[1];
		    $leadID = $content['content'];
		    $leadSMOWNERID = $content2['content'];
		    $array = array('ID' => $leadID , 'SMOWNERID' => $leadSMOWNERID);
		    return $row;
		    curl_close($ch);
		}

		public function getDealRecordEmail($email)	{
			$token = 'f6f40a068b74f2377e64d4d32ccfe5aa'; //'$this->token;
    		$url = "https://crm.zoho.com/crm/private/json/Potentials/getRecords";
		    $param= "authtoken=".$token."&scope=crmapi&newFormat=2&selectColumns=All";

		    $ch = curl_init();
		    curl_setopt($ch, CURLOPT_URL, $url);
		    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		    curl_setopt($ch, CURLOPT_POST, 1);
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);        

		    $result = curl_exec($ch);
		    $arra = json_decode($result, true);
		    $res = $arra['response'];
		    $re = $res['result'];
		    $cont = $re['Potentials'];
		    $row = $cont['row'];
		    $pos = $row[0];
		    $fl = $pos['FL'];
		    $content = $fl[0];
		    $content2 = $fl[1];
		    $leadID = $content['content'];
		    $leadSMOWNERID = $content2['content'];


		    $arra = $row;
			$datos = array();
			$sal = "";
			foreach ($arra as $key) {

				if ($email === $key['FL'][18]['content']) {
					$datos['potentiald']= $key['FL'][0]['content'];
					$datos['smownerid']= $key['FL'][1]['content'];
					$datos['email']= $key['FL'][18]['content'];
					break;
				}

			}

		    $array = array('ID' => $leadID , 'SMOWNERID' => $leadSMOWNERID);
		    return $datos;
		    curl_close($ch);
		}

		public function getDealRecords(){
			$token = 'f6f40a068b74f2377e64d4d32ccfe5aa'; //'$this->token;
    		$url = "https://crm.zoho.com/crm/private/json/Potentials/getRecords";
		    $param= "authtoken=".$token."&scope=crmapi&newFormat=2&selectColumns=All";

		    $ch = curl_init();
		    curl_setopt($ch, CURLOPT_URL, $url);
		    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		    curl_setopt($ch, CURLOPT_POST, 1);
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);        

		    $result = curl_exec($ch);
		    $arra = json_decode($result, true);
		    $res = $arra['response'];
		    $re = $res['result'];
		    $cont = $re['Potentials'];
		    $row = $cont['row'];
		    $pos = $row[0];
		    $fl = $pos['FL'];
		    $content = $fl[0];
		    $content2 = $fl[1];
		    $leadID = $content['content'];
		    $leadSMOWNERID = $content2['content'];
		    $array = array('ID' => $leadID , 'SMOWNERID' => $leadSMOWNERID);
		    return $row;
		    curl_close($ch);
		}
		public function insertLead2($nombre, $apellido, $email, $telefono, $rol, $workers, $actualSystem, $schedule, $puntuacion, $source, $descrip){
			$ch = curl_init('https://crm.zoho.com/crm/private/xml/Leads/insertRecords?');
			curl_setopt($ch, CURLOPT_VERBOSE, 1);//standard i/o streams 
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);// Turn off the server and peer verification 
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//Set to return data to string ($response) 
			curl_setopt($ch, CURLOPT_POST, 1);//Regular post 
			//Set post fields 
			//this script is being proccessed by a form so I also put all of my $_POST['name'] variable here to be 
			//used in the $xmlData variable below

			$authtoken = "f6f40a068b74f2377e64d4d32ccfe5aa";
			$xmlData = "<Leads><row no='1'>
					<FL val='Lead Source'>Pagina web (".$source.")</FL>
					<FL val='Company'>null</FL>
					<FL val='First Name'>".$nombre."</FL>
					<FL val='Last Name'>".$apellido."</FL>
					<FL val='Email'>".$email."</FL>
					<FL val='Title'>null</FL>
					<FL val='Phone'>".$telefono."</FL>
					<FL val='Home Phone'>null</FL>
					<FL val='Other Phone'>null</FL>
					<FL val='Fax'>null</FL>
					<FL val='Mobile'>null</FL>
					<FL val='Rol'>".$rol."</FL>
					<FL val='No. de Empleados'>".$workers."</FL>
					<FL val='Sistema en Uso'>".$actualSystem."</FL>
					<FL val='Tiempo Estimado para Implementación'>".$schedule."</FL>
					<FL val='LeadScore'>".$puntuacion."</FL>
					<FL val='Lead Status'>No contactado</FL>
					<FL val='Description'>".$descrip."</FL>
				</row>
			</Leads>";
			$query = "newFormat=1&authtoken={$authtoken}&scope=crmapi&xmlData={$xmlData}"; 
			curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
			$response = curl_exec($ch);
			if (strpos($response, "success") === false)
				echo $response;
			else{
				echo "true";
			}
			curl_close($ch);
		}
		public function insertDeal1($nombre, $apellido, $email, $phone, $puntuacion, $date, $rol, $workers, $actualSystem, $schedule){
			$ch = curl_init('https://crm.zoho.com/crm/private/xml/Potentials/insertRecords?');
			curl_setopt($ch, CURLOPT_VERBOSE, 1);//standard i/o streams 
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);// Turn off the server and peer verification 
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//Set to return data to string ($response) 
			curl_setopt($ch, CURLOPT_POST, 1);//Regular post 
			//Set post fields 
			//this script is being proccessed by a form so I also put all of my $_POST['name'] variable here to be 
			//used in the $xmlData variable below

			$authtoken = "f6f40a068b74f2377e64d4d32ccfe5aa";
			$xmlData = "<Potentials><row no='1'>
					<FL val='Potential Name'>Software ".$nombre." ".$apellido."</FL>
					<FL val='First Name'>".$nombre."</FL>
					<FL val='Last Name'>".$apellido."</FL>
					<FL val='Email'>".$email."</FL>
					<FL val='Phone'>".$phone."</FL>
					<FL val='LeadScore'>".$puntuacion."</FL>
					<FL val='Closing Date'>".$date."</FL>
					<FL val='Rol'>".$rol."</FL>
					<FL val='No. de Empleados'>".$workers."</FL>
					<FL val='Sistema en Uso'>".$actualSystem."</FL>
					<FL val='Tiempo Estimado para Implementación'>".$schedule."</FL>
					<FL val='Stage'>Necesita análisis</FL>
				</row>
			</Potentials>";
			$query = "newFormat=1&authtoken={$authtoken}&scope=crmapi&xmlData={$xmlData}"; 
			curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
			$response = curl_exec($ch);
			if (strpos($response, "success") === false)
				echo $response;
			else{
				echo "Ultra true";
			}
			curl_close($ch);
		}
		public function insertDeal2($nombre, $apellido, $email, $phone, $puntuacion, $date, $rol, $workers, $actualSystem, $schedule, $mesas, $meseros, $impresoras, $dealName){
			$ch = curl_init('https://crm.zoho.com/crm/private/xml/Potentials/insertRecords?');
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			
			$authtoken = "f6f40a068b74f2377e64d4d32ccfe5aa";
			$xmlData = "<Potentials><row no='1'>
					<FL val='Potential Name'>Software y Hardware de ".$dealName."</FL>
					<FL val='First Name'>".$nombre."</FL>
					<FL val='Last Name'>".$apellido."</FL>
					<FL val='Email'>".$email."</FL>
					<FL val='Phone'>".$phone."</FL>
					<FL val='LeadScore'>".$puntuacion."</FL>
					<FL val='Closing Date'>".$date."</FL>
					<FL val='Rol'>".$rol."</FL>
					<FL val='No. de Empleados'>".$workers."</FL>
					<FL val='Sistema en Uso'>".$actualSystem."</FL>
					<FL val='Tiempo Estimado para Implementación'>".$schedule."</FL>
					<FL val='No. Mesas'>".$mesas."</FL>
					<FL val='No. Meseros/Turno'>".$meseros."</FL>
					<FL val='No. Impresoras Tickets'>".$impresoras."</FL>
					<FL val='Closing Date'>".$date."</FL>
					<FL val='Stage'>Cotización de propuesta/precio</FL>
				</row>
			</Potentials>";
			$query = "newFormat=1&authtoken={$authtoken}&scope=crmapi&xmlData={$xmlData}"; 
			curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
			$response = curl_exec($ch);
			if (strpos($response, "success") === false)
				echo $response;
			else{
				echo "Ultra true";
			}
			curl_close($ch);
		}
		public function insertContact($nombre, $apellido, $email, $telefono, $rol, $workers, $actualSystem, $schedule){
			$ch = curl_init('https://crm.zoho.com/crm/private/xml/Contacts/insertRecords?');
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);

			$authtoken = "f6f40a068b74f2377e64d4d32ccfe5aa";
			$xmlData = "<Contacts><row no='1'>
					<FL val='Lead Source'>Pagina web (Demo)</FL>
					<FL val='Company'>null</FL>
					<FL val='First Name'>".$nombre."</FL>
					<FL val='Last Name'>".$apellido."</FL>
					<FL val='Email'>".$email."</FL>
					<FL val='Title'>null</FL>
					<FL val='Phone'>".$telefono."</FL>
					<FL val='Home Phone'>null</FL>
					<FL val='Other Phone'>null</FL>
					<FL val='Fax'>null</FL>
					<FL val='Mobile'>null</FL>
					<FL val='Rol'>".$rol."</FL>
					<FL val='No. de Empleados'>".$workers."</FL>
					<FL val='Sistema en Uso'>".$actualSystem."</FL>
					<FL val='Tiempo Estimado para Implementación'>".$schedule."</FL>
					<FL val='LeadScore'>".$puntuacion."</FL>
					<FL val='Lead Status'>No contactado</FL>
					<FL val='Description'>Se registró en la página web para agendar una sesión con un asesor para demostración del software y aclaración de dudas.</FL>
				</row>
			</Contacts>";
			$query = "newFormat=1&authtoken={$authtoken}&scope=crmapi&xmlData={$xmlData}"; 
			curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
			$response = curl_exec($ch);
			if (strpos($response, "success") === false)
				echo $response;
			else{
				echo "true x3";
			}
			curl_close($ch);
		}
		public function convertLead($nombre, $apellido, $date, $leadID, $email, $phone, $puntuacion, $rol, $workers, $actualSystem, $schedule){
			$ch = curl_init('https://crm.zoho.com/crm/private/xml/Leads/convertLead?');
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);

			$authtoken = "f6f40a068b74f2377e64d4d32ccfe5aa";
			$xmlData = "<Potentials>
						<row no='1'>
						<option val='createPotential'>true</option>
						<option val='assignTo'>sample@zoho.com</option>
						<option val='notifyLeadOwner'>true</option>
						<option val='notifyNewEntityOwner'>true</option>
						</row>
						<row no='2'>
						<FL val='Potential Name'>Software ".$nombre." ".$apellido."</FL>
						<FL val='First Name'>".$nombre."</FL>
						<FL val='Last Name'>".$apellido."</FL>
						<FL val='Email'>".$email."</FL>
						<FL val='Phone'>".$phone."</FL>
						<FL val='LeadScore'>".$puntuacion."</FL>
						<FL val='Closing Date'>".$date."</FL>
						<FL val='Rol'>".$rol."</FL>
						<FL val='No. de Empleados'>".$workers."</FL>
						<FL val='Sistema en Uso'>".$actualSystem."</FL>
						<FL val='Tiempo Estimado para Implementación'>".$schedule."</FL>
						<FL val='Potential Stage'>Necesita análisis</FL>
						</row>
						</Potentials>";
			$query = "newFormat=1&authtoken={$authtoken}&scope=crmapi&leadId={$leadID}&xmlData={$xmlData}"; 
			curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
			$response = curl_exec($ch);
			if (strpos($response, "success") === false)
				echo $response;
			else{
				echo "Ultra true";
			}
			curl_close($ch);
		}
		public function convertLead2($nombre, $apellido, $date, $leadID, $email, $phone, $puntuacion, $rol, $workers, $actualSystem, $schedule, $mesas, $meseros, $impresoras, $dealName){
			$ch = curl_init('https://crm.zoho.com/crm/private/xml/Leads/convertLead?');
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);

			$authtoken = "f6f40a068b74f2377e64d4d32ccfe5aa";
			$xmlData = "<Potentials>
						<row no='1'>
						<option val='createPotential'>true</option>
						<option val='assignTo'>sample@zoho.com</option>
						<option val='notifyLeadOwner'>true</option>
						<option val='notifyNewEntityOwner'>true</option>
						<FL val='LeadScore'>".$puntuacion."</FL>
						</row>
						<row no='2'>
						<FL val='Potential Name'>Software y Hardware de ".$dealName."</FL>
						<FL val='First Name'>".$nombre."</FL>
						<FL val='Last Name'>".$apellido."</FL>
						<FL val='Email'>".$email."</FL>
						<FL val='Phone'>".$phone."</FL>
						<FL val='LeadScore'>".$puntuacion."</FL>
						<FL val='Closing Date'>".$date."</FL>
						<FL val='Rol'>".$rol."</FL>
						<FL val='No. de Empleados'>".$workers."</FL>
						<FL val='Sistema en Uso'>".$actualSystem."</FL>
						<FL val='Tiempo Estimado para Implementación'>".$schedule."</FL>
						<FL val='No. Mesas'>".$mesas."</FL>
						<FL val='No. Meseros/Turno'>".$meseros."</FL>
						<FL val='No. Impresoras Tickets'>".$impresoras."</FL>
						<FL val='Potential Stage'>Cotización de propuesta/precio</FL>
						</row>
						</Potentials>";
			$query = "newFormat=1&authtoken={$authtoken}&scope=crmapi&leadId={$leadID}&xmlData={$xmlData}"; 
			curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
			$response = curl_exec($ch);
			if (strpos($response, "success") === false)
				echo $response."  ".$leadID;
			else{
				echo "Ultra true";
			}
			curl_close($ch);
		}
	}

?>