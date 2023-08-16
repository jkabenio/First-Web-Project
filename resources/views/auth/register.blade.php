@extends('layouts.app')

@section('content')
<style>
.registerbtn {
  background-color: rgb(3, 187, 187);
  color: white;
 border-radius: 50px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
height: 40px;
  
}
.registerbtn:hover {
  opacity: 1;
}
body{
margin-top: 110px;
  position: relative;
  width: 100%;
  font-family: "Times New Roman", Times, serif;
  background-image: url(/img/kaitlyn-baker-vZJdYl5JVXY-unsplash.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  }
  .card{
      background-color: rgba(124, 125, 125, 0.543);
     
  }
  label{
     color: aquamarine;
  }
  .card-header{
    color: aquamarine;
    text-align: center;
    font-size: 40px;
  }
  .reminder{
      font-size: 14px;
      color: rgb(255, 227, 227);
      text-align: center;
  }
  .show_pass{
    color: aquamarine !important;
    margin-left: 20px;
  }
  .attainment{
   margin-bottom: 17px;
      margin-left: 100px;
  }

  .select_size{
    width: 338px;
    height: 35px;
  }

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registration') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                         <div class="attainment">
                            <label  for="attainment">Education Attainment</label>
                            <select class="select_size" name="attainment" id="attainment">
                                
                                
                               <!-- For Letter A --> 
                                <optgroup label="A">
                                <option value="11">N/A</option>
                                <option value="3">Certificate IV in Accounting and
                                    Bookkeeping</option>
                                <option value="5">Diploma of Accounting</option>
                                <option value="5">Accounting Principles Skill</option>
                                <option value="10">Certificate IV in Ageing Support</option>
                                <option value="10">Certificate IV in Alcohol and Other Drugs
                                </option>
                                <option value="10">Alcohol and Other Drugs Skill</option>
                                <option value="10">Certificate IV in Allied Health Assistance
                                </option>
                                <option value="6">Bachelor of Animation and Visual Effects
                                </option>
                                <option value="6">Master of Applied Information Technology
                                </option>
                                <option value="10">Victorian Certificate of
                                    Applied
                                    Learning (Intermediate)</option>
                                <option value="10">Victorian Certificate of Applied
                                    Learning
                                    (Senior)</option>
                                <option value="10">Bachelor of Applied
                                    Movement
                                    Sciences/Master of Physiotherapy</option>
                                <option value="10">Master of Applied Psychology
                                    (Clinical
                                    Psychology)</option>
                                <option value="10">Master of Applied Psychology
                                    (Community
                                    Psychology)</option>
                                <option value="10">Master of Applied Research</option>
                                <option value="6">Graduate Certificate in Artificial
                                    Intelligence</option>
                                <option value="10">Bachelor of Arts</option>
                                <option value="10">Master of Arts</option>
                            </optgroup>
                            <!-- For Letter B -->
                            <optgroup label="B">
                                <option value="10">Certificate III in Barbering</option>
                                <option value="10">BAS Agent Registration Skill</option>
                                <option value="10">Basic Scaffolding</option>
                                <option value="10">Certificate III in Beauty Services</option>
                                <option value="10">Certificate IV in Beauty Therapy</option>
                                <option value="10">Diploma of Beauty Therapy</option>
                                <option value="10">Bachelor of Biomedical and Exercise Science
                                </option>
                                <option value="10">Bachelor of Biomedical Science</option>
                                <option value="10">Bachelor of Biomedicine</option>
                                <option value="1">Certificate III in Bricklaying and
                                    Blocklaying</option>
                                <option value="10">Bridging Course
                                    in
                                    Clinical Practice For International Medical Graduates</option>
                                <option value="1">Diploma of Building and Construction
                                    (Building)</option>
                                <option value="1">Certificate II in
                                    Building
                                    and Construction Pre-apprenticeship</option>
                                <option value="1">Advanced Diploma of Building Design
                                    (Architectural)</option>
                                <option value="1">Bachelor of Building Design</option>
                                <option value="1">Bachelor of Building Surveying</option>
                                <option value="1">Graduate Certificate in Building Surveying
                                </option>
                                <option value="1">Graduate Diploma in Building Surveying</option>
                                <option value="1">Building the Team</option>
                                <option value="3">Master of Business Administration (Global)
                                </option>
                                <option value="3">Graduate Certificate in Business
                                    Administration</option>
                                <option value="3">Graduate Diploma in Business Administration
                                </option>
                                <option value="3">Master of Business Administration</option>
                                <option value="3">Master of Business Administration
                                    (Professional)</option>
                                <option value="3">Graduate Certificate in Business Analytics
                                </option>
                                <option value="3">Master of Business Analytics</option>
                                <option value="3">Bachelor of Business</option>
                                <option value="3">Certificate IV in Business</option>
                                <option value="3">Diploma of Business (Enterprise)</option>
                                <option value="3">Graduate Diploma in Business</option>
                            </optgroup>
                            <!-- For Letter C -->
                            <optgroup label="C">
                                <option value="2">Certificate III in Cabinet Making</option>
                                <option value="10">Capstone Exam Preparatory Course</option>
                                <option value="2">Certificate III in Carpentry</option>
                                <option value="10">Master of Change, Innovation and Leadership
                                </option>
                                <option value="4">Graduate Certificate in Change Management
                                </option>
                                <option value="4">Introduction to Change Management</option>
                                <option value="10">Graduate Certificate in Child
                                    and Adolescent Mental Health</option>
                                <option value="10">Master of Child and Adolescent Mental
                                    Health
                                </option>
                                <option value="10">Chinese Language and Culture Program</option>
                                <option value="1">Certificate III in Civil
                                    Construction
                                    Plant Operations</option>
                                <option value="1">Certificate II in Civil Construction</option>
                                <option value="1">Certificate III in Civil Construction</option>
                                <option value="1">Certificate IV in Civil Construction</option>
                                <option value="10">Class 1 Restricted Electrical Fault
                                    Finding Licence</option>
                                <option value="10">Master of Clinical Exercise
                                    Science
                                    and Rehabilitation</option>
                                <option value="10">Introduction to Clipper Fading</option>
                                <option value="10">Introduction to Coaching and Mentoring
                                    Skills
                                </option>
                                <option value="7">Certificate III in Commercial Cookery</option>
                                <option value="7">Certificate IV in Commercial Cookery</option>
                                <option value="8">Communicate with Influence</option>
                                <option value="8">Bachelor of Community Development</option>
                                <option value="8">Diploma of Community Development</option>
                                <option value="8">Advanced Diploma of Community Sector
                                    Management</option>
                                <option value="8">Certificate IV in Community Services</option>
                                <option value="8">Diploma of Community Services</option>
                                <option value="8">Graduate Certificate in Community
                                    Sport
                                    Management</option>
                                <option value="1">Construction Induction (White Card)</option>
                                <option value="1">Bachelor of Construction Management
                                    (Honours)
                                </option>
                                <option value="1">Graduate Certificate in
                                    Construction
                                    Project Management</option>
                                <option value="10">Graduate Diploma in Counselling</option>
                                <option value="10">Master of Counselling</option>
                                <option value="10">CPR (Refresher)</option>
                                <option value="10">Bachelor of Criminal Justice and
                                    Psychological Studies</option>
                
                                <option value="10">Bachelor of Criminal Justice</option>
                                <option value="10">Bachelor of Criminology</option>
                                <option value="10">Master of Criminology</option>
                                <option value="10">Bachelor of
                                    Criminology/Bachelor
                                    of Psychological Studies</option>
                                <option value="6">Certificate IV in Cyber Security</option>
                                <option value="6">Advanced Diploma of Cyber Security</option>
                                <option value="6">Bachelor of Cyber Security</option>
                                <option value="6">Graduate Certificate in Cyber Security</option>
                                <option value="6">Graduate Diploma in Cyber Security</option>
                                <option value="6">Cybersecurity Essentials</option>
                                <option value="6">Introduction to Cybersecurity</option>
                            </optgroup>
                            <!-- For Letter D -->
                            <optgroup label="D">
                                <option value="10">Graduate Certificate in
                                    Data
                                    Analytics for Sport Performance</option>
                                <option value="10">Bachelor of Data Science</option>
                                <option value="10">Bachelor of Dermal Sciences</option>
                                <option value="6">Graduate Certificate in Digital Content
                                    Creation</option>
                                <option value="6">Graduate Certificate in Digital
                                    Learning and Teaching</option>
                                <option value="6">Graduate Certificate in Digital Media</option>
                                <option value="6">Graduate Diploma in Digital Media</option>
                                <option value="6">Master of Digital Media</option>
                                <option value="10">Certificate IV in Disability</option>
                                <option value="6">
                                    Restricted - Disconnection/Reconnection of Fixed Wired Low Voltage Electrical Equipment</option>
                                <option value="10">Certificate II in Drainage</option>
                            </optgroup>
                            <!-- For Letter E -->
                            <optgroup label="E">
                                <option value="10">Course in EAL</option>
                                <option value="10">Certificate I in EAL (Access)</option>
                                <option value="10">Certificate II in EAL (Access)</option>
                                <option value="10">Certificate III in EAL (Access)</option>
                                <option value="10">Certificate IV in EAL (Access)</option>
                                <option value="10">Certificate II in EAL (Employ10ment)</option>
                                <option value="10">Certificate III in EAL (Employment)</option>
                                <option value="10">Certificate IV in EAL (Employment /
                                    Professional)</option>
                                <option value="10">Certificate III in EAL (Further Study)</option>
                                <option value="10">Certificate IV in EAL (Further Study)</option>
                                <option value="10">Certificate III in Early Childhood
                                    Education and Care</option>
                                <option value="10">Diploma of Early Childhood Education and
                                    Care
                                </option>
                                <option value="10">Bachelor of Early Childhood
                                    Education
                                    and Leadership</option>
                                <option value="10">Bachelor of Early Childhood Education</option>
                                <option value="10">Graduate Certificate in Early
                                    Childhood
                                    Education</option>
                                <option value="10">Graduate Diploma in Early Childhood
                                    Education
                                </option>
                                <option value="10">Bachelor of Early Childhood Teaching</option>
                                <option value="3">Graduate Certificate in Economics for
                                    Business</option>
                                <option value="10">Graduate Certificate in Education</option>
                                <option value="10">Graduate Diploma in Education</option>
                                <option value="10">Master of Education</option>
                                <option value="10">Bachelor of Education (P-12)</option>
                                <option value="10">Bachelor of Education Studies</option>
                                <option value="10">Diploma of Education Studies</option>
                                <option value="10">Certificate IV in Education Support</option>
                                <option value="10">Victorian Certificate of Education (VCE)
                                </option>
                                <option value="10">Effective Communication Skills</option>
                                <option value="9">Introduction to Effective Teamwork</option>
                                <option value="10">Effective Time Management</option>
                                <option
                                    value="10">
                                    Electrical Safety Testing of Electrical Cord Connected Equipment and Cord Assemblies Skill</option>
                                <option value="10">Certificate III in Electrotechnology
                                    Electrician</option>
                                <option value="10">Certificate II in Electrotechnology
                                    (Pre-vocational)</option>
                                <option value="10">Emergency First Aid in Childcare and
                                    Education</option>
                                <option value="10">Diploma of Emergency Health Care</option>
                                <option value="10">Introduction to Emotional Intelligence</option>
                                <option value="2">Diploma of Engineering</option>
                                <option value="2">Certificate III in Engineering -
                                    Fabrication Trade</option>
                                <option value="2">Bachelor of Engineering
                                    (Honours) (Architectural Engineering)</option>
                                <option value="2">Bachelor of Engineering (Honours)
                                    (Civil Engineering)</option>
                                <option value="2">Bachelor of
                                    Engineering (Honours) (Electrical and Electronic Engineering)</option>
                                <option value="2">Bachelor of Engineering
                                    (Honours)
                                    (Mechanical Engineering)</option>
                                <option value="2">Master of Engineering</option>
                                <option value="2">Certificate III in Engineering -
                                    Mechanical Trade</option>
                                <option value="2">Certificate IV in Engineering</option>
                                <option value="2">Certificate II in Engineering Studies</option>
                                <option value="10">English for Academic Purposes (EAP)</option>
                                <option value="2">Graduate Certificate in
                                    Enterprise and Resource Planning Systems</option>
                                <option value="2">Master of Enterprise Resource Planning</option>
                                <option value="10">Diploma of Event Management</option>
                                <option value="10">Bachelor of Exercise Science (Clinical
                                    Practice)</option>
                                <option value="10">Bachelor of Exercise Science (Sport
                                    Practice)
                                </option>
                                <option value="10">Eyelash Extensions</option>
                            </optgroup>
                            <!-- For Letter F -->
                            <optgroup label="F">
                                <option value="5">Graduate Certificate in Finance</option>
                                <option value="5">Master of Finance</option>
                                <option value="5">Graduate Certificate in Financial Planning
                                </option>
                                <option value="5">Graduate Diploma in Financial Planning</option>
                                <option value="5">Master of Financial Planning</option>
                                <option value="10">Bachelor of Fitness</option>
                                <option value="10">Certificate III in Fitness</option>
                                <option value="10">Certificate IV in Fitness</option>
                                <option value="7">Food Handling</option>
                                <option value="10">Foundations at VU JYAC</option>
                                <option value="2">Certificate II in Furniture Making</option>
                            </optgroup>
                            <!-- For Letter G -->
                            <optgroup label="G">
                                <option value="10">Certificate I in General Education for
                                    Adults
                                </option>
                                <option value="10">Certificate II in General Education for
                                    Adults</option>
                                <option value="10">Certificate III in General Education for
                                    Adults</option>
                                <option value="10">Certificate I in General
                                    Education for Adults (Introductory)</option>
                                <option value="10">General English</option>
                                <option value="10">Graduate Certificate in Global Public
                                    Health
                                </option>
                                <option value="10">Master of Global Public Health</option>
                            </optgroup>
                            <!-- For Letter H -->
                            <optgroup label="H">
                                <option value="2">Certificate III in Hairdressing</option>
                                <option value="10">Certificate III in Health Administration
                                </option>
                                <option value="10">Diploma of Health Coaching</option>
                                <option value="10">Bachelor of Health Science</option>
                                <option value="10">Master of Health Science (Osteopathy)</option>
                                <option value="10">Certificate III in Health Services
                                    Assistance
                                </option>
                                <option value="3">Associate Degree in Hospitality and
                                    Hotel Management</option>
                                <option value="3">Diploma of Hospitality Management</option>
                                <option value="3">Advanced Diploma of Hospitality Management
                                </option>
                                <option value="3">Certificate II in Hospitality</option>
                                <option value="3">Certificate III in Hospitality</option>
                                <option value="10">Bachelor of Human Nutrition</option>
                                <option value="10">Certificate IV in Human Resource Management
                                </option>
                                <option value="10">Master of Human Resource Management</option>
                            </optgroup>
                            <!-- For Letter I -->
                            <optgroup label="I">
                                <option value="10">Certificate III in Individual Support</option>
                                <option value="2">Certificate IV in Industrial
                                    Automation
                                    and Control</option>
                                <option value="6">Bachelor of Information Technology</option>
                                <option value="6">Diploma of Information Technology</option>
                                <option value="6">Certificate III in Information Technology
                                </option>
                                <option value="6">Certificate IV in Information Technology
                                </option>
                                <option value="6">Bachelor of Information Technology
                                    (Professional)</option>
                                <option value="6">Graduate Certificate
                                    in
                                    Information Technology Project Management</option>
                                <option value="8">Course in Initial EAL</option>
                                <option value="8">Graduate Certificate in
                                    International Community Development</option>
                                <option value="8">Graduate Diploma in
                                    International
                                    Community Development</option>
                                <option value="8">Master of International Community
                                    Development
                                </option>
                                <option value="8">International Foundations at VU (Extended)
                                </option>
                                <option value="8">International Foundations at VU</option>
                                <option value="6">Introduction to Internet of Things (IoT)
                                </option>
                                <option value="10">Course in
                                    Introduction to
                                    the National Disability Insurance Scheme</option>
                            </optgroup>
                            <!-- For Letter J -->
                            <optgroup label="J">
                                <option value="10">Certificate III in Joinery</option>
                            </optgroup>
                            <!-- For Letter K -->
                            <optgroup label="K">
                                <option value="7">Certificate II in Kitchen Operations</option>
                            </optgroup>
                            <!-- For Letter L -->
                            <optgroup label="L">
                                <option value="10">LANTITE Preparation Course</option>
                                <option value="10">Bachelor of Laws</option>
                                <option value="10">Bachelor of Laws/ Bachelor of Criminology
                                </option>
                                <option value="10">Bachelor of Laws (Graduate Entry)</option>
                                <option value="10">Bachelor of Laws (Honours)</option>
                                <option value="10">Bachelor of Laws (Honours) (Graduate Entry)
                                </option>
                                <option value="10">Bachelor of Laws (Honours)/Bachelor of Arts
                                </option>
                                <option value="10">Bachelor of Laws (Honours)/Bachelor of
                                    Business</option>
                                <option value="10">Bachelor of Laws
                                    (Honours)/Bachelor of Psychology (Honours)</option>
                                <option value="10">Bachelor of Laws/Bachelor of Arts</option>
                                <option value="10">Bachelor of Laws/Bachelor of Business</option>
                                <option value="10">Bachelor of Laws/Bachelor of
                                    Psychological Studies</option>
                                <option value="10">Bachelor of Laws(Honours)/Bachelor of
                                    Criminology</option>
                                <option value="10">Certificate IV in Leadership and Management
                                </option>
                                <option value="10">Diploma of Leadership and Management</option>
                                <option value="10">Leading a Team</option>
                                <option value="10">Advanced Diploma of Legal Practice</option>
                                <option value="10">Bachelor of Legal Services</option>
                                <option value="10">Certificate IV in Legal Services</option>
                                <option value="10">Level II First Aid</option>
                                <option value="10">Diploma of Library and Information Services
                                </option>
                            </optgroup>
                                <!-- For Letter M -->
            <optgroup label="M">
                <option value="10">Certificate III in Make-Up</option>
                <option value="3">Graduate Certificate in Management</option>
                <option value="3">Master of Management</option>
                <option value="3">Introduction to Managing Workplace
                    Priorities
                </option>
                <option value="4">Introduction to Managing Workplace
                    Relationships</option>
                <option value="5">Graduate Certificate in Marketing</option>
                <option value="3">Master of Marketing</option>
                <option value="6">Mechanical Fitting for Hobbyists</option>
                <option value="8">Certificate IV in Mental Health</option>
                <option value="8">Graduate Certificate in Mental Health</option>
                <option value="8">Master of Mental Health</option>
                <option value="8">Graduate Certificate in Mental Health
                    Nursing
                </option>
                <option value="8">Graduate Diploma in Mental Health Nursing
                </option>
                <option value="8">Master of Mental Health Nursing</option>
                <option value="10">Micropigmentation and
                    Cosmetic
                    Tattooing for Professionals</option>
                <option value="8">Bachelor of Midwifery/Bachelor of Nursing
                </option>
                <option value="8">Migration Law for Lawyers</option>
                <option value="8">Graduate Diploma in Migration Law</option>
                <option value="10">Bachelor of Music</option>
            </optgroup>
            <!-- For Letter N -->
            <optgroup label="N">
                <option value="8">Certificate III in Non-Emergency
                    Patient
                    Transport</option>
                <option value="8">Bachelor of Nursing</option>
                <option value="8">Master of Nursing (By Research)</option>
                <option value="8">Graduate Certificate in Nursing</option>
                <option value="8">Diploma of Nursing</option>
                <option value="8">Master of Nursing</option>
                <option value="8">Bachelor of Nutritional
                    Science/Master
                    of Dietetics</option>
            </optgroup>
            <!-- For Letter O -->
            <optgroup label="O">
                <option value="">Bachelor of Outdoor Education and Environmental Science</option>
                <option value="8">Bachelor of Outdoor Leadership</option>
            </optgroup>
            <!-- For Letter P -->
            <optgroup label="P">
                <option value="8">Bachelor of Paramedicine</option>
                <option value="6">Diploma of Payroll Services</option>
                <option value="10">Perfect Your Own Make-Up</option>
                <option value="10">Graduate Certificate in
                    Performance
                    Analysis (Football)</option>
                <option value="1">Graduate Certificate in
                    Performance-Based Building & Fire Codes</option>
                <option value="8">Doctor of Philosophy</option>
                <option value="8">Doctor of Philosophy (Integrated)</option>
                <option value="8">Bachelor of Physical Education and
                    Sport
                    Science</option>
                <option value="8">Graduate Certificate in Planetary Health
                </option>
                <option value="1">Certificate IV in Plumbing and Services</option>
                <option value="1">Certificate III in Plumbing</option>
                <option value="1">Certificate II in Plumbing
                    (Pre-apprenticeship)</option>
                <option value="1">Course in Policing Recruitment Pathway</option>
                <option value="8">Introduction to Positive Leadership</option>
                <option value="1">Graduate Certificate in Power Engineering
                </option>
                <option value="5">Introduction to Presentation Skills</option>
                <option value="5">Master of Professional Accounting</option>
                <option value="8">Professional Course in Australian
                    Migration
                    Law</option>
                <option value="8">Professional Course in Notarial Practice
                </option>
                <option value="8">Master of Professional Psychology</option>
                <option value="5">Diploma of Project Management</option>
                <option value="5">Graduate Certificate in Project Management
                </option>
                <option value="5">Graduate Diploma in Project Management</option>
                <option value="5">Master of Project Management</option>
                <option value="5">Introduction to Project Management</option>
                <option value="8">Bachelor of Psychological Studies</option>
                <option value="8">Bachelor of Psychological Studies (Honours)
                </option>
                <option value="8">Bachelor of Psychological
                    Studies/Bachelor of Business</option>
                <option value="8">Bachelor of Psychology (Honours)</option>
                <option value="8">Graduate Certificate in Public Health</option>
                <option value="8">Master of Public Health</option>
            </optgroup>
            <!-- For Letter R -->
            <optgroup label="R">
                <option value="1">Registered Electrical Contractor (REC)</option>
                <option value="8">Diploma of Remedial Massage</option>
                <option value="10"></option>
                <option value="10">Master of Research Practice</option>
                <option value="10">Graduate Certificate in Research Skills</option>
                <option value="10">Responsible Service of Alcohol</option>
                <option value="10">Revit Level 1</option>
            </optgroup>
            <!-- For Letter S -->
            <optgroup label="S">
                <option value="10">Safe Operation of an Elevating Work
                    Platform
                </option>
                <option value="6">Course in Safe Use of Machinery
                    for
                    Technology Teaching</option>
                <option value="6">SAP Activate for Cloud Solutions -
                    Project Management</option>
                <option value="6">SAP Analytics Cloud</option>
                <option value="9">SAP Extended Warehouse Management</option>
                <option value="5">SAP Finance - Financial Accounting</option>
                <option value="5">SAP Finance - Management Accounting</option>
                <option value="8">SAP Transportation Management</option>
                <option value="10">Bachelor of Science (Honours)
                    (Biomedical Sciences)</option>
                <option value="8">Bachelor of Science (Osteopathy)</option>
                <option value="8">Bachelor of
                    Science
                    (Osteopathy)/Master of Health Science (Osteopathy)</option>
                <option value="8">Bachelor of Science/Master
                    of
                    Teaching (Secondary Education)</option>
                <option value="10">Diploma of Screen and Media</option>
                <option value="10">Bachelor of Screen Media</option>
                <option value="10">Search Engine
                    Optimisation (SEO) Strategy and Implementation Program</option>
                <option value="6">Certificate III in Signs and Graphics</option>
                <option value="8">Bachelor of Social Work</option>
                <option value="1">Solar Grid Connect - Design and Install</option>
                <option value="1">Solar Grid Connect - Design</option>
                <option value="1">Solar Grid Connect - Install</option>
                <option value="8">Bachelor of Speech
                    and
                    Language Sciences/Master of Speech Pathology</option>
                <option value="8">Master of Speech Pathology</option>
                <option value="10">Graduate Certificate in Sport and
                    Exercise Science</option>
                <option value="10">Master of Sport and Exercise Science</option>
                <option value="10">Master of Sport Business</option>
                <option value="10">Graduate Certificate in Sport Integrity</option>
                <option value="10">Bachelor of Sport Management</option>
                <option value="4">Bachelor of Sport Management/Bachelor
                    of
                    Business</option>
                <option value="10">Bachelor of Sport Science</option>
                <option value="8">Bachelor of
                    Sport Science (Human Movement)/Bachelor of Psychological Studies</option>
                <option value="10">Bachelor of
                    Sport
                    Science (Human Movement)/Bachelor of Sport Management</option>
                <option value="10">Graduate Certificate in Supply Chain
                    Management</option>
                <option value="10">Master of Supply Chain Management</option>
            </optgroup>
            <!-- For Letter T -->
            <optgroup label="T">
                <option value="8">Tax Law for Tax Agents Skill Set
                    (Tax
                    documentation)</option>
                <option value="8">Diploma of Teacher Education Preparation
                </option>
                <option value="8">Graduate Certificate in Teaching
                    (Primary Education)</option>
                <option value="8">Master of Teaching (Primary Education)</option>
                <option value="8">Graduate Certificate in Teaching
                    (Secondary Education)</option>
                <option value="8">Master of Teaching (Secondary Education)
                </option>
                <option value="8">Graduate Certificate in Tertiary Education
                </option>
                <option value="8">Certificate IV in Tertiary Preparation</option>
                <option value="8">Graduate Certificate in TESOL</option>
                <option value="8">Graduate Certificate in
                    Tourism
                    and Destination Management</option>
                <option value="10">Master of Tourism Hospitality and
                    Events
                    Management</option>
                <option value="10">Certificate II in Tourism</option>
                <option value="10">Certificate III in Tourism</option>
                <option value="10">Certificate I in Transition Education</option>
                <option value="10">Graduate Certificate in Transport Systems
                </option>
                <option value="10">Diploma of Travel and Tourism Management
                </option>
            </optgroup>
            <!-- For Letter U -->
            <optgroup label="U">
                <option value="1">Undergraduate Certificate in
                    Architectural
                    Design</option>
                <!-- For Constructions -->
                <option value="1">Undergraduate Certificate
                    in
                    Building Construction Management</option>
                <option value="8">Undergraduate Certificate in Diet and
                    Health
                </option>
                <option value="4">Undergraduate Certificate in
                    Digital
                    Business Skills</option>
                <option value="8">Undergraduate Certificate in
                    Early
                    Childhood Education</option>
                <option value="8">Undergraduate Certificate in Education
                    (P12) STEM</option>
                <option value="8">Undergraduate Certificate in Education
                    Studies</option>
                <option value="1">Undergraduate Certificate in
                    Engineering Fundamentals</option>
                <option value="4">Undergraduate Certificate in
                    Entrepreneurial Mindset</option>
                <option value="8">Undergraduate Certificate in Health Science
                </option>
                <option value="6">Undergraduate Certificate in
                    Information
                    Technology</option>
                <option value="8">Undergraduate
                    Certificate in Interpersonal and Organisational Skills</option>
                <option value="8">Undergraduate Certificate in Laser Safety
                </option>
                <option value="8">Undergraduate Certificate in
                    Primary
                    Physical Education</option>
                <option value="8">Undergraduate Certificate in
                    Psychological Studies</option>
                <option value="8">Undergraduate Certificate in
                    Science and the Environment</option>
                <option value="8">Undergraduate Certificate in
                    Secondary Physical Education</option>
                <option value="10">Undergraduate Certificate in Sport Science
                </option>
                <option value="6">Undergraduate Certificate
                    in
                    Web Development and Programming</option>
            </optgroup>
            <!-- For Letter W -->
            <optgroup label="W">
                <option value="1">Welding for Beginners</option>
                <option value="8">Certificate II in Work Education</option>
                <option value="8">Certificate I in Work Education</option>
                <option value="1">Working at
                    Heights
                    Safely in the Resources and Infrastructure Industry</option>
            </optgroup>
            <!-- For Letter Y -->
            <optgroup label="Y">
                <option value="8">Bachelor of Youth Work and Criminal Justice
                </option>
                <option value="8">Bachelor of Youth Work</option>
                <option value="8">Certificate IV in Youth Work</option>
                <option value="10">Bachelor of Youth Work/Bachelor of
                    Sport
                    Management</option>                                </optgroup>
                            </select>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                
                                <input value="" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                
                                {{-- <script>
                                function myFunction() { 
                                  var x = document.getElementById("password");
                                  var y = document.getElementById("password-confirm");
                                  if (x.type == "password" || y.type == "password-confirm") {
                                    x.type = "text";
                                    y.type = "text";
                                  } else {
                                    x.type = "password";
                                    y,type = "password-confirm";
                                  }
                                }
                                </script> --}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input value="" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                               
                                <script>
                                    function myFunction() { 
                                      var x = document.getElementById("password");
                                      var y = document.getElementById("password-confirm");
                                      if (x.type == "password" || y.type == "password-confirm") {
                                        x.type = "text";
                                        y.type = "text";
                                      } else {
                                        x.type = "password";
                                        y.type = "password";
                                      }
                                    }
                                    </script>
                                <p class="show_pass"> <input class="form-check-input" type="checkbox" onclick="myFunction()">Show Password</p>
                              
                            
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required >
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>




                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <div {{ $errors->has('terms') ? ' has-error' : '' }}>
                                    <p class="reminder"> "provide your fullname to verified your account"<br>"password must contain letter, number and symbol"</p>
                                    <label>
                                        <input type="checkbox"  name="terms" value="1" /> Agree with the <a href="/services">terms</a> and <a href="/services">conditions</a>
                                    </label>
                                  
                                    <div>
                                      @if ($errors->has('terms'))
                                       <span class="help-block">
                                         <strong>{{ $errors->first('terms') }}</strong>
                                       </span>
                                      @endif
                                    </div>
                                  </div>
                                <button type="submit" class="registerbtn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>                  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br>
@endsection