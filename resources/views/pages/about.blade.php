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
  padding-left: 100px;

  }

   </style>
    <div class="terms_context container">
     <p><b>
        <h3>ABOUT US</h3>
        <br>
        Ang CNJOBZone ay isang job-hunting site na tutulong sa mga aplikanteng makahanap ng trabaho na babagay o tutugma sa kanilang kakayahan, pangangailangan, at lokasyon. Sa tulong ng teknolohiya at Live, Inc., isang US-based digital content delivery company, mas pinadali at pinabilis ng CNJOBZZone ang paghahanap ng blue collar jobs o mga trabahong pisikal.
<br><br>
CNJOBZZone ang naging tugon sa lumalaking problema ng job mismatch sa Camarines Norte. Patuloy ang pagkalap namin ng mga trabaho at oportunidad sa iba’t ibang sektor dahil layunin naming mabigyan ang mas marami pang pamilyang Pilipino ng magandang kinabukasan.
<br><br>
Live Inc is a company registered in California, USA. Live Inc operates a branch office, registered with the government of the Philippines, in Manila.
<br><br>
Live Inc was found by several very experienced business executives.
<br><br>
John Reynald Kennedy, founder, principal shareholder, and CEO of Live Inc., a cloud based e-Commerce company. Mrs. Rhonda Anna Abenio manages <a href="http://appdevproject.com/" target="_blank">www.CNJOBZZone.com</a>, <a href="https://www.managerspecial.com/" target="_blank">www.ManagerSpecial.com</a> , and <a href="https://www.talguu.com/" target="_blank">www.Talguu.com</a> for Live Inc. Prior to Live Inc, Mr. Wong had over 20 years of experience in executive roles, and held the following positions: CEO for EastBridge Investment Group Corp, and Managing Director for Amtel. Mr. Wong holds BS and MS degrees in Electrical Engineering from Rutgers, and Northeastern University, and completed Advanced Management Program from Harvard Business School. Mr. Wong holds two issued patents and several new patents pending.
<br><br>
David Bolocan, founding shareholder of Live Inc, is the Executive Director for Deposits and Consumer Segments at BBVA USA, a commercial bank with $80 Billion in assets. In this role he is the CEO of a $40 billion portfolio, and sets the direction for consumer deposit products including, product design, pricing, marketing, fulfillment and servicing, for Consumer and Wealth deposits. In addition, Bolocan is responsible for marketing, sales incentives and analytics, engineering prioritization, specialty programs and strategic initiatives for the Retail Line of Business.Bolocan has 30 years of experience running business lines in Retail Banking and in Management Consulting. He has held leadership posts at Bank of America, Chase and SunTrust. Bolocan is a graduate of Harvard University and MIT’s Sloan School of Management and lives in Atlanta.
<br><br>
Pam Hemmen, founding shareholder of Live Inc, is Director of Corporate Development for J&J Ventures Gaming, Inc., a privately held gaming-as-a-service company providing services in the IL and PA video gaming markets. Presently Hemmen is using her experience in building scalable companies to position the company for growth nationally. Her passion for marketing and simplifying complexity translates into innovative programs for both BtoB and BtoC customers. Previously, Hemmen spent 21 years with Patterson Companies, a Fortune 500 healthcare company. As Vice President of Technology Services, she honed her ability to operate at both strategic and tactical levels. Her business acumen allows her to drive initiatives that enhance profitability. During her tenure at Patterson, Eaglesoft grew from a small startup with revenue of $3 million to a large multi-faceted $150 million business. Hemmen received her bachelor’s degree in marketing from Quincy University (IL.) and began her career with a startup software company, Eaglesoft, Inc in 1994 as a sales representative prior to advancing to the executive level marketing management ranks. Hemmen graduated from the Advanced Management Program at Harvard Business School in 2014. Hemmen serves on a variety of boards that reflect her professional experience, including Dieterich Bank where she serves as chair of the compensation committee, and Midland Institute for Entrepreneurship.
<br><br>
Norm Klein, founding shareholder of Live Inc, has over 20 years of experience with Procter & Gamble and Con-Agra. He has worked with companies such as Clorox, Honeywell, DreyersIce Cream and Ingersol Rand Corporation as a consultant. During his days with Procter & Gamble, Mr. Klein was responsible for the operational aspects of P&G’s Metamucil business. Mr. Klein provided the leadership for a $60 million manufacturing plant expansion and managed an operating budget in excess of $30 million. Mr. Klein was the CFO for EastBridge Investment Group in the United States.
<br><br>
Mr. Klein holds a Bachelors degree in mechanical engineering and a Masters degree in business administration.
        </p>
    </div>
    <br>
@endsection