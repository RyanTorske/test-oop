<?php
/**
 * Typical Profile for eCommerce site
 *
 * This Profile is an abbreviated example of data collected and stored about a user for eCommerce purposes.
 * This can be  extended to include more information such as address, phone number, etc.
 *
 * @author Ryan Torske <rtorske@cnm.edu>
 **/
class Profile {
	/**
	 * id for this Profile; this is the primary key
	 **/
	private $profileId;
	/**
	 * id for the User who owns this Profile; this is a foreign key
	 **/
	private $userId;
	/**
	 * first name of this person
	 **/
	private $firstName;
	/**
	 * last name of this person
	 **/
	private $lastName;

	/**
	 * accessor method for profile id
	 *
	 * @return int value of profile id
	 **/
	public function getProfileId() {
		return($this->profileId);
	}

	/**
	 * mutator method for profile id
	 *
	 * @param int new value of profile id
	 * @throws UnexpectedValueException if $newProfile is not an integer
	 **/
	public function setProfileId($newProfileId) {
		// verify the profile id is valid
		$newProfileId = filter_var($newProfileId, FILTER_VALIDATE_INT);
		if($newProfileId === false) {
			throw(new UnexpectedValueException("profile id is not a valid integer"));
		}

		// convert and store the profile id
		$this->profileId = intval($newProfileId);
	}
}
?>