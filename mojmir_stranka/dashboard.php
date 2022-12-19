
    
    
    
    
    <link rel="stylesheet" href="dashboard_style.css" />
    
    
    <script src="dashboard_script.js"></script>
   
    <script>
      window.onload = function () {
        myCalendar.init();
        console.log(myCalendar.privateVar);
      };
    </script>
  </head>
  <body>
    <div class="container">
      <div id="calendar"></div>
      <div id="detail">
        <div class="info">
          <div class="date">
            <p class="info-date">
            <span id="click_date"></span>
            </p>
          </div>
          <div class="activities">
          <div class="item">
            <p>
              Film: <span>Black Adam</span>
            </p>
          </div>
          <div class="address">
            <p>
              Miesto: <span>Poprad, Dlhé hony 36</span>
            </p>
          </div>
          <div class="time">
            <p>
              Čas: <span>19:15</span>
            </p>
          </div>
          
          <div class="actions">
          <button class="save" onclick="select()">
            Reserve <i class="btn"></i>
          </button>
                  </div>
        </div>
        </div>

        
      </div>
</div>
    </div>
    
  </body>
</html>
