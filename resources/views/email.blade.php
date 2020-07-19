<!DOCTYPE html>
<html>
<head>
    <title>envoyer email</title>
    <link href="{{ asset('assets/css/email.css')}}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
</head>
<body>
        {{-- <div class="container pb-mail-template1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <nav class="navbar navbar-default pb-mail-navbar">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" id="brand" href="#">Hello, <u>Obama!</u></a>
                                    </div>
                                </div>
                            </nav>
                        </div>                        
            
                        <!-- Modal view -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5>New message</h5>
                                            </div>
                                            <div class="col-md-8">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <p>To: </p>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="search" placeholder="Enter e-mail" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <p>Subject: </p>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="search" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <p>Message: </p>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary pull-left" id="btn_file">
                                            <span class="fa fa-paperclip fa-2x"></span>
                                            <input type="file" id="file" style="display: none;" />
                                        </button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal -->
            
                    </div>
                </div>
            </div> --}}


                 <div class="body-container-wrapper" ng-app="dataApp">
                    <div class="body-container">
                       <div class="float-clear">
                          <div class="cm-content cm-app-area">
                             <div class="cm-flex-tabber">
                                <div class="custom-tab-click-menu float-clear">
                                   <ul id="tab-containment-wrapper">

                                      <li class="active"><a data-id="#tab3"><span>Send Emails</span><i class="closeTab fa fa-times"></i></a></li>

                                   </ul>
                                   {{-- <div class="addTab"><a href="#"><span><i class="fa fa-plus" aria-hidden="true"></i></span></a></div> --}}
                                </div>
                                <div class="custom-tab-relevent-content">
                                   <div class="custom-main-data">

                                       
                                      <div id="tab3" class="main-tab-data">
                                         <div class="tabber-inside-tabber">
                                            <div id="email-tab-tab-one" class="tabber-contents-inner active-tab-tab">
                                               <h1 class="tabber-inside-tabber-heading">Email Body</h1>
                                               <form method="POST" action="{{ URL('sendemail') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <p>To: </p>
                                                    </div>
                                                    <div class="col-md-9">
                                                    <input type="email" name="email" placeholder="Enter e-mail" class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <p>Subject: </p>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="title" class="form-control">
                                                    </div>
                                                </div><br/>
                                               <textarea name="content"></textarea>
                                               <div class="send-email-button-wrapper full-width"> 
                                                  <button type="submit" class="btn-send-emails blue next-btn">Next<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                                  <button class="btn-send-emails green" id="save"><i class="fa fa-cloud" aria-hidden="true"></i>Save</button>
                                               </div>
                                               </form>
                                            </div>

                       </div>
                    </div>
                 </div>
                 <div class="footer-container-wrapper">
                    <div class="footer-container">
                       <div class="page-center">
                       </div>
                    </div>
                 </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>