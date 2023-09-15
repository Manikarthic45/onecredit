@extends('Common.Frontheader')
@section('content')

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">@if(session()->get('languag')=='Tamil')புள்ளிவிவரங்கள் @else Statistics @endif</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="{{url('/')}}" class="permal-link">@if(session()->get('languag')=='Tamil')முகப்பு @else Home @endif</a></li>
                <li class="nav-item"><span class="current-page">@if(session()->get('languag')=='Tamil')புள்ளிவிவரங்கள் @else Statistics @endif</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain about-us">
        <!-- Main content -->
        <div class="container">
            <h2 style="text-align: center";>@if(session()->get('languag')=='Tamil')TUCAS-கடந்த ஐந்தாண்டுகளின் செயல்பாடுகள் மற்றும் சாதனைகளின் விவரங்கள் @else TUCAS-Details of activities and achivements for the past five years. @endif</h2>
            <table class="table">

                <thead>

                <tr>

                    <th>S.No</th>
                    <th>Particulars</th>
                    <th>2014-15</th>
                    <th>2015-16</th>
                    <th>2016-17</th>
                    <th>2017-18</th>
                    <th>2018-19</th>
                    <th>2019-20</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="Name">Fertilizers</td>
                    <td data-label="Statistics">1078.05</td>
                    <td data-label="Statistics">1243.72</td>
                    <td data-label="Statistics">699.89</td>
                    <td data-label="Statistics">656.94</td>
                    <td data-label="Statistics">536.21</td>
                    <td data-label="Statistics">630.70</td>
                </tr>
                <tr>
                    <td data-label="S.No">2</td>
                    <td data-label="Name">Pesticides</td>
                    <td data-label="Statistics">56.22</td>
                    <td data-label="Statistics">58.12</td>
                    <td data-label="Statistics">33.50</td>
                    <td data-label="Statistics">27.70</td>
                    <td data-label="Statistics">15.12</td>
                    <td data-label="Statistics">19.57</td>
                </tr>
                <tr>
                    <td data-label="S.No">3</td>
                    <td data-label="Name">Agriculture Implements</td>
                    <td data-label="Statistics">1078.05</td>
                    <td data-label="Statistics">1243.72</td>
                    <td data-label="Statistics">699.89</td>
                    <td data-label="Statistics">656.94</td>
                    <td data-label="Statistics">536.21</td>
                    <td data-label="Statistics">630.70</td>
                </tr>
                <tr>
                    <td data-label="S.No">4</td>
                    <td data-label="Name">Petrol,Diesel</td>
                    <td data-label="Statistics">1078.05</td>
                    <td data-label="Statistics">1243.72</td>
                    <td data-label="Statistics">699.89</td>
                    <td data-label="Statistics">656.94</td>
                    <td data-label="Statistics">536.21</td>
                    <td data-label="Statistics">630.70</td>
                </tr>
                <tr>
                    <td data-label="S.No">5</td>
                    <td data-label="Name">Seeds & Lint</td>
                    <td data-label="Statistics">1078.05</td>
                    <td data-label="Statistics">1243.72</td>
                    <td data-label="Statistics">699.89</td>
                    <td data-label="Statistics">656.94</td>
                    <td data-label="Statistics">536.21</td>
                    <td data-label="Statistics">630.70</td>
                </tr>
                <tr>
                    <td data-label="S.No">6</td>
                    <td data-label="Name">Kerosene</td>
                    <td data-label="Statistics">1078.05</td>
                    <td data-label="Statistics">1243.72</td>
                    <td data-label="Statistics">699.89</td>
                    <td data-label="Statistics">656.94</td>
                    <td data-label="Statistics">536.21</td>
                    <td data-label="Statistics">630.70</td>
                </tr>
                <tr>
                    <td data-label="S.No">7</td>
                    <td data-label="Name">Printing Press</td>
                    <td data-label="Statistics">1078.05</td>
                    <td data-label="Statistics">1243.72</td>
                    <td data-label="Statistics">699.89</td>
                    <td data-label="Statistics">656.94</td>
                    <td data-label="Statistics">536.21</td>
                    <td data-label="Statistics">630.70</td>
                </tr>
                <tr>
                    <td data-label="S.No">8</td>
                    <td data-label="Name">Agro Service Center</td>
                    <td data-label="Statistics">1078.05</td>
                    <td data-label="Statistics">1243.72</td>
                    <td data-label="Statistics">699.89</td>
                    <td data-label="Statistics">656.94</td>
                    <td data-label="Statistics">536.21</td>
                    <td data-label="Statistics">630.70</td>
                </tr>
                <tr>
                    <td data-label="S.No">9</td>
                    <td data-label="Name">Crackers</td>
                    <td data-label="Statistics">1078.05</td>
                    <td data-label="Statistics">1243.72</td>
                    <td data-label="Statistics">699.89</td>
                    <td data-label="Statistics">656.94</td>
                    <td data-label="Statistics">536.21</td>
                    <td data-label="Statistics">630.70</td>
                </tr>
                <tr>
                    <td data-label="S.No">10</td>
                    <td data-label="Name">Loans Issued</td>
                    <td data-label="Statistics">1078.05</td>
                    <td data-label="Statistics">1243.72</td>
                    <td data-label="Statistics">699.89</td>
                    <td data-label="Statistics">656.94</td>
                    <td data-label="Statistics">536.21</td>
                    <td data-label="Statistics">630.70</td>
                </tr>
                <tr>
                    <td data-label="S.No">11</td>
                    <td data-label="Statistics">Deposit Outstanding</td>
                    <td data-label="Statistics">1078.05</td>
                    <td data-label="Statistics">1243.72</td>
                    <td data-label="Statistics">699.89</td>
                    <td data-label="Statistics">656.94</td>
                    <td data-label="Statistics">536.21</td>
                    <td data-label="Statistics">630.70</td>
                </tr>
                <tr>
                    <td data-label="S.No">12</td>
                    <td data-label="Name">Loan Outstanding</td>
                    <td data-label="Statistics">1078.05</td>
                    <td data-label="Statistics">1243.72</td>
                    <td data-label="Statistics">699.89</td>
                    <td data-label="Statistics">656.94</td>
                    <td data-label="Statistics">536.21</td>
                    <td data-label="Statistics">630.70</td>
                </tr>
                <tr>
                    <td data-label="S.No">13</td>
                    <td data-label="Name">Business Turnover</td>
                    <td data-label="Statistics">1078.05</td>
                    <td data-label="Statistics">1243.72</td>
                    <td data-label="Statistics">699.89</td>
                    <td data-label="Statistics">656.94</td>
                    <td data-label="Statistics">536.21</td>
                    <td data-label="Statistics">630.70</td>
                </tr>
                <tr>
                    <td data-label="S.No">14</td>
                    <td data-label="Name">Working Capital</td>
                    <td data-label="Statistics">1078.05</td>
                    <td data-label="Statistics">1243.72</td>
                    <td data-label="Statistics">699.89</td>
                    <td data-label="Statistics">656.94</td>
                    <td data-label="Statistics">536.21</td>
                    <td data-label="Statistics">630.70</td>
                </tr>
                <tr>
                    <td data-label="S.No">15</td>
                    <td data-label="Name">Profit</td>
                    <td data-label="Statistics">1078.05</td>
                    <td data-label="Statistics">1243.72</td>
                    <td data-label="Statistics">699.89</td>
                    <td data-label="Statistics">656.94</td>
                    <td data-label="Statistics">536.21</td>
                    <td data-label="Statistics">630.70</td>
                </tr>

                </tbody>
            </table>
        </div>
        <div class="container">

            <h2 style="text-align: center";>@if(session()->get('languag')=='Tamil')TUCAS-வளர்ச்சி பட்டியல் @else TUCAS-Growth List @endif</h2>

            <table class="table">

                <thead>
                <tr>
                    <th>Age</th>
                    <th>Year</th>
                    <th>No of Members</th>
                    <th>Paid Dividends</th>
                    <th>Collection of Deposits</th>
                    <th>Pending Deposits</th>
                    <th>Repaid Loans</th>
                    <th>Pending Repaids</th>
                    <th>Sales</th>
                    <th>Net Profit</th>
                    <th>Company Grade</th>
                    <th>Given Profit Percentage</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="Name">1954-1955</td>
                    <td data-label="Statistics">397</td>
                    <td data-label="Statistics">0.33</td>
                    <td data-label="Statistics">0.14</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.10</td>
                    <td data-label="Statistics">-</td>
                    <td data-label="Statistics">0.01</td>
                    <td data-label="Statistics">A</td>
                    <td data-label="Statistics">6.5%</td>
                </tr>
                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="Name">1954-1955</td>
                    <td data-label="Statistics">397</td>
                    <td data-label="Statistics">0.33</td>
                    <td data-label="Statistics">0.14</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.10</td>
                    <td data-label="Statistics">-</td>
                    <td data-label="Statistics">0.01</td>
                    <td data-label="Statistics">A</td>
                    <td data-label="Statistics">6.5%</td>
                </tr>
                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="Name">1954-1955</td>
                    <td data-label="Statistics">397</td>
                    <td data-label="Statistics">0.33</td>
                    <td data-label="Statistics">0.14</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.10</td>
                    <td data-label="Statistics">-</td>
                    <td data-label="Statistics">0.01</td>
                    <td data-label="Statistics">A</td>
                    <td data-label="Statistics">6.5%</td>
                </tr>
                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="Name">1954-1955</td>
                    <td data-label="Statistics">397</td>
                    <td data-label="Statistics">0.33</td>
                    <td data-label="Statistics">0.14</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.10</td>
                    <td data-label="Statistics">-</td>
                    <td data-label="Statistics">0.01</td>
                    <td data-label="Statistics">A</td>
                    <td data-label="Statistics">6.5%</td>
                </tr>
                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="Name">1954-1955</td>
                    <td data-label="Statistics">397</td>
                    <td data-label="Statistics">0.33</td>
                    <td data-label="Statistics">0.14</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.10</td>
                    <td data-label="Statistics">-</td>
                    <td data-label="Statistics">0.01</td>
                    <td data-label="Statistics">A</td>
                    <td data-label="Statistics">6.5%</td>
                </tr>
                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="Name">1954-1955</td>
                    <td data-label="Statistics">397</td>
                    <td data-label="Statistics">0.33</td>
                    <td data-label="Statistics">0.14</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.10</td>
                    <td data-label="Statistics">-</td>
                    <td data-label="Statistics">0.01</td>
                    <td data-label="Statistics">A</td>
                    <td data-label="Statistics">6.5%</td>
                </tr>
                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="Name">1954-1955</td>
                    <td data-label="Statistics">397</td>
                    <td data-label="Statistics">0.33</td>
                    <td data-label="Statistics">0.14</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.10</td>
                    <td data-label="Statistics">-</td>
                    <td data-label="Statistics">0.01</td>
                    <td data-label="Statistics">A</td>
                    <td data-label="Statistics">6.5%</td>
                </tr>
                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="Name">1954-1955</td>
                    <td data-label="Statistics">397</td>
                    <td data-label="Statistics">0.33</td>
                    <td data-label="Statistics">0.14</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.10</td>
                    <td data-label="Statistics">-</td>
                    <td data-label="Statistics">0.01</td>
                    <td data-label="Statistics">A</td>
                    <td data-label="Statistics">6.5%</td>
                </tr>
                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="Name">1954-1955</td>
                    <td data-label="Statistics">397</td>
                    <td data-label="Statistics">0.33</td>
                    <td data-label="Statistics">0.14</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.10</td>
                    <td data-label="Statistics">-</td>
                    <td data-label="Statistics">0.01</td>
                    <td data-label="Statistics">A</td>
                    <td data-label="Statistics">6.5%</td>
                </tr>
                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="Name">1954-1955</td>
                    <td data-label="Statistics">397</td>
                    <td data-label="Statistics">0.33</td>
                    <td data-label="Statistics">0.14</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.10</td>
                    <td data-label="Statistics">-</td>
                    <td data-label="Statistics">0.01</td>
                    <td data-label="Statistics">A</td>
                    <td data-label="Statistics">6.5%</td>
                </tr>
                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="Name">1954-1955</td>
                    <td data-label="Statistics">397</td>
                    <td data-label="Statistics">0.33</td>
                    <td data-label="Statistics">0.14</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.10</td>
                    <td data-label="Statistics">-</td>
                    <td data-label="Statistics">0.01</td>
                    <td data-label="Statistics">A</td>
                    <td data-label="Statistics">6.5%</td>
                </tr>
                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="Name">1954-1955</td>
                    <td data-label="Statistics">397</td>
                    <td data-label="Statistics">0.33</td>
                    <td data-label="Statistics">0.14</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.10</td>
                    <td data-label="Statistics">-</td>
                    <td data-label="Statistics">0.01</td>
                    <td data-label="Statistics">A</td>
                    <td data-label="Statistics">6.5%</td>
                </tr>
                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="Name">1954-1955</td>
                    <td data-label="Statistics">397</td>
                    <td data-label="Statistics">0.33</td>
                    <td data-label="Statistics">0.14</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.10</td>
                    <td data-label="Statistics">-</td>
                    <td data-label="Statistics">0.01</td>
                    <td data-label="Statistics">A</td>
                    <td data-label="Statistics">6.5%</td>
                </tr>
                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="Name">1954-1955</td>
                    <td data-label="Statistics">397</td>
                    <td data-label="Statistics">0.33</td>
                    <td data-label="Statistics">0.14</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.11</td>
                    <td data-label="Statistics">0.10</td>
                    <td data-label="Statistics">-</td>
                    <td data-label="Statistics">0.01</td>
                    <td data-label="Statistics">A</td>
                    <td data-label="Statistics">6.5%</td>
                </tr>


                </tbody>

            </table>

        </div>
@endsection

