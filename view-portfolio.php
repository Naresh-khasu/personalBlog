<?php
$conn = mysqli_connect('localhost','root','','tourandtravel');
                                   if(isset($_GET['portfolio_id'])){
		
                                    $portfolio_id=$_GET['portfolio_id'];
                                    
                                    
                                    $query="select *from portfolio where portfolio_id=$portfolio_id";
                                    $result=mysqli_query($conn,$query);
                                    
                                    while($row=mysqli_fetch_assoc($result)){
                                       echo '<div><img src="data:image/jpeg;base64,'.base64_encode($row[portfolio_name]).'"  alt="..." height="auto" width="100%"></div>';
                                        
                                    }
                                }
                                ?>