<div  class="form-card-container">
    <div class="form-card" id="save-form">
        <div id="window-close" width="30" height="30">
            <i class="fa fa-times fa-x" style="color:red"></i>
        </div>
    <div class="content">
        <div class="row">
        <div class="col-sm-12">
            <h1 class="display-8">Add a Employee</h1>
        <div>
            @if ($errors->any())
            <div id="exit-error" onload="saveFormReload();"></div>
            <div class="alert alert-danger hide-message">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="/save-employees" enctype="multipart/form-data">
                @csrf
                <div class="form-group d-flex justify-content-center align-items-center">    
                    <label class="file-input">
                        <span class="file-input-label">Choose Image</span>
                            <input id="file-upload" type="file"  name="image" data-image="" onchange="loadPhoto(event)">
                        <div id="preview"><img src="" alt="Image"/></div>
                        </input>
                    </label>
                </div>
                    <div class="form-group">    
                        <!-- <label for="">First Name:</label> -->
                        <input type="text" class="form-control input" placeholder="First Name" name="first_name"/>
                    </div>
                    <div class="form-group">
                        <!-- <label for="">Last Name:</label> -->
                        <input type="text" class="form-control input" placeholder="Last Name" name="last_name"/>
                    </div>
                    <div class="form-group">
                        <!-- <label for="">Email:</label> -->
                        <input type="text" class="form-control input" placeholder="Email" name="email"/>
                    </div>
                    <div class="form-group">
                        <!-- <label for="">Job Title:</label> -->
                        <input type="text" class="form-control input" placeholder="Job Title" name="job_title"/>
                    </div> 

                    <div class="form-group mt-2">
                            <label>Checkboxes:</label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender">
                                        <label class="form-check-label">Male</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender">
                                        <label class="form-check-label">Female</label>
                                    </div>
                                </div>                           
                            </div>
                        </div>


                    <div class="form-group mt-3">
                            <label>Checkboxes:</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="checkbox1">
                                        <label class="form-check-label">Checkbox 1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="checkbox2">
                                        <label class="form-check-label">Checkbox 2</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="checkbox3">
                                        <label class="form-check-label">Checkbox 3</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="checkbox4">
                                        <label class="form-check-label">Checkbox 4</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="checkbox3">
                                        <label class="form-check-label">Checkbox 3</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="checkbox4">
                                        <label class="form-check-label">Checkbox 4</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="form-group mt-3 mb-2">
                        <label for="">Select Box &nbsp; &nbsp;</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-primary mt-3 me-2">Save</button>
                        <button type="reset" class="btn btn-danger mt-3 ms-3">Reset</button>
                    </div>
                </form>
        </div>
        </div>
        </div>
    </div>
    </div>
</div>
