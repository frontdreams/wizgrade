<?php

/*  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 	
	wizGrade V 1.1 (Formerly SDOSMS) is Developed by Igweze Ebele Mark | https://www.iem.wizgrade.com 
	https://www.wizgrade.com | Release Date � 2nd April, 2019
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 	
	Copyright 2014-2019 IGWEZE EBELE MARK | https://www.iem.wizgrade.com 
	
	Licensed under the Apache License, Version 2.0 (the "License");
	you may not use this file except in compliance with the License.
	You may obtain a copy of the License at

		http://www.apache.org/licenses/LICENSE-2.0

	Unless required by applicable law or agreed to in writing, software
	distributed under the License is distributed on an "AS IS" BASIS,
	WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	See the License for the specific language governing permissions and
	limitations under the License	
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 
	wizGrade School App is Dedicated To Almighty God, My Amazing Parents ENGR Mr & Mrs Igweze Okwudili Godwin, 
	To My Fabulous and Supporting Wife Mrs Igweze Nkiruka Jennifer
	and To My Inestimable Sons Osinachi Michael, Ifechukwu Othniel and My Unborn lil Child.  
	
	WEBSITE 					PHONES												EMAILS
	https://www.wizgrade.com	+234 - 80 - 30 716 751, +234 - 80 - 22 000 490 		info@wizgrade.com	
	
	
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Page/Code Explanation~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	This script handle application database connection
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

		if (!defined('wizGrade')) /* This checks if this page was wrongly access by users */

		die('Hahahaha, Hacking attempt . . . . Be Careful . . . . You Are Been Warned !!!!');
		
		require 'dbConnectConfig.php';  /* database connection parameters */ 
		
		if(($wizGradeDB == '') || ($server == '') || ($username == '')){  /* check script installation */
			
$installScript =<<<IGWEZE
        
			<meta http-equiv="refresh" content="0;URL='script-install'" />
		
IGWEZE;
		
			echo $installScript;			 
			exit;			
			
		}
		
		/* PDO connection start */
		try {
			
			$conn = new PDO("mysql:host=$server; dbname=$wizGradeDB", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); /* PDO::ERRMODE_EXCEPTION, PDO::ERRMODE_SILENT, and PDO::ERRMODE_WARNING  */		
			$conn->exec("SET CHARACTER SET utf8"); 
			
		} catch(PDOException $e) {
			
			wizGradeDie( 'Oooops Database Connection failed: ' . $e->getMessage());
   
		}
		/* PDO connection end */
		
		/* mysqli connection start */
		
		try {
			
			$mysqli_conn = new mysqli($server, $username, $password, $wizGradeDB);
			
			if ($mysqli_conn->connect_error) {
				
				wizGradeDie( 'Oooops Database Connection failed: ' . $e->getMessage());
				
			}
		
		} catch(PDOException $e) {
			
			wizGradeDie( 'Oooops Database Connection failed: ' . $e->getMessage());
   
		}
		
		/* mysqli connection end */  
 
?>
