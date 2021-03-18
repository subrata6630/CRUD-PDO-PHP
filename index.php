<?php include "inc/header.php";?>

      
        <div class="row">
            <div class="col-6">
                <h2>Student List</h2>
            </div>
            <div class="col-6 ">
                <a class="btn btn-success float-right" href="lib/addstudent.php">Add Student</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Serial</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td> <a class="btn btn-success" href="">Edit</a> <a class="btn btn-danger"
                                    href="">Delete</a></td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td> <a class="btn btn-success" href="">Edit</a> <a class="btn btn-danger"
                                    href="">Delete</a></td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the </td>
                            <td>Bird</td>
                            <td> <a class="btn btn-success" href="">Edit</a> <a class="btn btn-danger"
                                    href="">Delete</a></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
       
 <?php include "inc/footer.php";?>
