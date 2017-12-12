<?php

/**
 * Created by PhpStorm.
 * User: tanphat
 * Date: 06/08/2017
 * Time: 12:08
 */
class yearsSemesterObj {
	private $semester;
	private $years;
	public function getYearsSemesterObj(){
		return $this;
	}

	public function setYearsSemesterObj($semester, $year){
		$this->semester = $semester;
		$this->years = $year;
	}

	/**
	 * @return mixed
	 */
	public function getSemester() {
		return $this->semester;
	}

	/**
	 * @param mixed $semester
	 */
	public function setSemester($semester) {
		$this->semester = $semester;
	}

	/**
	 * @return mixed
	 */
	public function getYears() {
		return $this->years;
	}

	/**
	 * @param mixed $year
	 */
	public function setYears($year) {
		$this->years = $year;
	}
}