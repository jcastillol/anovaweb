<?
	require_once("Zoho.lib.php");
	$zoho = new Zoho();
	date_default_timezone_set("America/Mexico_City");


	switch ($_POST['form']) {
		case 'demo':
			//$zoho->redirect();
			$ch = curl_init('https://crm.zoho.com/crm/private/xml/Leads/insertRecords?');
			curl_setopt($ch, CURLOPT_VERBOSE, 1);//standard i/o streams 
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);// Turn off the server and peer verification 
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//Set to return data to string ($response) 
			curl_setopt($ch, CURLOPT_POST, 1);//Regular post 
			//Set post fields 
			//this script is being proccessed by a form so I also put all of my $_POST['name'] variable here to be 
			//used in the $xmlData variable below
			$email = $_POST['email'];
			$authtoken = "f6f40a068b74f2377e64d4d32ccfe5aa";
			$xmlData = "<Leads><row no='1'>
					<FL val='Lead Source'>Pagina web (Demo)</FL>
					<FL val='Company'>null</FL>
					<FL val='First Name'>".$_POST["firstName"]."</FL>
					<FL val='Last Name'>".$_POST["lastName"]."</FL>
					<FL val='Email'>".$_POST["email"]."</FL>
					<FL val='Title'>null</FL>
					<FL val='Phone'>".$_POST["phone"]."</FL>
					<FL val='Home Phone'>null</FL>
					<FL val='Other Phone'>null</FL>
					<FL val='Fax'>null</FL>
					<FL val='Mobile'>null</FL>
					<FL val='Lead Status'>No contactado</FL>
					<FL val='Description'>Se registró en la página web para descargar un demo de 30 días</FL>
				</row>
			</Leads>";
			$query = "newFormat=1&authtoken={$authtoken}&scope=crmapi&xmlData={$xmlData}"; 
			curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
			$response = curl_exec($ch);
			if (strpos($response, "success") == false){
				echo $response;
			}
			else{
				$hoy = new DateTime("tomorrow");
				$fecha = $hoy->format('Y-m-d');
				$lead = $zoho->getLeadRecordEmail($email);
				$ch2 = curl_init('https://crm.zoho.com/crm/private/xml/Tasks/insertRecords?');
				curl_setopt($ch2, CURLOPT_VERBOSE, 1);
				curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, FALSE); 
				curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, FALSE); 
				curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch2, CURLOPT_POST, 1);
				$authtoken = "f6f40a068b74f2377e64d4d32ccfe5aa";
				$task = "<Tasks>
					<row no='1'>
					<FL val='Subject'>Primer contacto (Instalación demo)</FL>
					<FL val='Due Date'>".$fecha."</FL>
					<FL val='Status'>No iniciado</FL>
					<FL val='SEMODULE'>Leads</FL>
					<FL val='SMOWNERID'>".$lead['smownerid']."</FL>
					<FL val='SEID'>".$lead['leadid']."</FL>
					<FL val='Priority'>Alto</FL>
					<FL val='Reminder'>".$fecha." 12:00:00</FL>
					<FL val='Description'>Llamar para resolver dudas sobre la instalación, configuración y funcionamiento del software, y preguntar datos de BANT</FL>
					</row>
				</Tasks>";
				/*$call = "<Calls>
							<row no='1'>
							<FL val='Subject'>Primer contacto (Instalación demo)</FL>
							<FL val='Call Type'>Saliente</FL>
							<FL val='Call Purpose'>Posible</FL>
							<FL val='SEID'>".$lead['ID']."</FL>
							<FL val='SMOWNERID'>".$lead['SMOWNERID']."</FL>
							<FL val='SEMODULE'>Leads</FL>
							<FL val='Call Start Time'>".$fecha." 16:00:00</FL>
							<FL val='Description'></FL>
							<FL val='Call Owner'>Rodrigo Mora</FL>
							<FL val='Reminder'>30 minutes before</FL>
							</row>
						</Calls>";*/
				$query2 = "newFormat=1&authtoken={$authtoken}&scope=crmapi&xmlData={$task}"; 
				curl_setopt($ch2, CURLOPT_POSTFIELDS, $query2);
				$response2 = curl_exec($ch2);
				if (strpos($response2, "success") === false)
					echo $response2;
				else{
					echo "true";
				}
			}
			curl_close($ch2);
			curl_close($ch);
			$_POST['success'] = "true";
			break;
		case 'asesoria':
			$authtoken = "f6f40a068b74f2377e64d4d32ccfe5aa";
			$descrip = "Se registró en la página web para agendar una sesión con un asesor para demostración del software y aclaración de dudas";
			$email = $_POST['email'];
			echo $zoho->insertLead2($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['phone'], $_POST['rol'], $_POST['workers'], $_POST['actualSystem'], $_POST['schedule'], $_POST['puntuacion'], "Sesión demostrativa", $descrip);

			if($_POST['puntuacion']>=80){
				$fecha = date('Y-m-d');
				if($_POST['closingDate'] == 1){
					$nuevafecha = strtotime ( '+15 day' , strtotime ( $fecha ) ) ;
					$nuevafecha2 = date ( 'Y-m-d' , $nuevafecha );
				}
				if($_POST['closingDate'] == 2){
					$nuevafecha = strtotime ( '+30 day' , strtotime ( $fecha ) ) ;
					$nuevafecha2 = date ( 'Y-m-d' , $nuevafecha );
				}
				if($_POST['closingDate'] == 3){
					$nuevafecha = strtotime ( '+2 month' , strtotime ( $fecha ) ) ;
					$nuevafecha2 = date ( 'Y-m-d' , $nuevafecha );
				}
				if($_POST['closingDate'] == 4){
					$nuevafecha = strtotime ( '+4 month' , strtotime ( $fecha ) ) ;
					$nuevafecha2 = date ( 'Y-m-d' , $nuevafecha );
				}
				if($_POST['closingDate'] == 5){
					$nuevafecha = strtotime ( '+1 year' , strtotime ( $fecha ) ) ;
					$nuevafecha2 = date ( 'Y-m-d' , $nuevafecha );
				}


				/*echo $zoho->insertDeal1($_POST['firstName'], $_POST['lastName'], $_POST['email'],  $_POST['phone'], $_POST['puntuacion'], $nuevafecha2, $_POST['rol'], $_POST['workers'], $_POST['actualSystem'], $_POST['schedule']);
				echo $zoho->insertContact($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['phone'], $_POST['rol'], $_POST['workers'], $_POST['actualSystem'], $_POST['schedule'], $_POST['puntuacion']);*/
				$lead = $zoho->getLeadRecordEmail($email);
				
				echo $zoho->convertLead($_POST['firstName'], $_POST['lastName'], $nuevafecha2, $lead['leadid'], $_POST['email'],  $_POST['phone'], $_POST['puntuacion'], $_POST['rol'], $_POST['workers'], $_POST['actualSystem'], $_POST['schedule']);
				$contact = $zoho->getContactRecordEmail($email);
				//S$contact = $zoho->getContactRecords();
				$potential = $zoho->getDealRecordEmail($email);
				//$potential = $zoho->getDealRecords();

				$authtoken = "f6f40a068b74f2377e64d4d32ccfe5aa";
				$ch2 = curl_init('https://crm.zoho.com/crm/private/xml/Tasks/insertRecords?');
				curl_setopt($ch2, CURLOPT_VERBOSE, 1);
				curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, FALSE); 
				curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, FALSE); 
				curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch2, CURLOPT_POST, 1);
				$nuevafecha = strtotime ( '+1 day' , strtotime ( $fecha ) ) ;
				$nuevafecha2 = date ( 'Y-m-d' , $nuevafecha );
				/*$call = "<Calls>
							<row no='1'>
							<FL val='Subject'>Primer contacto (Agendar cita)</FL>
							<FL val='Call Type'>Saliente</FL>
							<FL val='Call Purpose'>Demostración</FL>
							<FL val='Contact Name'>Contact</FL>
							<FL val='Related To'>Deal</FL>
							<FL val='SEMODULE'>Contact</FL>
							<FL val='CONTACTID'>".$contact['ID']."</FL>
							<FL val='POTENTIALID'>".$potential['ID']."</FL>
							<FL val='SMOWNERID'>".$potential['SMOWNERID']."</FL>
							<FL val='Call Start Date Time'>Schedule Call</FL>
							<FL val='Description'>Llamar para agendar una sesión demostrativa y resolver dudas generales</FL>
							<FL val='Call Owner'>Rodrigo Mora</FL>
							<FL val='Reminder'>5 minutes before</FL>
							</row>
						</Calls>";*/
				$task = "<Tasks>
					<row no='1'>
					<FL val='Subject'>Primer contacto (Agendar cita)</FL>
					<FL val='Due Date'>".$nuevafecha2."</FL>
					<FL val='SEMODULE'>Potentials</FL>
					<FL val='SEID'>".$potential['potentialid']."</FL>
					<FL val='CONTACTID'>".$contact['contactid']."</FL>
					<FL val='Status'>No iniciado</FL>
					<FL val='Priority'>Alto</FL>
					<FL val='Remind At'>".$nuevafecha2." 12:00:00</FL>
					<FL val='Description'>Llamar para agendar una sesión demostrativa y resolver dudas generales</FL>
					</row>
				</Tasks>";

				$query2 = "newFormat=1&authtoken={$authtoken}&scope=crmapi&xmlData={$task}"; 
				curl_setopt($ch2, CURLOPT_POSTFIELDS, $query2);
				$response2 = curl_exec($ch2);
				if (strpos($response2, "success") === false)
					echo $response2;
				else
					echo "true";
				curl_close($ch2);
			}else{
				$authtoken = "f6f40a068b74f2377e64d4d32ccfe5aa";
				$fecha = date('Y-m-d');
				$nuevafecha = strtotime ( '+1 day' , strtotime ( $fecha ) ) ;
				$nuevafecha2 = date ( 'Y-m-d' , $nuevafecha );
				$lead = $zoho->getLeadRecordEmail($email);
				//$lead = $zoho->getLeadRecords();
				$ch2 = curl_init('https://crm.zoho.com/crm/private/xml/Tasks/insertRecords?');
				curl_setopt($ch2, CURLOPT_VERBOSE, 1);
				curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, FALSE); 
				curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, FALSE); 
				curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch2, CURLOPT_POST, 1);
				/*$call = "<Calls>
							<row no='1'>
							<FL val='Subject'>Primer contacto (Agendar cita)</FL>
							<FL val='Call Type'>Saliente</FL>
							<FL val='Call Purpose'>Demostración</FL>
							<FL val='SMOWNERID'>".$lead['SMOWNERID']."</FL>
							<FL val='SEMODULE'>Leads</FL>
							<FL val='Call Start Time'>".$nuevafecha2." 9:00:00</FL>
							<FL val='Description'>Llamar para agendar una sesión demostrativa y resolver dudas generales</FL>
							<FL val='Call Owner'>Rodrigo Mora</FL>
							<FL val='Reminder'>30 minutes before</FL>
							</row>
						</Calls>";*/
				$task = "<Tasks>
					<row no='1'>
					<FL val='Subject'>Primer contacto (Agendar cita)</FL>
					<FL val='Due Date'>".$nuevafecha2."</FL>
					<FL val='Status'>No iniciado</FL>
					<FL val='SEID'>".$lead['leadid']."</FL>
					<FL val='Priority'>Alto</FL>
					<FL val='Reminder'>".$nuevafecha2." 12:00:00</FL>
					<FL val='Description'>Llamar para agendar una sesión demostrativa y resolver dudas generales</FL>
					</row>
				</Tasks>";
				$query2 = "newFormat=1&authtoken={$authtoken}&scope=crmapi&xmlData={$task}"; 
				curl_setopt($ch2, CURLOPT_POSTFIELDS, $query2);
				$response2 = curl_exec($ch2);
				if (strpos($response2, "success") === false)
					echo $response2;
				else
					echo "true";

				curl_close($ch2);
			}
			break;
		case "deal":
			$descrip = "Se registró en la página web para pedir una cotización personalizada a sus necesidades y resolver dudas";
			$email = $_POST['email'];
			echo $zoho->insertLead2($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['phone'], $_POST['rol'], $_POST['workers'], $_POST['actualSystem'], $_POST['schedule'], $_POST['puntuacion'], "Solicito cotización", $descrip);

			$fecha = date('Y-m-d');
			if($_POST['closingDate'] == 1){
				$nuevafecha = strtotime ( '+15 day' , strtotime ( $fecha ) ) ;
				$nuevafecha2 = date ( 'Y-m-d' , $nuevafecha );
			}
			if($_POST['closingDate'] == 2){
				$nuevafecha = strtotime ( '+30 day' , strtotime ( $fecha ) ) ;
				$nuevafecha2 = date ( 'Y-m-d' , $nuevafecha );
			}
			if($_POST['closingDate'] == 3){
				$nuevafecha = strtotime ( '+2 month' , strtotime ( $fecha ) ) ;
				$nuevafecha2 = date ( 'Y-m-d' , $nuevafecha );
			}
			if($_POST['closingDate'] == 4){
				$nuevafecha = strtotime ( '+4 month' , strtotime ( $fecha ) ) ;
				$nuevafecha2 = date ( 'Y-m-d' , $nuevafecha );
			}
			if($_POST['closingDate'] == 5){
				$nuevafecha = strtotime ( '+1 year' , strtotime ( $fecha ) ) ;
				$nuevafecha2 = date ( 'Y-m-d' , $nuevafecha );
			}
			$lead = $zoho->getLeadRecordEmail($email);
			//$lead = $zoho->getLeadRecords();
			echo $zoho->convertLead2($_POST['firstName'], $_POST['lastName'], $nuevafecha2, $lead['leadid'], $_POST['email'],  $_POST['phone'], $_POST['puntuacion'], $_POST['rol'], $_POST['workers'], $_POST['actualSystem'], $_POST['schedule'], $_POST['tables'], $_POST['meseros'], $_POST['printers'], $_POST['company']);
			//echo $zoho->insertDeal2($_POST['firstName'], $_POST['lastName'], $_POST['email'],  $_POST['phone'], $_POST['puntuacion'], $nuevafecha2, $_POST['rol'], $_POST['workers'], $_POST['actualSystem'], $_POST['schedule'], $_POST['tables'], $_POST['meseros'], $_POST['printers'], $_POST['company']);
			//echo $zoho->insertContact($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['phone'], $_POST['rol'], $_POST['workers'], $_POST['actualSystem'], $_POST['schedule'], $_POST['puntuacion']);

			$contact = $zoho->getContactRecordEmail($email);
				//S$contact = $zoho->getContactRecords();
				$potential = $zoho->getDealRecordEmail($email);
				//$potential = $zoho->getDealRecords();
			$ch2 = curl_init('https://crm.zoho.com/crm/private/xml/Tasks/insertRecords?');
			curl_setopt($ch2, CURLOPT_VERBOSE, 1);
			curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, FALSE); 
			curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, FALSE); 
			curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch2, CURLOPT_POST, 1);
			$nuevafecha = strtotime ( '+1 day' , strtotime ( $fecha ) ) ;
			$nuevafecha2 = date ( 'Y-m-d' , $nuevafecha );
			$authtoken = "f6f40a068b74f2377e64d4d32ccfe5aa";
			$task = "<Tasks>
						<row no='1'>
						<FL val='Subject'>Enviar cotización a nuevo prospecto</FL>
						<FL val='Due Date'>".$fecha."</FL>
						<FL val='Status'>No iniciado</FL>
						<FL val='CONTACTID'>".$contact['contactid']."</FL>
						<FL val='Priority'>Alto</FL>
						<FL val='Reminder'>".$nuevafecha2." 12:00:00</FL>
						<FL val='Description'>Mandar cotización a partir de los datos que proporciono (No. de mesas: ".$_POST['tables'].", No. Max de meseros por turno: ".$_POST['meseros'].", No. de impresoras de tickets que requiere: ".$_POST['printers'].")</FL>
						</row>
					</Tasks>";
			$query2 = "newFormat=1&authtoken={$authtoken}&scope=crmapi&xmlData={$task}"; 
			curl_setopt($ch2, CURLOPT_POSTFIELDS, $query2);
			$response2 = curl_exec($ch2);
			if (strpos($response2, "success") === false)
				echo $response2;
			else
				echo "true";
			curl_close($ch2);

			$ch3 = curl_init('https://crm.zoho.com/crm/private/xml/Tasks/insertRecords?');
			curl_setopt($ch3, CURLOPT_VERBOSE, 1);
			curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, FALSE); 
			curl_setopt($ch3, CURLOPT_SSL_VERIFYHOST, FALSE); 
			curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch3, CURLOPT_POST, 1);
			$nuevafecha = strtotime ( '+1 day' , strtotime ( $fecha ) ) ;
			$nuevafecha2 = date ( 'Y-m-d' , $nuevafecha );
			$authtoken = "f6f40a068b74f2377e64d4d32ccfe5aa";
			/*$call = "<Calls>
						<row no='1'>
						<FL val='Subject'>Primer contacto (Negociar cotización)</FL>
						<FL val='Call Type'>Saliente</FL>
						<FL val='Call Purpose'>Negociación</FL>
						<FL val='Contact Name'>Contact</FL>
						<FL val='Related To'>Deal</FL>
						<FL val='SEMODULE'>Contact</FL>
						<FL val='CONTACTID'>".$contact['ID']."</FL>
						<FL val='POTENTIALID'>".$potential['ID']."</FL>
						<FL val='SMOWNERID'>".$potential['SMOWNERID']."</FL>
						<FL val='Call Start Time'>".$nuevafecha2." 17:00:00</FL>
						<FL val='Description'>Llamar para verificar si revisó la cotización y que le pareció y resolución de otras dudas</FL>
						<FL val='Call Owner'>Rodrigo Mora</FL>
						<FL val='Reminder'>5 minutes before</FL>
						</row>
					</Calls>";*/
			$task = "<Tasks>
				<row no='1'>
				<FL val='Subject'>Primer contacto (Agendar cita)</FL>
				<FL val='Due Date'>".$nuevafecha2."</FL>
				<FL val='SEMODULE'>Potentials</FL>
				<FL val='SEID'>".$potential['potentialid']."</FL>
				<FL val='CONTACTID'>".$contact['contactid']."</FL>
				<FL val='Status'>No iniciado</FL>
				<FL val='Priority'>Alto</FL>
				<FL val='Remind At'>".$nuevafecha2." 12:00:00</FL>
				<FL val='Description'>Llamar para agendar una sesión demostrativa y resolver dudas generales</FL>
				</row>
			</Tasks>";
			$query3 = "newFormat=1&authtoken={$authtoken}&scope=crmapi&xmlData={$task}"; 
			curl_setopt($ch3, CURLOPT_POSTFIELDS, $query3);
			$response3 = curl_exec($ch3);
			if (strpos($response3, "success") === false)
				echo $response3;
			else
				echo "true";

			curl_close($ch3);
			break;



		case "checkEmail":
			echo $zoho->checkEmail($_POST['email']);
			break;
	}
?>

