
<?php
	class MTicketType extends MY_model {
		private $ticket_type_id;
		private $ticket_name;
		private $price;
		private $event_id;


		const DB_TABLE = "ticket_type";
    	const DB_TABLE_PK = "ticket_type_id";

    	public function __construct(){

		}

		public function loadType($id)
		{
			$this->db->select('*');
			$this->db->from($this::DB_TABLE);
			$this->db->where('event_id', $id);

			$query = $this->db->get();
			// echo $this->db->last_query();
			return $query->result();
			# code...
		}


		public function getTicket_type_id(){
			return $this->ticket_id;
		}

		public function setTicket_type_id($ticket_id){
			$this->ticket_id = $ticket_id;
		}

		public function getPrice(){
			return $this->price;
		}

		public function setPrice($price){
			$this->price = $price;
		}

		public function getTicket_name(){
			return $this->ticket_name;
		}

		public function setTicket_name($ticket_name){
			$this->ticket_name = $ticket_name;
		}

		public function getEvent_id(){
			return $this->event_id;
		}

		public function setEvent_id($event_id){
			$this->event_id = $event_id;
		}

	}
?>
