<?php

	//Startar en session.
	session_start();

	//Tittar ifall användaren tryckt på submit.
	if (isset($_POST['submit'])) {

		//Vi inkluderar databasconnectionen.
		include_once 'dbconnection.php';
		//Vi hämtarn in datan från loginformen.
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];

		//Tittar ifall vi har tomma inputs.
		if (empty($uid) || empty($pwd)) {
			header("Location: ../index.php?login=empty");
			exit();
		}
		else {
			//Tittar ifall användarnamnet existerar i databasen m.h.a prepared statements.
			$sql = "SELECT * FROM users WHERE user_uid=?";
			//Skapa ett prepared statement.
			$stmt = mysqli_stmt_init($conn);
			//Kolla om det preparade statementet failar.
			if(!mysqli_stmt_prepare($stmt, $sql)) {
			    header("Location: ../index.php?login=preparedstatementfail");
			    exit();
			}
			// Ifall det preparade statementet inte failar, så fortsätter vi.
			else {
				//Binder parametrar till placeholdern (?) i våran sql.
				mysqli_stmt_bind_param($stmt, "s", $uid);

				//Kör queryn i databasen.
				mysqli_stmt_execute($stmt);

				//Hämtar resultaten från queryn.
	      $result = mysqli_stmt_get_result($stmt);

				//Ifall vi får ett resultat, somm innebär att användaren existerar, then assign the database row data to $row.
				if ($row = mysqli_fetch_assoc($result)) {

					//De-hashar lösenordet m.h.a lösenordet som användaren angett och lösenordet från databasen, för att se om dem matchar.
					$fetchSalt = "SELECT salt FROM users WHERE email = '$email'";
					$query = mysqli_query($conn,$fetchSalt);
					$concat = "";
					$concat = $row['salt'].$pwd;
					$hashed_salt = md5($concat);


					// Om lösenordet matchar lösenordet i databasen så loggas vi in. Annars skickas vi till index.php och loggas inte in.
					if($hashed_salt = $row['user_pwd']){
						$hashedPwdCheck = true;
					}else{
						$hashedPwdCheck = false;
					}
					//Om dem inte matchade.
					if ($hashedPwdCheck == false) {
						header("Location: ../index.php?login=doesntmatch");
						exit();
					}
					//Om dem matchade.
					elseif ($hashedPwdCheck == true) {
						//Sätter SESSION variabler och loggar in användaren.
						$_SESSION['u_id'] = $row['user_id'];
						$_SESSION['u_first'] = $row['user_first'];
						$_SESSION['u_last'] = $row['user_last'];
						$_SESSION['u_email'] = $row['user_email'];
						$_SESSION['u_username'] = $row['user_uid'];
						header("Location: ../minprofil.php?login=success");
						exit();
					}
	      } else {
	        header("Location: ../index.php?login=error");
				exit();
	      }
			}
		}

		//Stänger det preparade statementet.
		mysqli_stmt_close($stmt);

	} else {
		header("Location: ../index.php?login=error");
		exit();
	}
