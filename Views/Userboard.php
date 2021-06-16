<?php

include('Templates/head.php');
session_start();

?>





<h1 style="text-align:center;"> Users' board</h1>


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
                                <a href="/ticket"><p class="">E-tickets  </p></a>
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


</table>




<?php

include ('Templates/footer.php');

?>

