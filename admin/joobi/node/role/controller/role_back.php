<?php 


* @license GNU GPLv3 */

class Role_back_controller extends WController {
function back(){
WPages::redirect('controller=role');
return true;
}}