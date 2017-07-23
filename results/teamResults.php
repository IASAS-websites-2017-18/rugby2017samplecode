<!doctype html>
<html>
  <?php include '../includes/head.html' ?>
  <title>Results | IASAS Rugby and Touch 2017</title>
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

    <!--content-->
    <div class="content container">
      <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding-left:50px;">
              <h1 class="page-header">Team Results Table</h1>
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
                  <div class="col-lg-12">
                      <div class="table-responsive" id="Boys-Results">
                          <table style="width: 100%;" class="text-center">
                              <tr>
                                  <td></td>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_ISB_100px.png"></td>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_ISKL_100px.png"></td>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_JIS_100px.png"></td>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_ISM_100px.png"></td>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_SAS_100px.png"></td>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_TAS_100px.png"></td>
                                  <td class="cell cell-totals"><strong>W</strong></td>
                                  <td class="cell cell-totals"><strong>L</strong></td>
                                  <td class="cell cell-totals"><strong>D</strong></td>
                                  <td class="cell cell-totals"><strong>Rank</strong></td>
                              </tr>
                              <tr>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_ISB_100px.png"></td>
                                  <td class="cell cell-default black"></td>
                                  <td class="cell cell-default" id="C3"></td>
                                  <td class="cell cell-default" id="D3"></td>
                                  <td class="cell cell-default" id="E3"></td>
                                  <td class="cell cell-default" id="F3"></td>
                                  <td class="cell cell-default" id="G3"></td>
                                  <td class="cell cell-totals" id="H3"></td>
                                  <td class="cell cell-totals" id="I3"></td>
                                  <td class="cell cell-totals" id="J3"></td>
                                  <td class="cell cell-totals" id="K3"></td>
                              </tr>
                              <tr>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_ISKL_100px.png"></td>
                                  <td class="cell cell-default" id="B4"></td>
                                  <td class="cell cell-default black"></td>
                                  <td class="cell cell-default" id="D4"></td>
                                  <td class="cell cell-default" id="E4"></td>
                                  <td class="cell cell-default" id="F4"></td>
                                  <td class="cell cell-default" id="G4"></td>
                                  <td class="cell cell-totals" id="H4"></td>
                                  <td class="cell cell-totals" id="I4"></td>
                                  <td class="cell cell-totals" id="J4"></td>
                                  <td class="cell cell-totals" id="K4"></td>
                              </tr>
                              <tr>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_JIS_100px.png"></td>
                                  <td class="cell cell-default" id="B5"></td>
                                  <td class="cell cell-default" id="C5"></td>
                                  <td class="cell cell-default black"></td>
                                  <td class="cell cell-default" id="E5"></td>
                                  <td class="cell cell-default" id="F5"></td>
                                  <td class="cell cell-default" id="G5"></td>
                                  <td class="cell cell-totals" id="H5"></td>
                                  <td class="cell cell-totals" id="I5"></td>
                                  <td class="cell cell-totals" id="J5"></td>
                                  <td class="cell cell-totals" id="K5"></td>
                              </tr>
                              <tr>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_ISM_100px.png"></td>
                                  <td class="cell cell-default" id="B6"></td>
                                  <td class="cell cell-default" id="C6"></td>
                                  <td class="cell cell-default" id="D6"></td>
                                  <td class="cell cell-default black"></td>
                                  <td class="cell cell-default" id="F6"></td>
                                  <td class="cell cell-default" id="G6"></td>
                                  <td class="cell cell-totals" id="H6"></td>
                                  <td class="cell cell-totals" id="I6"></td>
                                  <td class="cell cell-totals" id="J6"></td>
                                  <td class="cell cell-totals" id="K6"></td>
                              </tr>
                              <tr>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_SAS_100px.png"></td>
                                  <td class="cell cell-default" id="B7"></td>
                                  <td class="cell cell-default" id="C7"></td>
                                  <td class="cell cell-default" id="D7"></td>
                                  <td class="cell cell-default" id="E7"></td>
                                  <td class="cell cell-default black"></td>
                                  <td class="cell cell-default" id="G7"></td>
                                  <td class="cell cell-totals" id="H7"></td>
                                  <td class="cell cell-totals" id="I7"></td>
                                  <td class="cell cell-totals" id="J7"></td>
                                  <td class="cell cell-totals" id="K7"></td>
                              </tr>
                              <tr>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_TAS_100px.png"></td>
                                  <td class="cell cell-default" id="B8"></td>
                                  <td class="cell cell-default" id="C8"></td>
                                  <td class="cell cell-default" id="D8"></td>
                                  <td class="cell cell-default" id="E8"></td>
                                  <td class="cell cell-default" id="F8"></td>
                                  <td class="cell cell-default black"></td>
                                  <td class="cell cell-totals" id="H8"></td>
                                  <td class="cell cell-totals" id="I8"></td>
                                  <td class="cell cell-totals" id="J8"></td>
                                  <td class="cell cell-totals" id="K8"></td>
                              </tr>
                          </table>
                      </div>
                  </div>
              </div>
              <div class="tab-pane fade" id="Girls">
                  <div class="col-lg-12">
                      <div class="table-responsive" id="Girls-Results">
                          <table style="width: 100%;" class="text-center">
                              <tr>
                                  <td style="width: 10%"></td>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_ISB_100px.png"></td>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_ISKL_100px.png"></td>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_JIS_100px.png"></td>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_ISM_100px.png"></td>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_SAS_100px.png"></td>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_TAS_100px.png"></td>
                                  <td class="cell cell-totals"><strong>W</strong></td>
                                  <td class="cell cell-totals"><strong>L</strong></td>
                                  <td class="cell cell-totals"><strong>D</strong></td>
                                  <td class="cell cell-totals"><strong>Rank</strong></td>
                              </tr>
                              <tr>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_ISB_100px.png"></td>
                                  <td class="cell cell-default black"></td>
                                  <td class="cell cell-default" id="C12"></td>
                                  <td class="cell cell-default" id="D12"></td>
                                  <td class="cell cell-default" id="E12"></td>
                                  <td class="cell cell-default" id="F12"></td>
                                  <td class="cell cell-default" id="G12"></td>
                                  <td class="cell cell-totals" id="H12"></td>
                                  <td class="cell cell-totals" id="I12"></td>
                                  <td class="cell cell-totals" id="J12"></td>
                                  <td class="cell cell-totals" id="K12"></td>
                              </tr>
                              <tr>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_ISKL_100px.png"></td>
                                  <td class="cell cell-default" id="B13"></td>
                                  <td class="cell cell-default black"></td>
                                  <td class="cell cell-default" id="D13"></td>
                                  <td class="cell cell-default" id="E13"></td>
                                  <td class="cell cell-default" id="F13"></td>
                                  <td class="cell cell-default" id="G13"></td>
                                  <td class="cell cell-totals" id="H13"></td>
                                  <td class="cell cell-totals" id="I13"></td>
                                  <td class="cell cell-totals" id="J13"></td>
                                  <td class="cell cell-totals" id="K13"></td>
                              </tr>
                              <tr>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_JIS_100px.png"></td>
                                  <td class="cell cell-default" id="B14"></td>
                                  <td class="cell cell-default" id="C14"></td>
                                  <td class="cell cell-default black"></td>
                                  <td class="cell cell-default" id="E14"></td>
                                  <td class="cell cell-default" id="F14"></td>
                                  <td class="cell cell-default" id="G14"></td>
                                  <td class="cell cell-totals" id="H14"></td>
                                  <td class="cell cell-totals" id="I14"></td>
                                  <td class="cell cell-totals" id="J14"></td>
                                  <td class="cell cell-totals" id="K14"></td>
                              </tr>
                              <tr>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_ISM_100px.png"></td>
                                  <td class="cell cell-default" id="B15"></td>
                                  <td class="cell cell-default" id="C15"></td>
                                  <td class="cell cell-default" id="D15"></td>
                                  <td class="cell cell-default black"></td>
                                  <td class="cell cell-default" id="F15"></td>
                                  <td class="cell cell-default" id="G15"></td>
                                  <td class="cell cell-totals" id="H15"></td>
                                  <td class="cell cell-totals" id="I15"></td>
                                  <td class="cell cell-totals" id="J15"></td>
                                  <td class="cell cell-totals" id="K15"></td>
                              </tr>
                              <tr>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_SAS_100px.png"></td>
                                  <td class="cell cell-default" id="B16"></td>
                                  <td class="cell cell-default" id="C16"></td>
                                  <td class="cell cell-default" id="D16"></td>
                                  <td class="cell cell-default" id="E16"></td>
                                  <td class="cell cell-default black"></td>
                                  <td class="cell cell-default" id="G16"></td>
                                  <td class="cell cell-totals" id="H16"></td>
                                  <td class="cell cell-totals" id="I16"></td>
                                  <td class="cell cell-totals" id="J16"></td>
                                  <td class="cell cell-totals" id="K16"></td>
                              </tr>
                              <tr>
                                  <td class="cell cell-default"><img class="img-responsive" src="../img/logos/school_TAS_100px.png"></td>
                                  <td class="cell cell-default" id="B17"></td>
                                  <td class="cell cell-default" id="C17"></td>
                                  <td class="cell cell-default" id="D17"></td>
                                  <td class="cell cell-default" id="E17"></td>
                                  <td class="cell cell-default" id="F17"></td>
                                  <td class="cell cell-default black"></td>
                                  <td class="cell cell-totals" id="H17"></td>
                                  <td class="cell cell-totals" id="I17"></td>
                                  <td class="cell cell-totals" id="J17"></td>
                                  <td class="cell cell-totals" id="K17"></td>
                              </tr>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div><!-- /.container -->
    </div>

    <!-- Footer -->
    <?php include '../includes/footer.html' ?>
    <!--Javascript-->
    <!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>-->
    <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->

    <script src="https://spreadsheets.google.com/feeds/cells/15sGRD9scN7ILbh21oF7qq_x-8YkifAtksW1aFMan7tU/1/public/values?alt=json-in-script&amp;callback=displayContent" type="text/javascript"></script>
  </body>
</html>
