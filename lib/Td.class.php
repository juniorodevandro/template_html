<?php


class TD {
	private $classes;
	private $content;

	public function __construct($vClasses, array $vContent) {
		$this->classes = $vClasses;
		$this->content = $vContent;
	}

	function addContent($vContent) {
		$this->content[] = $vContent;
	}

	public function __toString() {
		$td = "<td";
		if (!is_null($this->classes) && !empty($this->classes)) {
			$td .= " class='" . $this->classes . "'";
		}
		$td .= ">";

		foreach ($this->content as $obj) {
			$td .= $obj;
		}

		$td .= "</td>";

		return $td;
	}
}