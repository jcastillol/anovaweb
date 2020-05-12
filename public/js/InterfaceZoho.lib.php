<?
	interface InterfaceZoho{
		public function redirect();
		public function getLeadRecords();
		public function getLeadRecordEmail($email);
		public function getContactRecords();
		public function getDealRecords();
		public function insertLead2($nombre, $apellido, $email, $telefono, $rol, $workers, $actualSystem, $schedule, $puntuacion, $source, $descrip);
		public function insertDeal1($nombre, $apellido, $email, $phone, $puntuacion, $date, $rol, $workers, $actualSystem, $schedule);
		public function insertDeal2($nombre, $apellido, $email, $phone, $puntuacion, $date, $rol, $workers, $actualSystem, $schedule, $mesas, $meseros, $impresoras, $dealName);
		public function insertContact($nombre, $apellido, $email, $telefono, $rol, $workers, $actualSystem, $schedule);
		public function convertLead($nombre, $apellido, $date, $leadID, $email, $phone, $puntuacion, $rol, $workers, $actualSystem, $schedule);
		public function convertLead2($nombre, $apellido, $date, $leadID, $email, $phone, $puntuacion, $rol, $workers, $actualSystem, $schedule, $mesas, $meseros, $impresoras, $dealName);
	}
?>