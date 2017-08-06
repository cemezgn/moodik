<!DOCTYPE html>
<html>
<head>
    <title>Moodik</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body ng-app="moodikApp">
<div class="container-fluid">
    <div class="row topbar">
        <div class="col-md-2 logo"><b>mood</b>ik</div>
        <div class="col-md-8">Boşluk </div>
        <div class="col-md-2 name"> 
            <p> 
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        İlberk Eral
                        <span class="fa fa-bars"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Çıkış Yap</a></li>
                    </ul>
                </div>
            </p>
        </div>
    </div>
    <div class="row body">
        <div class="col-md-2 sidebar">
            <ul>
                <li><a href="#home"><span class="fa fa-square"></span>Dashboard</a></li>
                <li><a href="#news"><span class="fa fa-smile-o"></span>My Mood</a></li>
                <li><a href="#contact"><span class="fa fa-users"></span>Employees</a></li>
            </ul>
        </div>
        <div ng-view></div>
    </div>
    <div class="row footer">
        <div class="col-md-10">this is sidebar</div>
        <div class="col-md-2">this is body</div>
    </div>
</div>
<script type="text/javascript" src="lib/angular.min.js"></script>
<script type="text/javascript" src="lib/angular-route.min.js"></script>

<script type="text/javascript" src="lib/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="lib/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/Chart.min.js"></script>
<script type="text/javascript" src="js/Chart.bundle.js"></script>
<script type="text/javascript" src="js/customcharts.js"></script>
<script type="text/javascript" src="app.js"></script>
<script type="text/javascript" src="services/dataService.js"></script>
<script type="text/javascript" src="controllers/EmployeeController.js"></script>
<script type="text/javascript" src="controllers/HomeController.js"></script>
<script type="text/javascript" src="controllers/DashboardController.js"></script>
<script type="text/javascript" src="controllers/MyMoodController.js"></script>
</body>
</html>