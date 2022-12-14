<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>twenty7inc PR agency</title>
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/smoothsrolling.js"></script>
  </head>
<body>
    <main>
      <header>
        <div class="inner">
          <div id="logo">
            <img src="images/twenty7-PR-1.png" alt="twenty7" />
          </div>

          <nav>
            <ul class="navlinks">
              <li><a href="" class="color">Home</a></li>
              <li><a href="">servies</a></li>
              <li><a href="">clientele</a></li>
              <li><a href="">blog</a></li>
              <li><a href="">about</a></li>
              
                <li><a href="#contact" id="login">contact-us</a></li>
              
            </ul>
            <div id="toggle">
              <div class="togglebtn"></div>
              <div class="togglebtn"></div>
              <div class="togglebtn"></div>
          </div>
          
          </nav>
          <div class="clearfix"></div>
        </div>
      
      </header>

      <div id="header-mid">
        <div class="inner">
          <div id="c1">
            <h1  data-aos="fade-right"
            data-aos-easing="linear"
            data-aos-duration="1000">pr agency that delivers results!</h1>
            <p data-aos="fade-right"
            data-aos-easing="linear"
            data-aos-duration="1000">
              Providing high quality professional PR services for over a decade.
            </p>
            <a href="#contact" class="bttn ml" data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="1000" > get started</a>
            <span data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="1000">Check out our 2,342 reviews</span>
            <img data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="1000" src="images/star.png" alt="" class="star" />
          </div>
          <div id="c2">
            <h2>Request a FREE Quote Now</h2>
            <form action="" method="post">
              <input type="name" name="name"  placeholder=" Name" id="name" required />
              <input
                type="tel"
                name="tel"
                placeholder="phone number"
                id="phone"
                required
              />
              <input type="email"  name="email" placeholder="email" id="email" required />
              <input
                type="company Name"
                name="company name"
                placeholder="company Name"
                id="company"
                required
              />
              <textarea
                name="message"
                placeholder="tell us your rrequirement"
                required
                class="textarea1"
              ></textarea>
              <!-- <p class="success"> <?php echo $success;  ?></p>
              <p class="failed"> <?php echo $failed;  ?></p> -->
              <button class="btn" name="submit"  data-submit="...Sending">Get quote</button>
            </form>
            <?php  
 
 if(isset($_POST['submit'])) {
  $mailto = "sethrolling560@gmail.com";  //My email address
  //getting customer data
  $name = $_POST['name']; //getting customer name
  $fromEmail = $_POST['email']; //getting customer email
  $phone = $_POST['tel']; //getting customer Phome number
  $subject = $_POST['subject']; //getting subject line from client
  $subject2 = "Confirmation: Message was submitted successfully | HMA WebDesign"; // For customer confirmation
  
  //Email body I will receive
  $message = "Cleint Name: " . $name . "\n"
  . "Phone Number: " . $phone . "\n\n"
  . "Client Message: " . "\n" . $_POST['message'];
  
  //Message for client confirmation
  $message2 = "Dear" . $name . "\n"
  . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
  . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
  . "Regards," . "\n" . "- HMA WebDesign";
  
  //Email headers
  $headers = "From: " . $fromEmail; // Client email, I will receive
  $headers2 = "From: " . $mailto; // This will receive client
  
  //PHP mailer function
  
   $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
   $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
  
   //Checking if Mails sent successfully
  
   if ($result1 && $result2) {
     $success = "Your Message was sent Successfully!";
   } else {
     $failed = "Sorry! Message was not sent, Try again Later.";
   }
  
 }
  
 ?>
          </div>
          <div class="clearfix"></div>
        </div>
  
      </div> 
    
      <section class="card_slide">
        <div class="inner">
          <div id="title_inner">
            <div class="left">
              <span>what we offer</span>
              <h2>
                The best solutions for your <br />business -
                <span class="sub_text"> what we do.</span>
              </h2>
            </div>
            <div id="right" class="right">
              <p>
                We Are the Best Public Relations and Digital Marketing Service
                provider. We Analyze, Find and Deliver 360?? Solutions. We???ll not
                only promote you but also Perform to maintain you on the top.
              </p>
            </div>
          </div>
          <div class="cardslide">
            <div class="slide-container swiper">
              <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">

                  <div class="card swiper-slide">
                    <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                        <img
                          src="images/public-relations-1.jpg"
                          alt=""
                          class="card-img"
                        />
                      </div>
                    </div>

                    <div class="card-content">
                      <h2 class="name"> <a href="#contact">public relations</a></h2>
                      <p class="description">
                        We combine our intrinsic knowledge of distinctive
                        business domains, top-notch media relations & specialist
                        communication strategy to extend exceptional PR Services
                        in India.
                      </p>

                      
                    </div>
                  </div>
                  <div class="card swiper-slide">
                    <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                        <img
                          src="images/crisis-managenent-2.jpg"
                          alt=""
                          class="card-img"
                        />
                      </div>
                    </div>

                    <div class="card-content">
                      <h2 class="name"><a href="#contact">crisis managenent</a></h2>
                      <p class="description">
                        With a bullet-proof crisis management protocol, we are
                        adept at assisting our clients sail through an imposing
                        crisis situation and re-emerge with business reputation
                        unharmed.
                      </p>

                   
                    </div>
                  </div>
                  <div class="card swiper-slide">
                    <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                        <img
                          src="images/performace.jpg"
                          alt=""
                          class="card-img"
                        />
                      </div>
                    </div>

                    <div class="card-content">
                      <h2 class="name"><a href="">Performance marketing</a></h2>
                      <p class="description">
                        Performance marketing is the practice of digital marketing, in which companies only pay for marketing service providers only after their objectives for business have been achieved or when specific actions have been completed, for example, sales, clicks, or leads.
                      </p>

                     
                    </div>
                  </div>
                  <div class="card swiper-slide">
                    <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                        <img
                          src="images/contact-marketing.jpg"
                          alt=""
                          class="card-img"
                        />
                      </div>
                    </div>

                    <div class="card-content">
                      <h2 class="name"><a href="">Content marketing</a> </h2>
                      <p class="description">
                        Content marketing can be described as a marketing method that is focused on the creation and distribution of useful, relevant, and consistent content in order to draw and keep a defined group of people -- and ultimately to encourage profitable customer actions.
                      </p>

                     
                    </div>
                  </div>
                  <div class="card swiper-slide">
                    <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                        <img
                          src="images/event-planner.jpg"
                          alt=""
                          class="card-img"
                        />
                      </div>
                    </div>

                    <div class="card-content">
                      <h2 class="name"><a href=""></a>Event Planner </h2>
                      <p class="description">
                        We Design, Plan, and Create seamless stall and Event Services that are tailored to you and Your Ideas. We have the creativity and event management abilities to make your Ideas Come to Life.
                      </p>

                     
                    </div>
                  </div>
                  <div class="card swiper-slide">
                    <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                        <img
                          src="images/digital-marketing.jpg"
                          alt=""
                          class="card-img"
                        />
                      </div>
                    </div>

                    <div class="card-content">
                      <h2 class="name"><a href=""></a>Digital Marketing</h2>
                      <p class="description">
                        Leveraging digital tools to help organizations run more
                        effectively by increasing the footfall on the website
                        via Organic or Paid searches through Search Engine
                        Optimization strategies.
                      </p>

                     
                    </div>
                  </div>
                  
                  <div class="card swiper-slide">
                    <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                        <img
                          src="images/social-media-marketing-2.jpg"
                          alt=""
                          class="card-img"
                        />
                      </div>
                    </div>

                    <div class="card-content">
                      <h2 class="name"><a href="#form2">social media marketing</a></h2>
                      <p class="description">
                        Best Social Media Marketing Agency in Delhi. We provide
                        all kinds of social media services & increase brand
                        awareness and build a social presence. One of the best
                        Way to Promote products & Services.
                      </p>
                    </div>
                  </div>
                  <div class="card swiper-slide">
                    <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                        <img
                          src="images/graphic-designer.jpg"
                          alt=""
                          class="card-img"
                        />
                      </div>
                    </div>

                    <div class="card-content">
                      <h2 class="name"><a href="#con2">website design</a></h2>
                      <p class="description">
                        Website Designing Company in Delhi If you???re looking for
                        the best website design company in Delhi, then you have
                        come to the right place. Get More leads and Sales with
                        our Website designing services.
                      </p>

                     
                    </div>
                  </div>
                  
               
                </div>
              </div>

              <div class="swiper-button-next swiper-navBtn"></div>
              <div class="swiper-button-prev swiper-navBtn"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
       
      </section>
      

      <section id="logosec">
        <div class="inner">
          <h2><a href="https://twenty7inc.in/clientele/" target="_blank">Clientele</a></h2>
          <div id="clintele">
            <div class="gallery">
              <img src="images/logo/logo-24.png"  alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/Denver.webp" alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/Nova-Dairy-Logo.jpg" alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/Logo2.png" alt="" />
            </div>
            
            <div class="gallery">
              <img src="images/logo/logo3.jpg" alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/logo5.png" alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/logo8.png" alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/logo6.png" alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/logo7.png" alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/logo8.png" alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/logo9.jpg" alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/logo11.png" alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/logo12.jpg" alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/logo14.png" alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/logo15.png" alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/logo-20.png" alt="" />
            </div>
            <!-- <div class="gallery">
              <img src="images/logo/logo-21.png" alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/logo-22.png" alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/logo-23.png" alt="" />
            </div>
            <div class="gallery">
              <img src="images/logo/logo-25.png" alt="" />
            </div> -->
           
            <div class="clearfix"></div>
          </div>
        
        </div>
        
      </section>
     
      <section class="con">
        <div id="sec1">
          <span>WHO WE ARE</span>
          <h2 class="title">
            <span class="watermark"></span>Why Choose ?<span class="sub_text"
              >Twenty7 Inc.</span
            >
          </h2>
          <p>
            We Are the Best Public Relations and Digital Marketing Service
            provider. We Analyze, Find and Deliver 360?? Solutions. We???ll not
            only promote you but also Perform to maintain you on the top.
          </p>
          <p>
            Twenty7 Inc. PR Agency promotes companies or individuals through
            free or earned media. Public Relations Agency forms communication
            bonds between an organization and their public to gain mutual
            benefits. PR can be used to protect and build a reputation through
            media.
          </p>
          <p>
            A good PR Company analyzes the organization, finds positive messages
            and translate them into positive stories. PR companies create
            positive hype for their client and help them to maintain brand
            reputation and goodwill in the market. PR activity includes press
            releases, Public Appearances, newsletters, news channels, Social
            media, Radio, etc.
          </p>
          <p class="show_mobile">
            Digital PR is developing strong relationships through Digital
            Marketing tools like Content Management, SEO Techniques, blogs,
            Social Media channels, Website and in many more ways. In this
            Digital World, be it a startup, small entrepreneur or any giant
            corporate house, all need a Digital Projection of themselve
          </p>
        </div>
        <aside class="aside">
          <img src="images/Side-image.jpg" alt="" />
        </aside> 
        <div class="clearfix"></div>
      </section>
      
      <!-- <section class="con1">
        <div class="inner">
          <div id="sec3">
            <div class="left">
              <span>WORKING PROCESS</span>
              <h2>
                How we work  for our <br />valued
                <span class="sub_text"> customers.</span>
              </h2>
            </div>
            <div class="right">
              <button class="btn2">view works</button>
            </div>
            <div class="clearfix"></div>
          </div>

          <div id="sec4">
            <div class="steps">
              <div class="box1">
                <div class="bord">
                  <img src="images/process.webp" alt="" />
                </div>
                <h2>Execute</h2>
                <p>
                  Execution is the part of the project when all the work Our
                  team has planned is implemented. We have the most experienced
                  team to accomplish this task.
                </p>
              </div>
              <div class="box1">
                <div class="bord">
                  <img src="images/exploration.webp" alt="" />
                </div>
                <h2>Discovery</h2>
                <p>
                  Discovery is the initial stage in PR, where the main focus is
                  to get to know the end-user, clarify project vision, goals &
                  scope, and identify risks.
                </p>
              </div>
              <div class="box1">
                <div class="bord">
                  <img src="images/planning.webp" alt="" />
                </div>
                <h2>Planning</h2>
                <p>
                  Our team spends so much time on tedious analytical work and
                  careful planning. This is very Important Phase When it comes
                  to on Successful projects.
                </p>
              </div>
              <div class="box1">
                <div class="bord">
                  <img src="images/delivering.webp" alt="" />
                </div>
                <h2>Deliver</h2>
                <p>
                  And Final Stepp Will be delivered, Our team will Consult You
                  According to Your Requirement. This is our process to do work.
                </p>
              </div>
            </div>
          </div>
        </div> 
        <div class="clearfix"></div>
      </section> -->
      <section class="con5">
        <div class="withus">
          <img src="images/we-have-worked.png" alt="">
        </div>
        <div class="clearfix"></div>
      </section>
      <section class="con5">
          <div class="withus">
            <img src="images/we-have-worked-with.jpg" alt="">
        </div>
        <div class="clearfix"></div>
      </section>
      <div class="slider">
        <h2 class="net">Network of Publications</h2>
        <div class="slide-track">
         
          <div class="slide">
            <img src="images/logo/banglore Mirror.jpg" height="200" width="100" alt="" />
          </div>
          <div class="slide">
            <img src="images/logo/business-standard-logo.png" height="200" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="images/logo/Daily Hunt.jpg" height="200" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="images/logo/Google News.jpg" height="200" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="images/logo/Indian Today.jpg" height="200" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="images/logo/Live Hindustan.jpg" height="200" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="images/logo/lokmat-logo.png" height="200" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="images/logo/mid-day-logo.png" height="200" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="images/logo/PTI.jpg" height="200" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="images/logo/Pune Mirror.jpg" height="200" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="images/logo/The Hindu.jpg" height="200" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="images/logo/The Indian Express.jpg" height="200" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="images/logo/the-print-logo.png" height="200" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="images/logo/the-telegraph-logo.png" height="200" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="images/logo/TOI.jpg" height="200" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="images/logo/zee-5-logo.png" height="200" width="250" alt="" />
          </div>
        </div>
      </div>
      <section class="con2">
        <div class="inner">
          <div id="sec6">
          <span>Testimonials</span>
          <h2>Whats our customers saying <br />about us</h2>
        </div>
        <div class="cardslide">
          <div class="slide-container1 swiper">
              <div class="slide-content s-content">
                  <div class="card-wrapper swiper-wrapper">
                      <div class="card1 swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>
                              <div class="im">
                                  <img src="images/quote-1.webp" alt="" />
                                </div>
                        
                          </div>
      
                          <div class="card-content">
                              
                              <p class="whte1">Their work is commendable, they have made a significant difference to our platform. They have enabled us, coached us, and given us such confidence to share My Trade Box story widely. We have seen a few fold increases in business after being associated with them..</p>
                              
                              <span class="whte">jayant mehrotra</span>
                              <span class="gray">My trade box</span>  
                            <img src="images/star.png" alt="" class="im1">
                              <!-- <button class="button">View More</button> -->
                          </div>
                      </div>
                      <div class="card1 swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>
                              <div class="im">
                                <img src="images/quote-1.webp" alt="" />
                              </div>
                      
                        </div>
    
                        <div class="card-content">
                            
                            <p class="whte1">Project Ekaagrith was a perfect piece of freedom for me. Anyway this video has taught me how different and odd I am for those rich some other sexual preferences. Cheers to Twenty7 Inc. team.</p>
                            
                            <span class="whte">SREEMOYEE CHATTERJEE</span>
                            <span class="gray">TIMES OF INDIA</span>  
                          <img src="images/star.png" alt="" class="im1">
                            <!-- <button class="button">View More</button> -->
                        </div>
                      </div>
                      <div class="card1 swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>
                              <div class="im">
                                <img src="images/quote-1.webp" alt="" />
                              </div>
                      
                        </div>
    
                        <div class="card-content">
                            
                            <p class="whte1">We had hired Twenty7 Inc. team to help us with our PR requirements and they successfully delivered it. Our courses got wide coverage in Indian newspapers and online media, thanks to the assignment they handled for us.</p>
                            
                            <span class="whte">RAMANUJ MUKHERJEE, IPLEADERS</span>
                            <span class="gray">IPLEADERS</span>  
                          <img src="images/star.png" alt="" class="im1">
                            <!-- <button class="button">View More</button> -->
                        </div>
                      </div>
                      
                  </div>
              </div>
              <div class="swiper-button-next swiper-navBtn"></div>
              <div class="swiper-button-prev swiper-navBtn"></div>
              <div class="swiper-pagination"></div>
          </div>
      </div>
          <div class="clearfix"></div>
        </div>
        
      </section>
      <section class="con3" id="contact">
        <div class="inner">
        <div class="c6">
        <span>Contact</span>
        <h2>Let us help your business to <br>move <span class="sub_text"> forward.</span></h2>
      </div>
      <div id="c7">
        <img src="images/tele-caler-2.jpg" alt="">
        <div id="form2">
          <input type="name" placeholder="name" id="name2">
          <input type="email" placeholder="email" id="email2">
          <input type="tel" placeholder="phone number" id="phone2">
          <input type="text" placeholder="company" id="company2">
          <textarea
                placeholder="Your message here"
                required
                class="textarea"
              ></textarea>

          <button class="bttn">Submit Now</button>
      </div>
      
      </div>
      </div>
      <div class="clearfix"></div>
      </section>
     
      <section class="faqsec">
        <h2>FAQs </h2>
          <details>
          <summary>Why we are one of the Best PR Agency in Delhi?</summary>
          <div class="faq__content">
            <p>Our major advantage that sets us apart from others is our collective expertise of more than 50+ years of experience. The services are backed up with a lot of case studies and success stories. This establishes us to be the Best PR Agency in Delhi. In addition to this, our expertise has been praised by our clients, thus, validating our claim to be the Best PR Agency in Delhi.</p>
          </div>
        </details>
        <details>
          <summary>What are the benefits of hiring a Public Relation Agency?</summary>
          <div class="faq__content">
            <p>Delhi and NCR have become the hubs for every kind of business; therefore, the area offers tough competition to grow at a planned rate. By choosing the Public Relation Agency you can expect the following much needed growth-oriented benefits:

              <ul>
                <li>Brand awareness</li>
                <li>Improved media relations</li>
                <li>Increased ROI</li>
                <li>Noticed presence in a crowded market</li>
                <li>Strategic support for a product launch</li>
                <li>Data-driven insights from market research</li>
                <li>New ideas with a fresh approach</li>
              </ul>
               </p>
          </div>
        </details>
        <details>
          <summary> How can PR Agency help your business? </summary>
          <div class="faq__content">
            <p>The PR Agency always aligns with the vision of the company. This resonates with the purpose of the business which brings about a unified effect. The PR agency helps create visibility of the company which enhances the recall value amongst the consumers.<br><br>


              The top PR agency always strives to convert the consumers into loyal customers by effectively communicating the message of the company. They have a very diverse enterprise to achieve where they perform the task of a bridge between the client/ company and the ignorant target public. They keep the audience group constantly updated with the activities of the client.<br><br>
              
              
              Stories and strategies are created accompanied by best solutions. By prioritizing client???s requirements the Best PR Agency always preserves and promotes their reputation and goodwill in market. They work to achieve holistic approach concerning all the queries of the client/ organisation/ company as a good PR agency believes in building trust and establishing brand identity by providing leads for the client???s business.</p>
          </div>
        </details>
        <details>
          <summary> I own a recently initiated start-up unit in Delhi? Should I invest in hiring a PR Agency?</summary>
          <div class="faq__content">
            <p>The start-up businesses need the help of specialists to make their presence noticed in the crowded marketplace. Branding, lead generation and customer relationship are the top concerns for the relatively new businesses. The experienced and reputed PR agency customize strategies for your overall performance boost in all the verticals, including new product placement in a particular marketplace.</p>
          </div>
        </details>
        <details>
          <summary>Can I improve my business profitability by hiring PR Agency?</summary>
          <div class="faq__content">
            <p>Yes, the involvement of a PR agency helps you in target marketing with innovative ideas, thus, it reduces the expenses on traditional marketing tactics. PR agency also introduces the low cost effective channels for advertising, branding, and selling according to the current trends; therefore, it increases your business performance and profitability..</p>
          </div>
        </details>
        <details>
          <summary>What is the cost of hiring a Public Relations Agency?</summary>
          <div class="faq__content">
            <p>There is no fixed charge for hiring a PR agency. The leading Public Relations Agency offer customized services; thus, the cost varies at large. The overall cost of hiring the PR agency depends upon the agreed scope of services.</p>
          </div>
        </details>
        <details>
          <summary>How much time is good for a small business to keep a PR company hired?</summary>
          <div class="faq__content">
            <p>The justification of the period to retaining a PR company for a small business depends upon the business nature, objectives, competitive challenges, and marketing plans.</p>
          </div>
        </details>
        <details>
          <summary>What is the role of a PR Agency in digital marketing?</summary>
          <div class="faq__content">
            <p>Most of the PR agencies also offer digital marketing services pertaining to SEO, SMM, SMO, ORM, CMS, CRM etc. because digital marketing helps to build and expand the customer base, establish and strengthen brand reputation, rank better in search results, leads generation and revenue increase etc.</p>
          </div>
        </details>
        <details>
          <summary> Why story ideas matter?</summary>
          <div class="faq__content">
            <p>A PR agency mostly depends on two things: relationship with the journalists and creative story ideas. If the relationship with the journalist is strong but story is not interesting, it will not formulate into coverage. The most important point to keep in mind is that getting placed is not the sole purpose of the company. Being able to reach out to the target audience while creating an impact amongst them is also important which can be achieved through the story ideas. Journalists are a medium of reaching to the target groups, but instilling the recalling value in them and ensuring their loyalty can be done through story ideas.
            </p>
          </div>
        </details>
        <details>
          <summary> Can social media replace traditional media?</summary>
          <div class="faq__content">
            <p>No. One can never trust social media blindly when it comes to public relations. Although, brands benefit a lot from social media. But, it is also a platform that leads to enormous rumors and controversies. This may lead to miscommunications. A balanced utilization of both social and traditional media is a must for any firm. Otherwise, it may result negatively for your firm.</p>
          </div>
        </details>
      </section>
<footer>
  <div id="footer">
    <div class="inner">
    <div id="con4">
    
    <div id="f1">
    <img src="images/twenty7.jpeg">
    <h3>We Simplify <br> Communication</h3>
   <div class="line"></div> 
    <p>At Twenty7inc, we are driven by creativity, and a genuine love for proactive and holistic communications to build your brand.</p>
    <a href="https://www.facebook.com/Twenty7Inc" target="_blank"><i class="fa-brands fa-facebook icon"></i></a>
    <a href="https://twitter.com/Twenty7Inc" target="_blank"><i class="fab fa-twitter icon"></i></a>
    <a href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQGXK7pRNk_fvQAAAYM_2bmox8Ig8CbfLFQ0nTnBysZD5JvAcYceFyDuPapwCKLC9Lg1I61wOnjNybVylo8jOYGCvYVfjpcbsEQ1_BcoRmesZDht44-C1Q0js9tAdy-6JugC57U=&original_referer=https://twenty7inc.in/&sessionRedirect=https%3A%2F%2Fin.linkedin.com%2Fcompany%2Ftwenty7-inc" target="_blank"><i class="fab fa-linkedin-in icon"></i></a>
    <a href="https://www.instagram.com/twenty7inc/" target="_blank"><i class="fab fa-instagram icon"></i></a>
    
    
    </div>
    
    <div id="f2">
    <h3> Our Services</h3>
    <div class="line"></div> 
    <ul>
    <li><a href="#">PR service</a></li>
    <li><a href="#">SEO service</a></li>
    <li><a href="#">PPC service</a></li>
    <li><a href="#">Social Media Service</a></li>
    <li><a href="#">Digital Marketing Services</a></li>
    </ul>
    </div>
    
    <div id="f3">
    <h3> Contact Info</h3>
    <div class="line"></div> 
    <ul>
    <li><i class="fa-solid fa-map-location-dot"></i> <span class="mleft"> F-1197, LGF, Block F,<br> Chittaranjan, New Delhi,<br> Delhi 110019 </span></li>
    <li><i class="fa-solid fa-phone"></i><span class="mleft">+91 9953720444</span></li>
    <li><i class="fa-solid fa-envelope"></i><span class="mleft">info@twenty7inc.in</span></li>
    <li><i class="fa-solid fa-calendar"></i><span class="mleft">Office Hours: 10AM - 6PM</span></li>
    </ul>
    </div>
    
    <div id="f4">
      <h3> blog</h3>
      <div class="line"></div> 
      <ul>
      <li>Four Simple Yet Important Things To Remember About Public Relations.</li>
      <li>Useful Public Relations Tools That Every Public Relations Specialist Must Know About</li>
      <li>Role Of Digital Marketing In Public Relations</li>
      <li>Digital Public Relations And Its Basicss</li>
      </ul>
    
    </div>
    
    </div>
    </div>
    </div>
</footer>
</main>
      <script src="js/swiper-bundle.min.js"></script>
      <script src="js/script.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script>
        AOS.init();
      </script>
    <!-- <script>
      const togbtn = document.querySelector('#toggle')
        const navlinks = document.querySelector('.navlinks')
  
        togbtn.addEventListener('click',()=>{navlinks.classList.toggle('mobile-menu')}  )
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    $('#toggle').click(function(e) {
      e.stopPropagation();
      $(".navlinks").toggleClass('mobile-menu')
    });
    $('body').click(function(e) {
      if ($('.navlinks').hasClass('mobile-menu')) {
        $(".navlinks").toggleClass('mobile-menu')
      }
    })
  </script>

  </body>
</html>
