<?php
include("config.php");
?> 

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>CHAR-iOT</title>

     <link rel="stylesheet" href="style.css" />
     <link rel="stylesheet" href="style1.css" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono|Poppins&display=swap" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script src="index.js" defer></script>
     <style>
          #reg-form{
     background:#efefef;
}
     </style>
</head>

<body>
     <section id="banner">
          <div class="logo-outer">
               <span class="logo-s"> <img src="logo-2.png" alt="logo" class="logo" />
               </span>
          </div>
          <div class="banner-text">
               <h1>CHARiOT</h1>
               <p>be part of future</p>
               <div class="banner-btn">
                    <a href="#reg-form"><span></span> Register Now</a>
                    <a href="#service"><span></span> Know More</a>
               </div>
          </div>
     </section>
     <div id="sideNav">
          <nav>
               <ul>
                    <li><a href="#banner">Home</a></li>
                    <li><a href="#about">About Christ</a></li>
                    <li><a href="#feature">About Us </a></li>
                    <li><a href="#reg-form">Register Now</a></li>
                    <li><a href="#footer">Contact Us</a></li>
               </ul>
          </nav>
     </div>
     <div id="menuBtn">
          <img id="menu" src="menu.png" />
     </div>
     <!-- features -->
     <section id="feature">
          <div class="tittle-text">
               <p>Features</p>
               <h1>About us</h1>
          </div>
          <div class="feature-box">
               <div class="features">
                    <h1></h1>
                    <div class="features-desc">
                         <div class="feature-icon">
                              <i class="fa fa-info"></i>
                         </div>
                         <div class="feature-text">
                              <p>
                                   The Internet of Things (IoT) describes the network of physical objects—“things”—that are embedded with sensors, software, and other technologies for the purpose of connecting and exchanging data with other devices and systems over the internet. IoT software-based security solutions are generally designed to run on any type of hardware, and as a result, they can be more consistent and cost-effective to implement compared to hardware-based solutions. 
                              </p>
                         </div>
                    </div>
               </div>
               <div class="features-img">
                    <img src="robot-1.png" alt="" srcset="" />
               </div>
          </div>
     </section>

     <!-- About Christ University -->

     <section id="about">
          <div class="tittle-text">
               <p>Features</p>
               <h1>About Christ(Deemed to be university)</h1>
          </div>
          <div class="feature-box">
               <div class="features">
                    <h1></h1>
                    <div class="features-desc">
                         <div class="feature-icon">
                              <i class="fa fa-school"></i>
                         </div>
                         <div class="feature-text">
                              <p>
                                   CHRIST (Deemed to be University) was born out of the educational vision of St Kuriakose Elias
                                   Chavara, an educationalist and social reformer of the nineteenth century in South India. He
                                   founded the first Catholic indigenous congregation, Carmelites of Mary Immaculate (CMI), in
                                   1831 which administers CHRIST (Deemed to be University). “CHRIST (Deemed to be
                                   University) was established as ‘Christ College’ in 1969. It undertook pathbreaking initiatives in
                                   Indian higher education with the introduction of innovative and modern curricula, insistence on
                                   academic discipline, imparting of Holistic Education and adoption of global higher education
                                   practices with the support of creative and dedicated staff.” The University Grants Commission
                                   (UGC) of India conferred Autonomy to Christ College in 2004 and identified it as an Institution
                                   with Potential for Excellence in 2006. In 2008 under Section 3 of the UGC Act, 1956, the
                                   Ministry of Human Resource Development of the Government of India, declared the institution a
                                   Deemed to be University, in the name and style of Christ University. One of the first institutions
                                   in India to be accredited in 1998 by the NAAC, and subsequently in 2004 and 2016, CHRIST
                                   (Deemed to be University) has the top grade ‘A’ in the 4-point scale. “The multi-disciplinary
                                   University which focuses on teaching research and service offers Bachelor, Master and Doctoral
                                   programmes in humanities, social sciences, sciences, commerce, management, engineering,
                                   architecture, education, and law to about 25000 students. The University offers its programmes
                                   at three campus locations in Bangalore in Karnataka; and in Pune Lavasa in Maharashtra and
                                   Delhi NCR. The campus is a living example of harmonious multiculturalism with students from
                                   all the states and union territories and around 60 different countries. CHRIST (Deemed to be
                                   University) publishes six peer-reviewed research journals and has published more than 300
                                   books in Kannada and English. A promoter of sports, music and literary activities, it is a
                                   nurturing ground for creative excellence.
                              </p>
                         </div>
                    </div>
               </div>
          
          </div>
     </section>

     <!-- Section 3 -->

     <section id="service">
          <div class="tittle-text">
               <p>Content</p>
               <h1>Course Plan</h1>
          </div>
          <div class="service-box">
               <div class="single-service">
                    <img src="Week-1.png" alt="" />
                    <div class="overlay"></div>
                    <div class="service-desc">
                         <h3>Introduction to IoT and Arduino</h3>
                         <hr />
                         <p>
                         <ol>
                              <li>
                                   Introduction to IoT and its applications 
                              </li>

                              <li>
                                   Introduction to the Arduino platform and its components 
                              </li>

                              <li>
                                   Installing the Arduino IDE and drivers 
                              </li>
                              <li>
                                   Writing and uploading your first Arduino program
                              </li>
                         </ol>
                         </p>
                    </div>
               </div>
               <div class="single-service">
                    <img src="Week-2.png" alt="" />
                    <div class="overlay"></div>
                    <div class="service-desc">
                         <h3>Interfacing with sensors</h3>
                         <hr />
                         <p>
                         <ol>
                              <li>
                                   Introduction to sensors and their types
                              </li>

                              <li>
                                   Interfacing with basic sensors like temperature, humidity, light, etc.
                              </li>

                              <li>
                                   Reading data from sensors and displaying on a serial monitor
                              </li>

                              <li>
                                   Controlling actuators like LEDs and motors based on sensor data
                              </li>

                         </ol>
                         </p>
                    </div>
               </div>
               <div class="single-service">
                    <img src="Week-3.png" alt="" />
                    <div class="overlay"></div>
                    <div class="service-desc">
                         <h3>Wireless communication</h3>
                         <hr />
                         <p>
                              <ol>
                                   <li>Introduction to wireless communication protocols like Bluetooth, Wi-Fi, and MQTT</li>
                                   <li>Setting up and using Wi-Fi and Bluetooth modules with Arduino</li>
                                   <li>Sending sensor data over Wi-Fi using MQTT protocol</li>
                              </ol>
                         </p>
                    </div>
               </div>

               <div class="single-service">
                    <img src="Week-4.png" alt="" />
                    <div class="overlay"></div>
                    <div class="service-desc">
                         <h3>IoT cloud platforms</h3>
                         <hr/>
                         <p>
                                   <ol>
                                        <li>Introduction to IoT cloud platforms like AWS IoT, Google Cloud IoT, and Azure IoT

                                        </li>
                                        <li> Setting up an IoT cloud platform account and connecting it with the Arduino board

                                        </li>
                                        <li>                 
                                             Sending sensor data to the cloud and visualizing it on a dashboard
                                        </li>
                                   </ol>
                         </p>
                    </div>
               </div>
               <div class="single-service">
                    <img src="Week-5.png" alt="" />
                    <div class="overlay"></div>
                    <div class="service-desc">
                         <h3>Project development</h3>
                         <hr/>
                         <p>
                                   <ol>
                                        <li>
                                             Brainstorming project ideas and forming teams
                                        </li>
                                        <li> 
                                             Developing a project proposal and getting it approved
                                        </li>
                                        <li>  
                                             Implementing the project using the skills learned in previous weeks
                                             
                                        </li>
                                   </ol>
                         </p>
                    </div>
               </div>
               <div class="single-service">
                    <img src="Week-6.png" alt="" />
                    <div class="overlay"></div>
                    <div class="service-desc">
                         <h3>Project presentation and evaluation
                         </h3>
                         <hr/>
                         <p>
                                   <ol>
                                        <li>Presenting the projects to the class and receiving feedback
                                        </li>
                                        <li>
                                             Evaluating the projects based on creativity, functionality, and technical difficulty
                                        </li>
                                        <li>
                                             Conclusion and next steps in IoT and Arduino
                                        </li>
                                        <li>
                                             This course plan can be modified and customized according to the needs of the students and the institution offering the course. Additional
                                        </li>
                                        <li>
                                             Topics that can be covered include advanced sensor interfacing, machine learning, and security 
                                        </li>
                                        <li>
                                             Considerations in IoT applications.
                                        </li>
                                   </ol>
                         </p>
                    </div>
               </div>
          </div>
     </section>

     <!-- self added section registration form -->

     <section id="reg-form">
          <div class="tittle-text">
               <p>Form</p>
               <h1>Register Now</h1>
          </div>

          <div class="outer-container">
               <div class="container">
                    <div class="form-tittle">
                         Registration
                    </div>
                    <!--  -->
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                         <div class="user-details">
                              <div class="input-box">
                                   <span class="details">Name</span>
                                   <input type="text" name="fullName" id="name" placeholder="Full Name" required />
                                   <span class="warning"></span>
                              </div>
                         </div>
                         <div class="user-details">
                              <div class="input-box">
                                   <span class="details">E-mail</span>
                                   <input type="email" name="eMail" id="eMail" placeholder="E-mail" required />
                              </div>
                         </div>
                         <div class="user-details">
                              <div class="input-box">
                                   <span class="details">Mobile Number</span>
                                   <input type="tel" name="mobileNumber" id="mobileNumber" placeholder="Mobile Number" required />
                              </div>
                         </div>

                         <div class="user-details">
                              <div class="input-select">
                                   <span class="Occup">Occupation</span>
                                   <select name="occupation" id="occupation">
                                        <option value="Student">Student</option>
                                        <option value="Employee">Employee</option>
                                        <option value="Other">Other</option>
                                   </select>
                              </div>
                         </div>
                         <div class="user-details">
                              <div class="input-box">
                                   <span class="details">College / Company </span>
                                   <input type="text" name="workingPlace" id="workingPlace" placeholder="College/Company name"
                                        required />
                              </div>
                         </div>
                         <div class="user-details">
                              <div class="input-box">
                                   <span class="details">Address</span>
                                   <input type="text" name="address" id="address" placeholder="Enter Full Address" required />
                              </div>
                         </div>
                         <div class="gender-details">
                              <span class="gender-tittle">Gender </span>
                              <div class="category">
                                   <div class="radio-option">
                                        <input type="radio" name="genderSelect" value="Male" id="" />
                                        <span class="details">Male</span>
                                   </div>

                                   <div class="radio-option">
                                        <input type="radio" name="genderSelect" value="Female" id="" />
                                        <span class="details">Female</span>
                                   </div>
                                   <div class="radio-option">
                                        <input type="radio" name="genderSelect" value="PreferNotToSay" id="" />
                                        <span class="details">Prefer Not To Say</span>
                                   </div>
                              </div>
                         </div>
                         <div class="button">
                              <button id="btn" name="register" type="submit" onclick="return val()">
                                   <span></span> Register Now
                              </button>
                         </div>
                    </form>
                    <div class="form-img">
                         <img src="form-img.png">
                    </div>
               </div>
          </div>
     </section>

     <!-- skiped the testimonial section have registration form instead of that -->

     <!-- footer -->

     <section id="footer">
          <img src="robot-2.png" class="footer-img" />
          <div class="tittle-text">
               <p>Contact Us</p>
               <h1>Details</h1>
          </div>
          <div class="footer-row">
               <div class="footer-left">
                    <h1>CHAR iOT</h1>
                    <p><i class="fa fa-location"></i> 
                         <a href="https://goo.gl/maps/mx57N3SDVYCNCZJFA" target="_blank" rel="noopener noreferrer">
                              Dharmaram College Post, Hosur Road, Bengaluru - 560029,
                         Karnataka, India
                         </a>     
                    </p>
                    <p><i class="fa fa-at"></i>
                         <a href="mailto:">
                         mail@mail.com
                         </a>
                    </p>
                    <p><i class="fa fa-globe"></i> 
                         <a href="http://" target="_blank" rel="noopener noreferrer">
                              chariot.in
                         </a>
                    </p>
               </div>
          </div>
          <div class="social-media">
               <i class="fa-brands fa-facebook"></i>
               <i class="fa-brands fa-twitter"></i>
               <i class="fa-brands fa-instagram"></i>
               <i class="fa-brands fa-youtube"></i>
          </div>
     </section>
     <script src="validate.js" ></script>

     

</body>
</html>


<?php
     include("index2.php");
?>