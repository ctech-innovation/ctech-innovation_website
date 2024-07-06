<?php
session_start();

include("connection.php");
include("functions.php");

?>

<!DOCTYPE html>
<html id="html" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ctech Innovation</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to external stylesheet -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body id="body">

    <header id="header">
    		<div id="container">
    		<div id="logo">
    			<img id="img" src="img/ct.png"> 
    			<h2 id="h2">CTECH INNOVATION</h2>
    		</div>
    			<div id="nav">
    				<div id="icon"> <i id="i" onclick="showMenu()" class="material-icons">menu</i> </div>
    				<ul id="ul">
    					<li id="li"> <a id="a" href="#home"> HOME </a> </li>
    					<li id="li"> <a id="a" href="#services"> SERVICES </a> </li>
    					<li id="li"> <a id="a" href="#about"> ABOUT </a> </li>
    					<li id="li"> <a id="a" href="#contact"> CONTACT </a> </li>
    				</ul>
    			</div>
    		</div>
    </header>

    <!---------Drawer Section Starts----------------->
    
    <div id="drawer">
    	<div id="close"> 
    		<div id="cl"> <i id="i" onclick="hideMenu()" class="material-icons">close</i> </div>
    	</div>
    	<a id="a" href="#home">HOME</a>
    	<a id="a" href="#services">SERVICES</a>
    	<a id="a" href="#about">ABOUT</a>
    	<a id="a" href="#contact">CONTACT</a>
    </div>
    <!---------Drawer Section Ends------------------->

    <!---------Open POPUP MODAL---------------------->

    <div id="modal">

    	<div id="modal-1">

    		<div id="close"> 
    			<div id="cl"> <i id="i" onclick="hideQuote()" class="material-icons">close</i> </div>
    		</div>
    		<div id="title">
    			<p id="p"> Tell us about your project!<br> Please provide the following details </p>
    		</div>
        	<form method="POST" action="">
            	<div id="cont1">
            		<div id="cont1-space"></div>
            
            		<input type="text" name="project_name" id="text" placeholder="Enter your project name" required><br>
            	
            		<input type="text" name="project_description" id="text" placeholder="Enter your project description" required><br>
            	
            		<input type="text" name="services_required" id="text" placeholder="Enter your requirements" required><br>

            		<input type="text" name="project_timeline" id="text" placeholder="Enter your project timeline" required><br>

            		<input type="text" name="budget_range" id="text" placeholder="Enter your budget range" required><br>

            		<input type="text" name="full_names" id="text" placeholder="Enter your full_names" required><br>

            		<input type="email" name="email" id="text" placeholder="Enter your email" required><br>

            		<input type="text" name="phone" id="text" placeholder="Enter your phone number" required><br>
            	
            		<textarea id="textarea" name="additional_info" required placeholder="Enter any other details you want to provide"></textarea>

            			<div id="btn-cont">
            				<input id="btn" type="submit" name="submit" value="Submit">
            			</div>

            	</div>
            </form>

    	</div>

    </div>


    <!---------Close POPUP MODAL--------------------->


    <section id="home">
    	<div id="container">
    		<h2 id="h2">Ctech Innovation - Your partner in innovation <br>& Technology</h2>

    			<div id="par"> <p id="p">we are dedicated to transforming ideas into cutting-edge technological solutions. As a leading provider of IT and web services, we empower businesses with innovative, reliable, and customized technology solutions designed to meet the unique needs of our clients.</p> 
    			</div>

    			<div id="btn-box">
    				<input id="submit" type="submit" name="submit" value="SEE MORE" onclick="window.location.href='#about';">
    				<input id="submit-2" type="submit" name="submit" value="GET QUOTE" onclick="showPopup()">
    			</div>

    			<div id="box-cont">
    				<div id="title">
    					<a id="p" href="#contact">REACH OUT</a>
    				</div>
    			</div>

    	</div>
    </section>

    <div id="group-desktop">
    <section id="services">

          <h2 id="h2">Our Services</h2>
        <div id="container">

            <div id="service">
            	<h3 id="h3">Custom Software Development</h3>
            	<p id="p">Tailored solutions designed to meet specific business need, often including
            	web applications, mobile apps, desktop software, and enterprise solutions.</p>

            </div>
            <div id="service">

               	<h3 id="h3"> Web Development </h3>
               	<p id="p"> Our Expert team creates stunning corporate website, an e-commerce platform, or a dynamic web application, we deliver solutions that captivate and engage. </p>

            </div>
            <div id="service">

                <h3 id="h3"> Mobile App Development </h3>
                <p id="p"> Take your business mobile with our custom mobile app development services. From concept to launch.</p>

            </div>
            <div id="service">

            	<h3 id="h3"> UI/UX Design </h3>
            	<p id="p"> Enhance user satisfaction and retention with our UI/UX design expertise. Our team creates seamless and visually appealing interfaces.</p>

            </div>
        </div>

                <div id="container">
            <div id="service">
            	<h3 id="h3">Technical Support</h3>
            	<p id="p">Providing assistance and troubleshooting services to resolve issues related to software, hardware, or IT infrastructure</p>
            </div>
            <div id="service">
               	<h3 id="h3"> Website Maintainance </h3>
               	<p id="p"> Includes regular updates, bug fixes, and content management to keep websites functioning properly and up-to-date. </p>
            </div>
            <div id="service">
                <h3 id="h3"> Website Hosting </h3>
                <p id="p"> Maintenance of website on a server accessible via internet, provide server space, bandwidth and infrastructure. </p>
            </div>
            <div id="service">
            	<h3 id="h3"> Graphical Design </h3>
            	<p id="p"> Create visual concepts and artwork to communicate messages effectively. designs like logos, posters, brochures, and other marketing material </p>
            </div>
        </div>

    </section>
	</div>


    <!----- SECTION MOBILE----------------------------------------------------------------->
    <div id="group-mobile">
    <section id="services">

          <h2 id="h2">Our Services</h2>
        <div id="container">

            <div id="service">
            	<h3 id="h3">Custom Software Development</h3>
            	<p id="p">Tailored solutions designed to meet specific business need, often including
            	web applications, mobile apps, desktop software, and enterprise solutions.</p>

            </div>
            <div id="service">

               	<h3 id="h3"> Web Development </h3>
               	<p id="p"> Our Expert team creates stunning corporate website, an e-commerce platform, or a dynamic web application, we deliver solutions that captivate and engage. </p>

            </div>
            <div id="service">

                <h3 id="h3"> Mobile App Development </h3>
                <p id="p"> Take your business mobile with our custom mobile app development services. From concept to launch.</p>

            </div>
        </div>

                <div id="container">
            <div id="service">
            	<h3 id="h3">Technical Support</h3>
            	<p id="p">Providing assistance and troubleshooting services to resolve issues related to software, hardware, or IT infrastructure</p>
            </div>
            <div id="service">
               	<h3 id="h3"> Website Maintainance </h3>
               	<p id="p"> Includes regular updates, bug fixes, and content management to keep websites functioning properly and up-to-date. </p>
            </div>
            <div id="service">
                <h3 id="h3"> Website Hosting </h3>
                <p id="p"> Maintenance of website on a server accessible via internet, provide server space, bandwidth and infrastructure. </p>
            </div>
        </div>

        <div id="OurClients">
        	<div id="title">
        		<h2 id="p">Our Clients</h2>
        		<p id="p"> We are proud to collaborate with a diverse range of clients from various industries, each bringing unique needs and opportunities. Our portfolio includes reputable brands and dynamic businesses that trust us to deliver innovative solutions tailored to their specific goals. </p>
        	</div>

        	<div id="body">
        		<div id="body-1">
        			<div id="box1">
        				<img id="img" src="img/mma1.png">
        			</div>
        				<p id="p">MM Apparel</p>
        		</div>
        		<div id="body-1">
        			<div id="box1">
        				<img id="img" src="img/mma2.png">
        			</div>
        				<p id="p">Mags Restaurant</p>
        		</div>
        		<div id="body-1">
        			<div id="box1">
        				<img id="img" src="img/wall4.jpg">
        			</div>
        				<p id="p">Errand45</p>
        		</div>
        		
        	</div>
        	        	<div id="body">
        		<div id="body-1">
        			<div id="box1">
        				<img id="img" src="img/mma3.png">
        			</div>
        				<p id="p">MM Dish Wash</p>
        		</div>
        		<div id="body-1">
        			<div id="box1">
        				<img id="img" src="img/mma6.png">
        			</div>
        				<p id="p">MD Barber</p>
        		</div>
        		<div id="body-1">
        			<div id="box1">
        				<img id="img" src="img/mma5.png">
        			</div>
        				<p id="p">MB Salon</p>
        		</div>
        		
        	</div>

        </div>
        

    </section>
	</div>

    <!------END SECTION MOBILE------------------------------------------------------------->

    <section id="about">
    	
    	<h2 id="h2">Who are we?</h2>
    	<div id="cover-cont">
    	<div id="box-pic">
    		


    	</div>

       		 <div id="container" class="container">
           			 <p id="p">Founded in 2023, Ctech Innovation is a pioneering firm at the forefront of digital transformation and creative solutions. Specializing in software development, we craft cutting-edge applications tailored to meet the diverse needs of modern businesses. Our expertise spans web development, mobile app development, and UI/UX design, ensuring intuitive and seamless user experiences across platforms. In addition to our software prowess, CTech Innovation offers comprehensive services including company registration, personalized poster designs, and bespoke company logos. We are dedicated to fostering innovation and empowering businesses to thrive in an increasingly digital world. At Ctech Innovation, we combine technical excellence with a passion for creativity, delivering solutions that elevate brands and drive sustainable growth.</p>
           			 <br>
           			 <p id="p">Our mission is to empower businesses with innovative solutions that enhance their brand and drive growth.</p>
           			 <br>
           			 <p id="p"><p id="p">We are a fast-growing company, but we have never lost sight of our core values. We believe in collaboration, innovation, and customer satisfaction. We are always looking for new ways to improve our products and services.</p></p>

           			 <div id="main">

           			 		<div id="main1-1">
           			 			<div id="tg1">
           			 				<div id="icon"><i id="i" class="material-icons">star</i></div>
           			 				<p id="p1">Software Development</p>
           			 			</div>
           			 			<p id="p"> HTML, CSS, Javascript, PHP, MYSQL, Visual Studio</p>
           			 		</div>

           			 		<div id="main2-2">
           			 			<div id="tg2">
           			 				<div id="icon"><i id="i" class="material-icons">settings</i></div>
           			 				<p id="p2">Technical Support</p>
           			 			</div>
           			 			<p id="p"> LAN & Desktop Support together with troubleshooting basic IT Issues </p>
           			 		</div>

           			 </div>		
       		</div>
       </div>
    </section>

    <section id="contact">
    	<h2 id="h2">Get in touch with us</h2>
        <div id="container" class="container">

        	<form method="POST" action="save_contact.php">

            	<div id="cont1">

            		<div id="cont1-space"></div>
            
            		<input type="text" name="firstname" id="text" placeholder="Enter your first name" required><br>
            	
            		<input type="text" name="lastname" id="text" placeholder="Enter your last name" required><br>
            	
            		<input type="email" name="email" id="text" placeholder="Enter your email" required><br>
            	
            		<textarea id="textarea" name="message" required placeholder="Enter your message"></textarea>

            			<div id="btn-cont">
            				<input id="btn" type="submit" name="submit" value="Submit">
            			</div>

            	</div>

            </form>

            <div id="cont2">
            	<h3 id="h3">Have any question?</h3>

            	<div id="header1">
            		<div id="header1-1">
            			
           			 	<p id="p1"> Phone: +27 780 219 816</p>
            		</div>
            		<div id="header2-2">
            			
           			 	<p id="p1">Email: info@ctech-innovation.co.za</p>
            		</div>
            		<div id="header3-3">
            			
           			 	<p id="p1">Website: www.ctech-innovation.co.za</p>
            		</div>
            		<div id="header3-3">
            			
           			 	<p id="p1">Address: 257 Kopanong Section<br> Tembisa <br> 1632 <br> South Africa </p>
            		</div>
            		<p id="p">Reach Out to us via Social Media</p>
            		<div id="social-media">
            			<div id="whatsapp">
            				<div id="icon"><i id="i" class="material-icons">call</i></div>
            			</div>
            			<div id="facebook">
            				<div id="icon"><i id="i" class="material-icons">facebook</i></div>
            			</div>
            			<div id="telegram">
            				<div id="icon"><i id="i" class="material-icons">telegram</i></div>
            			</div>
            		</div>

            	</div>

            </div>

            	<div id="cont3">
            		<img id="img" src="img/wall4.jpg">
            	</div>

        </div>
    </section>

    <footer id="footer">
        <div class="container" id="container">
            <p>&copy; 2024 Ctech Innovation. All rights reserved.</p>
        </div>
    </footer>



<style type="text/css">

	#header {
    background-color: #f5f5f5;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    position: fixed;
    width: 100%;
    z-index: 1000;

}

#body #modal{
	display: none;
	position: fixed;
	z-index: 1;
	padding-top: 50px;
	left:0;
	top: 0;
	width: 100%;
	height: 100%;
	overflow: auto;
	background-color: rgb(0, 0, 0);
	background-color: rgba(1, 0, 0, 0.7);
}
#home #container #box-cont{
	display: flex;
	width: 100%;
	justify-content: center;
	align-items: center;
	margin-top: 16px;
}
#home #container #box-cont #title{
	justify-content: center;
	align-items: center;
}
#home #container #box-cont #title #p{
	text-align: center;
	color: #fff;
	text-decoration: underline;
}

#body #modal #modal-1{
	width: 100%;
	height: 1450px;
	background: ;
	margin-top: 150px;
	background: #D3D3D3;
	justify-content: center;
	align-items: center;
	border-top-right-radius: 16px;
	border-top-left-radius: 16px;
}

#body #modal #modal-1 #cont1{
	padding: 32px;
}

#modal #modal-1 #cont1 #text{
	width:100%;
    height: 80px;
    font-size: 14px;
    padding:0 25px;
    margin-bottom: 16px;
    border-radius: 30px;
    border:none;
    box-shadow: 0 5px 10px 1px rgba(0,0,0,0.05);
    outline:none;
    transition: .3s;
}
#modal #modal-1 #cont1 #textarea{
	width:100%;
    height: 80px;
    font-size: 14px;
    padding:0 25px;
    margin-bottom: 16px;
    border-radius: 30px;
    border:none;
    box-shadow: 0 5px 10px 1px rgba(0,0,0,0.05);
    outline:none;
    transition: .3s;
    padding-top: 16px;
}

#body #modal #modal-1 #cont1 #btn-cont #btn{
	width:100%;
    height:80px;
   	background: linear-gradient(135deg, #ffffff, #0F4C81, #4B0082, #000000);
    border:none;
    border-radius: 30px;
    cursor:pointer;
    transition: .3s;
    font-size: 16px;
    color: #fff;
}

#body #modal #modal-1 #cont1 #btn-cont #btn:hover{
	transform: scale(1.05, 1);
}

#body #modal #modal-1 #title{

	justify-content: center;
	align-items: center;
	margin-bottom: 16px;
}
#body #modal #modal-1 #title #p{
	font-size: 32px;
	text-align: center;
	margin-top: 16px;
	padding: 8px;
}

#body #modal #modal-1 #close{
	display: flex;
	justify-content: right;
	align-items: right;
	width: 100%;
	height: 40px;
}
#body #modal #modal-1 #close #cl{
	margin-top: 16px;
	margin-right: 16px;
	cursor: pointer;
}
#body #modal #modal-1 #close #cl #i{
	font-size: 44px;
}

#header #nav #icon{
	display: none;
}

#group-mobile{
	display: none;
}

#body{
	width: 100%;
}
#body #drawer{
		display: none;
		position: fixed;
		left: -300px;
		width: 300px;
		height: 100%;
		background: linear-gradient(135deg, #ffffff, #0F4C81, #4B0082, #000000);
		transition: left 0.3s ease;
		z-index: 1000;
		padding-top: 50px;
}

#logo{
	width:250px;
	height: 50px;
	margin-left: 16px;
	display: flex;
	align-items: center;
}
#logo #img{
	width:70px;
	height: 70px;
}
#logo #h2{
	margin-left: 8px;
	color: #000000;
	font-weight: 100;
	text-decoration: none;
	font-size: 18px;
	letter-spacing: 2px;
}

#nav #ul{
	list-style-type: none;
	display: flex;
}
#header #container{
	display: flex;
	justify-content: space-between;
	align-items: center;
	width: 100%;
}

#header #container #nav #ul #li #a{
	text-decoration: none;
	color: #000000;
	transition: color 0.3s ease;
	cursor: pointer;
	letter-spacing: 2px;
}
#header #container #nav #ul #li #a:hover{
	color: #4B0082
}

#header #container #nav #ul #li{
	margin-right: 16px;
}

#home{
	margin: 0 auto;
	padding: 0 auto;
	height:100vh;
	width: 100%;
	background-image: url(img/bac2.jpg);
	background: linear-gradient(135deg, #ffffff, #0F4C81, #4B0082, #000000);
	background-repeat: no-repeat;
	background-size: cover;
}

#home #container{
	margin-top: 132px;
	width: 100%;
}


#home #container #h2{
	color: #fff;
	animation: slideIn 2s ease-out;
}
@keyframes slideIn{
	from{
		transform: translateX(-100%);
		opacity: 0;
	}
	to{
		transform: translateX(0);
		opacity: 1;
	}
}


#home #container #p{
	color: #fff;
	text-align: center;
	margin-left: 40px;
	margin-right: 40px;
}

#btn-box{
	display: flex;
	align-items: center;
	justify-content: center;
	margin-top: 32px;
}
#contact-us{
	display:flex;
	align-items: center;
	justify-content: center;
	margin-top: 16px;
}


#btn-box #submit{
	width: 180px;
	height: 40px;
	border-radius: 18px;
	border:none;
	cursor: pointer;
	margin-right: 4px;
}
#btn-box #submit-2{
	width: 180px;
	height: 40px;
	border-radius: 18px;
	border:1px solid #fff;
	color: #fff;
	cursor: pointer;
	background: none;
}

#btn-box #submit:hover{
	background: none;
	border:1px solid #fff;
	transition: 1s;
	color:#fff;
}
#btn-box #submit-2:hover{
	background: #fff;
	border:none;
	transition: 1s;
	color:#000000;
}
#services{

}

#services #container{
	display: flex;
	align-items: center;
	justify-content: center;
	margin-top: 12px;
}

#services #service{
	height: 200px;
	width: 200px;
	padding: 16px;
	margin-right: 16px;
	border: 1px solid #0F4C81;
	border-radius: 16px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
	text-align: center;
}
#services #h2{
	color: #000000;
}

#services #container #service #h3{
	font-size: 16px;
}
#services #container #service #p{
	font-size: 12px;
}

#services #container #service:hover{
	cursor: pointer;
	background: linear-gradient(135deg, #ffffff, #0F4C81, #4B0082, #000000);
	transition: 1s;
	color: #fff;
	border: 1px solid #fff;
}

#about{
	background: linear-gradient(135deg, #ffffff, #0F4C81, #4B0082, #000000);
}

#about #h2{
	color: #fff;
}

#about #container{
	width: 70%;
}

#about #container #h2{
	color:#fff;
}
#about #container #box-p{
	border: 1px solid #fff;
	width: 500px;
}

#about #container #p{
	color:#fff;
	font-size: 16px;
}
#about #box-pic{
	width: 550px;
	height: 450px;
	margin-left: 16px;
	background-image: linear-gradient(rgba(5,7,30,0.4),rgba(5,7,30,0.4)), url(img/wall2.jpg);
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
	overflow: hidden;
}
#about #box-pic #img{
	width: 100%;
	height: 100%;
	object-fit: cover;
	display: block;
}

#about #cover-cont{
	display: flex;
}
#about #container #main{
	display: flex;
	margin-top: 16px;
}
#about #container #main #main1 #main1-1 #h2{
	color: #fff;
	font-size: 18px;
	margin-right: 8px;
}
#about #container #main #main2 #main2-2 #h2{
	color: #fff;
	font-size: 18px;
}

#about #container #main #main1-1{
	width: 250px;
}
#about #container #main #main1-1 #tg1{
	display: flex;
	justify-content: center;
	align-items: center;
}
#about #container #main #main1-1 #tg1 #icon{
	width: 25px;
	height: 25px;
	border-radius: 50%;
	border: 1px solid #fff;
}
#about #container #main #main2-2 #tg2 #icon{
	width: 25px;
	height: 25px;
	border-radius: 50%;
	border: 1px solid #fff;
}

#about #container #main #main2-2 #tg2{
	display: flex;
	justify-content: center;
	align-items: center;
}
#about #container #main #main1-1 #tg1 #i{
	color: #fff;
	font-size: 20px;
}
#about #container #main #main2-2 #tg2 #i{
	color: #fff;
	font-size: 20px;
}

#about #container #main #main1-1 #tg1 #icon{
	display: flex;
	justify-content: center;
	align-items: center;

}
#about #container #main #main2-2 #tg2 #icon{
	display: flex;
	justify-content: center;
	align-items: center;

}







#about #container #main #main1-1 #h2{
	font-size: 16px;
}
#about #container #main #main2-2 #h2{
	font-size: 16px;
}

#about #container #main #main1-1 #p{
	font-size: 12px;
	text-align: center;
	color: #fff;
}
#about #container #main #main2-2 #p{
	font-size: 12px;
	text-align: center;
	color: #fff;
}

#about #container #main #main2-2{
	width: 250px;
}

#about #container #main #main1-1 #p1{
	font-size: 16px;
	text-align: center;
	color: #fff;
	margin-left: 4px;
}
#about #container #main #main2-2 #p2{
	font-size: 16px;
	text-align: center;
	color: #fff;
	margin-left: 4px;
}

#contact #container{
	width: 80%;
	background-color: #F5F5F5;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
	text-align: center;
	display: flex;
	padding: 16px;
	justify-content: center;
}

#contact #container #cont1{
	width: 350px;
	height: 450px;
	align-items: center;
	justify-content: center;
	padding: 8px;
}
#contact #container #cont1 #cont1-space{
	margin-top: 8px;
}

#contact #container #cont2{
	margin-left: 8px;
	width: 350px;
	height: 450px;
	align-items: center;
	justify-content: center;
	background-color: #F5F5F5;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
	
}
#contact #container #cont3{
	margin-left: 8px;
	width: 350px;
	height: 450px;
	align-items: center;
	justify-content: center;
	background-color: #F5F5F5;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
	
}
#contact #container #cont3{
	object-fit: cover;
}

#contact #container #cont3 #img{
	width: 100%;
	height: 100%;
	object-fit: cover;
}

#contact #container #cont2 #p{
	margin-top: 8px;
	font-size: 18px;
	
}
#contact #container #cont2 #header1 #header1-1{
	display: flex;
	margin-top: 8px;
	align-items: center;
	justify-content: center;
}





#contact #container #cont2 #header1 #p{
	margin-top: 8px;
}

#contact #container #cont2 #header1 #social-media{
	display: flex;
	margin-top: 4px;
	justify-content: center;
	align-items: center;
}
#contact #container #cont2 #header1 #social-media #whatsapp{
	display: flex;
	margin-top: 8px;
}
#contact #container #cont2 #header1 #social-media #whatsapp #icon{
	width: 35px;
	height: 35px;
	border-radius: 50%;
	border: 1px solid #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	box-shadow: 0 5px 10px 1px rgba(0,0,0,0.05);
    outline:none;
    transition: .3s;
    background: linear-gradient(135deg, #ffffff, #0F4C81, #4B0082, #000000);
    margin-right: 8px;
}
#contact #container #cont2 #header1 #social-media #whatsapp #icon #i{
	color: #fff;
	font-size: 20px;
	cursor: pointer;
}
#contact #container #cont2 #header1 #social-media #facebook{
	display: flex;
	margin-top: 8px;
}
#contact #container #cont2 #header1 #social-media #facebook #icon{
	width: 35px;
	height: 35px;
	border-radius: 50%;
	border: 1px solid #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	box-shadow: 0 5px 10px 1px rgba(0,0,0,0.05);
    outline:none;
    transition: .3s;
    background: linear-gradient(135deg, #ffffff, #0F4C81, #4B0082, #000000);
    margin-right: 8px;
}
#contact #container #cont2 #header1 #social-media #facebook #icon #i{
	color: #fff;
	font-size: 20px;
	cursor: pointer;
}
#contact #container #cont2 #header1 #social-media #telegram{
	display: flex;
	margin-top: 8px;

}
#contact #container #cont2 #header1 #social-media #telegram #icon{
	width: 35px;
	height: 35px;
	border-radius: 50%;
	border: 1px solid #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	box-shadow: 0 5px 10px 1px rgba(0,0,0,0.05);
    outline:none;
    transition: .3s;
    background: linear-gradient(135deg, #ffffff, #0F4C81, #4B0082, #000000);
    margin-right: 8px;
}

#contact #container #cont2 #header1 #social-media #telegram #icon #i{
	color: #fff;
	font-size: 20px;
	cursor: pointer;
}








#contact #container #cont2 #header1 #header2-2{
	display: flex;
	align-items: center;
	justify-content: center;
}
#contact #container #cont2 #header1 #header3-3{
	display: flex;
	align-items: center;
	justify-content: center;
}
#contact #container #cont2 #header1 #header1-1 #icon{
	width: 25px;
	height: 25px;
	border-radius: 50%;
	border: 1px solid #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	box-shadow: 0 5px 10px 1px rgba(0,0,0,0.05);
    outline:none;
    transition: .3s;
    background: linear-gradient(135deg, #ffffff, #0F4C81, #4B0082, #000000);
    margin-right: 8px;
}
#contact #container #cont2 #header1 #header1-1 #icon #i{
	font-size: 20px;
	color: #fff;
}
#contact #container #cont2 #header1 #header2-2 #icon{
	width: 25px;
	height: 25px;
	border-radius: 50%;
	border: 1px solid #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	box-shadow: 0 5px 10px 1px rgba(0,0,0,0.05);
    outline:none;
    transition: .3s;
    background: linear-gradient(135deg, #ffffff, #0F4C81, #4B0082, #000000);
    margin-right: 8px;
}
#contact #container #cont2 #header1 #header2-2 #icon #i{
	font-size: 20px;
	color: #fff;
}
#contact #container #cont2 #header1 #header3-3 #icon{
	width: 25px;
	height: 25px;
	border-radius: 50%;
	border: 1px solid #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	box-shadow: 0 5px 10px 1px rgba(0,0,0,0.05);
    outline:none;
    transition: .3s;
    background: linear-gradient(135deg, #ffffff, #0F4C81, #4B0082, #000000);
    margin-right: 8px;
}
#contact #container #cont2 #header1 #header3-3 #icon #i{
	font-size: 20px;
	color: #fff;
}

#contact #container #cont1 #text{
    width:100%;
    height: 60px;
    font-size: 14px;
    padding:0 25px;
    margin-bottom: 16px;
    border-radius: 30px;
    border:none;
    box-shadow: 0 5px 10px 1px rgba(0,0,0,0.05);
    outline:none;
    transition: .3s;
}
#contact #container #cont1 #textarea{
    width:100%;
    height: 60px;
    font-size: 14px;
    padding:0 25px;
    margin-bottom: 16px;
    border-radius: 30px;
    border:none;
    box-shadow: 0 5px 10px 1px rgba(0,0,0,0.05);
    outline:none;
    transition: .3s;
    padding-top: 16px;
}


#contact #container #cont1 #btn{
	width:100%;
    height:60px;
   	background: linear-gradient(135deg, #ffffff, #0F4C81, #4B0082, #000000);
    border:none;
    border-radius: 30px;
    cursor:pointer;
    transition: .3s;
    font-size: 16px;
    color: #fff;
}
#contact #container #cont1 #btn:hover{
	transform: scale(1.05, 1);
}


#footer{
	background: linear-gradient(135deg, #ffffff, #0F4C81, #4B0082, #000000);
}



@media(max-width: 700px){
	#body{
		width: 100vh;
	}
	#home #container #h2{
	font-size: 36px;
	color: #fff;
	animation: slideIn 2s ease-out;
}
@keyframes slideIn{
	from{
		transform: translateX(-100%);
		opacity: 0;
	}
	to{
		transform: translateX(0);
		opacity: 1;
	}
}

	#group-mobile{
		display: block;
	}
	#group-desktop{
		display: none;
	}

	#about #box-pic{
		display: none;
	}
	#about #container{
	width: 90%;
	}

	#contact #cont3{
		display: none;
	}

	#contact #container{
		width: 100%;
	}

	#contact #cont2 #p{
		font-size: 12px;
	}
	#contact #cont2{
		padding: 18px;

	}
	#header #nav #ul{
		display: none;
	}
	#header #nav #icon{
		display: block;
		margin-right: 20px;
	}#header #nav #icon #i{
		font-size: 50px;
	}
	#body #drawer{
		display: block;
		position: fixed;
		left: -300px;
		width: 300px;
		height: 100%;
		background: linear-gradient(135deg, #ffffff, #0F4C81, #4B0082, #000000);
		transition: left 0.3s ease;
		z-index: 1000;
		padding-top: 50px;
	}
	#body #drawer #a{
		display: block;
		color: #fff;
		text-decoration: none;
		padding: 16px;
		font-size: 18px;
		transition: background-color 0.3s ease;

	}
	#body #drawer #a:hover{
		background-color: #fff;
		color: #000000;
	}
	#body #drawer #close{
		width: 100%;
		display: flex;
		justify-content: right;
		align-items: right;
		margin-right: 8px;

	}
	#body #drawer #close #cl{
		width: 50px;
		height: 50px;
		border-radius: 50%;
		display: flex;
		justify-content: right;
		align-items: right;
		border: 1px solid #fff;
		margin-right: 16px;
		margin-bottom: 8px;
		

	}

	#body #drawer #i{
		color: #fff;
		font-size: 48px;
	}

	#about #container #main{
		justify-content: center;
		align-items: center;
	}
	#about #container #p{
		text-align: center;
	}

	#group-mobile #services #OurClients{

		margin-top: 18px;
	}
	#group-mobile #services #OurClients #title{
		justify-content: center;
		align-items: center;
	}
	#group-mobile #services #OurClients #title #p{
		text-align: center;
	}
	#group-mobile #services #OurClients #body{
		display: flex;
		width: 100%;
		justify-content: center;
		align-items: center;
		margin-top: 16px;
	}
	#group-mobile #services #OurClients #body #body-1{
		display: block;
		justify-content: center;
		align-items: center;
	}
	#group-mobile #services #OurClients #body #body-1 #p{
		text-align: center;
		font-size: 22px;
		margin-top: 8px;
		color: #000000;
	}

	#group-mobile #services #OurClients #body #box1{
		margin-right: 16px;
		width: 200px;
		height: 200px;
		border-radius: 100%;
		position: relative;
		background-color: #F5F5F5;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		background-image: url(img/mma1.png);
		background-repeat: no-repeat;
	}
	#group-mobile #services #OurClients #body #box1 #img{
		width: 100%;
		height: 100%;
		border-radius: 100%;
		object-fit: cover;
		display: block;
	}


}




html{
	scroll-behavior: smooth;
}


</style>

	<script type="text/javascript">

		function showMenu(){
			const drawer = document.getElementById('drawer');
			drawer.style.left = '0';
		}

		function hideMenu(){
			const drawer = document.getElementById('drawer');
			drawer.style.left = '-300px';
		}

		function hideQuote(){
			const hide = document.getElementById('modal')
			modal.style.display = 'none';
		}

		function showPopup(){
			const show = document.getElementById('modal')
			modal.style.display = 'block';
		}

	</script>

	</body>

</html>