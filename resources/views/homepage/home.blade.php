
<!DOCTYPE html>
<html lang="en_US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ShuleSoft Support</title>
        <meta name="description" content="customer support platform">
        <meta name="keywords" content="osTicket, Customer support system, support ticket system">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="https://www.shulesoft.com/support/css/osticket.css?901e5ea" media="screen"/>
        <link rel="stylesheet" href="https://www.shulesoft.com/support/assets/default/css/print.css?901e5ea" media="print"/>
        <link rel="stylesheet" href="https://www.shulesoft.com/support/scp/css/typeahead.css?901e5ea" media="screen" />
        <link type="text/css" href="https://www.shulesoft.com/support/css/ui-lightness/jquery-ui-1.10.3.custom.min.css?901e5ea"rel="stylesheet" media="screen" />
        <link rel="stylesheet" href="https://www.shulesoft.com/support/css/thread.css?901e5ea" media="screen"/>
        <link rel="stylesheet" href="https://www.shulesoft.com/support/css/redactor.css?901e5ea" media="screen"/>
        <link type="text/css" rel="stylesheet" href="https://www.shulesoft.com/support/css/font-awesome.min.css?901e5ea"/>
        <link type="text/css" rel="stylesheet" href="https://www.shulesoft.com/support/css/flags.css?901e5ea"/>
        <link type="text/css" rel="stylesheet" href="https://www.shulesoft.com/support/css/rtl.css?901e5ea"/>
        <link type="text/css" rel="stylesheet" href="https://www.shulesoft.com/support/css/select2.min.css?901e5ea"/>

        <!-- osTT Client Theme Stylesheets -->
        <link rel="stylesheet" href="https://www.shulesoft.com/support/assets/osttclient/css/bootstrap.min.css" media="screen"/>
        <link rel="stylesheet" href="https://www.shulesoft.com/support/assets/osttclient/css/osttclient.theme.min.css?v1" media="screen"/>

        <!-- Change your colour scheme here. Replace the below stylesheet with your preferred colour from the /assets/osttclient/css/colours directory -->
        <link rel="stylesheet" href="https://www.shulesoft.com/support/assets/osttclient/css/colours/green-scheme.css" media="screen"/>
        <!-- End colour scheme -->

        <!-- End osTT Client Theme Stylesheets -->


        <script type="text/javascript" src="https://www.shulesoft.com/support/js/jquery-1.11.2.min.js?901e5ea"></script>
        <script type="text/javascript" src="https://www.shulesoft.com/support/js/jquery-ui-1.10.3.custom.min.js?901e5ea"></script>
        <script src="https://www.shulesoft.com/support/js/osticket.js?901e5ea"></script>
        <script type="text/javascript" src="https://www.shulesoft.com/support/js/filedrop.field.js?901e5ea"></script>
        <script src="https://www.shulesoft.com/support/scp/js/bootstrap-typeahead.js?901e5ea"></script>
        <script type="text/javascript" src="https://www.shulesoft.com/support/js/redactor.min.js?901e5ea"></script>
        <script type="text/javascript" src="https://www.shulesoft.com/support/js/redactor-plugins.js?901e5ea"></script>
        <script type="text/javascript" src="https://www.shulesoft.com/support/js/redactor-osticket.js?901e5ea"></script>
        <script type="text/javascript" src="https://www.shulesoft.com/support/js/select2.min.js?901e5ea"></script>
        <script type="text/javascript" src="https://www.shulesoft.com/support/js/fabric.min.js?901e5ea"></script>


        <!-- osTT Client Theme Scripts -->
        <script type="text/javascript" src="https://www.shulesoft.com/support/assets/osttclient/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://www.shulesoft.com/support/assets/osttclient/js/osticket.osttclient.js"></script>
        <!-- osTT Client Theme Scripts -->


        <meta name="csrf_token" content="e128dbd1b16bbf6b303afeeb940ed521f96d57a7" />
    </head>

    <body>
        <header>
            <nav class="navbar">
                <div class="pre-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="navbar-header row">
                                    <div class="col-xs-9 col-sm-12">

                                        <a class="navbar-brand" id="logo" href="https://www.shulesoft.com/support/index.php"
                                           title="Support Center">
                                            <img src="https://www.shulesoft.com/support/logo.php" border=0 alt="ShuleSoft Support" class="hidden-xs hidden-sm">
                                            <span class="hidden-md hidden-lg">ShuleSoft Support</span>
                                        </a>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-xs-3 hidden-sm hidden-md hidden-lg">
                                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar-main"  aria-expanded="false" aria-controls="navbar">
                                            <span class="sr-only">Toggle navigation</span>
                                            <i class="fa fa-bars fa-2x"></i>
                                        </button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.navbar-header row -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <ul class="list-inline pull-right hidden-xs">
                                    <li>Guest User</li>
                                    <li><a href="https://www.shulesoft.com/support/login.php" class="btn btn-success"><i class="fa fa-sign-in"></i> Sign In</a></li>
                                </ul>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.pre-header -->
                <div class="navbar-collapse collapse" id="navbar-main">
                    <div class="navbar-container">
                        <ul class="nav navbar-nav">
                                   <li class=""><a class="home" href="<?=url('homepage/landing')?>">User Manual</a></li>
                            <li class=""><a class="home" href="https://www.shulesoft.com/support/index.php">Support Center Home</a></li><li class="active"><a class="kb" href="https://www.shulesoft.com/support/kb/index.php">Knowledgebase</a></li><li class=""><a class="new" href="https://www.shulesoft.com/support/open.php">Open a New Ticket</a></li><li class=""><a class="status" href="https://www.shulesoft.com/support/view.php">Check Ticket Status</a></li>			            		                    <li class="hidden-sm hidden-md hidden-lg"><a href="https://www.shulesoft.com/support/login.php" class="text-success"><i class="fa fa-sign-in"></i> Sign In</a></li>

                        </ul>
                    </div>
                    <!-- /.navbar-main -->
                </div>
                <!-- /#navbar-main -->
            </nav>
            <!-- /.navbar -->
        </header>

        <footer>
            <div class="container text-center">
                <p>Copyright &copy; 2018 ShuleSoft Support - All rights reserved.</p>
                <a href="https://www.shulesoft.comhttp://osticket.com" target="_blank">Helpdesk software - powered by osTicket</a> &nbsp;&nbsp;&nbsp; <a href="https://www.shulesoft.comhttp://osticketthemes.com" target="_blank">Theme by osTicket Themes</a>
            </div>
            <!-- /.container -->
        </footer>


        <div id="overlay"></div>
        <div id="loading">
            <div class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Please wait...</h4>
                        </div>
                        <div class="modal-body">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    <span class="sr-only">100% Complete</span>
                                </div>
                            </div>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <!-- /.loading -->

        <!-- Scripts -->

        <script type="text/javascript">
            getConfig().resolve({"html_thread": true, "lang": "en_US", "short_lang": "en", "has_rtl": false, "primary_language": "en-US", "secondary_languages": []});
        </script>
    </body>
</html>