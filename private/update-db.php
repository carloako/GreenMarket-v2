<?php
	function updateDatabase() {
		$USERNAME=$_ENV["GIT_USERNAME"];
		$PAT=$_ENV["GIT_PAT"];
		$ORIGIN="https://$USERNAME:$PAT@github.com/SOEN287-Summer2021/Green-Market.git";
		$BRANCH="main";
		$MESSAGE="Updated database";
		exec("git commit -am '$MESSAGE'");
		exec("git remote set-url origin $ORIGIN");
		exec("git push origin $BRANCH");
	}
?>