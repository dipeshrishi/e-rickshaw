<!doctype html>
  <html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
      <link rel = "stylesheet"  href = "css/style44.css" />

        <title>E-Rickshaw</title>

        <style>
        body{
          background-image: url(img/1.jpg);
          background-repeat: no-repeat;
          background-size: cover;
        }
        </style>


    </head>

  <body>
  <div class="container ">
    <form method="post" action="dij.php">
      <div class="form-row">
            <div class="form-group col-md-4 namewala">
                  <label for="inputEmail4"></label>
                  <input type="text" class="form-control " id="inputEmail4" placeholder="Name">
            </div>
      </div>



  <div class="form-row">
        <div class="form-group col-md-4 fromwala">
            <label for="inputState"></label>
            <select id="inputState" class="form-control" name='from' >
              <option selected >From..</option>
              <option value="17" >Main gate (1)</option>
              <option value="21" >Hostel D</option>
              <option value="31" >Hostel C</option>
              <option value="41" >Hostel B</option>
              <option value="51" >Hostel A</option>
              <option value="61" >Hostel P.G</option>
              <option value="71" >Audi</option>
              <option value="81" >Western gate</option>
              <option value="91" >Hostel M &frc</option>
              <option value="10" >Hostel j &COS</option>
              <option value="11" >Hostel H</option>
              <option value="12" >Hostel K</option>
              <option value="13" >Library</option>
              <option value="14" >Main gate(2)</option>
              <option value="15" >Hostel girls & TAN</option>
              <option value="16" >Academic Block & workshop</option>
            </select>

        </div>

        <div class="form-group col-md-4 towala">
              <label for="inputState"></label>
              <select id="inputState" class="form-control" name='to' >
                <option selected >To..</option>
                <option value="17" >Main gate (1)</option>
                <option value="21" >Hostel D</option>
                <option value="31" >Hostel C</option>
                <option value="41" >Hostel B</option>
                <option value="51" >Hostel A</option>
                <option value="61" >Hostel P.G</option>
                <option value="71" >Audi</option>
                <option value="81" >Western gate</option>
                <option value="91" >Hostel M &frc</option>
                <option value="10" >Hostel j &COS</option>
                <option value="11" >Hostel H</option>
                <option value="12" >Hostel K</option>
                <option value="13" >Library</option>
                <option value="14" >Main gate(2)</option>
                <option value="15" >Hostel girls & TAN</option>
                <option value="16" >Academic Block & workshop</option>
              </select>
        </div>

      <div class="form-group col-md-2 numberwala">
          <label for="inputZip"></label>
          <input type="text" class="form-control" id="inputZip" placeholder="No. of people">
      </div>

  </div>

<a href="dij.php"><input type="submit" class="btn btn-primary buttonwala" name="button" value="Submit" ></a>

  </form>

  </div>


  </body>

  </html>
