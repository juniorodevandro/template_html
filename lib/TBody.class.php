<?php


class TBody {
	private $classes;
	private $trs;

	public function __construct($vClasses, array $vTrs) {
		$this->classes = $vClasses;
		$this->trs = $vTrs;
	}

	function addTr($tr) {
		$this->trs[] = $tr;
	}

	public function __toString() {
		$tbody = "<tbody";
		if (!is_null($this->classes) && !empty($this->classes)) {
			$tbody .= " class='" . $this->classes . "'";
		}
		$tbody .= ">";

		foreach ($this->trs as $obj) {
			$tbody .= $obj;
		}

		$tbody .= "</tbody>";

		return $tbody;
	}
}