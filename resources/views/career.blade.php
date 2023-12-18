@extends('app')
@section('content')
<!-- Start Page Title Area -->
<section class="page-title-area">
    <div class="container">
      <div class="page-title-content">
        <h1>Are you ready to do the best work of your life?</h1>
      </div>
    </div>

    <div class="shape2"><img src="assets/img/shape/shape2.png" alt="image"></div>
    <div class="shape3"><img src="assets/img/shape/shape3.png" alt="image"></div>
    <div class="shape5"><img src="assets/img/shape/shape5.png" alt="image"></div>
    <div class="shape6"><img src="assets/img/shape/shape6.png" alt="image"></div>
    <div class="shape7"><img src="assets/img/shape/shape7.png" alt="image"></div>
    <div class="shape8"><img src="assets/img/shape/shape8.png" alt="image"></div>
    <div class="lines">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
  </section>
  <!-- End Page Title Area -->


  <!-- Start Services Area -->
  <section class="services-area bg-f9f9f9  pt-100 pb-70">
    <div class="container">
      <div class="section-title">
        <h2>Find Your Dream Job Here</h2>
        <p>Get in touch and let us know how we can help.</p>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single-services-box">
            <div class="icon">
              <img src="assets/img/icon/dress.jpg" alt="">
              <div class="circles-box">
                <div class="circle-one"></div>
                <div class="circle-two"></div>
              </div>
            </div>
            <h3>Wear what you want</h3>
            <p>No dress code – we won’t judge you if you come to work in your pyjamas. Do the right thing, even when no one’s watching.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single-services-box">

            <div class="icon">
              <img src="assets/img/icon/agent-sum.png" alt="">
              <div class="circles-box">
                <div class="circle-one"></div>
                <div class="circle-two"></div>
              </div>
            </div>
            <h3>Work hard, Party harder</h3>
            <p>Between our office parties, sports clubs (football, basketball) and poker nights, we have the party bit sorted.</p>
          </div>
        </div>


        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single-services-box">
            <div class="icon">
              <img src="assets/img/icon/services-150x150.png" alt="">
              <div class="circles-box">
                <div class="circle-one"></div>
                <div class="circle-two"></div>
              </div>
            </div>
            <h3>Great Team</h3>
            <p>
              Get your hands dirty. Contribute from your first day. If you’re a budding entrepreneur, you’ll learn everything you’ll need to start your own company one day!

            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single-services-box">
            <div class="icon">
              <img src="assets/img/icon/fhrs.png" alt="">
              <div class="circles-box">
                <div class="circle-one"></div>
                <div class="circle-two"></div>
              </div>
            </div>
            <h3>Flexible hours</h3>
            <p>The number of hours at work doesn’t matter as long as you deliver the goods.</p>
          </div>
        </div>
        <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon">
                        <img src="assets/img/icon/phoneboo.png" alt="">
                            <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div>
                        </div>
                        <h3>Learn</h3>
                        <p>

                          </p>
                    </div>
                </div> -->



      </div>
    </div>
  </section>
  <!-- End Services Area -->

  <section class="services-area pt-100 pb-70">
    <div class="container">
      <div class="section-title">
        <h2>Our Current Openings</h2>
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <strong>PHP Developer:</strong>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Position : Laravel Developer</p>
                  <p>Role and Responsibilities :</p>
                  <p>– Design, estimate, and code new features.<br>– Architect new applications, and expand existing ones.<br>– Collaborate on enterprise architecture with other teams at Internet Brands.<br>– Investigate and fix production issues.<br>– Define, document, and enforce engineering standards.<br>– Perform code reviews of your team members’ work.<br>– Participate in software design discussions.<br>– Participate in sprint planning and other project management meetings.<br>– Ensure all code that goes to production is of top quality.<br>– Ensure existing applications are scaled to meet expected demand.<br>– Identify and fix gaps in system reliability, such as production monitoring.<br>– Continuously improve the software infrastructure, such as the deployment process.<br>Skills Required:<br>– 5 to 7 Years years of experience in PHP.<br>– Hands on experience in PHP frameworks, mainly in Laravel.<br>– Understanding of SQL/ MongoDB databases and their declarative query languages<br>– Complex SQL queries and database schema design.<br>– Experience in React JS<br>– Working in a collaborative team environment using tools like JIRA and Git.<br>– Consuming and creating web services.<br>– Stable work history and an ability to collaborate effectively.</p>
                  <p>Nice to have:</p>
                  <p>– Scrum, Kanban, or other agile methodologies.<br>– Collaborating with engineering teams in multiple locations.<br>– Systems integration.<br>– Distributed systems.<br>– Service-oriented architecture.<br>– Search Engine Optimization (SEO<br>– Unit testing.<br>– Load testing.<br>– Page load optimization.</p>
                  <p>– Responsive design.</p>
                </div>
              </div>
            </div>
            <!--  <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <strong>Business System Analyst:</strong>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p><u>Responsibilities</u></p>
                  <ul>
                    <li>Understand user expectations and develop functional requirements and raises clarifications with stakeholders.</li>
                    <li>Give Knowledge Transfer to the development team on Functional Specifications.</li>
                    <li>Train developers on functional concepts and resolve functional problems faced.</li>
                    <li>Acts as SPOC for business requirements and represents the end user in the development team.</li>
                    <li>Lead and conduct functional testing thereby responsible for certification of product release before user acceptance.</li>
                    <li>Encourage best practices and apply them in the team – responsible for functional product quality.</li>
                    <li>Understand Agile practices (daily scrum, iteration planning, retrospective, test driven, model storming) and follow the same.</li>
                    <li>Set priority on work product as per the agreed iteration goals.</li>
                    <li>Work effectively with other team members by sharing best practices.</li>
                  </ul>
                  <p><u>Profile Required</u></p>
                  <ul>
                    <li>Require 2+ years relavant experience.</li>
                    <li>Clear understanding of Software Development life cycle and process Oriented.</li>
                    <li>Strong fundamentals in Investment Banking and Capital markets</li>
                    <li>Knowledge in compliance or regulatory projects is a big plus.</li>
                    <li>Knowledge of end to end flow between FO-MO-BO</li>
                    <li>Exposure to Agile methodology with requirements capturing using use cases and feature driven methods.</li>
                    <li>Experience on identifying and executing test strategies, test plan and functional test cases.</li>
                    <li>Experience in preparing and conducting functional reviews and training sessions.</li>
                    <li>Experience on SQL is a must.</li>
                    <li>Capability to works with customers and cross location teams to establish and maintain a consistent delivery.</li>
                    <li>Ability to work closely in a team environment is highly recommended.</li>
                    <li>Worked on at least one project with minimum 12 months period.</li>
                  </ul>
                  <p>Personal Skills:</p>
                  <ul>
                    <li>Problem solver, thinker and analyzer</li>
                    <li>Solution challenger when relevant</li>
                    <li>Excellent communication and writing skills with the ability to understand and end user directly</li>
                    <li>Synthetic communication. Formality, details level and options of documentation should be in accordance with talkers ( Support teams, Bas, end users representatives)</li>
                    <li>Have negotiation skills (tactful)</li>
                    <li>Ability to raise factual alerts &amp; risks when necessary</li>
                    <li>Organized and practical</li>
                  </ul>
                  <p>Why join us</p>
                  <p>“We are committed to creating a diverse environment and are proud to be an equal opportunity employer. All qualified applicants receive consideration for employment without regard to race, color, religion, gender, gender identity or expression, sexual orientation, national origin, genetics, disability, age, or veteran status”.</p>
                  <p>Business insight</p>
                  <p>At Cafmo Capital Inc., we are convinced that people are drivers of change, and that the world of tomorrow will be shaped by all their initiatives, from the smallest to the most ambitious.</p>
                  <p>Whether you’re joining us for a period of months, years or your entire career, together we can have a positive impact on the future. Creating, daring, innovating and taking action are part of our DNA.</p>
                  <p>If you too want to be directly involved, grow in a stimulating and caring environment, feel useful on a daily basis and develop or strengthen your expertise,<br>you will feel right at home with us!</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       <strong>Senior Quality Assurance Analyst:</strong>
      </button>
    </h2>
         <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p><u>Responsibilities</u></p><ul><li>Understand user expectations and develop functional requirements and raises clarifications with stakeholders.</li><li>Give Knowledge Transfer to the development team on Functional Specifications.</li><li>Train developers on functional concepts and resolve functional problems faced.</li><li>Acts as SPOC for business requirements and represents the end user in the development team.</li><li>Lead and conduct functional testing thereby responsible for certification of product release before user acceptance.</li><li>Encourage best practices and apply them in the team – responsible for functional product quality.</li><li>Understand Agile practices (daily scrum, iteration planning, retrospective, test driven, model storming) and follow the same.</li><li>Set priority on work product as per the agreed iteration goals.</li><li>Work effectively with other team members by sharing best practices.</li></ul><p><u>Profile Required</u></p><ul><li>Require 2+ years relavant experience.</li><li>Clear understanding of Software Development life cycle and process Oriented.</li><li>Strong fundamentals in Investment Banking and Capital markets</li><li>Knowledge in compliance or regulatory projects is a big plus.</li><li>Knowledge of end to end flow between FO-MO-BO</li><li>Exposure to Agile methodology with requirements capturing using use cases and feature driven methods.</li><li>Experience on identifying and executing test strategies, test plan and functional test cases.</li><li>Experience in preparing and conducting functional reviews and training sessions.</li><li>Experience on SQL is a must.</li><li>Capability to works with customers and cross location teams to establish and maintain a consistent delivery.</li><li>Ability to work closely in a team environment is highly recommended.</li><li>Worked on at least one project with minimum 12 months period.</li></ul><p>Personal Skills:</p><ul><li>Problem solver, thinker and analyzer</li><li>Solution challenger when relevant</li><li>Excellent communication and writing skills with the ability to understand and end user directly</li><li>Synthetic communication. Formality, details level and options of documentation should be in accordance with talkers ( Support teams, Bas, end users representatives)</li><li>Have negotiation skills (tactful)</li><li>Ability to raise factual alerts &amp; risks when necessary</li><li>Organized and practical</li></ul><p>Why join us</p><p>“We are committed to creating a diverse environment and are proud to be an equal opportunity employer. All qualified applicants receive consideration for employment without regard to race, color, religion, gender, gender identity or expression, sexual orientation, national origin, genetics, disability, age, or veteran status”.</p><p>Business insight</p><p>At Cafmo Capital Inc., we are convinced that people are drivers of change, and that the world of tomorrow will be shaped by all their initiatives, from the smallest to the most ambitious.</p><p>Whether you’re joining us for a period of months, years or your entire career, together we can have a positive impact on the future. Creating, daring, innovating and taking action are part of our DNA.</p><p>If you too want to be directly involved, grow in a stimulating and caring environment, feel useful on a daily basis and develop or strengthen your expertise,<br>you will feel right at home with us!</p>
      </div>
    </div>              
</div> -->

            <div class="accordion-item">
              <h2 class="accordion-header" id="heading4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                  <strong>Senior Laravel Developer:</strong>
                </button>
              </h2>
              <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Description:</p>
                  <p>As a Laravel Developer, you will be responsible for developing cutting-edge Software for Cafmotel’s clients and in-house products. You would be responsible for driving development for one or multiple projects, unblock and guide others working with you, perform code reviews, and enable organization work more efficiently. You need to have a passion for solving challenging real-life problems with the use of technology.</p>
                  <p>Desired Candidate Profile:</p>
                  <p>-At least 4 years of experience in Software Engineering.</p>
                  <p>-Open to work irrespective of technology stack.</p>
                  <p>-Applied algorithms and data structure knowledge.</p>
                  <p>-Experienced with performing Code Reviews</p>
                  <p>-Experienced in Breaking Down Projects/Modules into tangible tasks.</p>
                  <p>-Experienced in working with Agile Methodologies.</p>
                  <p>-Leadership skills.People who have managed and mentored a team would have an added advantage.</p>
                  <p>-Ability to coach others to become better engineers.</p>
                  <p>-Experienced in performing performance reviews of the team and giving them concrete feedback as and when needed.</p>
                  <p>-Ability to coach others to become better engineers/managers.</p>
                  <p>-Great Communication Skills. Additionally people who have dealt with clients in the past would have an advantage.</p>
                  <p>-Experience in Time Estimation would be an advantage.</p>
                  <ul>
                    <li>Experience Required: 5 – 7 Years</li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- <div class="accordion-item">
              <h2 class="accordion-header" id="heading5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                  <strong>Senior SEO Analyst:</strong>
                </button>
              </h2>
              <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>SEO is more than another 3-letter marketing acronym. It’s the way people find their next barber, learn to crochet, test their trivia knowledge. As the role voice search and home devices transform the way people use search engines, this is the most exciting time to help top brands explore SEO, especially technical SEO. Bounteous creates big-picture digital solutions for its clients, and it needs an&nbsp;<strong>Senior SEO Analyst</strong>&nbsp;to contribute to its projects. This person will identify, prioritize and resolve technical SEO issues, working with internal and external development teams to provide solutions.</p>
                  <p><strong><u>Role And Responsibilities</u></strong></p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perform technical SEO analysis to influence broader marketing strategy and contribute to client ROI</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maintain daily interaction to update clients or coworkers on project progress</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create professional deliverables for clients that meet the Bounteous quality standard</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Train clients in digital marketing best practices and join our SEO training team</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Develop process efficiencies to assist our fast-paced team</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Continuously further knowledge of SEO, with an emphasis on technical SEO</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mentor less experienced team members and learn from those with more experience</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Consistently meet department and client deadlines</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remain current in a quickly evolving industry</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carefully track and record billable time</p>
                  <p><strong><u>Preferred Qualifications</u></strong></p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bachelor’s degree with 4-6 years of related experience</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3+ years of experience independently managing technical SEO</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Experience collaborating with both internal resources, external resources to develop strategies that meet department goals within budget and established timelines</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Experience in diagnosing, isolating, and resolving complex issues and recommending and implementing strategies to resolve problems</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Experience developing strategic initiatives which align with business goals and budget</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Experience presenting recommendations and/or public speaking</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Experience in business analysis and project management</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Experience in web analytics</p>
                </div>
              </div>
            </div> 

            <div class="accordion-item">
              <h2 class="accordion-header" id="heading6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                  <strong>Information Technology Project Manager:</strong>
                </button>
              </h2>
              <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p><strong><u>Job Description</u></strong></p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Proven ability to manage large complex, cross functional, cross regional enterprise projects. Accountable for the planning and successful delivery of complex cross-functional projects with significant risk and business impact.</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Takes projects from original concept through to final implementation, championing the development of strong project plans while leading cross-functional multi-disciplined resources through the execution of the plans to deliver projects that meet or exceed customer expectations (on time, on budget and quality of scope).</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Applies advanced project management techniques and skills combined with significant experience in a large complex business environment in the implementation of the solution. ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interfaces with project stakeholders and executive sponsors, applying exceptional leadership skills to remove obstacles and resolve conflicts.</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Previous Client experience preferred. Knowledge of telecoms cellular technologies, virtual IT systems and cloud technologies preferred.</p>
                  <p><strong><u>Must Have Skills</u></strong></p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Experience as a Project Manager- handling complex projects and cross functional projects- Minimum of 10 years of experience</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Knowledge of Telecom background- technical infrastructure –projects</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keep people to timelines and achieve project deadlines and good with organizational skills and keep the project on target.</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Financial skills- Budget management- planning etc.</p>
                  <p><strong><u>Nice To Have Skills</u></strong></p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Previous Client experience preferred.</p>
                  <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Knowledge of telecoms cellular technologies, virtual IT systems and cloud technologies preferred.</p>
                </div>
              </div>
            </div>
-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                  <strong>Full Stack Developer (Fresher)</strong>
                </button>
              </h2>
              <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>The position includes the development of dynamic, fast-paced projects that span all phases of the software development lifecycle, including design, development, test, and customer support. The candidate will work in a team environment but must be able to work both independently and as a team member. The candidate also must be capable of multi-tasking plus managing and working on several projects simultaneously. This is a purely programming based role. Only candidates looking to break into the IT industry and work on challenging programming projects must apply. Training will be fully given on the below-mentioned technologies.</p>

                  <p>
                    <Strong>Responsibilities</Strong>
                  <ul>
                    <li>Work closely with a highly synergized team of Project Managers, graphic designers and other members of a project team to develop the site concept, interface design, and architecture of the website. Responsible for interface implementation.
                    </li>
                    <li>
                      Integrate web applications with backend databases. Deploy large web-based transaction systems using application servers. Researches, tests, builds and coordinates the integration of new products per production and client requirements.
                    </li>
                    <li>Ensure comprehensive, timely and quality delivery of all development projects.</li>
                  </ul>

                  <Strong>Job Role</Strong>
                  <ul>
                    <li>Requirements Analysis</li>

                    <li>Database design</li>

                    <li>Front end Development (UI, User Interaction - JavaScript), JQuery, AJAX, AngularJS</li>

                    <li>Business Logic (Server Side Programming) using PHP (MVC Frameworks such as CodeIgniter, Laravel, Symfony), MySQL</li>

                    <li>Versioning (Subversion/git)</li>

                    <li>Server deployment on Linux, Leveraging cloud infrastructures such as AWS and Azure.</li>

                    <li>Integration with Third Party APIs</li>

                    <li>Must have the willingness to learn new technologies and have exceptional self-learning capability.</li>
                  </ul>


                  <strong> Minimum Qualifications and Desired Skill:</strong>
                  <ul>
                    <li>1 year of experience in Web development.</li>

                    <li>A Bachelor's degree in Computer Science or related field.</li>

                    <li>Concrete understanding of computer science concepts such as Databases, SQL, Programming Logic and basic constructs.</li>

                    <li>Creative problem-solving abilities and strong work ethic with “can do” attitude.</li>

                    <li>Ability to take high-level requirements and compile them into development tasks.</li>

                    <li>Ability to thrive in a team/collaborative environment</li>
                  </ul>
                  </p>


                  <p>&nbsp;</p>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </section>

  <!-- Start Project Start Area -->
  <div class="bg-f9f9f9"><style>
    .ptb-100 {
    padding-top: 38px;
    padding-bottom: 66px;
}
</style>
<!-- Start Project Start Area -->
<section class="project-start-area ptb-100 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="project-start-image">
                        <img src="assets/img/project-start1.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="project-start-content">
                        <!-- <span class="sub-title">Support Center</span> -->
                        <h2>Our support center is available round the clock 365 days.</h2>
                        <p>We'd love to hear from you. Here's how you can reach us.
Interested in the Cafmotel platform but don't know what to choose? Give us a call and we'll offer the solution that works for your industry.</p>
                        <a href="{{url('contact')}}" class="default-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape2"><img src="assets/img/shape/shape2.png" alt="image"></div>
        <div class="shape3"><img src="assets/img/shape/shape3.png" alt="image"></div>
        <div class="shape5"><img src="assets/img/shape/shape5.png" alt="image"></div>
        <div class="shape6"><img src="assets/img/shape/shape6.png" alt="image"></div>
        <div class="shape7"><img src="assets/img/shape/shape7.png" alt="image"></div>
        <div class="shape13"><img src="assets/img/shape/shape13.png" alt="image"></div>
    </section>
    <!-- End Project Start Area --></div>
  <!-- End Project Start Area -->
@endsection