<?php 


* @license GNU GPLv3 */

class Output_Tour_model extends WModel {
function validate(){
if(empty($this->alias ))$this->alias=$this->getChild('tourname','name');
$this->core=0;
return true;
}}