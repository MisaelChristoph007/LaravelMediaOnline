<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Session</title>
  <link rel="stylesheet" type="text/css" href="form">
</head>
<body>
  <form action="welcome" method="post">
    <section>
      <div class="container">
        <h2>Login dulu yuk</h2>
        <div class="row100">
          <div class="col">
            <div class="inputBox">
              <span class="text"><b>First Name</span>
              <input type="text" name="fname" required id="firstname">
              <span class="line"></span>
            </div>
          </div>
          <div class="col">
            <div class="inputBox">
              <span class="text">Last Name</span>
              <input type="text" name="lname" required id="lastname">
              <span class="line"></span>
            </div>
          </div>
        </div>
        <div class="row100">
          <div class="col">
            <div class="inputBox">
              <span class="text">Email</span>
              <input type="text" name="" required id="email">
              <span class="line"></span>
            </div>
          </div>

          <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">

          <script src="https://code.jquery.com/jquery-3.3.1.js"></script> 
          <script src="https://cdn.rawgit.com/twbs/bootstrap/v4.1.3/dist/js/bootstrap.bundle.min.js"></script> 
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cascading-dropdown/1.2.9/jquery.cascadingdropdown.min.js"></script>

          <div class="row100">
            <div class="col">
              <span class="text"><b>Kebangsaan</span>
              <select class="form-control step1">
                <option value="">Indonesia</option>
                <option>Karawang</option>
                <option>Korut</option>
                <option>Dengklok</option>
              </select>
            </div>

            <div class="row100">
              <div class="col-left">
                <span class="text"><b>Logat</span>
                <div>
                  <input id="box1" type="checkbox" />
                  <label for="box1">Jawir</label>
                  <input id="box2" type="checkbox" />
                  <label for="box2">Sunda</label>
                  <input id="box3" type="checkbox" />
                  <label for="box3">Alien</label>
                </div>
              </div>
            </div>
            <div class="row100">
              <div class="col">
                <span class="text">Jenis Kelamin</span>
                <br>
                <input type="radio" name="checkbox" class="check" id="radio1" checked/>
                <label for="radio1">
                  <div class="container">
                    <div class="cRadioBtn">
                    </div>
                  </div>
                  <h3>Lanang</h3>
                </label>
                <input type="radio" name="checkbox" class="check" id="radio2" />
                <label for="radio2">
                  <div class="container">
                    <div class="cRadioBtn">
                    </div>
                  </div>
                  <h3>Perempuan</h3>
                </label>
                <input type="radio" name="checkbox" class="check" id="radio3" />
                <label for="radio3">
                  <div class="container">
                    <div class="cRadioBtn">
                    </div>
                  </div>
                  <h3>Keduanya</h3>
                </label>
              </div>
            </div>
            <div class="row100">
              <div class="col">
                <span class="text">Bio...</span>
                <div class="inputBox textarea">
                  <textarea required="required"></textarea>
                  <span class="line"></span>
                </div>
              </div>
            </div>
            <div class="row100">
              <div class="col">
                <a href="welcome">
                  <input type="submit" value="Send">
                </a>
              </div>
            </div>
          </div> 
        </section>
      </body>
      </head>
      </html>