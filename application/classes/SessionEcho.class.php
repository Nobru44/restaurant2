<?php
class SessionEcho implements SessionFilter {
	function run(Http $http, array $queryFields, array $formFields) {
		$userSession = new UserSession();
		$userSession->write();
	}
}