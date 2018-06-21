<?php
class SessionFilter implements InterceptingFilter {
	function run(Http $http, array $queryFields, array $formFields) {
		UserSession::start();
	}
}