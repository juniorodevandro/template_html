<?php


class TH {
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
		$th = "<th";
		if (!is_null($this->classes) && !empty($this->classes)) {
			$th .= " class='" . $this->classes . "'";
		}
		$th .= ">";

		foreach ($this->content as $obj) {
			$th .= $obj;
		}

		$th .= "</th>";

		return $th;
	}
}