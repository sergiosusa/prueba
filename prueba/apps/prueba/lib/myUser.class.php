<?php

class myUser extends sfGuardSecurityUser
{

	public function hasPermission($name)
	{
		if($this->isSuperAdmin())
			return true;
		else
			return parent::hasPermission($name);
	}

	public function hasGroup($name)
	{
		if($this->isSuperAdmin())
			return true;
		else
			return parent::hasGroup($name);
	}

}
