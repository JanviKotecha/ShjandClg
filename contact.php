<!DOCTYPE html>
<?php
    include "include/config.php";
?>
<html lang="en" data-bs-theme="light">

<head>
    <title>sahajanand college of IT and management Gondal </title>
    <?php include("include/head.php"); ?>

    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <!-- ===============>> Preloader start here <<================= -->
    <?php include("include/preloder.php"); ?>
    <!-- ===============>> Preloader end here <<================= -->
    <!-- ===============>> Header section start here <<================= -->
    <header class="header-section bg-color-3">
        <?php include("include/header.php"); ?>
    </header>
    <!-- ===============>> Header section end here <<================= -->



    <!-- ================> Page header start here <================== -->
    <section class="page-header bg--cover" style="background-image:url(assets/images/header/banner8.png)">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Contact Us</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__shape">
                <span class="page-header__shape-item page-header__shape-item--1"><img src="assets/images/header/2.png"
                        alt="shape-icon"></span>
            </div>
        </div>
    </section>
    <!-- ================> Page header end here <================== -->

    <!-- ===============>> Contact section start here <<================= -->
    <div class="contact padding-top padding-bottom">
        <div class="container">
            <div class="contact__wrapper">
                <div class="row g-5">
                    <div class="col-md-5">
                        <div class="contact__info" data-aos="fade-right" data-aos-duration="1000">
                            <div class="contact__social">
                                <h3>let’s <span>get in touch</span>
                                    with us</h3>
                                <ul class="social">
                                    <li class="social__item">
                                        <a href="#" class="social__link social__link--style4 active"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="#" class="social__link social__link--style4 "><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="#" class="social__link social__link--style4"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="#" class="social__link social__link--style4"><i
                                                class="fab fa-youtube"></i></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="signin.html" class="social__link social__link--style4"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact__details">
                                <div class="contact__item" data-aos="fade-right" data-aos-duration="1000">
                                    <div class="contact__item-inner">
                                        <div class="contact__item-thumb">
                                            <span><img src="assets/images/contact/telephone.png" alt="contact-icon"
                                                    class="dark"></span>
                                        </div>
                                        <div class="contact__item-content">
                                            <p>
                                                9408945454
                                            </p>
                                            <p>
                                                9099092811
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact__item" data-aos="fade-right" data-aos-duration="1100">
                                    <div class="contact__item-inner">
                                        <div class="contact__item-thumb">
                                            <span><img src="assets/images/contact/mail.png" alt="contact-icon"
                                                    class="dark"></span>
                                        </div>
                                        <div class="contact__item-content">
                                            <p>info@sahajanandcollege.org.in</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact__item" data-aos="fade-right" data-aos-duration="1200">
                                    <div class="contact__item-inner">
                                        <div class="contact__item-thumb">
                                            <span><img src="assets/images/contact/location.png" alt="contact-icon"
                                                    class="dark"></span>
                                        </div>
                                        <div class="contact__item-content">
                                            <p> Jay Sardar Educational Complex, <br>Near Gundala Chowk, <br>Behind Shri
                                                Ram Pump, <br>National Highway-27, <br> Gondal.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact__form">
                            <form action="contact.php" method="POST" data-aos="fade-left" data-aos-duration="1000">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div>
                                            <label for="name" class="form-label">Name</label>
                                            <input class="form-control" type="text" name="name" id="name"
                                                placeholder="Full Name" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div>
                                            <label for="mobile" class="form-label">Mobile No.</label>
                                            <input class="form-control" type="text" id="mobile" name="phone"
                                                placeholder="Mobile No. here" required pattern="^[0-9]{10}$"
                                                title="Please enter a valid 10-digit mobile number">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div>
                                            <label for="email" class="form-label">Email</label>
                                            <input class="form-control" type="email" id="email" name="email"
                                                placeholder="Email here" required
                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                                title="Please enter a valid email address">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div>
                                            <label for="textarea" class="form-label">Message</label>
                                            <textarea cols="30" rows="5" class="form-control" id="textarea"
                                                name="message" placeholder="Enter Your Message" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="submit-form"
                                    class="trk-btn trk-btn--border trk-btn--primary mt-4 d-block">contact us
                                    now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact__shape">
            <span class="contact__shape-item contact__shape-item--1"><img src="assets/images/contact/1.png"
                    alt="shape-icon"></span>
            <span class="contact__shape-item contact__shape-item--2"> <span></span> </span>
        </div>
    </div>
    <!-- ===============>> Contact section start here <<================= -->

    <!-- ===============>> footer start here <<================= -->
    <?php include("include/footer.php"); ?>
    <!-- ===============>> footer end here <<================= -->

    <!-- ===============>> scrollToTop start here <<================= -->
    <?php include("include/footer-script.php"); ?>

</body>

</html>

<?php
if (isset($_POST['submit-form'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
  
	$name = addslashes($name);
	$email = addslashes($email);
	$phone = addslashes($phone);
	$message = addslashes($message);
  
	$insert = $qm->insertRecord("contact_us", "name,email,phone,msg,date", " '".$name."', '".$email."', '".$phone."', '".$message."','".$getDt."' ");
  
	$EmailTo =  'info@sahajanandcollege.org.in' ;
		$Subject = "Sahajanand College Contact Email";

		$Content ="
		<html>
		
		<body style='box-sizing: border-box;margin: 0;padding: 0;background: #F5F6F7;margin: 0 auto;'>
			<table style='width: 100%;padding: 10px;'>
				<thead>
					<tr>
						<td style='text-align: center;'>
							<img style='margin: 0 auto;' src='https://www.epsilon-technology.com/Sahajanand_College/images/our-img/logo.png'
								alt=''>
						</td>
					</tr>
					<tr>
						<td>
							<p
								style='font-size: 22px;font-weight: 700;text-align: center;margin: 0;font-family: Lato, sans-serif;'>
								Welcome to Sahajanand College</p>
						</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td style='padding-top: 10px;'>
							<p style='margin: 0;font-size: 16px;font-family: Lato, sans-serif;'>Hello ,</p>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px;'>
							<p style='margin: 0;font-size: 16px;font-family: Lato, sans-serif;'>Name</p>
							<p style='margin: 0;font-size: 16px;font-family: Lato, sans-serif;'>$name</p>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px;'>
							<p style='margin: 0;font-size: 16px;font-family: Lato, sans-serif;'>Email</p>
							<p style='margin: 0;font-size: 16px;font-family: Lato, sans-serif;'>$email</p>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px;'>
							<p style='margin: 0;font-size: 16px;font-family: Lato, sans-serif;'>Number</p>
							<p style='margin: 0;font-size: 16px;font-family: Lato, sans-serif;'>$phone</p>
						</td>
					</tr>
					<tr>
						<td style='padding-top: 10px;'>
							<p style='margin: 0;font-size: 16px;font-family: Lato, sans-serif;'>This Email For</p>
							<p style='margin: 0;font-size: 16px;font-family: Lato, sans-serif;'>$message</p>
						</td>
					</tr>
					<tr>
						<td>
							<hr style='color: #3E68FF;background: #3E68FF;'>
						</td>
					</tr>
				</tbody>
			</table>
		</body>
		
		</html>";

		$MailHeaders = "MIME-Version: 1.0"."\r\n";
		$MailHeaders .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
		$MailHeaders .= 'From:'."$email"."\r\n";
		
		$success = mail($EmailTo, $Subject, $Content, $MailHeaders);	
		if($success == true ) {
			echo "<script>
			Swal.fire(
				'Success!',
				'Thank you for Contact!',
				'success'
			).then(function() {
        window.location = 'index.php';
			});
		</script>";
		}else{
			echo "<script>
			Swal.fire(
				'Success!',
				'Thank you for Contact!',
				'success'
			).then(function() {
        window.location = 'index.php';
			});
		</script>";
		}
	
  } 
?>