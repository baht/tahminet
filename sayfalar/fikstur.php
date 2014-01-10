<?php

require('db1.php');

$fikstur = trim($_POST['fikstur']);

if ($fikstur == "1.hafta" or $fikstur == "18.hafta"){
	header("location: haftalar/h1.php");
}else{
	if ($fikstur == "2.hafta" or $fikstur == "19.hafta"){
		header("location: haftalar/h2.php");
	}else{
		if ($fikstur == "3.hafta" or $fikstur == "20.hafta"){
			header("location: haftalar/h3.php");
		}else{
			if ($fikstur == "4.hafta" or $fikstur == "21.hafta"){
				header("location: haftalar/h4.php");
			}else{
				if ($fikstur == "5.hafta" or $fikstur == "22.hafta"){
					header("location: haftalar/h5.php");
				}else{
					if ($fikstur == "6.hafta" or $fikstur == "23.hafta"){
						header("location: haftalar/h6.php");
					}else{
						if ($fikstur == "7.hafta" or $fikstur == "24.hafta"){
							header("location: haftalar/h7.php");
						}else{
							if ($fikstur == "8.hafta" or $fikstur == "25.hafta"){
								header("location: haftalar/h8.php");
							}else{
								if ($fikstur == "9.hafta" or $fikstur == "26.hafta"){
									header("location: haftalar/h9.php");
								}else{
									if ($fikstur == "10.hafta" or $fikstur == "27.hafta"){
										header("location: haftalar/h10.php");
									}else{
										if ($fikstur == "11.hafta" or $fikstur == "28.hafta"){
											header("location: haftalar/h11.php");
										}else{
											if ($fikstur == "12.hafta" or $fikstur == "29.hafta"){
												header("location: haftalar/h12.php");
											}else{
												if ($fikstur == "13.hafta" or $fikstur == "30.hafta"){
													header("location: haftalar/h13.php");
												}else{
													if ($fikstur == "14.hafta" or $fikstur == "31.hafta"){
														header("location: haftalar/h14.php");
													}else{
														if ($fikstur == "15.hafta" or $fikstur == "32.hafta"){
															header("location: haftalar/h15.php");
														}else{
															if ($fikstur == "16.hafta" or $fikstur == "33.hafta"){
																header("location: haftalar/h16.php");
															}else{
																if ($fikstur == "17.hafta" or $fikstur == "34.hafta"){
																	header("location: haftalar/h17.php");
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
}

?>
