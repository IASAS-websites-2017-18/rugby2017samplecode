<!doctype html>
<html>
  <?php include '../includes/head.html' ?>
  <title>Results | IASAS Soccer 2016</title>
  <style>
  body {
      background: url(../img/JIS_blue.png) repeat;
  }
  .container{
    padding-left:5px;
  }
  .cell {
        width: 10%;
        border: solid 2px lightgray;
        padding: 1px;
        font-size: 1em;
        text-align: center;
    }
    .cell-default {
        width: 12vw;
    }
    .cell > img {
        display: inline;
    }
    .cell-totals {
        width: 4vw;
        font-weight: bold;
    }
    .black {
        background-color: darkgray;
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
              <h1 class="page-header">Playoff Results</h1>
          </div>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#Boys" data-toggle="tab"><strong>Boys</strong></a></li>
                    <li><a href="#Girls" data-toggle="tab"><strong>Girls</strong></a></li>
                </ul>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="Boys">
                  <div id="final-results" class="col-lg-12" style="padding-top:50px; font-size: 22px; font-weight: bold">
                    <table style="height: 300px; width:100%;text-align:center">
                        <tr class="score">
                          <td class="col-lg-4">5th vs 6th Place Consolation Match</td>
                          <td class="col-lg-2" id="B3"></td>
                          <td class="col-lg-2">vs</td>
                          <td class="col-lg-2" id="D3"></td>
                          <td class="col-lg-2" id="E3"></td>
                        </tr>
                        <tr class="score">
                          <td class="col-lg-4">3th vs 4th Place Match</td>
                          <td class="col-lg-2" id="B5"></td>
                          <td class="col-lg-2">vs</td>
                          <td class="col-lg-2" id="D5"></td>
                          <td class="col-lg-2" id="E5"></td>
                        </tr>
                        <tr class="score">
                          <td class="col-lg-4">1st vs 2nd Place Championship Match</td>
                          <td class="col-lg-2" id="B7"></td>
                          <td class="col-lg-2">vs</td>
                          <td class="col-lg-2" id="D7"></td>
                          <td class="col-lg-2" id="E7"></td>
                        </tr>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade in active" id="Girls">
                  <div id="final-results" class="col-lg-12" style="padding-top:50px; font-size: 22px; font-weight: bold">
                    <table style="height: 300px; width:100%;text-align:center">
                        <tr class="score">
                          <td class="col-lg-4">5th vs 6th Place Consolation Match</td>
                          <td class="col-lg-2" id="H3"></td>
                          <td class="col-lg-2">vs</td>
                          <td class="col-lg-2" id="J3"></td>
                          <td class="col-lg-2" id="K3"></td>
                        </tr>
                        <tr class="score">
                          <td class="col-lg-4">3th vs 4th Place Match</td>
                          <td class="col-lg-2" id="H5"></td>
                          <td class="col-lg-2">vs</td>
                          <td class="col-lg-2" id="J5"></td>
                          <td class="col-lg-2" id="K5"></td>
                        </tr>
                        <tr class="score">
                          <td class="col-lg-4">1st vs 2nd Place Championship Match</td>
                          <td class="col-lg-2" id="H7"></td>
                          <td class="col-lg-2">vs</td>
                          <td class="col-lg-2" id="J7"></td>
                          <td class="col-lg-2" id="K7"></td>
                        </tr>
                    </table>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <?php include '../includes/footer.html' ?>
    <!--Javascript-->
    <!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>-->
    <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->

    <script src="https://spreadsheets.google.com/feeds/cells/15sGRD9scN7ILbh21oF7qq_x-8YkifAtksW1aFMan7tU/2/public/values?alt=json-in-script&amp;callback=displayContent" type="text/javascript"></script>
  </body>

  </html>
