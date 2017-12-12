<?php
/**
 * Created by PhpStorm.
 * User: Huynh Hoang Tho
 * Date: 09/08/2017
 * Time: 13:01 CH
 */
class PermissionObj{

		private $position;
		private $power;
		private $selected;

		public function setPosition($position){
			$this->position = $position;
		}
		public function getPosition(){
			return $this->position;
		}
    	public function setSelected($select){
        $this->selected = $select;
    	}
   		 public function getSelected(){
        return $this->selected;
   		 }
		public function setPower($power){
			$this->power = $power;
		}
		public function getPower(){
			return $this->power;
		}


		public function setPermissionObj($position,$power,$sl){
			$this->setPosition($position);
			$this->setPower($power);
			$this->setSelected($sl);
		}
		public function getPermissionobj(){
			return $this;
		}

	}
?>
