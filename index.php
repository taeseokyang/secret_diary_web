<!DOCTYPE HTML>
<html>
    <head>
        <title>my secret diary</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="body">
          <div class="top">
            <div class="title">
              2023 yang's secret diary
            </div>
            <div class="end">
              <a href="login.html">
                <div class="end_btn">
                  close diary
                </div>
              </a>
            </div>
          
          </div>
          <div class="middle">
            <ul class="month_box">
              <!-- php 반복으로 다시 코딩 -->
              <?php
                $month = array("January", "February", "March","April","May","June","July","August","September","October","November","December");
                $i = 0;
                while($i<12) //i가 10보다 작거나 같을 때 반복합니다
                {
                  echo "<li class='month'><span class='month_text'>".$month[$i]."</span></li>"; //i를 출력합니다.
                  $i++; //i를 1씩 증가합니다.(증감식)
                }
              ?>
              </ul>
          </div>
          <div class="bottom">
            made by yang
          </div>
        </div>
    </body>
</html>
