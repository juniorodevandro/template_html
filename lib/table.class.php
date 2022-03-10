<?php


class Table {

	private $id;
	private $classes;
	private $thead;
	private $tbody;
	private $tfoot;

	public function __construct($vId, $vClasses, $vThead, $vTbody, $vTfoot) {
		$this->id = $vId;
		$this->classes = $vClasses;
		$this->thead = $vThead;
		$this->tbody = $vTbody;
		$this->tfoot = $vTfoot;
	}

	public function __toString() {
        $table = "<table";
        
        if (!is_null($this->classes) && !empty($this->classes)) {
			$table .= " class='" . $this->classes . "'";
		}

		if (!is_null($this->id) && !empty($this->id)) {
			$table .= " id='" . $this->id . "'";
		}


		$table .= ">";

		if (!is_null($this->thead) && !empty($this->thead)) {
			$table .= $this->thead;
		}
		if (!is_null($this->tbody) && !empty($this->tbody)) {
			$table .= $this->tbody;
		}
		if (!is_null($this->tfoot) && !empty($this->tfoot)) {
			$table .= $this->tfoot;
		}

		$table .= "</table>";

		return $table;
	}


}