@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Are you having problem?</h1></div>

                <div class="panel-body">
                       <h3>Here are the instruction on how to use this website.</h3>
                              <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal1">Add unit</button>
                              <div class="modal fade" id="myModal1" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                     <h4>Add unit</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                      <ul>
                                          <li>Click the "Add unit" botton on the upper left of the home page</li>
                                          <li>Fill up every thing</li>
                                          <li>hit "Add unit" botton on the bottom left of the add unit page</li>
                                      </ul>
                                      <div class="modal-footer">
                                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <br><br>
                                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal2">Update</button>
                              <div class="modal fade" id="myModal2" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                     <h4>Update unit</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                      <ul>
                                          <li>Click the "update" botton on the left side of the home page</li>
                                          <li>Fill up every thing you want to change about the unit</li>
                                          <li>hit "Save" botton on the bottom left of the add unit page</li>
                                      </ul>
                                      <div class="modal-footer">
                                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <br><br>
                                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal3">Register</button>
                              <div class="modal fade" id="myModal3" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                     <h4>Register</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                      <ul>
                                          <li>Click the "Register" botton on the upper right of the welcome page</li>
                                          <li>Fill up every thing</li>
                                          <li>hit "Register" botton on the bottom right of the add unit page</li>
                                      </ul>
                                      <div class="modal-footer">
                                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  </div>
                                    </div>
                                  </div>
                                </div>
                              </div s>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
