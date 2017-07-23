<!doctype html>
<html>
  <?php include '../includes/head.html' ?>
  <title>Results | IASAS Rugby and Touch 2017</title>
  <style>
    body {
        background: url(../img/JIS_blue.png) repeat;
    }
  </style>
  <script>
    function displayContent(json) {
            var len = json.feed.entry.length;
            for (var i = 0; i<len; i++) {
                if (document.getElementById(json.feed.entry[i].title.$t) != null) {
                    document.getElementById(json.feed.entry[i].title.$t).innerHTML = json.feed.entry[i].content.$t;
                }
            }
        }
  </script>

  <body>
    <?php include '../includes/nav.html' ?>
    <div class="content container">
      <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding-left:50px;">
                  <h1 class="page-header">Final Results</h1>
              </div>
        </div>

        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 table-responsive">
            <h2 style="text-align:center"><strong>Boys</strong></h2>
            <table style="margin: 0px auto;">
            <tbody>
                <tr>
                    <td style="background-color:grey; padding-right: 10px; padding-left: 10px; text-align:center"><h4 style="color:white"><strong>Place</strong></h4></td>
                    <td style="background-color:grey; padding-right: 50px; padding-left: 50px; text-align:center"><h4 style="color:white"><strong>Team</strong></h4></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color:gold; text-align:center"><h4><strong>1st</strong></h4></td>
                    <td style="text-align:center"><h4><strong><div id="A2"></div></strong></h4></td>
                    <td><img src="trophy_gold.png" width="45"></td>
                </tr>
                <tr>
                    <td style="background-color:silver; text-align:center"><h4><strong>2nd</strong></h4></td>
                    <td style="text-align:center"><h4><strong><div id="A3"></div></strong></h4></td>
                    <td><img src="trophy_silver.png" width="45"></td>
                </tr>
                <tr>
                    <td style="background-color:#CD7F32; text-align:center"><h4><strong>3rd</strong></h4></td>
                    <td style="text-align:center"><h4><strong><div id="A4"></div></strong></h4></td>
                    <td><img src="trophy_bronze.png" width="45"></td>
                </tr>
                <tr>
                    <td style="text-align:center"><h4><strong>4th</strong></h4></td>
                    <td style="text-align:center"><h4><strong><div id="A5"></div></strong></h4></td>
                </tr>
                <tr>
                    <td style="text-align:center"><h4><strong>5th</strong></h4></td>
                    <td style="text-align:center"><h4><strong><div id="A6"></div></strong></h4></td>
                </tr>
                <tr>
                    <td style="text-align:center"><h4><strong>6th</strong></h4></td>
                    <td style="text-align:center"><h4><strong><div id="A7"></div></strong></h4></td>
                </tr>
            </tbody>
            </table>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
                <h2 style="text-align:center"><strong>Girls</strong></h2>
                <table style="margin: 0px auto;">
                <tbody>
                    <tr>
                        <td style="background-color:grey; padding-right: 10px; padding-left: 10px; text-align:center"><h4 style="color:white"><strong>Place</strong></h4></td>
                        <td style="background-color:grey; padding-right: 50px; padding-left: 50px; text-align:center"><h4 style="color:white"><strong>Team</strong></h4></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="background-color:gold; text-align:center"><h4><strong>1st</strong></h4></td>
                        <td style="text-align:center"><h4><strong><div id="C2"></div></strong></h4></td>
                        <td><img src="trophy_gold.png" width="45"></td>
                    </tr>
                    <tr>
                        <td style="background-color:silver; text-align:center"><h4><strong>2nd</strong></h4></td>
                        <td style="text-align:center"><h4><strong><div id="C3"></div></strong></h4></td>
                        <td><img src="trophy_silver.png" width="45"></td>
                    </tr>
                    <tr>
                        <td style="background-color:#CD7F32; text-align:center"><h4><strong>3rd</strong></h4></td>
                        <td style="text-align:center"><h4><strong><div id="C4"></div></strong></h4></td>
                        <td><img src="trophy_bronze.png" width="45"></td>
                    </tr>
                    <tr>
                        <td style="text-align:center"><h4><strong>4th</strong></h4></td>
                        <td style="text-align:center"><h4><strong><div id="C5"></div></strong></h4></td>
                    </tr>
                    <tr>
                        <td style="text-align:center"><h4><strong>5th</strong></h4></td>
                        <td style="text-align:center"><h4><strong><div id="C6"></div></strong></h4></td>
                    </tr>
                    <tr>
                        <td style="text-align:center"><h4><strong>6th</strong></h4></td>
                        <td style="text-align:center"><h4><strong><div id="C7"></div></strong></h4></td>
                    </tr>
                </tbody>
                </table>
            </div>
          </div>
        </div>

    <?php include '../includes/footer.html' ?>
    <script src="https://spreadsheets.google.com/feeds/cells/15sGRD9scN7ILbh21oF7qq_x-8YkifAtksW1aFMan7tU/3/public/values?alt=json-in-script&amp;callback=displayContent" type="text/javascript"></script>
  </body>

</html>
