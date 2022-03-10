<?php


class TFoot {
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
		$tfoot = "<tfoot";
		if (!is_null($this->classes) && !empty($this->classes)) {
			$tfoot .= " class='" . $this->classes . "'";
		}
		$tfoot .= ">";

		foreach ($this->trs as $obj) {
			$tfoot .= $obj;
		}

		$tfoot .= "</tfoot>";

		return $tfoot;
	}
}