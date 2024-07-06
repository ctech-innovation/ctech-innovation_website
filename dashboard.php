<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
</head>
<body id="body">

	<section class="header" id="header">
        <nav id="nav">
            <div class="nav-links" id="nav-links">
                <ul id="ul">
                    <li id="li"> <a id="a" href="index.php">HOME</a> </li>
                    <li id="li"> <a id="a" href="update_users.php">MY PROFILE</a> </li>
                </ul>
            </div>
        </nav>


            
        <div class="container" id="container">
            <div class="box1" id="box1">
                <div class="content" id="content">
                    <img id="img" src="img/stud.jpg" />
                </div>

                <div class="content-edit" id="content-edit">
                    <div class="edit-profile" id="edit-profile">
                    	<?php echo $user_data['first_name'];?>
                	</div>

                    <div class="edit-profile-email" id="edit-profile-email">
                    	<?php echo $user_data['surname'];?>
                	</div>

                    <div class="edit-profile" id="edit-profile">
                    <?php echo $user_data['qualification'];?>
                	</div>

                </div>

                <div class="twobtn" id="twobtn">
                    <a id="a" href="logout.php">LOGOUT</a>
                </div>

            </div>


            <div class="box2" id="box2">
                <div class="title" id="title">
                    <h2 id="h2">REGISTRATION DETAILS</h2>
                    <p id="p">View all the information you have submitted</p>
                </div>

                <!----------Named Section----------------------->

            <form action="update_users.php" method="POST">

                <div class="nms-sec" id="nms-sec">
                    <input type="text" value="<?php echo $user_data['first_name']; ?>" class="txt" id="txt" />
                    <input type="text" value="<?php echo $user_data['surname']; ?>" class="txt" id="txt" />
                </div>

                <!---------Address------------------------------->

                <div class="add-sec" id="add-sec">
                    <input type="text" value="<?php echo $user_data['street']; ?>" class="txt" id="txt" />
                </div>
                <div class="add-sec" id="add-sec">
                    <input type="text" value="<?php echo $user_data['city']; ?>" class="txt" id="txt" />
                </div>
                <div class="add-sec" id="add-sec">
                    <input type="text" value="<?php echo $user_data['state']; ?>" class="txt" id="txt" />
                </div>
                <div class="add-sec" id="add-sec">
                    <input type="text" value="<?php echo $user_data['zipcode']; ?>" class="txt" id="txt" />
                </div>
                <div class="add-sec" id="add-sec">
                    <input type="text" value="<?php echo $user_data['title']; ?>" class="txt" id="txt" />
                </div>


                <!---------Email & Highest Qualification--------->

                <div class="emlH" id="emlh">
                    <input type="email" value="<?php echo $user_data['email']; ?>" class="txt" id="txt" />
                    <input type="text" value="<?php echo $user_data['qualification']; ?>" class="txt" id="txt" />
                </div>

                <!-----------Title "Mr." ---------------------->

                <div class="ttl" id="ttl">
                    
                </div>


                <!---------------Button-------------------------->

                <div class="btn-cntn" id="btn-cntn">
                    <input type="submit" name="update" value="EDIT PROFILE" id="sub" class="sub" id="sub" />

                </div>

                <div id="logout">
                    <h2> <a href="logout.php" id="a">LOGOUT</a> </h2>
                </div>
            </form>

            </div>

        </div>

    </section>

    <style type="text/css">
    	#body{
    		display: flex;
    		min-height: 100vh;
    		background-image: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7)), url(img/banner.png);
    		background-size: cover;
    		background-repeat: no-repeat;
    	}
    	#nav{
    		display: flex;
    		width: 100%;
    		height: 50px;
    		border: none;
    		margin-top: 16px;
    		background-color: :#fff;
    		justify-content: end;
    		align-items: center;
    	}

        #option{
            color:black;
        }

        #logout {
            display: none;
            color: #fff;
            font-size: 18px;
            justify-content: center;

        }

    	#header{
    		min-height: 100vh;
    		width: 100%;
    		position: relative;
    	}
    	#nav-links{
    		flex:1;
    		text-align: right;
    	}
    	#nav-links #ul #li{
    		list-style: none;
    		display:inline-block;
    		padding:8px 12px;
    		position: relative;
    	}
    	#nav-links #ul #li #a{
    		color:#fff;
    		text-decoration: none;
    		font-size: 14px;
    	}
    	#nav-links #ul #li #a:hover{
    		color:#19747E;
    	}

        #title #option{
            color: #000000;
        }

        #select #option{
            color:#000000;
        }

#box{
            display:inline-block;
            width:350px;
            height:590px;
            border: 1px solid #fff;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            position:absolute;
            background-color:rgba(4,9,30,0.7);
        }

        #container{
            display:flex;
            width:100%;
            height:590px;
            background-color:rgba(4,9,30,0.7);
            position:absolute;
            background-repeat:no-repeat;
            padding:10px;
        }

        #box1{
            flex:1;
            margin:5px;
            padding:20px;
            background-color:rgba(4,9,30,0.4);
        }

        #box2{
            flex:2;
            margin:5px;
            padding:20px;
            background-color:rgba(4,9,30,0.4);
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }

        #header #container #box1 #content{
            align-items:center;
            justify-content:center;
            border:2px solid #ff4436;
            margin:auto;
            width:200px;
            height:200px;
            border-radius:50%;
            display:flex;
            overflow:hidden;
        }

        #header #container #box2 #title{
            align-content:center;
            justify-content:center;
            align-items:center;
            text-align:center;
        }

            #header #container #box2 #title #p {
                color: #b5aeae;
            }

            #header #container #box2 #emlh{
                display:flex;
                width:100%;
                height:40px;
                margin:4px;
                align-content:center;
                justify-content:center;
                align-items:center;
            }
                #header #container #box2 #emlh #txt {
                    display: flex;
                    width: 100%;
                    height: 40px;
                    padding-left: 8px;
                    margin: 0 1px;
                    align-content: center;
                    align-items: center;
                    margin-top: 8px;
                    border: 1px solid #fff;
                    background: none;
                    color: #D1E8E2;
                    border-radius:16px;
                }
            #header #container #box2 #ttl{
                display:flex;
                width:100%;
                margin:4px;
            }
                #header #container #box2 #ttl #select {
                    width: 100%;
                    height: 40px;
                    margin: 0 1px;
                    display: flex;
                    margin-top: 4px;
                    background: none;
                    border: 1px solid #fff;
                    color: #D1E8E2;
                    border-radius:16px;
                }

#header #container #box2 #emlh #select {
    display: flex;
    width: 100%;
    height: 40px;
    margin: 0 1px;
    margin-top: 8px;
    background: none;
    border: 1px solid #fff;
    color: #D1E8E2;
    border-radius:16px;
}

            #header #container #box2 #nms-sec{
                width:100%;
                height:40px;
                margin:4px;
                display:flex;
                align-content:center;
                align-items:center;
                justify-content:center;
                
            }

            #header #container #box2 #add-sec{
                width:100%;
                height:40px;
                align-content:center;
                justify-content:center;
                align-items:center;
                margin:4px;
                flex-direction:column;
                
            }

                #header #container #box2 #add-sec #txt {
                    box-sizing: border-box;
                    width: 100%;
                    height: 40px;
                    justify-content: space-between;
                    align-items: center;
                    align-content: center;
                    padding-left: 8px;
                    margin-top: 4px;
                    background: none;
                    border: 1px solid #fff;
                    color: #D1E8E2;
                    border-radius: 16px;
                }

#header #container #box2 #nms-sec #txt {
    width: 100%;
    height: 40px;
    font-weight: 400;
    padding-left: 8px;
    font-size: 14px;
    margin: 0 1px;
    background: none;
    border: 1px solid #fff;
    color: #D1E8E2;
    border-radius: 16px;
}

            #header #container #box2 #title #h2{
                color:#fff;
            }

        #header #container #box1 #content-edit{
            justify-content:center;
            align-items:center;
            align-content:center;
            color:#fff;
            text-align:center;
            margin:16px;
        }

        #header #container #box1 #twobtn{
            display:flex;
            justify-content:center;
            align-items:center;
            height:40px;
            align-content:center;
            margin-left:36px;
            margin-right:36px;

        }

        #header #container #box1 #twobtn #a{
        	color: #fff;
        	text-decoration: none;
        	width: 100%;
        	height:40px;
        	border: 1px solid #fff;
        	text-align: center;
        	align-items: center;
        	align-content: center;
        }

        #header #container #box1 #twobtn #a:hover{
            width: 120px;
            border: 1px solid #19747E;
            transition: 1s;
        }

        #header #container #box1 #twobtn #a:hover::after{
            transition: 1s;
        }

#header #container #box2 #btn-cntn{
    display:flex;
    justify-content:center;
}

    #header #container #box2 #btn-cntn #sub {
        width: 100%;
        height: 40px;
        align-items: center;
        background-color: #19747E;
        cursor:pointer;
        outline:none;
        color:#fff;
        border:1px solid #fff;
        margin-left:8px;
        justify-content:center;
        align-content:center;
        margin-top:16px;
    }

    #sub{
        width: 100%;
        height: 40px;
        align-items: center;
        background-color: #19747E;
        cursor:pointer;
        outline:none;
        color:#fff;
        border:1px solid #fff;
        margin-left:8px;
        justify-content:center;
        align-content:center;
        margin-top:16px;
    }

    #header #container #box2 #btn-cntn #sub::after{
        content:'';
        width:0%;
        height:2px;
        background:#ff4436;
        display:block;
        margin:auto;
        transition:0.5s;
    }

#nav-links ul li:hover::after {
    width: 100%;
}




        #header #container #box2 #btn-cntn #sub:hover {
            width: 30%;
            background-color: #A9D6E5;
            transition:1s;
            color:#000000;
            border:1px solid #000000;
            border-radius:32px;
        }
#header #container #box2 #btn-cntn #sub:hover::after {
    width:100%;
}

#header #container #box1 #twobtn #sub:hover {
    border:2px solid #ff4436;
    transition:1s;
    cursor:pointer;
}



        #header #container #box1 #content-edit #edit-profile-email{
            font-size:14px;
            color:#b5aeae;
            font-weight:100;
        }
        #header #container #box1 #content-edit #edit-profile{
            font-weight:300;
            font-size:20px;
        }

            #header #container #box1 #content #img {
                width: 100%;
                height: 100%;
            }

#header #box #header-box{
    color:#fff;
}

#header #box #header-box #h2{
    margin-top:16px;
    text-align:center;
    font-size:26px;
}
#header #box #header-box #p{
    text-align:center;
    font-size:10px;
    margin-top:8px;
    font-weight:100;
}

#header #box #details{
    margin:10px 18px;
    color:#fff;
    font-size:14px;
    align-content:center;
    text-align:center;
}

#header #box #details #item{
    margin-bottom:8px;
}

#header #box #details #ans{
    margin-bottom:8px;
    font-size:12px;
    color:#808080;
}

#header #box #details #btn{
    align-items:center;
    align-content:center;
    margin-top:16px;
    margin-left:32px;
    margin-right:32px;
}

#header #box #details #btn #sub{
    background:none;
    outline:none;
    width:100%;
    cursor:pointer;
    border:1px solid #fff;
    color:#fff;
    height:40px;
}

#header #box #details #btn #sub:hover{
    background-color:#ff4436;
    color:#fff;
    transition:1s;
}

#header #box #header-box #underlineT{
    border-bottom-style:solid;
    border-color:#fff;
    border-width:1px;
    margin-left:32px;
    margin-right:32px;
}

@media(max-width: 700px) {
        #container #box1 {
        display: none;
    }
    .nav-links ul li {
        display: block;
    }
    #header #container #box1 #content{
            align-items:center;
            justify-content:center;
            border:2px solid #ff4436;
            margin:auto;
            width:100px;
            height:100px;
            border-radius:50%;
            display:flex;
            overflow:hidden;
        }
            #header #container #box1 #twobtn{
            
            justify-content:left;
            border: 1px solid #19747E;
            align-items: stretch;



        }

        #header #container #box1 #twobtn #a{
            color: #fff;
            text-decoration: none;
            border: 1px solid #fff;
            text-align: center;
            align-items: center;
            align-content: center;
            font-size: 14px;
        }

            #logout {
            display: inline-block;
            color: #fff;
            justify-content: center;
        }
        #logout #a{
            display: inline-block;
            color: #ff4436;
            font-size: 16px;
            justify-content: center;
            margin-left: 16px;
        }

}

    </style>

</body>
</html>