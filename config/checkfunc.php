<?php
if(isset($_POST ["reg"])){
     $cons = mysqli_connect("localhost", "root", "", "ccss");
     $student_id =  mysqli_real_escape_string($cons, $_POST["reg"]);
	 $student_id_uppercase = strtoupper($student_id);
	 $s_class = $_POST ["sclass"];
	 $term = strtoupper($_POST ["sterm"]);
	 $pin = mysqli_real_escape_string($cons, $_POST["scratchpin"]);
	 $cons = mysqli_connect("localhost", "root", "", "scratchpins");
	 $check = mysqli_num_rows(mysqli_query($cons, "SELECT `pin` FROM `pins` WHERE `pin` = '$pin' LIMIT 1"));
	 mysqli_close($cons); 
	 $cons = mysqli_connect("localhost", "root", "", "scratchpins");
	 $result = mysqli_num_rows(mysqli_query($cons, "SELECT `student_id`, `term`, `class`, `pin` FROM `pins` WHERE `student_id` = '$student_id_uppercase' AND `term` = '$term' AND `class` = '$s_class' AND `pin` = '$pin' LIMIT 1"));
	 $row = mysqli_fetch_row(mysqli_query($cons, "SELECT `student_id`, `term`, `class`, `pin`, `status` FROM `pins` WHERE `pin` = '$pin' "));
	 $student_id_gotten = $row[0];
	 $term_gotten = $row[1];
	 $class_gotten = $row[2];
	 $pin_gotten = $row[3];
	 $status_gotten = $row[4];
     $cons = mysqli_connect("localhost", "root", "", "ccss");
	 $row = mysqli_fetch_row(mysqli_query($cons, "SELECT term.term , student_form.form , student_details.student_id FROM grade_score 
				INNER JOIN student_details 
				ON grade_score.student_id=student_details.student_id
				INNER JOIN student_form 
				ON grade_score.form_id=student_form.form_id 
				INNER JOIN term 
				ON grade_score.term_id=term.term_id 
				WHERE student_details.student_id='$student_id_uppercase' AND student_form.form='$s_class' AND term.term = '$term'"));
				$term_db = $row[0];
	            $class_db = $row[1];
				$student_id_db = $row[2];
	 mysqli_close($cons);
	 if ($student_id_uppercase == "" || $s_class == "Select Class" || $term == "Select Term" || $pin == "" ){
	           echo "no";
		       exit();
	}else if(!preg_match('/^[A-Za-z0-9\/]+$/i', $student_id_uppercase)){
	           echo "bad reg";
	           exit();
	}else if(!preg_match('/^[A-Za-z0-9]+$/i', $pin)){
	           echo "Invalid pin format";
	           exit();
	}else if($check == 0){
	        echo "Incorrect pin";
            exit();			
	}else if($check == 1 && $status_gotten == "A"){
	            $cons = mysqli_connect("localhost", "root", "", "scratchpins");
	            $new = mysqli_query($cons,"UPDATE `pins` set `status` = 'T',`student_id` ='$student_id_uppercase', `term` = '$term', `class` = '$s_class' WHERE pin='$pin'");
				mysqli_close($cons);
				$cons = mysqli_connect("localhost", "root", "", "ccss");
				$row = mysqli_fetch_row(mysqli_query($cons, "SELECT `fullname` FROM `student_details` WHERE `student_id` = '$student_id_uppercase' LIMIT 1 "));
	            $fullname = $row[0];
	            $sql="SELECT subjects.sub_name, grade_score.score, grade_score.grade, student_form.form,term.term FROM grade_score 
				INNER JOIN student_details 
				ON grade_score.student_id=student_details.student_id 
				INNER JOIN subjects 
				ON grade_score.sub_id=subjects.sub_id 
				INNER JOIN student_form 
				ON grade_score.form_id=student_form.form_id 
				INNER JOIN term 
				ON grade_score.term_id=term.term_id 
				WHERE student_details.student_id='$student_id_uppercase' AND student_form.form='$s_class' AND term.term = '$term'";
				$query = mysqli_query($cons, $sql);
				   echo "<div  style='width:80%;margin:0 0 0 10%;float:left;'>
				                  <div style='width:100%;height:80px;text-align:center;line-height:30px;float:left;font-family: Verdana, Geneva, sans-serif;font-size:14px;color:blue'>
					                  CITY COMPREHENSIVE SECONDARY SCHOOL
							            <br>Plot C/17, Achi Street, Abakpa Nike, Enugu State, Nigeria</br>
					              </div>
					                     <div style='width:60%;height:120px;float:left'>
					                           <div style='width:100%;height:20px;float:left;border-bottom:1px solid #000000;'>
							                        <div style='width:20%;margin:0 0 0 5%;float:left'>
								                       <label style='font-family: 'Lucida Sans Unicode','Lucida Grande',sans-serif;font-size:10px;line-height:20px;text-transform:uppercase'>reg id:</label>
								                    </div>
								                          <div style='width:80%;height:30px;line-height:20px;text-transform:uppercase;font-size:12px;font-family:Georgia, serif'>$student_id_db</div>
							                   </div>
										       <div style='width:100%;height:20px;float:left;border-bottom:1px solid #000000;margin:5px 0 0 0;'>
					                                <div style='width:20%;margin:0 0 0 5%;float:left'>
								                       <label style='font-family: 'Lucida Sans Unicode','Lucida Grande',sans-serif;font-size:10px;line-height:20px;text-transform:uppercase'>name:</label>
								                    </div>
								                          <div style='width:80%;height:30px;line-height:20px;text-transform:uppercase;font-size:12px;font-family:Georgia, serif'>$fullname</div>
									           </div>
											   <div style='width:100%;height:20px;float:left;border-bottom:1px solid #000000;margin:5px 0 0 0;'>
					                                <div style='width:20%;margin:0 0 0 5%;float:left'>
								                       <label style='font-family: 'Lucida Sans Unicode','Lucida Grande',sans-serif;font-size:10px;line-height:20px;text-transform:uppercase'>class:</label>
								                    </div>
								                          <div style='width:80%;height:30px;line-height:20px;text-transform:uppercase;font-size:12px;font-family:Georgia, serif'>$class_db </div>
									           </div>
											   <div style='width:100%;height:20px;float:left;border-bottom:1px solid #000000;margin:5px 0 0 0;'>
					                                <div style='width:20%;margin:0 0 0 5%;float:left'>
								                       <label style='font-family: 'Lucida Sans Unicode','Lucida Grande',sans-serif;font-size:10px;line-height:20px;text-transform:uppercase'>term:</label>
								                    </div>
								                          <div style='width:80%;height:30px;line-height:20px;text-transform:uppercase;font-size:12px;font-family:Georgia, serif'>$term_db </div>
									           </div> 
									     </div>
			              </div>";
		echo "<table cellpadding='10' style='width:80%;margin:0 0 0 10%;border-collapse:collapse;margin-top:10px;font-family: Verdana, Geneva, sans-serif;font-size:14px''>
				   <tr>
				    <th>Subject</th>
					<th>Score</th>
					<th>Grade</th>
				   </tr>";
		while($row = mysqli_fetch_array($query)){
				     echo "<tr>";
					 echo "<td style='text-align:center;width:50%'>". $row['sub_name'] ."</td>";
					 echo "<td style='text-align:center;width:50%'>". $row['score'] ."</td>";
					 echo "<td style='text-align:center;width:50%'>". $row['grade'] ."</td>";
					 echo "</tr>";
				}
				echo "</table>";
				mysqli_close($cons);
				exit();
	}else if($check == 1 && $result == 1){
	            $cons = mysqli_connect("localhost", "root", "", "ccss");
				$row = mysqli_fetch_row(mysqli_query($cons, "SELECT `fullname` FROM `student_details` WHERE `student_id` = '$student_id_uppercase' LIMIT 1"));
				$fullname = $row[0];
	            $sql="SELECT subjects.sub_name, grade_score.score, grade_score.grade, student_form.form,term.term FROM grade_score 
				INNER JOIN student_details 
				ON grade_score.student_id=student_details.student_id 
				INNER JOIN subjects 
				ON grade_score.sub_id=subjects.sub_id 
				INNER JOIN student_form 
				ON grade_score.form_id=student_form.form_id 
				INNER JOIN term 
				ON grade_score.term_id=term.term_id 
				WHERE student_details.student_id='$student_id_uppercase' AND student_form.form='$s_class' AND term.term = '$term'";
				$query = mysqli_query($cons, $sql);
				   echo "<div  style='width:80%;margin:0 0 0 10%;float:left;'>
				                  <div style='width:100%;height:80px;text-align:center;line-height:30px;float:left;font-family: Verdana, Geneva, sans-serif;font-size:14px;color:blue'>
					                  CITY COMPREHENSIVE SECONDARY SCHOOL
							            <br>Plot C/17, Achi Street, Abakpa Nike, Enugu State, Nigeria</br>
					              </div>
					                     <div style='width:60%;height:120px;float:left'>
					                           <div style='width:100%;height:20px;float:left;border-bottom:1px solid #000000;'>
							                        <div style='width:20%;margin:0 0 0 5%;float:left'>
								                       <label style='font-family: 'Lucida Sans Unicode','Lucida Grande',sans-serif;font-size:10px;line-height:20px;text-transform:uppercase'>reg id:</label>
								                    </div>
								                          <div style='width:80%;height:30px;line-height:20px;text-transform:uppercase;font-size:12px;font-family:Georgia, serif'> $student_id_db</div>
							                   </div>
										       <div style='width:100%;height:20px;float:left;border-bottom:1px solid #000000;margin:5px 0 0 0;'>
					                                <div style='width:20%;margin:0 0 0 5%;float:left'>
								                       <label style='font-family: 'Lucida Sans Unicode','Lucida Grande',sans-serif;font-size:10px;line-height:20px;text-transform:uppercase'>name:</label>
								                    </div>
								                          <div style='width:80%;height:30px;line-height:20px;text-transform:uppercase;font-size:12px;font-family:Georgia, serif'>$fullname</div>
									           </div>
											   <div style='width:100%;height:20px;float:left;border-bottom:1px solid #000000;margin:5px 0 0 0;'>
					                                <div style='width:20%;margin:0 0 0 5%;float:left'>
								                       <label style='font-family: 'Lucida Sans Unicode','Lucida Grande',sans-serif;font-size:10px;line-height:20px;text-transform:uppercase'>class:</label>
								                    </div>
								                          <div style='width:80%;height:30px;line-height:20px;text-transform:uppercase;font-size:12px;font-family:Georgia, serif'>$class_db</div>
									           </div>
											   <div style='width:100%;height:20px;float:left;border-bottom:1px solid #000000;margin:5px 0 0 0;'>
					                                <div style='width:20%;margin:0 0 0 5%;float:left'>
								                       <label style='font-family: 'Lucida Sans Unicode','Lucida Grande',sans-serif;font-size:10px;line-height:20px;text-transform:uppercase'>term:</label>
								                    </div>
								                          <div style='width:80%;height:30px;line-height:20px;text-transform:uppercase;font-size:12px;font-family:Georgia, serif'>$term_db</div>
									           </div> 
									     </div>
			              </div>";
		echo "<table cellpadding='10' style='width:80%;margin:0 0 0 10%;border-collapse:collapse;margin-top:10px;font-family: Verdana, Geneva, sans-serif;font-size:14px''>
				   <tr>
				    <th>Subject</th>
					<th>Score</th>
					<th>Grade</th>
				   </tr>";
		while($row = mysqli_fetch_array($query)){
				     echo "<tr>";
					 echo "<td style='text-align:center;width:50%'>". $row['sub_name'] ."</td>";
					 echo "<td style='text-align:center;width:50%'>". $row['score'] ."</td>";
					 echo "<td style='text-align:center;width:50%'>". $row['grade'] ."</td>";
					 echo "</tr>";
				}
				echo "</table>";
				mysqli_close($cons);
				exit();
	    }else if($status_gotten == "T" && $student_id_uppercase != $student_id_gotten && $pin == $pin_gotten || $term != $term_gotten || $s_class != $class_gotten){
		        echo "wrong";
				exit();
		}
}
?>