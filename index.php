<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sschange";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  if (!$conn->set_charset("utf8")) {
      printf("Error loading character set utf8: %s\n", $conn->error);
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
<title>程式技能交換</title>
<script src="js/jquery-2.2.0.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="UI-Input-master/input.min.css" rel="stylesheet" type="text/css" />
<link href="UI-Button-master/button.min.css" rel="stylesheet" type="text/css" />
<link href="UI-Form-master/form.min.css" rel="stylesheet" type="text/css" />
<script src="UI-Form-master/form.min.js"></script>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script src="js/index.js"></script>
</head>
<body>
<div class="header-wrapper">
  <div class="header">
    <div class="logo">
      <h1>Programing to ?</h1>
    </div>
    <!---logo ends here -->
    <div class="menu">
      <ul>
        <li><a data-top="400">Motivation</a></li>
        <li><a data-top="833">Detail</a></li>
        <li><a data-top="2263">Form</a></li>
        <li><a data-top="2932">Message</a></li>
        <li style="padding-right: 0px;"><a data-top="10000">Contact</a></li>
      </ul>
    </div>
    <!--- menu ends here -->
  </div>
  <!---headerends here -->
</div>
<!---header-wrapper-ends here -->
<div class="clear"></div>
<div class="banner-wrapper">
  <div class="banner">
    <div class="banner-image"> <img src="images/banner-img.jpg" alt="img" /> </div>
    <div id="eventdetailbutton">活動詳情</div>
    <!---banner-image ends here-->
  </div>
  <!---bannerends here-->
</div>
<!---banner-wrapper ends here-->
<div class="clear"></div>
<div class="conainer">
  <div class="content-1">
    <h1>動機</h1>
    <p>已經到了大四下了，在以前常常會想要在大學參與各式各樣的活動，認識各式各樣的朋友，可是現在反過來觀望我以前的生活，每學期修一堆課、一次打兩個球隊、跑一堆系上活動限制住我的生活，所以我覺得我在大學的生活不夠豐富，所以想出了這個活動讓我能體驗各式各樣的事物XD</p>
  </div>
  <!---content-1 ends here-->
</div>
<!---container ends here-->
<div class="clear"></div>
<div class="conainer">
<div class="content-1">
    <h1>活動詳情</h1>
    <p>我想要透過程式教學的方式交換你在大學當中所學會的技能，交換的步驟如下：</p>
    <div class="stepdiagram">
      <div class="step" style="margin-left:160px">
        <div class="stepicon">
          <img src="images/writeform.png">
        </div>
        <div class="stepdescription" style="text-align:left;margin-left:4px">
          填寫表單
        </div>
      </div>
      <div class="stepdivide">
        <img src="images/right.png">
      </div>
      <div class="step">
        <div class="stepicon">
          <img src="images/conference.png">
        </div>
        <div class="stepdescription">
          說明會<br>3/7號
        </div>
      </div>
      <div class="stepdivide">
        <img src="images/right.png">
      </div>
      <div class="step">
        <div class="stepicon">
          <img src="images/exchange.png">
        </div>
        <div class="stepdescription">
          互相傳授
        </div>
      </div>
    </div>
    <p style="clear:both">活動舉辦人：工資管大四 吳懿文</p>
    <p>活動主要對象：工資管大四同學</p>
    <p>活動次要對象：工資管大一至大三的學弟妹</p>
    <p>我可以拿來交換的程式技能：</p>
    <p style="margin-left:20px">程式基礎：不管是之後要特別學習C++,JAVA,網頁設計，都要有足夠的程式基礎，我會想辦法測試出你的程式基礎，若程式基礎夠了就會進入下面的分支，若程式基礎不夠的話，將會使用C++鍛鍊你的基本實力</p>
    <p style="margin-left:20px">C++：我會指導你利用C++實作出某些特定功能的軟體，功能細節將會有你決定，如果沒有想法我可能會想些東西給你做</p>
    <p style="margin-left:20px">JAVA：我會指導你利用JAVA實作出某些特定功能的軟體，功能細節將會有你決定，如果沒有想法我可能會想些東西給你做</p>
    <p style="margin-left:20px">網頁設計：我會指導你設計網站、架設網站，你可能會需要想這個網站是為了甚麼而做(公司?活動?還是其他的)</p>
    <p style="margin-left:20px">目前 C++ , JAVA , 網頁程式設計 是我較拿手的技術，我在系上程式課曾經教過不少同學、學弟妹，課程內容基本上會量身訂做，學習內容的多寡會隨著你希望的方式改變，如果很努力想學的話我會很頻繁地給你新的課題，而如果想要普通慢慢來的話我也會很溫柔地給課題</p>
    <p style="margin-left:20px">說明會將會把教學的細節、教學的內容進一步進行說明，至於之後要怎麼教要看有多少人要參加</p>
    <p>你可以拿來交換的技能：</p>
    <div class="skilldiagram">
      <div class="skill" style="margin-left:70px;">
        <div class="skillicon">
          <img src="images/none.png">
        </div>
        <div class="skilldescription">
          無
        </div>
      </div>
      <div class="skill">
        <div class="skillicon">
          <img src="images/store.png">
        </div>
        <div class="skilldescription">
          生活技能
        </div>
      </div>
      <div class="skill">
        <div class="skillicon">
          <img src="images/book.png">
        </div>
        <div class="skilldescription">
          專業技能
        </div>
      </div>
      <div class="skill">
        <div class="skillicon">
          <img src="images/suit.png">
        </div>
        <div class="skilldescription">
          外觀技能
        </div>
      </div>
      <div class="skill">
        <div class="skillicon">
          <img src="images/lightbulb.png">
        </div>
        <div class="skilldescription">
          創意
        </div>
      </div>
    </div>
    <p style="margin-left:20px;clear:both">無：你可以選擇不交換技能純粹學程式，歡迎有學習意願的你來參加</p>
    <p style="margin-left:20px">生活技能：你可能在大學期間吃遍大江南北、玩遍台南各地，歡迎告訴我這些地點或親自帶我去去看都是不錯的</p>
    <p style="margin-left:20px">專業技能：你可能在某些科目特別出色，可以跟我分享學習的技巧或是稍微帶我入門都是不錯的。</p>
    <p style="margin-left:20px">外觀技能：你可能很會保養皮膚、很會穿衣服、很會買衣服、很會防曬，這部分的技能我蠻缺的XD。</p>
    <p style="margin-left:20px">創意：不論是甚麼樣的東西都是可以拿來交換的，你或許想跟我分享你的人生觀、感情觀，你或許對於外星科技有概念，你或許對台灣的政治很有概念，都可以跟我分享。</p>
    <p>基本上你拿來交換的東西，沒有一定的形式，沒有一定的量，有誠意就沒問題了XD。</p>
  </div>
</div>
<div class="conainer">
  <div class="content-1">
    <h1 style="text-align:center;font-family:Microsoft JhengHei">填寫表單</h1>
    <form class="ui form" style="width:650px;margin:auto">
      <div class="field">
        <label style="font-family:Microsoft JhengHei">你的名子</label>
        <input style="font-family:Microsoft JhengHei" type="text" name="name">
      </div>
      <div class="field">
        <label style="font-family:Microsoft JhengHei">你的技能</label>
        <input style="font-family:Microsoft JhengHei" type="text" name="skill" placeholder="你想要拿來交換的技能 (如果沒有的話填無) 範例：我可以教你怎麼搭配衣服">
      </div>
      <div class="field">
        <label style="font-family:Microsoft JhengHei">想學甚麼樣的程式技能</label>
        <input style="font-family:Microsoft JhengHei" type="text" name="wanttolearn" placeholder="你可能已經對想學的東西已經有想法了、歡迎先向我說 (如果沒有的話填無) ">
      </div>
      <div id="membererror"></div>
      <div id="membersubmit" class="ui button" type="submit" style="margin:auto;display:block;width:60px;margin-top:30px">送出</div>
    </form>
  </div>
  <!---content-1 ends here-->
</div>
<!---container ends here-->
<div class="clear"></div>
<div class="banner-wrapper">
  <div class="conainer">
  <div class="content-1">
    <h1 style="text-align:center">留言板</h1>
    <form class="ui form" style="width:650px;margin:auto">
      <div class="field">
        <label style="font-family:Microsoft JhengHei">你的名子</label>
        <input id="replyname" style="font-family:Microsoft JhengHei" type="text" name="first-name">
      </div>
      <div class="field">
        <label>回覆內容</label>
        <textarea id="replytext" rows="2"></textarea>
      </div>
      <div id="replyerror"></div>
      <div id="replysubmit" class="ui button" type="submit" style="margin:auto;display:block;width:60px;margin-top:30px">送出</div>
    </form>
  </div>
  <!---content-1 ends here-->
</div>
  <!---bannerends here-->
  <div class="conainer" style="padding-bottom:0px;width:650px;margin:auto;margin-top:60px;">
  <div class="content-1" id="replylist">
    <?php
      $sql = "SELECT * FROM message order by publishtime desc";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              $name = htmlentities($row['name']);
              $content = htmlentities($row['content']);
              $content = str_replace("\n", "<br />",$content);
              if(isset($row['answer'])){
                echo '<div class="reply"><div class="replyinformation"><div class="replyname">'.$name.'</div><div class="replytime">'.$row['publishtime'].'</div></div><div class="replycontent">'.$content.'</div><div class="replyanswer">'.$row['answer'].'</div></div>';
              }else{
                echo '<div class="reply"><div class="replyinformation"><div class="replyname">'.$name.'</div><div class="replytime">'.$row['publishtime'].'</div></div><div class="replycontent">'.$content.'</div></div>';
              }          
          }
      } else {
          echo "0 results";
      }
    ?>
  </div>
  <!---content-1 ends here-->
</div>
</div>
<div class="clear"></div>
<div class="footer-wrapper">
  <div class="footer">
    <div class="footer-content" style="position: relative;left: -35px;">
   	  <div class="makerinformation">
        <img src="images/emoticon.jpg">
        <div class="makername">
          吳懿文
        </div>
      </div>
      <div class="makertells">
        由衷希望這個會很有趣@@
      </div>
    </div>
      <div class="footer-content">
      	<h1>聯絡方式</h1>
        <div class="makercontact">
          <img id="fbbutton" src="images/fb.png">
          <img id="githubbutton" src="images/github.png">
        </div>
    </div>
  </div>
</div>
<!---footer-wrapper ends here-->
</body>
</html>
