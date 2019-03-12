<?php
// query for section a-c
                        $query = "SELECT sec, sectionid FROM questions NATURAL JOIN section WHERE courseid=$id AND yearid=$y GROUP BY sectionid ORDER BY sectionid ASC"; 
// execute query                        
                        $r_sec= mysqli_query($conn, $query);
                        if (!$r_sec) {
                            echo "Sorry, Technical problem. Please send us a message using the contact form below";
                        }
                        else{
							if(mysqli_num_rows($r_sec) > 0){
//loop runs for however amount of sections there are 
                        while ($sec = mysqli_fetch_array($r_sec, MYSQLI_ASSOC)) {
                            $s = $sec['sectionid'];//assigns the section id to $s for future references
                            echo '
                            <section>
                                <div><h4>Section '.$sec['sec'].' </h4></div>
                                <div class="panel-body">';
// query to determine how the questions are displayed.
                            $sql=" SELECT typeID FROM questions NATURAL JOIN section WHERE courseid=$id AND yearid=$y AND sectionid=$s GROUP BY typeID";
                            $r= mysqli_query($conn, $sql);//execute query
                            if(!$r){
                            }
                            else{
                                while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
                                    if ($row['typeID'] >= 0 && $row['typeID'] <= 3) {
                                        $sql=" SELECT query, SerialNumber, A, B, C, D, E FROM questions NATURAL JOIN section WHERE courseid=$id AND yearid=$y AND sectionid=$s";
                                        $result= mysqli_query($conn, $sql);
                                        while($quer = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                        //none
                                        if ($row['typeID'] == 0) 
                                            echo '<span>'. $quer['SerialNumber'].'.'. $quer['query'].'</span><br>';
                                        
                                        // Multiple choice questions
                                        elseif ($row['typeID'] == 1) {
                                            $option[] = $quer['A'];
                                            $option[] = $quer['B'];
                                            $option[] = $quer['C'];
                                            $option[] = $quer['D'];
                                            echo '<span>'. $quer['SerialNumber'].'.'. $quer['query'].'</span><br><ul>';
                                            for ($i=0; $i <= 3 ; $i++) { 
                                                echo '<li>'.$option[$i].'</li>';
                                            }
                                            if (isset($quer['E'])) {
                                                echo '<li>'.$quer['E'].'</li>';
                                            }
                                            echo'</ul>';
                                        }
                                       // true or fALSE
                                       elseif ($row['typeID'] == 2) 
                                            echo '<span>'. $quer['SerialNumber'].'.'. $quer['query'].'</span><br>';
                                        
                                        //Fill in the blanks
                                        elseif ($row['typeID'] == 3) 
                                            echo '<span>'. $quer['SerialNumber'].'.'. $quer['query'].'</span><br>';     
                                  }
                                    }
                                    //table
                                    elseif ($row['typeID'] == 4) {

                                        echo '<div class="table-responsive"><table class="table table-striped"><thead>
                                            <tr>';
                                        $sql=" SELECT col_head FROM table_col WHERE courseid=$id AND yearid=$y";
                                        $result = mysqli_query($conn, $sql);
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                            echo '<th>'.$row['col_head'].'</th>
                                            ';
                                        }
                                            echo'</tr>
                                            </thead><tbody>';
                                        $sql=" SELECT rowid FROM table_row WHERE courseid=$id AND yearid=$y GROUP BY rowid";
                                        $r = mysqli_query($conn, $sql);
                                        while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
                                            echo '<tr>';
                                            $sql="SELECT row_content FROM table_row NATURAL JOIN table_col WHERE courseid=$id AND yearid=$y";
                                            $q= mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($q, MYSQLI_ASSOC)) {
                                                echo ' 
                                                <td>'. $row['row_content'].'</td>';
                                            }
                                            echo '</tr>';
                                    }
                                    echo '</tbody></table></div>';
                                    }
                                }
                            }
                                echo '</div></section>';
                            }
						}
						else{
							Redirect();
						}
                        }
?>