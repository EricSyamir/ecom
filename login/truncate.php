<?php
include('db.php');
$idp = $_SESSION["user"];
                    $sql ="DELETE FROM pilihan WHERE IDPengguna = '$idp'";
                    if(mysqli_query($con,$sql))
										    {	
                        echo '<script>alert("Data telah dikemaskini") </script>' ;
									        }
											else {
												  echo '<script>alert("Ralat! Sila Hubungi Admin") </script>' ;
                          echo "Ralat : $sql<br>".
                                            mysqli_error($con) ;
										    }
               
            
?>