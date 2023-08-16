@extends('layouts.app')

@section('content')
<style>
    h1{
      margin-top: calc(5vh + 16px); 
      text-align: center;

    } 
    p{ 
      word-wrap: normal;
      width:80%;
      text-align: justify;
      text-justify: inter-word;
      font-size: 70px; 
      word-break: break-all;
     

    } 
    .terms_context{
      margin: auto;
  width: 80%;
  border: 3px solid #bdcb00;
  height: 650px;
  overflow: auto;
  color:rgb(0, 0, 0);
  font-size: 20px;
  font-family: "Times New Roman", Times, serif;
  background-color: rgba(240, 248, 255, 0.584);
    } 
    ::-webkit-scrollbar {
    width: 0;  /* Remove scrollbar space */
    background: transparent;  /* Optional: just make scrollbar invisible */
}
    h3{
      text-align: center;
      color: rgb(51, 0, 255);
      font-size: 50px;
      bold
    }

    body{
margin-top: 110px;
  position: relative;
  background-image: url(/img/jess-bailey-q10VITrVYUM-unsplash.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  width: 100%;
  height: 650px;

  }

   </style>
    <div class="terms_context container">
     <p><b>
        <h3>PRIVACY NOTICE</h3>
        <br>
        WELCOME TO CNJOBZONE.COM THE ONLINE JOB POSTING SERVICE OF LIVE, INC. (“LIVE INC,” “WE” OR “US”). LIVE, INC.,
        a corporation duly organized and existingunder Phillipines laws, with business address at Vinzons Avenue 4600
        daet Suite Phillipines (including its affiliates and subsidiaries, "LIVE, INC.") is committed
        to protecting your privacy and developing technology that gives you a powerful but secure and safe online experience.
        This Privacy Notice (the “Privacy Notice”) applies to and governs data collection, recording, updating, modification
        or corrections, usage, sharing, storage, retention and destruction or disposition (collectively, “data processing”) by
        LIVE, INC.in the websites owned and/or operated by LIVE, INC., including the website you are currently accessing (the “Website”).
        You are hereby requested to accept and consent to the data processing rules and practices described in this Privacy Notice so that
         you may continue to use and enjoy the Website.
        <br><br>
         By using the Site, you agree to be bound by the Terms. If you do not agree to these Terms, please do not use this Site. These Terms comprise a legal contract between you and LIVE, INC. This Site and the services or features offered on the Site are intended for use by individuals looking for information on employment opportunities and for employers or recruiters seeking candidates for employment. These Terms apply only to site access and to features or services offered on the Site.
         <br><br>

         LIVE, INC. may amend these Terms at any time in its sole discretion. LIVE, INC. shall notify you of any amendment to the Terms, and you understand and agree that your express consent to the amended Terms is a precondition to your access of, or activity within, the Site. Your continued use of the Site after the effective date of any amendments to these Terms constitutes your agreement to comply and be bound by such amendments, including but not limited to any charges that may be associated with the use of the Site. You agree to check the Site periodically so you will be familiar with the Terms as amended or modified from time to time.
         <br><br>
         If you do not indicate your express consent to the Terms as amended, please stop using the Site. If you have any questions regarding these Terms, please email us at INFO<a href="https://mail.google.com/">@cnjobzone.com.</a>
         <br><br>
         Access to, transmitting and receiving real-time updates to and from the site requires internet access and connection. The internet connection is under your responsibility. LIVE, INC. does not provide internet access, and you are responsible for all charges and fees associated with your internet connection.
         <br><br>
         <h3>THE SITE AND THE SERVICE</h3>
         <br><br>
         The Site provides an online job posting service between employers and job applicants. LIVE, INC. does not promise or guarantee that you will find a job. LIVE, INC. is only providing a venue for job applicants to seek out potential employers, and potential employers to find suitable applicants for a particular job description based on a given set of requirements and preferences. In order for an employer to find the most suitable applicant for a posted job listing, job applicants must make available their relevant personal data to potential employers. Since the Site is only a posting board, both the job applicants and the employers need to do their own due diligence.
         <br><br>
         If you are a job applicant, you represent that you are at least eighteen (18) years old and legally allowed to work in the Philippines; if you are an employer, you represent that you are duly authorized to represent the company, that the company you represent is lawfully organized and existing under Philippine laws, and that the job postings (“Camarines Norte JobZone”) offered are in compliance with the applicable labor laws in the Philippines. You further agree you can only use any applicant’s data for the limited purpose of evaluating the applicant for possible engagement, and you agree to delete any unneeded applicant data promptly and be held liable for any unlawful distribution of such data without the related applicant’s consent.
         <br><br>
         When you visit the Site, provide content, or send e-mails to or through LIVE, INC, you are communicating with LIVE, INC. electronically. You consent to receive personal communications from LIVE, INC. electronically. LIVE, INC. will communicate with you by e-mail or by posting notices on the Site. You agree that all agreements, notices, disclosures and other communications that LIVE, INC. provides to you electronically satisfy any legal requirement that such communications be in writing.
         <br><br>
         The Site may contain links to third-party websites, advertisers, services, special offers, or other events or activities that are not owned or controlled by LIVE, INC. LIVE, INC. does not endorse or assume any responsibility for any such third-party sites, information, materials, products, or services. If you access a third party website from the Site, you do so at your own risk as these Terms do not apply to them.
         <br><br>
         <h3>REGISTRATION</h3>
         <br><br>
         In order to use the Site, you shall be required to register and create an account (“Account”), where you will be asked to provide your personal and sensitive personal information, including but not limited to your name, contact details, professional, educational, and personal background. You must provide valid and accurate information. Providing false information shall be ground for suspension or termination of your Account, and LIVE, INC. shall have the right to refuse any and all current or future use of the service. You consent to the use and disclosure of the information you provide in the registration and creation of your Account, which information will be used strictly so that LIVE, INC. can provide the service as provided in these Terms, and shall be subject to these Terms.
         <br><br>
         It is your responsibility to safeguard the logon and password to your Account, and you will be liable for any activity taken using your Account. It is assumed that any use of logon information is executed by or duly used by you. You shall not allow any third party or computer system to access or use your Account. Although you may forward Job Postings to persons that do not have accounts with LIVE, INC., you may do so only through the tools available on the Site and through your Account, and only to individuals that have a preexisting relationship with you for the purpose of alerting such individuals of Job Postings that may be of interest to them. You are expressly prohibited from forwarding Job Postings to professional recruiters or use such Job Postings for any commercial purpose (such as in the operation of a professional recruiting service). You are expressly prohibited from forwarding Job Postings to any group or mass distribution list or otherwise in violation of any applicable laws. The use of your Account and the tools and features you have access to through your Account may be subject to revisions and additional terms and conditions by LIVE, INC. or its licensors in the future; upon notification, you may choose not to accept any of them by simply not using or closing your Account. If you wish to reactivate your Account, you may contact LIVE, INC. through email at INFO<a href="https://mail.google.com/">@cnjobzone.com.</a>
         <br><br>
         <h3>OWNERSHIP</h3>
         <br><br>
         All content (such as text, graphics, logos, button icons, images, audio clips, digital downloads, job applicants data, employers data, and data compilations) and all software and technology used, provided or implemented on or through the Site is the property of LIVE INC, or its licensors and protected by United States and international copyright and other laws. You may use such materials only in connection with your access of the Site. You may not copy, distribute, scrape, disassemble, reverse engineer or otherwise appropriate or create any derivative works from any of these materials. Any trademarks, service marks, graphics and logos used in connection with the Site are either LIVE, INC.’s trademarks or those of third parties. You may not use any such marks for any purpose. LIVE, INC. retains all rights in all materials, technology and marks on the Site, and do not grant any rights other than those explicitly granted by these Terms. Except as expressly authorized in these Terms, you shall not sell, rent, lease, offer, sublicense, distribute, transfer, copy, reproduce, display, modify or timeshare any portion of the Site or the tools, features or services offered through the Site or for commercial purposes in any manner. You may not perform any testing or benchmarking of the Site, or provide information from the Site (including, without limitation, Job Postings) to any third parties, except as permitted by these Terms.
         <br><br>
         <h3>CONFIDENTIALITY</h3>
         <br><br>
         The personal information you provide LIVE, INC. during registration and any changes thereafter shall be used strictly in connection with the Service, and shall only be made available to Live Inc, its authorized agent(s), licensor(s), and authorized third parties. Except as otherwise expressly permitted by these Terms or as otherwise expressly authorized by you, LIVE, INC. will not give any of your personal information to any third party. However, LIVE, INC. does not guarantee the security of any of your private transmissions against unauthorized or unlawful interception or access by third parties. You also acknowledge that LIVE, INC. may have to disclose such information to its authorized agents or representative, employees, consultants, and personnel on a need to know basis in any and all instances when such disclosure is necessary for the execution of efforts geared towards overall customer satisfaction, facilitating services requests and maintenance work, and the like. Furthermore, LIVE, INC. can (and you authorize LIVE, INC. to) disclose any information about you to private entities, law enforcement agencies or government officials, as LIVE, INC, in its sole discretion, believe necessary or appropriate to investigate or resolve possible problems or inquiries, or as otherwise required by law, regulation, legal process or governmental request, or to edit, refuse to post or to remove any information or materials, in whole or in part, in LIVE, INC.'s sole discretion. If you request any technical support, you consent to LIVE, INC.’s remote accessing and review of your computer for purposes of support and debugging. You agree that LIVE, INC. may communicate with you via email and any similar technology for any purpose relating to the Service and any services or software which may in the future be provided by LIVE, INC. or on LIVE, INC’s behalf.
         <br><br>
         In addition to the foregoing, you agree to be bound and comply with the Privacy Statement available at <a href="/services">https://www.cnjobzone.com/privacy.</a>
         <br><br>
         <h3>DISCLAIMER OF LIABILITY</h3>
         <br><br>
         THE INFORMATION, SOFTWARE, PRODUCTS, AND SERVICES INCLUDED IN OR AVAILABLE THROUGH THE SITE MAY INCLUDE INACCURACIES OR TYPOGRAPHICAL ERRORS. CHANGES ARE PERIODICALLY ADDED TO THE INFORMATION HEREIN. LIVE, INC. AND/OR ITS LICENSOR OR SUPPLIERS MAY MAKE IMPROVEMENTS AND/OR CHANGES IN THE SITE AT ANY TIME. ADVICE RECEIVED VIA THE SITE SHOULD NOT BE RELIED UPON FOR PERSONAL, MEDICAL, LEGAL OR FINANCIAL DECISIONS AND YOU SHOULD CONSULT AN APPROPRIATE PROFESSIONAL FOR SPECIFIC ADVICE TAILORED TO YOUR SITUATION.
         <br><br>
         THE CONTENT, INCLUDING THOSE PROVIDED BY THE JOB APPLICANTS AND EMPLOYERS, AND OTHER MATERIALS ON THE SITE ARE SUPPLIED “AS IS,” WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, AND ALL SUCH WARRANTIES ARE DISCLAIMED INCLUDING, BUT NOT LIMITED TO, WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, ACCURACY, NON-INFRINGEMENT, OR FREEDOM FROM ERRORS. WITHOUT LIMITING THE FOREGOING, LIVE, INC. DOES NOT ENSURE CONTINUOUS, ERROR-FREE, SECURE OR VIRUS-FREE OPERATION OF THE SITE OR THE SERVICE.
         <br><br>
         IN NO EVENT WILL LIVE, INC. OR ANY OF ITS AGENTS OR LICENSORS BE LIABLE TO YOU IN CONNECTION WITH YOUR ACCESS OF THE SITE UNDER ANY LEGAL THEORY FOR ANY SPECIAL, INCIDENTAL, PUNITIVE, INDIRECT OR CONSEQUENTIAL DAMAGES OR LOST PROFITS, OR FOR DAMAGES OF ANY SORT IN EXCESS OF ONE CENT ($0.01), EVEN IF LIVE, INC. HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. THE FOREGOING LIMITATION OF LIABILITY SHALL APPLY TO THE FULLEST EXTENT PERMITTED BY LAW IN THE APPLICABLE JURISDICTION. SOME JURISDICTIONS DO NOT ALLOW EXCLUSIONS AND LIMITATIONS, SO SOME OF THE ABOVE LIMITATIONS MAY NOT APPLY TO YOU.
         <br><br>
         IF YOU SUBMIT COMMENTS OR IDEAS ABOUT CURRENT OR FUTURE OFFERINGS, INCLUDING WITHOUT LIMITATION POTENTIAL IMPROVEMENTS TO LIVE, INC.’s PRODUCTS OR SERVICES YOU UNDERSTAND THAT ANY SUCH SUBMISSIONS ARE UNSOLICITED AND LIVE, INC. MAY USE THEM WITHOUT RESTRICTION AND YOU WILL NOT BE ENTITLED TO ANY COMPENSATION.
         <br><br>
         <h3>GENERAL PROVISIONS</h3>
         <br><br>
         If any provision of these terms shall be deemed unlawful, void or for any reason unenforceable, then that provision shall be deemed severable and shall not affect the validity and enforceability of any remaining provisions. These terms constitute the entire agreement between you and LIVE INC regarding your access and use of the Site, and supersede all prior communications or terms, whether electronic, oral or written, between you and LIVE, INC.. Failure by LIVE, INC. to enforce these terms shall not be construed as a waiver. These terms and your use of the Site shall be governed by Philippine laws, or your local and federal law, as may be applicable.
         <br><br>
     </b>
        </p>
    </div>
    <br>
@endsection