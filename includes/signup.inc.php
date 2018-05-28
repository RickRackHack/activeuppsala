<?php

	//Tittar ifall användaren har tryckt på submitknappen.
	if (isset($_POST['submit'])) {

		//Inkluderar kopplin till databasen.
		include_once 'dbconnection.php';
		//Tar in datan från sign-upformen.
		$first = mysqli_real_escape_string($conn, $_POST['first']);
		$last = mysqli_real_escape_string($conn, $_POST['last']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$uid = mysqli_real_escape_string($conn, $_POST['uid']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		//Error handlers: för att unvika att användaren fyller i felaktig data.
		//Titta efter tomma fält.
		if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
			header("Location: ../signup.php?signup=emptyfields");
			exit();
		} else {

			//Tittar om Första och sista namnet innehåller bokstäver.
			//preg_match är en funktion som kollar så att vi bara har vissa chars i en sträng.
			if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
				header("Location: ../signup.php?signup=invalidname");
				exit();
			} else {
				//Tittar så att emailen är korrekt ifylld.
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					header("Location: ../signup.php?signup=invalidemail");
					exit();
				}
				//Tittar ifall emailen finns genom att använda Prepared statements.
				$sql = "SELECT * FROM users WHERE user_email=?";

				//Skapar ett prepared statement.
				$stmt3 = mysqli_stmt_init($conn);
				//Tittar ifall prepared statement failar.
				if(!mysqli_stmt_prepare($stmt3, $sql)) {
						header("Location: ../index.php?login=error");
						exit();

				} else {
					//Binder parametern till placeholdern.
					//"s" står för att vi definerar placeholdern som en sträng.
					mysqli_stmt_bind_param($stmt3, "s", $email);

					//Kör våran query som hämtar in alla email i databasen
					mysqli_stmt_execute($stmt3);

					//Tittar ifall våran inmatade email matchar med en email i databasen.
					mysqli_stmt_store_result($stmt3);
					$resultCheck = mysqli_stmt_num_rows($stmt3);
					if ($resultCheck > 0) {
						header("Location: ../signup.php?signup=emailtaken");
						exit();
				} else {
					//Tittar ifall användarnamnet existerar genom ett prepared statement.
					$sql = "SELECT * FROM users WHERE user_uid=?";

					//Skapar ett prepared statement.
					$stmt = mysqli_stmt_init($conn);
					//Tittar ifall preparement failar.
					if(!mysqli_stmt_prepare($stmt, $sql)) {
					    header("Location: ../index.php?login=error");
					    exit();
					} else {
						//Binder parametrarna till placeholdern.
						// "s" innebär att vi definerar placeholdern som en sträng.
						mysqli_stmt_bind_param($stmt, "s", $uid);

						// Kör queryn i databasen.
						mysqli_stmt_execute($stmt);

						// Tittar ifall användarnamnet redan finns.
						mysqli_stmt_store_result($stmt);
						$resultCheck = mysqli_stmt_num_rows($stmt);
						if ($resultCheck > 0) {
							header("Location: ../signup.php?signup=usertaken");
							exit();
						} else {
							// Hashar och saltar lösenordet.

								// Skapar en function som skapar slumpmässiga strängar.
								function randString($length){
									$char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
									$string = substr(str_shuffle($char), 0,$length);
									return $string;
								}
								// Skapar ett unikt salt med längden tio tecken.
								$randSalt = randString(10);

								// Konkatenerar saltet med det inmatade lösenordet.
								$salt_pass = $randSalt.$password;

								$hashedpass = md5($salt_pass);


							//Stoppar in användaren i databasen.
							$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd, salt)
							VALUES (?, ?, ?, ?, ?, ?);";

							//Skapar ytterligare ett prepared statement.
							$stmt2 = mysqli_stmt_init($conn);

							//Tittar ifall det preparade statementet failar.
							if(!mysqli_stmt_prepare($stmt2, $sql)) {
							    header("Location: ../index.php?login=error");
							    exit();
								} else {
								//Binder parametrarna till placeholdern.
								mysqli_stmt_bind_param($stmt2, "ssssss", $first, $last, $email, $uid, $hashedpass, $randSalt);

								//Kör queryn i databasen.
								mysqli_stmt_execute($stmt2);
								header("Location: ../minprofil.php?signup=success");
								exit();
								}
							}
						}
					}
				}
			}
			//Stänger det första statementet.
			mysqli_stmt_close($stmt);
			//Stänger det andra statementet.
			mysqli_stmt_close($stmt2);
			//Stänger det tredje statementet.
			mysqli_stmt_close($stmt3);
		}
	}
