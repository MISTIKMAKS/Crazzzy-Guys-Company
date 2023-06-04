<?php 
 	function display_forum($table) {
    global $pdo;

        $sql_fkc_disable = "SET FOREIGN_KEY_CHECKS=0";
        $sql_fkc_enable = "SET FOREIGN_KEY_CHECKS=1";

        if ($table === 1) {
        	$where = ' WHERE branch_id != 7 ';
        	$order = " ORDER BY branch_priority DESC, branch_createDate DESC ";
            $sql = "SELECT branch_id, branch_name, branch_author, branch_createDate, branch_priority
                    FROM branches
                    INNER JOIN users ON branches.branch_author = users.user_id $where $order";
        } else if ($table === 2) {
        	$branch_id = $_GET['branchId'];
        	$where = ' WHERE theme_branch = '.$branch_id.'';
        	$order = " ORDER BY theme_priority DESC, theme_createDate DESC ";
            $sql = "SELECT theme_id, theme_name, theme_author, theme_createDate, theme_priority, theme_branch, theme_banned
                    FROM themes
                    INNER JOIN users ON themes.theme_author = users.user_id
                    INNER JOIN branches ON themes.theme_branch = branches.branch_id $where $order";
        } else if ($table === 3) {
        	$theme_id = $_GET['themeId'];
        	$where = ' WHERE comment_theme = '.$theme_id.'';
        	$theme_where = ' WHERE theme_id = '.$theme_id.'';
        	$order = " ORDER BY comment_isTopTheme DESC, comment_priority DESC, theme_createDate DESC ";
            $sql = "SELECT comment_id, comment_text, comment_author, comment_createDate, comment_priority, comment_theme, comment_banned, comment_isTopTheme
                    FROM comments
                    INNER JOIN users ON comments.comment_author = users.user_id
                    INNER JOIN themes ON comments.comment_theme = themes.theme_id
                    $where $order";
            $theme = "SELECT theme_name
                    FROM themes
                    INNER JOIN users ON themes.theme_author = users.user_id
                    INNER JOIN branches ON themes.theme_branch = branches.branch_id $theme_where";

            $theme_statement = $pdo->query($theme);
        	$theme_data = $theme_statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else if ($table === 4) {
            $where = ' WHERE news_id != 13 ';
            $order = " ORDER BY news_priority DESC, news_createDate DESC ";
            $sql = "SELECT news_id, news_image, news_name, news_preview, news_text, news_author, news_createDate, news_priority
                    FROM news
                    INNER JOIN users ON news.news_author = users.user_id $where $order";
        }
        else if ($table === 5) {
            $news_id = $_GET['newsId'];
            $where = ' WHERE news_id = '.$news_id.'';
            $order = " ORDER BY news_priority DESC, news_createDate DESC ";
            $sql = "SELECT news_id, news_image, news_name, news_preview, news_text, news_author, news_createDate, news_priority
                    FROM news
                    INNER JOIN users ON news.news_author = users.user_id $where $order";
        }

        $statement = $pdo->query($sql);
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        if($data) {
            if($table === 1) {
                foreach($data as $data_chunk) {
                	$user_where = ' WHERE user_id = '. $data_chunk['branch_author'].'';
            		$user = "SELECT login, nickname
                    		FROM users
                    		$user_where";

            		$user_statement = $pdo->query($user);
        			$user_data = $user_statement->fetchAll(PDO::FETCH_ASSOC);

        			foreach($user_data as $user_data_chunk) {
        				if($user_data_chunk['nickname'] != ""){
        					$user_from_id = $user_data_chunk['nickname'];
        				}
        				else {
        					$user_from_id = $user_data_chunk['login'];
        				}
        			}

                    echo " <a class='button' href='themes.php?branchId={$data_chunk['branch_id']}' style='margin: auto; display: block; width: 80%; text-decoration: none; text-align: center;'>{$data_chunk['branch_name']}     by $user_from_id     {$data_chunk['branch_createDate']}</a>";
                }
            } else if($table === 2) {
                foreach($data as $data_chunk) {
                	$user_where = ' WHERE user_id = '. $data_chunk['theme_author'].'';
            		$user = "SELECT login, nickname
                    		FROM users
                    		$user_where";

            		$user_statement = $pdo->query($user);
        			$user_data = $user_statement->fetchAll(PDO::FETCH_ASSOC);

        			foreach($user_data as $user_data_chunk) {
        				if($user_data_chunk['nickname'] != ""){
        					$user_from_id = $user_data_chunk['nickname'];
        				}
        				else {
        					$user_from_id = $user_data_chunk['login'];
        				}
        			}

                	if($data_chunk['theme_banned'] != 1) {
                    	echo "<a class='button' href='comments.php?themeId={$data_chunk['theme_id']}' style='margin: auto; display: block; width: 80%; text-decoration: none; text-align: center;'>{$data_chunk['theme_name']}     by $user_from_id     {$data_chunk['theme_createDate']}</a>";
                    }
                }
            } else if($table === 3) {
            	foreach($data as $data_chunk) {
            		$user_where = ' WHERE user_id = '. $data_chunk['comment_author'].'';
            		$user = "SELECT login, nickname, role, user_photo
                    		FROM users
                    		$user_where";

            		$user_statement = $pdo->query($user);
        			$user_data = $user_statement->fetchAll(PDO::FETCH_ASSOC);

        			foreach($user_data as $user_data_chunk) {
                        $user_photo = $user_data_chunk['user_photo'];
        				if($user_data_chunk['nickname'] != ""){
        					$user_from_id = $user_data_chunk['nickname'];
        				}
        				else {
        					$user_from_id = $user_data_chunk['login'];
        				}
                        $user_role_from_id = $user_data_chunk['role'];
        			}

                	if($data_chunk['comment_banned'] != 1 && $data_chunk['comment_isTopTheme'] == 1) {
                		foreach($theme_data as $theme_data_chunk) {
        					echo "<h1 align='center' class='maintexttitle' style='color: white'>{$theme_data_chunk['theme_name']}</h1>";
        				}
                        if($user_photo != "") {
                            echo "<img src='../img/profiles/$user_photo' id='cabinet-avatar-mini'>";
                        }
                        else {
                            echo "<img src='../img/profiles/user_photo.jpg' id='cabinet-avatar-mini'>";
                        }
                        if($user_role_from_id == 1) {
                            echo "<h1 align='center' class='maintext' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['comment_author']}' class='user-link-user'>$user_from_id</a></h1>";
                        } else if ($user_role_from_id == 2) {
                            echo "<h1 align='center' class='maintext' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['comment_author']}' class='user-link-moderator'>$user_from_id</a></h1>";
                        } else if ($user_role_from_id == 3) {
                            echo "<h1 align='center' class='maintext' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['comment_author']}' class='user-link-developer'>$user_from_id</a></h1>";
                        }
                        else if ($user_role_from_id == 4) {
                            echo "<h1 align='center' class='maintext' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['comment_author']}' class='user-link-star'>$user_from_id</a></h1>";
                        }
                        else if ($user_role_from_id == 5) {
                            echo "<h1 align='center' class='maintext' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['comment_author']}' class='user-link-honored-user'>$user_from_id</a></h1>";
                        }
                        else if ($user_role_from_id == 13) {
                            echo "<h1 align='center' class='maintext' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['comment_author']}' class='user-link-secret'>$user_from_id</a></h1>";
                        }
        				echo "<h1 align='center' class='maintext' style='color: white; margin-bottom: 20px;'>{$data_chunk['comment_createDate']}</h1>";
                        $comment_text_replace = str_replace(array('\n', '\r'), '</br>', $data_chunk['comment_text']);
        				echo "<h1 align='center' class='maintext' style='color: white'>$comment_text_replace</h1>";
        				echo"<div class='bigbr'></div>";
                    }
                }
                foreach($data as $data_chunk) {
                	if($data_chunk['comment_banned'] != 1 && $data_chunk['comment_isTopTheme'] != 1) {
                		echo "<hr>";
                        if($user_photo != "") {
                            echo "<img src='../img/profiles/$user_photo' id='cabinet-avatar-mini'>";
                        }
                        else {
                            echo "<img src='../img/profiles/user_photo.jpg' id='cabinet-avatar-mini'>";
                        }
                        if($user_role_from_id == 1) {
                            echo "<h1 align='center' class='maintext' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['comment_author']}' class='user-link-user'>$user_from_id</a></h1>";
                        } else if ($user_role_from_id == 2) {
                            echo "<h1 align='center' class='maintext' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['comment_author']}' class='user-link-moderator'>$user_from_id</a></h1>";
                        } else if ($user_role_from_id == 3) {
                            echo "<h1 align='center' class='maintext' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['comment_author']}' class='user-link-developer'>$user_from_id</a></h1>";
                        }
                        else if ($user_role_from_id == 4) {
                            echo "<h1 align='center' class='maintext' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['comment_author']}' class='user-link-star'>$user_from_id</a></h1>";
                        }
                        else if ($user_role_from_id == 5) {
                            echo "<h1 align='center' class='maintext' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['comment_author']}' class='user-link-honored-user'>$user_from_id</a></h1>";
                        }
                        else if ($user_role_from_id == 13) {
                            echo "<h1 align='center' class='maintext' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['comment_author']}' class='user-link-secret'>$user_from_id</a></h1>";
                        }
        				echo "<h1 align='center' class='maintext' style='color: white'>{$data_chunk['comment_createDate']}</h1>";
                        $comment_text_replace = str_replace(array('\n', '\r'), '</br>', $data_chunk['comment_text']);
        				echo "<h1 align='center' class='maintext' style='color: white'>$comment_text_replace</h1>";
        				echo"<div class='bigbr'></div>";
                    }
                }

            } else if($table === 4) {
                $leftright_iterator = 1;
                foreach($data as $data_chunk) {
                    $user_where = ' WHERE user_id = '. $data_chunk['news_author'].'';
                    $user = "SELECT login, nickname
                            FROM users
                            $user_where";

                    $user_statement = $pdo->query($user);
                    $user_data = $user_statement->fetchAll(PDO::FETCH_ASSOC);

                    foreach($user_data as $user_data_chunk) {
                        if($user_data_chunk['nickname'] != ""){
                            $user_from_id = $user_data_chunk['nickname'];
                        }
                        else {
                            $user_from_id = $user_data_chunk['login'];
                        }
                    }

                    if($leftright_iterator % 2 === 0) {
                            echo "  
                            <div class='newscontainer'>
                                <div class='textdiv'>
                                    <p class='newstitle' align='center'>{$data_chunk['news_name']}</p>
                                    <p class='newstext' align='center'>{$data_chunk['news_preview']}</p>
                                    <p class='newsdate'>{$data_chunk['news_createDate']}</p>
                            </div>
                            ";
                        if($data_chunk['news_image'] != "") {
                            echo "
                            <div class='newsimgdiv'>
                                <a href='news.php?newsId={$data_chunk['news_id']}' class='hvr-buzz-out'><img src='../img/news/{$data_chunk['news_image']}' alt='...' class='newsimg'></a>
                            </div>
                        ";
                        }
                        else {
                            echo "
                            <div class='newsimgdiv'>
                            <a href='news.php?newsId={$data_chunk['news_id']}' class='hvr-buzz-out'><img src='../img/news/blocker.jpg' alt='...' class='newsimg'></a>
                            </div>
                            ";
                        }
                        "
                        </div>
                        ";
                    }
                    else if ($leftright_iterator % 2 === 1) {
                        echo "  
                        <div class='newscontainer'>
                            <div class='newsimgdiv'>
                        ";
                    if($data_chunk['news_image'] != "") {
                        echo "
                        <div class='newsimgdiv'>
                            <a href='news.php?newsId={$data_chunk['news_id']}' class='hvr-buzz-out'><img src='../img/news/{$data_chunk['news_image']}' alt='...' class='newsimg'></a>
                        </div>
                        ";
                    }
                    else {
                        echo "
                        <div class='newsimgdiv'>
                            <a href='news.php?newsId={$data_chunk['news_id']}' class='hvr-buzz-out'><img src='../img/news/blocker.jpg' alt='...' class='newsimg'></a>
                        </div>
                        ";
                    }
                        echo "
                            </div>
                            <div class='textdiv'>
                                <p class='newstitle' align='center'>{$data_chunk['news_name']}</p>
                                <p class='newstext' align='center'>{$data_chunk['news_preview']}</p>
                                <p class='newsdate'>{$data_chunk['news_createDate']}</p>
                            </div>
                        </div>
                        ";
                    }

                    $leftright_iterator++;
                }

                $leftright_iterator_remains = 3 - $leftright_iterator;

                if($leftright_iterator_remains > 0) {
                    for ($i = 0; $i <= $leftright_iterator_remains; $i++) { 
                        if($leftright_iterator % 2 === 0) {
                            echo "  
                            <div class='newscontainer'>
                                <div class='textdiv'>
                                    <p class='newstitle' align='center'>News Of The Future</p>
                                    <p class='newstext' align='center'>Here must be new news...<br>...<br>...<br>IF WE ONLY HAD NEW ONES<br>But don't worry, there will be news soon. We Promise!!!</p>
                                    <p class='newsdate'>00.00.0000</p>
                                </div>
                                <div class='newsimgdiv'>
                                    <a href='' class='hvr-buzz-out'><img src='../img/news/blocker-closed.jpg' alt='...' class='newsimg'></a>
                                </div>
                            </div>
                            ";
                        }
                        else if ($leftright_iterator % 2 === 1) {
                            echo "  
                            <div class='newscontainer'>
                            ";
                            if($data_chunk['news_image'] != "") {
                                echo "
                                    <div class='newsimgdiv'>
                                        <a href='' class='hvr-buzz-out'><img src='../img/news/blocker-closed.jpg' alt='...' class='newsimg'></a>
                                    </div>
                                ";
                            }
                            else {
                                echo "
                                    <div class='newsimgdiv'>
                                        <a href='' class='hvr-buzz-out'><img src='../img/news/blocker-closed.jpg' alt='...' class='newsimg'></a>
                                    </div>
                                ";
                            }
                            echo "
                                <div class='textdiv'>
                                    <p class='newstitle' align='center'>News Of The Future</p>
                                    <p class='newstext' align='center'>Here must be new news...<br>...<br>...<br>IF WE ONLY HAD NEW ONES<br>But don't worry, there will be news soon. We Promise!!!</p>
                                    <p class='newsdate'>00.00.0000</p>
                                </div>
                            </div>
                            ";
                        }
                        $leftright_iterator++;
                    }
                }
            } else if($table === 5) {
                $leftright_iterator = 0;
                foreach($data as $data_chunk) {
                    $user_where = ' WHERE user_id = '. $data_chunk['news_author'].'';
                    $user = "SELECT login, nickname, role
                            FROM users
                            $user_where";

                    $user_statement = $pdo->query($user);
                    $user_data = $user_statement->fetchAll(PDO::FETCH_ASSOC);

                    foreach($user_data as $user_data_chunk) {
                        if($user_data_chunk['nickname'] != ""){
                            $user_from_id = $user_data_chunk['nickname'];
                        }
                        else {
                            $user_from_id = $user_data_chunk['login'];
                        }
                        $user_role_from_id = $user_data_chunk['role'];
                    }

                    if($data_chunk['news_image'] != "") {
                        echo "
                        <div class='newsimgdiv'>
                            <a href='' class='hvr-bob'><img src='../img/news/{$data_chunk['news_image']}' alt='...'' class='newsimg' id='newsimg'></a>
                        </div>
                        ";
                    }
                    else {
                        echo "
                        <div class='newsimgdiv'>
                            <a href='' class='hvr-bob'><img src='../img/news/blocker-closed.jpg' alt='...'' class='newsimg' id='newsimg'></a>
                        </div>
                        ";
                    }

                    echo "
                    <p align='center' class='maintexttitle' style='margin-bottom: 5px; margin-top: 5px; color: white;'>{$data_chunk['news_name']}</p>
                    ";

                    if($user_role_from_id == 1) {
                        echo "<h1 align='center' class='titlemoto' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['news_author']}' class='user-link-user'>$user_from_id</a></h1>";
                    } else if ($user_role_from_id == 2) {
                        echo "<h1 align='center' class='titlemoto' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['news_author']}' class='user-link-moderator'>$user_from_id</a></h1>";
                    } else if ($user_role_from_id == 3) {
                        echo "<h1 align='center' class='titlemoto' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['news_author']}' class='user-link-developer'>$user_from_id</a></h1>";
                    }
                    else if ($user_role_from_id == 4) {
                        echo "<h1 align='center' class='titlemoto' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['news_author']}' class='user-link-star'>$user_from_id</a></h1>";
                    }
                    else if ($user_role_from_id == 5) {
                        echo "<h1 align='center' class='titlemoto' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['news_author']}' class='user-link-honored-user'>$user_from_id</a></h1>";
                    }
                    else if ($user_role_from_id == 13) {
                        echo "<h1 align='center' class='titlemoto' style='color: white'>By <a href='user_cabinet.php?userId={$data_chunk['news_author']}' class='user-link-secret'>$user_from_id</a></h1>";
                    }
                    $news_text_replace = str_replace(array('\n', '\r'), '</br>', $data_chunk['news_text']);
                    echo "
                    <p align='center' class='maintext' style='margin-bottom: 5px; margin-top: 5px; color: white;'>{$data_chunk['news_createDate']}</p>
                    <p align='center' class='maintext' style='margin-bottom: 5px; margin-top: 5px; color: white;'>{$data_chunk['news_preview']}</p>
                    <div class='bigbr'></div>
                    <hr>
                    <div class='bigbr'></div>
                    <p align='center' class='maintext' style='margin-bottom: 5px; margin-top: 5px; color: white;'>$news_text_replace</p>
                    <br>
                    ";
                }
            }
        }
    }

    function display_profile($current_user_id) {
    global $pdo;

        $sql_fkc_disable = "SET FOREIGN_KEY_CHECKS=0";
        $sql_fkc_enable = "SET FOREIGN_KEY_CHECKS=1";

        $user_id = $_GET['userId'];

        if ($current_user_id === $user_id) {
            $where = ' WHERE user_id = '.$user_id.'';
            $sql = "SELECT *
                    FROM users
                    $where";
        } else if ($current_user_id !== $user_id) {
            $where = ' WHERE user_id = '.$user_id.'';
            $sql = "SELECT *
                    FROM users
                    $where";
        }

        $statement = $pdo->query($sql);
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        if($data) {
            if($current_user_id === $user_id) {
                foreach($data as $data_chunk) {
                    
                }
            }
            else if($current_user_id !== $user_id) {
                foreach($data as $data_chunk) {
                    
                }
            }
        }
    }

    function input_fixer($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function isValidEmail($string) {
        if(is_array($string)) {
            return [
                "is_valid" => false,
                "error_message" => "Email Can't Be Array"
            ]; 
        }
        if (empty($string)) {
            return [
                "is_valid" => false,
                "error_message" => "Email Is Required"
            ];
        } 
        else {
            if(strlen($string) > 64) {
                return [
                    "is_valid" => false,
                    "error_message" => "Email Can't Be Bigger Than 64 Symbols"
                ];
            }
            else if(strlen($string) < 6) {
                return [
                    "is_valid" => false,
                    "error_message" => "Email Can't Be Shorter Than 6 Symbols"
                ];
            }
            if(!filter_var($string, FILTER_VALIDATE_EMAIL)) { 
                return [
                    "is_valid" => false,
                    "error_message" => "Email Is Invalid"
                ];
            }

            return [
                "is_valid" => true,
                "error_message" => "Email Is OK!"
            ];
        }
    }

    function sign_up($error_id) {
        $email = $login = $password = $password_confirm = "";
    	$email_error =$login_error = $password_error = $password_confirm_error = "";

    	if (isset($_POST['sign_up'])) {
            $validationResult = isValidEmail($_POST["email"]);
            if($validationResult['is_valid']) {
                $email = input_fixer($_POST["email"]);
            } else {
                $email_error = $validationResult["error_message"];
            }

	        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

        	if (empty($_POST["login"])) {
            	$login_error = "Login Is Required";
        	} 
        	else {
	            if(strlen($_POST["login"]) > 32) {
	                $login_error = "Login Can't Be Bigger Than 32 Symbols";
	            }
	            else if(strlen($_POST["login"]) < 6) {
	                $login_error = "Login Can't Be Shorter Than 6 Symbols";
	            }
	            else {
	                 $login = input_fixer($_POST["login"]);
	            }
	        }

	        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

	        if (empty($_POST["password"])) {
	            $password_error = "Password Is Required";
	        } 
	        else {
	            if(strlen($_POST["password"]) < 8) {
	                $password_error = "Password Can't Be Shorter Than 8 Symbols";
	            }
	            else {
	                 $password = input_fixer($_POST["password"]);
	            }
	        }

	        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

	        if (empty($_POST["password_confirm"])) {
	            $password_confirm_error = "Password Confirmation Is Required";
	        } 
	        else {
	            if(strlen($_POST["password_confirm"]) < 8) {
	                $password_error = "Password Confirm Can't Be Shorter Than 8 Symbols";
	            }
	            else if($_POST["password_confirm"] != $_POST["password"]) {
	                $password_confirm_error = "Password Confirmation Is Not The Same As The Password";
	            }
	            else {
	                 $password_confirm = input_fixer($_POST["password_confirm"]);
	            }
	        }

	        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
	        global $pdo;

	        $sql_fkc_disable = "SET FOREIGN_KEY_CHECKS=0";
	        $sql_fkc_enable = "SET FOREIGN_KEY_CHECKS=1";

	        $sql = "SELECT * FROM users WHERE login = '$login'";
	        $statement = $pdo->query($sql);

	        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

	        if(!empty($data)) {
	            $login_error = "Login Is Already In Use";
	        }
	        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

	        if ($login_error == "" && $email_error == "" && $password_error == "" && $password_confirm_error == "") {
	            $password = md5($password);
	            $registration_date = date('Y-m-d H:i:s');

	            $sql = "INSERT INTO users (login, email, password, user_photo, about_me, registration_date) VALUES ('$login', '$email', '$password', ' ', ' ', '$registration_date')";

		        error_log($sql_fkc_disable);
		        $pdo->exec($sql_fkc_disable);
		        error_log($sql);
		        $pdo->exec($sql);
		        error_log($sql_fkc_enable);
		        $pdo->exec($sql_fkc_enable);

            ?>
            <script type="text/javascript">
              window.location.href = 'sign_in.php';
            </script>
            <?php
	        }
            else {
                if($login_error != "" && $error_id == 1) {
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$login_error</h1>";
                }
                else if ($email_error != "" && $error_id == 2) {
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$email_error</h1>";
                }
                else if ($password_error != "" && $error_id == 3) {
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$password_error</h1>";
                }
                else if ($password_confirm_error != "" && $error_id == 4) {
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$password_confirm_error</h1>";
                }
            }
	    }
    }

    function saveImageToFile($data, $userId)
    {
        if (preg_match('/^data:image\/(\w+);base64,/', $data, $type)) {
            $data = substr($data, strpos($data, ',') + 1);
            $type = strtolower($type[1]); // jpg, png, gif

            if (!in_array($type, [ 'jpg', 'jpeg', 'gif', 'png' ])) {
                return ["success" => false, "extention" => false, "error" => "Bad Type Of Photo"];
                //return "Bad Type Of Photo";
                //throw new \Exception('invalid image type');
            }
            $data = str_replace( ' ', '+', $data );
            $data = base64_decode($data);

            if ($data === false) {
                return ["success" => false, "extention" => false, "error" => "Unable To Save The File"];
                //return "Unable To Save The File";
                //throw new \Exception('base64_decode failed');
            }
        } else {
            return ["success" => false, "extention" => false, "error" => "Invalid"];
            //return "Invalid";
            //throw new \Exception('did not match data URI with image data');
        }

        unlink("../img/profiles/user_".$userId.".jpg");
        unlink("../img/profiles/user_".$userId.".jpeg");
        unlink("../img/profiles/user_".$userId.".png");
        unlink("../img/profiles/user_".$userId.".gif");

        //File Update Was Failed

        file_put_contents("../img/profiles/user_".$userId.".{$type}", $data);

        return ["success" => true, "extention" => $type, "error" => false];
        
    }

    function update_info() {
        global $pdo;

        $nickname = $about_me = $email = $country = $gender = $birthday =  $user_photo = $hide_country = $hide_email = $hide_gender = $hide_birthday = "";
        $nickname_error = $about_me_error = $email_error = $country_error = $gender_error = $birthday_error = $user_photo_error = "";

        $login_key = $_COOKIE["login_key"];

        $sql = "SELECT * FROM users WHERE login_key = '$login_key' LIMIT 1";
        $statement = $pdo->query($sql);

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        if(empty($data)) {
            $nickname_error = "There Is No User With That Login Key";
            $about_me_error = "There Is No User With That Login Key";
            $email_error = "There Is No User With That Login Key";
            $country_error = "There Is No User With That Login Key";
            $gender_error = "There Is No User With That Login Key";
            $birthday_error = "There Is No User With That Login Key";
            $user_photo_error = "There Is No User With That Login Key";
        }
        else {
            foreach($data as $data_chunk) {
                $user_id = $data_chunk['user_id'];
                $user_photo_checker = $data_chunk['user_photo'];
            }
            if (isset($_POST['update_info'])) {

                if (empty($_POST["nickname"]) || $_POST["nickname"] == "-" || $_POST["nickname"] == "") {
                    $nickname_error = "Better Fill Nickname, For Forum. Pleaaase 0x0";
                } 
                else {
                    if(strlen($_POST["nickname"]) > 32) {
                        $nickname_error = "Nickname Can't Be Bigger Than 32 Symbols";
                    }
                    else if(strlen($_POST["nickname"]) < 3) {
                        $nickname_error = "Nickname Can't Be Shorter Than 3 Symbols";
                    }
                    else {
                        $nickname = input_fixer($_POST["nickname"]);
                    }
                }

                //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

                if (empty($_POST["about_me"]) || $_POST["about_me"] == "-" || $_POST["about_me"] == "") {
                    //$about_me_error = "About Me Is Required";
                    $about_me = "";
                } 
                else {
                    $about_me = input_fixer($_POST["about_me"]);
                }

                //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

                if (empty($_POST["email"]) || $_POST["email"] == "-" || $_POST["email"] == "") {
                    $email_error = "Email Is Required";
                } 
                else {
                    if(strlen($_POST["email"]) > 64) {
                        $email_error = "Email Can't Be Bigger Than 64 Symbols";
                    }
                    else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                        $email_error = "Email Is Invalid";
                    }
                    else {
                        $email = input_fixer($_POST["email"]);
                    }
                }

                //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

                if (empty($_POST["country"]) || $_POST["country"] == "-" || $_POST["country"] == "") {
                    //$country_error = "Country Is Required";
                    $country = "";
                } 
                else {
                    $country = input_fixer($_POST["country"]);
                }

                //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

                if (empty($_POST["gender"]) || $_POST["gender"] == "-" || $_POST["gender"] == "") {
                    //$gender_error = "Gender Is Required";
                    $gender = "";
                } 
                else {
                    $gender = input_fixer($_POST["gender"]);
                }

                //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

                if (empty($_POST["birthday"])) {
                    $birthday_error = "Birthday Must Be Default (0000-00-00 00:00:00) Or 1000-01-01 00:00:00' to '9999-12-31 23:59:59";
                } 
                else {
                    //$pattern = '/^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/';
                    $pattern = '/^(0000-00-00 00:00:00|1000-01-01 00:00:00|(?!0000)[1-9]\d{3}-(?:0[1-9]|1[0-2])-(?:0[1-9]|[12]\d|3[01]) (?:[01]\d|2[0-3]):(?:[0-5]\d):(?:[0-5]\d))$/';
                    if(!preg_match($pattern, $_POST["birthday"])) {
                        $birthday_error = "Birthday Must Be Default (0000-00-00 00:00:00) Or 1000-01-01 00:00:00' to '9999-12-31 23:59:59";
                    }
                    else {
                         $birthday = input_fixer($_POST["birthday"]);
                         date("Y-m-d H:i:s", strtotime($birthday));
                    }
                }

                //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

                $user_photo_file = $user_photo_checker;

                if(empty($user_photo_file)) {
                    if (empty($_POST["user_photo_hidden"])) {
                        $user_photo_error = "Photo Is Empty??? How???";
                    } 
                    else if (isset($_POST['user_photo_hidden'])) {
                        if (strlen($_POST['user_photo_hidden']) > 1) {
                            $savedFile = saveImageToFile($_POST["user_photo_hidden"], $user_id);
                            if($savedFile["success"] !== false) {
                                $user_photo_file = "user_".$user_id.".".$savedFile["extention"];
                            }
                            else {
                                $user_photo_error = $savedFile["error"];
                            }
                        }
                    }
                    else if($_POST["user_photo_hidden"] == "U") {
                        $user_photo_file = "user_photo.jpg";
                    }
                }
                else {
                    if (isset($_POST['user_photo_hidden'])) {
                        if (strlen($_POST['user_photo_hidden']) > 1) {
                            $savedFile = saveImageToFile($_POST["user_photo_hidden"], $user_id);
                            if($savedFile["success"] !== false) {
                                $user_photo_file = "user_".$user_id.".".$savedFile["extention"];
                            }
                            else {
                                $user_photo_error = $savedFile["error"];
                            }
                        }
                    }
                    else {
                        $user_photo_file = $user_photo_checker;
                    }
                }

                //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

                if(isset($_POST['hide_email'])) {
                    $hide_email = 1;
                }
                else {
                    $hide_email = 0;
                }

                if(isset($_POST['hide_country'])) {
                    $hide_country = 1;
                }
                else {
                    $hide_country = 0;
                }

                if(isset($_POST['hide_gender'])) {
                    $hide_gender = 1;
                }
                else {
                    $hide_gender = 0;
                }

                if(isset($_POST['hide_birthday'])) {
                    $hide_birthday = 1;
                }
                else {
                    $hide_birthday = 0;
                }

                //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

                $sql_fkc_disable = "SET FOREIGN_KEY_CHECKS=0";
                $sql_fkc_enable = "SET FOREIGN_KEY_CHECKS=1";

                $sql = "SELECT * FROM users WHERE nickname = '$nickname' AND user_id <> '$user_id'";
                $statement = $pdo->query($sql);

                $data = $statement->fetchAll(PDO::FETCH_ASSOC);

                if(!empty($data)) {
                    $nickname_error = "Nickname Is Already In Use";
                }
                //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

                if ($nickname_error == "" && $about_me_error == "" && $email_error == "" && $country_error == "" && $gender_error == "" && $birthday_error == "" && $user_photo_error == "") {

                    $sql_update = "UPDATE users SET email = '$email' , user_photo = '$user_photo_file', nickname = '$nickname', country = '$country', gender = '$gender', birthday = '$birthday', about_me = '$about_me', hide_country = '$hide_country', hide_email = '$hide_email', hide_gender = '$hide_gender', hide_birthday = '$hide_birthday' WHERE user_id = '$user_id'";

                    error_log($sql_fkc_disable);
                    $pdo->exec($sql_fkc_disable);
                    error_log($sql_update);
                    $pdo->exec($sql_update);
                    error_log($sql_fkc_enable);
                    $pdo->exec($sql_fkc_enable);

                    ?>
                    <script type="text/javascript">
                        window.location.href = 'user_cabinet.php?userId=<?php echo $user_id ?>';
                    </script>
                    <?php
                }
                else {
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$nickname_error</h1>";
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$about_me_error</h1>";
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$email_error</h1>";
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$country_error</h1>";
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$gender_error</h1>";
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$birthday_error</h1>";
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$user_photo_error</h1>";
                }
            }
        }
    }

    function sign_in($error_id) {
    	$login = $password = "";
    	$login_error = $password_error = "";

	    if (isset($_POST['sign_in'])) {
	        if (empty($_POST["login"])) {
	            $login_error = "Login Is Required";
	        } 
	        else {
	            if(strlen($_POST["login"]) > 32) {
	                $login_error = "Login Can't Be Bigger Than 32 Symbols";
	            }
	            else if(strlen($_POST["login"]) < 6) {
	                $login_error = "Login Can't Be Shorter Than 6 Symbols";
	            }
	            else {
	                 $login = input_fixer($_POST["login"]);
	            }
	        }

	        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

	        if (empty($_POST["password"])) {
	            $password_error = "Password Is Required";
	        } 
	        else {
	            if(strlen($_POST["password"]) < 8) {
	                $password_error = "Password Can't Be Shorter Than 8 Symbols";
	            }
	            else {
	                 $password = input_fixer($_POST["password"]);
	                 $password = md5($password);
	            }
	        }

	        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

	        if($login_error == "" && $password_error == "") {
	            global $pdo;

	            $sql_fkc_disable = "SET FOREIGN_KEY_CHECKS=0";
	            $sql_fkc_enable = "SET FOREIGN_KEY_CHECKS=1";

	            $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
	            $statement = $pdo->query($sql);

	            $data = $statement->fetchAll(PDO::FETCH_ASSOC);

	            if(empty($data)) {
	                $login_error = "There Is No User With That Data";
	                $password_error = "There Is No User With That Data";
	            }
	            else {
	                foreach($data as $data_chunk) {
	                   $user_id = $data_chunk['user_id'];
	                }
	            }
	        }
	        //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

	        if ($login_error == "" && $password_error == "") {

            ?>
            <script type="text/javascript">
              window.location.href = 'sign_in_redirect.php?userId=' + <?php echo $user_id ?>;
            </script>
            <?php

	        } else {
                if($login_error != "" && $error_id == 1) {
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$login_error</h1>";
                } else if ($password_error != "" && $error_id == 2) {
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$password_error</h1>";
                }
            }
	    }
    }

    function theme_adder() {
        $theme_name = $comment_text = "";
        $theme_name_error = $comment_text_error = "";

        if (isset($_POST['theme_add'])) {
            if (empty($_POST["theme_name"])) {
                $theme_name_error = "Theme Name Is Required";
            } 
            else {
                if(strlen($_POST["theme_name"]) > 255) {
                    $theme_name_error = "Theme Name Can't Be Bigger Than 255 Symbols";
                }
                else {
                     $theme_name = input_fixer($_POST["theme_name"]);
                }
            }

            //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

            if (empty($_POST["comment_text"])) {
                $comment_text_error = "Theme Text Is Required";
            } 
            else {
                if(strlen($_POST["comment_text"]) < 20) {
                    $comment_text_error = "Theme Text Can't Be Shorter Than 20 Symbols";
                }
                else {
                     $comment_text = input_fixer($_POST["comment_text"]);
                }
            }

            //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

            if($theme_name_error == "" && $comment_text_error == "") {
                global $pdo;

                $login_key = $_COOKIE["login_key"];

                $sql = "SELECT * FROM users WHERE login_key = '$login_key' LIMIT 1";
                $statement = $pdo->query($sql);

                $data = $statement->fetchAll(PDO::FETCH_ASSOC);

                if(empty($data)) {
                    $theme_name_error = "There Is No User With That Login Key";
                    $comment_text_error = "There Is No User With That Login Key";
                }
                else {
                    foreach($data as $data_chunk) {
                        $theme_branch = $_GET['branchId'];
                        $theme_author = $comment_author = $data_chunk['user_id'];
                        $theme_createKey = createKey_creator_theme();
                        $comment_createKey = createKey_creator_comment();
                        $create_date = date('Y-m-d H:i:s');

                        $sql_fkc_disable = "SET FOREIGN_KEY_CHECKS=0";
                        $sql_fkc_enable = "SET FOREIGN_KEY_CHECKS=1";

                        $sql_1 = "INSERT INTO themes (theme_name, theme_author, theme_createDate, theme_branch, theme_createKey) VALUES ('$theme_name', '$theme_author', '$create_date', '$theme_branch', '$theme_createKey')";

                        error_log($sql_fkc_disable);
                        $pdo->exec($sql_fkc_disable);
                        error_log($sql_1);
                        $pdo->exec($sql_1);

                        $sql_between = "SELECT * FROM themes WHERE theme_createKey = '$theme_createKey' LIMIT 1";
                        $statement_between = $pdo->query($sql_between);

                        $data_between = $statement_between->fetchAll(PDO::FETCH_ASSOC);

                        if(empty($data_between)) {
                            $theme_name_error = "Theme Creation Error";
                            $comment_text_error = "Theme Creation Error";
                        }
                        else {
                            foreach($data_between as $data_chunk_between) {
                                $comment_theme = $data_chunk_between['theme_id'];

                                $sql_2 = "INSERT INTO comments (comment_text, comment_author, comment_createDate, comment_theme, comment_isTopTheme, comment_createKey) VALUES ('$comment_text', '$comment_author', '$create_date', '$comment_theme', 1, '$comment_createKey')";

                                error_log($sql_2);
                                $pdo->exec($sql_2);
                                error_log($sql_fkc_enable);
                                $pdo->exec($sql_fkc_enable);

                                $sql_final = "SELECT * FROM comments WHERE comments = '$comment_createKey'LIMIT 1";
                                $statement_final = $pdo->query($sql_final);

                                $data_final = $statement->fetchAll(PDO::FETCH_ASSOC);

                                if(empty($data)) {
                                    $theme_name_error = "Comment Creation Error";
                                    $comment_text_error = "Comment Creation Error";
                                }
                                else {
                                    ?>
                                        <script type="text/javascript">
                                          window.location.href = 'comments.php?themeId=' + <?php echo $comment_theme ?>;
                                        </script>
                                    <?php
                                }
                            }
                        }
                    }
                }
            } else {
                if($theme_name_error != "") {
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$theme_name_error</h1>";
                } else if ($comment_text_error != "") {
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$comment_text_error</h1>";
                }
            }
        }
    }

    function theme_checker($error_id) {
        $theme_name = $comment_text = "";
        $theme_name_error = $comment_text_error = "";

        if (isset($_POST['theme_add'])) {
            if (empty($_POST["theme_name"])) {
                $theme_name_error = "Theme Name Is Required";
            } 
            else {
                if(strlen($_POST["theme_name"]) > 255) {
                    $theme_name_error = "Theme Name Can't Be Bigger Than 255 Symbols";
                }
                else {
                     $theme_name = input_fixer($_POST["theme_name"]);
                }
            }

            //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

            if (empty($_POST["comment_text"])) {
                $comment_text_error = "Theme Text Is Required";
            } 
            else {
                if(strlen($_POST["comment_text"]) < 20) {
                    $comment_text_error = "Theme Text Can't Be Shorter Than 20 Symbols";
                }
                else {
                     $comment_text = input_fixer($_POST["comment_text"]);
                }
            }

            //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

            if($theme_name_error == "" && $comment_text_error == "") {
                return true;
            } else {
                if($theme_name_error != "" && $error_id == 1) {
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$theme_name_error</h1>";
                } else if ($comment_text_error != "" && $error_id == 2) {
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$comment_text_error</h1>";
                }
                return false;
            }
        }
    }

    function comment_adder() {
        $comment_text = "";
        $comment_text_error = "";

        if (isset($_POST['comment_add'])) {

            if (empty($_POST["comment_text"])) {
                $comment_text_error = "Theme Text Is Required";
            } 
            else {
                if(strlen($_POST["comment_text"]) < 20) {
                    $comment_text_error = "Comment Text Can't Be Shorter Than 20 Symbols";
                }
                else {
                     $comment_text = input_fixer($_POST["comment_text"]);
                }
            }

            //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

            if($comment_text_error == "") {
                global $pdo;

                $login_key = $_COOKIE["login_key"];

                $sql = "SELECT * FROM users WHERE login_key = '$login_key' LIMIT 1";
                $statement = $pdo->query($sql);

                $data = $statement->fetchAll(PDO::FETCH_ASSOC);

                if(empty($data)) {
                    $comment_text_error = "There Is No User With That Login Key";
                }
                else {
                    foreach($data as $data_chunk) {
                        $comment_theme = $_GET['themeId'];
                        $comment_author = $data_chunk['user_id'];
                        $comment_createKey = createKey_creator_comment();
                        $create_date = date('Y-m-d H:i:s');

                        $sql_fkc_disable = "SET FOREIGN_KEY_CHECKS=0";
                        $sql_fkc_enable = "SET FOREIGN_KEY_CHECKS=1";

                        $sql_1 = "INSERT INTO comments (comment_text, comment_author, comment_createDate, comment_theme, comment_isTopTheme, comment_createKey) VALUES ('$comment_text', '$comment_author', '$create_date', '$comment_theme', 0, '$comment_createKey')";

                        error_log($sql_1);
                        $pdo->exec($sql_1);
                        error_log($sql_fkc_enable);
                        $pdo->exec($sql_fkc_enable);

                        $sql_final = "SELECT * FROM comments WHERE comments = '$comment_createKey'LIMIT 1";
                        $statement_final = $pdo->query($sql_final);

                        $data_final = $statement->fetchAll(PDO::FETCH_ASSOC);

                        if(empty($data)) {
                            $comment_text_error = "Comment Creation Error";
                        }
                        else {
                            ?>
                                <script type="text/javascript">
                                    window.location.href = 'comments.php?themeId=' + <?php echo $comment_theme ?>;
                                </script>
                            <?php
                        }
                    }
                }
            } else {
                if ($comment_text_error != "") {
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$comment_text_error</h1>";
                }
            }
        }
    }

    function sign_out() {

        setcookie('login_key', '', time() - 2592000, '/');
        unset($_COOKIE["login_key"]);

        ?>
        <script type="text/javascript">
            window.location.href = 'forum.php';
        </script>
        <?php
    }
    function login_key_creator() {
        $key_symbols = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        $login_key = '';

        for ($i = 0; $i < 10; $i++) {
            $randomIndex = rand(0, strlen($key_symbols) - 1);
            $symbol = $key_symbols[$randomIndex];
            $login_key .= $symbol;
        }

        global $pdo;

        $sql_fkc_disable = "SET FOREIGN_KEY_CHECKS=0";
        $sql_fkc_enable = "SET FOREIGN_KEY_CHECKS=1";

        $sql = "SELECT * FROM users WHERE login_key = '$login_key'";
        $statement = $pdo->query($sql);

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($data)) {
            login_key_creator();
        }
        else {
            setcookie('login_key', $login_key, time() + 2592000, '/');
            return $login_key;
        }
    }
    function createKey_creator_theme() {
        $key_symbols = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        $createKey = '';

        for ($i = 0; $i < 10; $i++) {
            $randomIndex = rand(0, strlen($key_symbols) - 1);
            $symbol = $key_symbols[$randomIndex];
            $createKey .= $symbol;
        }

        global $pdo;

        $sql_fkc_disable = "SET FOREIGN_KEY_CHECKS=0";
        $sql_fkc_enable = "SET FOREIGN_KEY_CHECKS=1";

        $sql = "SELECT * FROM themes WHERE theme_createKey = '$createKey'";
        $statement = $pdo->query($sql);

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($data)) {
            createKey_creator();
        }
        else {
            return $createKey;
        }
    }
    function createKey_creator_comment() {
        $key_symbols = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        $createKey = '';

        for ($i = 0; $i < 10; $i++) {
            $randomIndex = rand(0, strlen($key_symbols) - 1);
            $symbol = $key_symbols[$randomIndex];
            $createKey .= $symbol;
        }

        global $pdo;

        $sql_fkc_disable = "SET FOREIGN_KEY_CHECKS=0";
        $sql_fkc_enable = "SET FOREIGN_KEY_CHECKS=1";

        $sql = "SELECT * FROM comments WHERE comment_createKey = '$createKey'";
        $statement = $pdo->query($sql);

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($data)) {
            createKey_creator();
        }
        else {
            return $createKey;
        }
    }

    function strangers_hand() {
        $strangers_hand_code = "";
        $strangers_hand_code_error = "";
        $strangers_hand_code_false_error = "";

        if (isset($_POST['strangers_hand'])) {

            if (empty($_POST["strangers_hand_code"])) {
                $strangers_hand_code_error = "Are You Testing My Patience?";
                echo "<h1 align='center' class='titlemoto' style='color: #880000'>$strangers_hand_code_error</h1>";
            } 
            else {
                if(strlen($_POST["strangers_hand_code"]) > 6) {
                    $strangers_hand_code_error = "Too Long...";
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$strangers_hand_code_error</h1>";
                }
                else if(strlen($_POST["strangers_hand_code"]) < 6) {
                    $strangers_hand_code_error = "Too Short...";
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$strangers_hand_code_error</h1>";
                }
                else {
                     $strangers_hand_code = input_fixer($_POST["strangers_hand_code"]);
                }
            }

            if($strangers_hand_code != "291370") {
                if(strtolower($strangers_hand_code) == "codex9") {
                    $strangers_hand_code_false_error = "codex9";
                }
                else {
                    $strangers_hand_code_error = "Not Right...";
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$strangers_hand_code_error</h1>";
                    if (!isset($_SESSION['strangers_hand_code_submissions'])) {
                        $_SESSION['strangers_hand_code_submissions'] = 0;
                    }

                    if ($_SESSION['strangers_hand_code_submissions'] < 3) {
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $_SESSION['strangers_hand_code_submissions']++;
                            if ($_SESSION['strangers_hand_code_submissions'] == 1) {
                                $strangers_hand_code_error = "Could You Be Just Another IMPOSTOR!?!?!";
                                echo "<h1 align='center' class='titlemoto' style='color: #880000; font-weight: bold;'>$strangers_hand_code_error</h1>";
                            }
                            else if($_SESSION['strangers_hand_code_submissions'] == 2) {
                                $strangers_hand_code_error = "You Are Walking... On My EDGE!!!";
                                echo "<h1 align='center' class='titlemoto' style='color: #880000; font-weight: bold;'>$strangers_hand_code_error</h1>";
                            }
                        } 
                        else {

                        }
                    } 
                    else {
                    ?>
                        <script type="text/javascript">
                            window.location.href = 'you_are_fool.php';
                        </script>
                    <?php
                    }
                    $strangers_hand_code_error = "It is Wrong...";
                }
            }
            else {
                unset($_SESSION['strangers_hand_code_submissions']);
                $strangers_hand_code = input_fixer($_POST["strangers_hand_code"]);
            }

            //-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

            if($strangers_hand_code_error == "") {
                global $pdo;

                $login_key = $_COOKIE["login_key"];

                $sql = "SELECT * FROM users WHERE login_key = '$login_key' LIMIT 1";
                $statement = $pdo->query($sql);

                $data = $statement->fetchAll(PDO::FETCH_ASSOC);

                if(empty($data)) {
                    $strangers_hand_code_error = "You Are Not In Our Legion...";
                }
                else {
                    foreach($data as $data_chunk) {
                        $user_id = $data_chunk['user_id'];

                        $sql_fkc_disable = "SET FOREIGN_KEY_CHECKS=0";
                        $sql_fkc_enable = "SET FOREIGN_KEY_CHECKS=1";

                        $sql_update = "UPDATE users SET secret_one_unlocked = 1 WHERE user_id = '$user_id'";

                        error_log($sql_fkc_disable);
                        $pdo->exec($sql_fkc_disable);
                        error_log($sql_update);
                        $pdo->exec($sql_update);
                        error_log($sql_fkc_enable);
                        $pdo->exec($sql_fkc_enable);

                        if($strangers_hand_code_false_error == "") {
                        ?>
                            <script type="text/javascript">
                                window.location.href = 'token_of_trust.php';
                            </script>
                        <?php
                        } else if ($strangers_hand_code_false_error == "codex9") {
                        ?>
                            <script type="text/javascript">
                                window.location.href = 'you_know_what_you_did.php';
                            </script>
                        <?php
                        }
                    }
                }
            } else {
                if ($comment_text_error != "") {
                    echo "<h1 align='center' class='titlemoto' style='color: #880000'>$strangers_hand_code_error</h1>";
                }
            }
        }
    }


?>