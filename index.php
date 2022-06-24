<!DOCTYPE html>
<html>
   <head>
      <!-- META's -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!-- STYLESHEET CSS -->
      <link rel="stylesheet" href="./library/google-fonts.css"/>
      <link rel="stylesheet" href="./library/bootstrap.css" />
      <link rel="stylesheet" href="./library/now-ui-dashboard.min.css"/>
      <link rel="stylesheet" href="./library/lamp.css">
      <link rel="stylesheet" href="./library/switch.css">
      <!-- JAVASCRIPT -->
      <script type='text/javascript' src='https://code.jquery.com/jquery-3.6.0.js'></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="./library/colorpicker.css">
   </head>
   <body class=" sidebar-mini ">
      <div class="wrapper ">
         <div class="sidebar" data-color="white"></div>
         <div class="main-panel" id="main-panel">
            <!-- Navbar -->
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm"></div>
            <div class="content">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card" style="height:750px">
                        <div class="card-header">
                           <h4 class="card-title" style="text-align:center;">Yeelight Web Control</h4>
                        </div>
                        <!-- START PART 1 -->
                        <div class="card-body" id="part1">
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="vue-color-picker">
                                    <div class="vue-color-picker-container">
                                       <div id="vue_sketch_picker">
                                          <color-picker v-model="colors" @input="updateValue"></color-picker>
                                       </div>
                                    </div>
                                 </div>
                                 <input type="hidden" id="lastcolor">
                                 <input type="hidden" id="finalcolor">
                              </div>
                              <div class="col-md-3">
                                 <input type="hidden" value="on" id="lightSwitchvalue">
                                 <label for="lightSwitch" class="wrap">
                                    <input type="checkbox" checked id="lightSwitch" name="lightSwitch" class="light-switch" />
                                    <div class="panel">
                                       <div class="overlay"></div>
                                       <div class="screw top">
                                          <div class="screw__slot"></div>
                                       </div>
                                       <div class="switch__hole">
                                          <div class="switch__groove">
                                             <div class="switch">
                                                <div class="switch__shadow-box top">
                                                   <div class="switch__shadow top"></div>
                                                </div>
                                                <div class="switch__shadow-box bottom">
                                                   <div class="switch__shadow bottom"></div>
                                                </div>
                                                <div class="switch__top">
                                                   <div class="switch__top-outset"></div>
                                                </div>
                                                <div class="switch__bottom">
                                                   <div class="switch__bottom-outset"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="screw bottom">
                                          <div class="screw__slot"></div>
                                       </div>
                                    </div>
                                 </label>
                              </div>
                              <div class="col-md-6">
                                 <div class="lamp">
                                    <div class="cable"></div>
                                    <div class="cover"></div>
                                    <div class="in-cover">
                                       <div class="bulb"></div>
                                    </div>
                                    <div class="light"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-color/2.8.1/vue-color.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
      <script type="text/javascript" src="./library/colorpicker.js"></script> 
      <script type="text/javascript" src="./library/custom.js"></script>
   </body>
</html>