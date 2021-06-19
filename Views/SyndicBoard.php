<?php

include('Templates/head.php');
session_start();

?>
<div style=" width:1300px; padding-left:150px">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >

        <ul class="nav navbar-nav ">
            <li class="nav-item"><a class="nav-link" href="/ticket"><i class="fa fa-user-plus"></i> E-ticket </a></li>
            <li class="nav-item"><a class="nav-link" href="/communication"><i class="fa fa-user-plus"></i> Communication </a></li>
            <li class="nav-item"><a class="nav-link" href="/user"><i class="fa fa-user-plus"></i> Users </a></li>
            <li class="nav-item"><a class="nav-link" href="/owner"><i class="fa fa-user"></i> Owners </a></li>
            <li class="nav-item"><a class="nav-link" href="/resident"><i class="fa fa-user-plus"></i> Resident </a></li>
            <li class="nav-item"><a class="nav-link" href="/building"><i class="fa fa-user-plus"></i> Building </a></li>
            <li class="nav-item"><a class="nav-link" href="/appartment"><i class="fa fa-user-plus"></i> Appartment </a></li>
            <li class="nav-item"><a class="nav-link" href="/city"><i class="fa fa-user-plus"></i> Cities </a></li>
            <li class="nav-item"><a class="nav-link" href="/logout"><i class="fa fa-power-off"></i> log out  </a></li>
        </ul>

    </nav> <br>

</div>


<h1 style="text-align:center;"> Management board</h1>

<table style="margin-left:200px">
    <tr>
        <th><p> E-Tickets </p></th>
        <th><p>Communication</p></th>
        <th><p>Users</p></th>
        <th><p>Owners</p></th>

    </tr>
    <tr>
        <td>
            <div class="col-sm-4">
                <div class="card text-white bg-primary mb-3" style="width:250px">
                    <div class="card-header">
                        <div class="row">

                            <div class="col-sm-8">
                                <div class="float-sm-right">&nbsp;<span style="font-size: 30px"></span></div>
                                <div class="clearfix"></div>
                                <div class="float-sm-center" > <img src="/Ressources/Pictures/building.jpg" alt="E-tickets" titre="E-tickets" height="200px" width="200px">  </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item-primary list-group-item list-group-item-action">
                        <div class="row">
                            <div class="float-sm-8">
                                <a href="/ticket/handle"><p class="">E-tickets  </p></a>
                                <hr>
                                <p style="text-align:left;"> Here, you have the opportunity to create a ticket for maintenance <br>
                                    you can also have a follow-up for your own  tickets created </p>
                            </div>

                        </div>
                    </div>
                </div>
        </td>
        <td>
            <div class="col-sm-4">
                <div class="card text-white bg-primary mb-3" style="width:250px">
                    <div class="card-header">
                        <div class="row">

                            <div class="col-sm-8">
                                <div class="float-sm-right">&nbsp;<span style="font-size: 30px"></span></div>
                                <div class="clearfix"></div>
                                <div class="float-sm-center" > <img src="/Ressources/Pictures/building.jpg" alt="E-tickets" titre="E-tickets" height="200px" width="200px">  </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item-primary list-group-item list-group-item-action">
                        <div class="row">
                            <div class="float-sm-8">
                                <a href="/communication"><p class="">Communication  </p></a>
                                <hr>
                                <p style="text-align:left;"> All communication are located here.<br>
                                    You can create, read, cancel, modify a communication <br> <br></p>
                            </div>

                        </div>
                    </div>
                </div>
        </td>
        <td>
            <div class="col-sm-4">
                <div class="card text-white bg-primary mb-3" style="width:250px">
                    <div class="card-header">
                        <div class="row">

                            <div class="col-sm-8">
                                <div class="float-sm-right">&nbsp;<span style="font-size: 30px"></span></div>
                                <div class="clearfix"></div>
                                <div class="float-sm-center" > <img src="/Ressources/Pictures/building.jpg" alt="E-tickets" titre="E-tickets" height="200px" width="200px">  </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item-primary list-group-item list-group-item-action">
                        <div class="row">
                            <div class="float-sm-8">
                                <a href="/user"><p class="">Users  </p></a>
                                <hr>
                                <p style="text-align:left;"> Looking for all registered members ? <br>
                                    This link will show you the complete list <br><br> </p>
                            </div>

                        </div>
                    </div>
                </div>
        </td>
        <td>
            <div class="col-sm-4">
                <div class="card text-white bg-primary mb-3" style="width:250px">
                    <div class="card-header">
                        <div class="row">

                            <div class="col-sm-8">
                                <div class="float-sm-right">&nbsp;<span style="font-size: 30px"></span></div>
                                <div class="clearfix"></div>
                                <div class="float-sm-center" > <img src="/Ressources/Pictures/building.jpg" alt="E-tickets" titre="E-tickets" height="200px" width="200px">  </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item-primary list-group-item list-group-item-action">
                        <div class="row">
                            <div class="float-sm-8">
                                <a href="/owner"><p class="">Owners  </p></a>
                                <hr>
                                <p style="text-align:left;"> here, a complete list of every appartments'owners  <br>
                                    <br><br><br></p>
                            </div>

                        </div>
                    </div>
                </div>
        </td>
    </tr>


</table>

<table style="margin-left:200px">
    <tr>
        <th><p> Building </p></th>
        <th><p> Appartment</p></th>
        <th><p> City</p></th>
        <th><p> resident</p></th>

    </tr>
    <tr>
        <td>
            <div class="col-sm-4">
                <div class="card text-white bg-primary mb-3" style="width:250px">
                    <div class="card-header">
                        <div class="row">

                            <div class="col-sm-8">
                                <div class="float-sm-right">&nbsp;<span style="font-size: 30px"></span></div>
                                <div class="clearfix"></div>
                                <div class="float-sm-center" > <img src="/Ressources/Pictures/building.jpg" alt="E-tickets" titre="E-tickets" height="200px" width="200px">  </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item-primary list-group-item list-group-item-action">
                        <div class="row">
                            <div class="float-sm-8">
                                <a href="/building"><p class="">Building  </p></a>
                                <hr>
                                <p style="text-align:left;"> Here, you have the opportunity to create a ticket for maintenance <br>
                                    you can also have a follow-up for your own  tickets created </p>
                            </div>

                        </div>
                    </div>
                </div>
        </td>
        <td>
            <div class="col-sm-4">
                <div class="card text-white bg-primary mb-3" style="width:250px">
                    <div class="card-header">
                        <div class="row">

                            <div class="col-sm-8">
                                <div class="float-sm-right">&nbsp;<span style="font-size: 30px"></span></div>
                                <div class="clearfix"></div>
                                <div class="float-sm-center" > <img src="/Ressources/Pictures/building.jpg" alt="E-tickets" titre="E-tickets" height="200px" width="200px">  </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item-primary list-group-item list-group-item-action">
                        <div class="row">
                            <div class="float-sm-8">
                                <a href="/appartment"><p class=""> Appartments  </p></a>
                                <hr>
                                <p style="text-align:left;"> All appartments are located here.<br>
                                    You can create, read, cancel, modify an appartment <br><br> <br></p>
                            </div>

                        </div>
                    </div>
                </div>
        </td>
        <td>
            <div class="col-sm-4">
                <div class="card text-white bg-primary mb-3" style="width:250px">
                    <div class="card-header">
                        <div class="row">

                            <div class="col-sm-8">
                                <div class="float-sm-right">&nbsp;<span style="font-size: 30px"></span></div>
                                <div class="clearfix"></div>
                                <div class="float-sm-center" > <img src="/Ressources/Pictures/building.jpg" alt="E-tickets" titre="E-tickets" height="200px" width="200px">  </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item-primary list-group-item list-group-item-action">
                        <div class="row">
                            <div class="float-sm-8">
                                <a href="/city"><p class="">city  </p></a>
                                <hr>
                                <p style="text-align:left;"> need to add, change, cancel a city ? <br>
                                    This link will show you the complete list <br><br> </p>
                            </div>

                        </div>
                    </div>
                </div>
        </td>
        <td>
            <div class="col-sm-4">
                <div class="card text-white bg-primary mb-3" style="width:250px">
                    <div class="card-header">
                        <div class="row">

                            <div class="col-sm-8">
                                <div class="float-sm-right">&nbsp;<span style="font-size: 30px"></span></div>
                                <div class="clearfix"></div>
                                <div class="float-sm-center" > <img src="/Ressources/Pictures/building.jpg" alt="E-tickets" titre="E-tickets" height="200px" width="200px">  </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item-primary list-group-item list-group-item-action">
                        <div class="row">
                            <div class="float-sm-8">
                                <a href="/resident"><p class="">Residents  </p></a>
                                <hr>
                                <p style="text-align:left;"> here, a complete list of every appartments'residents  <br>
                                    <br><br><br></p>
                            </div>

                        </div>
                    </div>
                </div>
        </td>
    </tr>


</table>




<?php

include ('Templates/footer.php');

?>

