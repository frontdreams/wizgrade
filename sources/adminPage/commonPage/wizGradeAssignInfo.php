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
	This page is the online assignment manager
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */ 


		if (!defined('wizGrade')) /* This checks if this page was wrongly access by users */

		die('Hahahaha, Hacking attempt . . . . Be Careful . . . . You Are Been Warned !!!!');
				
		require_once $wizGradeIconPage; /* This include top middle global icon page eg go back, print buttons etcs */

?> 
					 
					<!-- row -->	
					<div class="row">  
						<div class="col-sm-12" id="assignQuestDiv">
							<section class="panel">
								<header class="panel-heading">                             
									<i class="fa fa-cubes fa-lg"></i> Online Assignment Manager 
									<span class="tools pull-right">
										<a href="javascript:;" class="fa fa-chevron-down"></a>
										<a href="javascript:;" class="fa fa-times"></a>
									</span>
								</header>
								<div class="panel-body wizGrade-line"> 
							  
									<div id="assignQDiv">		  
											  
										<?php require_once 'wizGradeAssignInfos.php';  ?> 
											  
									</div>	 
					
								</div>
							</section>
						</div>
					  
					</div>
					<!-- /row -->

					<!-- assignment removal pop up modal start -->
					<a href="#removeModal" data-toggle="modal" id="modalRemoveBtn" class=""> </a>

					<div class="modal fade" id="removeModal" tabindex="-1" role="dialog" 
					aria-labelledby="wizGrade-modalLabel" aria-hidden="true">
					  <div class="modal-dialog">
						  <div class="modal-content">
							  <div class="modal-header">
								  <button type="button" class="close" 
								  data-dismiss="modal" aria-hidden="true">
								  <span style='color:#fff !important;'>&times;</span></button>
								  <h4 class="modal-title"> Are sure you want to remove this Assignment information ?
								  </h4>
							  </div>
							  <div class="modal-body">					 
		 
									<center><img src="loading.gif" alt="Page Loading >>>>>" id="removeLoader"  
													  style="cursor:pointer; display:none; margin-bottom:5px;" /></center>
					
									<div id="removeMsg"> </div>														
											
									<div class="slideUpFrmDiv">
						 
										<section class="panel">
										
										<div class="panel-body">
										
											<div id="removeHData" style="display:none;"></div>
										
											<?php 
											
											echo "$infoMsgNX  Are sure you want to remove? <br />
											<span style='color:#000;font-weight:bold;'  id='removeInfo'> </span> $msgEnd";
											?> 
											  
										</div>
										
										</section>
							  
									</div>

							  </div>
							  <div class="modal-footer slideUpFrmDiv">
								  <button  class="btn btn-danger demoDisenable" id="removeAssign" 
								  type="button">Yes</button>
								  <button data-dismiss="modal" class="btn btn-danger" 
								  type="button">Cancel</button>
							  </div>
						  </div>
					  </div>
					</div> 
					<!-- assignment removal pop up modal end -->
					
					<!-- assignment edit pop up modal start -->
					<a href="#editModal" data-toggle="modal" id="modalEditBtn" class=""> </a>

					<div class="modal fade" id="editModal" tabindex="-1" role="dialog" 
					aria-labelledby="wizGrade-modalLabel" aria-hidden="true">
					  <div class="modal-dialog">
						  <div class="modal-content">
							  <div class="modal-header">
								  <button type="button" class="close" 
								  data-dismiss="modal" aria-hidden="true">
								  <span style='color:#fff !important;'>&times;</span></button>
								  <h4 class="modal-title"> Online Assignment Manager
								  </h4>
							  </div>
							  <div class="modal-body modal-body-scroll">					 
		 
									<center><img src="loading.gif" alt="Page Loading >>>>>" id="editLoader"  
													  style="cursor:pointer; display:none; margin-bottom:5px;" /></center>
					
									<div id="editMsg"> </div>											
											
									<div class="slideUpFrmUDiv">
						 
										<section class="panel">
										
										<div class="panel-body"> 
										
											<div id="editAssignDiv"></div> 
											  
										</div>
										
										</section>
							  
									</div>

							  </div>
							  <div class="modal-footer slideUpFrmDiv">                                              
								  <button data-dismiss="modal" class="btn btn-danger" 
								  type="button">Close</button>
							  </div>
						  </div>
					  </div>
					</div> 
					<!-- assignment edit pop up modal end -->
  
					<!-- assignment question remove pop up modal start -->
					<a href="#removeQModal" data-toggle="modal" id="modalRemoveQBtn" class=""> </a>
					<div class="modal fade" id="removeQModal" tabindex="-1" role="dialog" 
					aria-labelledby="wizGrade-modalLabel" aria-hidden="true">
					  <div class="modal-dialog">
						  <div class="modal-content">
							  <div class="modal-header">
								  <button type="button" class="close" 
								  data-dismiss="modal" aria-hidden="true">
								  <span style='color:#fff !important;'>&times;</span></button>
								  <h4 class="modal-title"> Are sure you want to remove this Assignment Question Information ?
								  </h4>
							  </div>
							  <div class="modal-body">					 
			 
									<center><img src="loading.gif" alt="Page Loading >>>>>" id="removeLoader"  
									  style="cursor:pointer; display:none; margin-bottom:5px;" /></center>
	
									<div id="removeMsg"> </div>										
							
									<div class="slideUpFrmDiv">
						 
										<section class="panel">
										
										<div class="panel-body">
										
											<div id="removeHData" style="display:none;"></div>
										
											<?php 
											
											echo "$infoMsgNX  Are sure you want to remove? <br />
											<span style='color:#000;font-weight:bold;'  id='removeInfo'> </span> $msgEnd";
											?> 
											  
										</div>
										
										</section>
							  
									</div>

							  </div>
							  <div class="modal-footer slideUpFrmDiv display-none">
								  <button  class="btn btn-danger demoDisenable" id="removeAssignQuestion" 
								  type="button">Yes</button>
								  <button data-dismiss="modal" class="btn btn-danger" 
								  type="button">Cancel</button>
							  </div>
						  </div>
					  </div>
					</div>
					<!-- assignment question remove pop up modal end -->
				  
					<!-- assignment question edit pop up modal start -->
					<a href="#editQModal" data-toggle="modal" id="modalEditQBtn" class=""> </a>

					<div class="modal fade" id="editQModal" tabindex="-1" role="dialog" 
					aria-labelledby="wizGrade-modalLabel" aria-hidden="true">
					  <div class="modal-dialog">
						  <div class="modal-content">
							  <div class="modal-header">
								  <button type="button" class="close" 
								  data-dismiss="modal" aria-hidden="true">
								  <span style='color:#fff !important;'>&times;</span></button>
								  <h4 class="modal-title"> Assignment Question  Manager
								  </h4>
							  </div>
							  <div class="modal-body modal-body-scroll"> 
		 
									<center><img src="loading.gif" alt="Page Loading >>>>>" id="editLoader"  
									style="cursor:pointer; display:none; margin-bottom:5px;" /></center>

									<div id="editMsg"> </div> 
						
									<div class="slideUpFrmUDiv">
						 
										<section class="panel">
										
										<div class="panel-body"> 
										
											<div id="editAssignQuestionDiv"></div> 
											  
										</div>
										
										</section>
							  
									</div>

							  </div>
							  <div class="modal-footer slideUpFrmDiv">                                              
								  <button data-dismiss="modal" class="btn btn-danger" 
								  type="button">Close</button>
							  </div>
						  </div>
					  </div>
				  </div>

				<script type='text/javascript'> $('.dpYears').datepicker(); </script>	
				<!-- assignment question edit pop up modal end -->	