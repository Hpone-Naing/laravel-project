<div  class="form-card-container">
    <div class="form-card" id="save-form">
        <div id="window-close" width="30" height="30">
            <i class="fa fa-times fa-x" style="color:red"></i>
        </div>
    <div class="content">
        <div class="row">
        <div class="col-sm-12">
            <h1 class="display-8" name="form-title"></h1>
        <div>

            @if ($errors->any())
<<<<<<< HEAD
=======
            <div id="exit-error" onload="saveFormReload();"></div>
>>>>>>> 01b8299da347ac44a0c328c8d494fad752da4a4f
            <div class="alert alert-danger hide-message">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif

            @if (isset($saveError))
            <div class="alert alert-danger hide-message">
                <ul>
                    <li>{{ $saveError }}</li>
                </ul>
            </div><br />
            @endif

            <form id="save-create" method="post" action="/save-employees" enctype="multipart/form-data">
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
                        <input type="text" class="form-control input"  name="employee_id"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input" placeholder="Name" name="name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input" placeholder="NRC" name="nrc"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input" placeholder="Phone Number" name="phone"/>
                    </div> 
                    <div class="form-group">
                        <input type="text" class="form-control input" placeholder="Email" name="email"/>
                    </div> 

                    <div class="form-group mt-2">
                            <label>Gender:</label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="1">
                                        <label class="form-check-label">Male</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="2">
                                        <label class="form-check-label">Female</label>
                                    </div>
                                </div>                           
                            </div>
                    </div>

                    <div class="form-group">
                        <input type="date" class="form-control input" placeholder="Date of Birth" name="date_of_birth"/>
                    </div> 

                    <div class="form-group">
                        <textarea class="form-control input" placeholder="Address" name="address"></textarea>
                    </div> 

                    <div class="form-group mt-3">
                            <label>Language:</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="languages[]" value="1">
                                        <label class="form-check-label">English</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="languages[]" value="2">
                                        <label class="form-check-label">Japan</label>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="form-group mt-3">
                            <label>Programming Language:</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="programming_languages[]" value="1">
                                        <label class="form-check-label">C++</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="programming_languages[]" value="4">
                                        <label class="form-check-label">React</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="programming_languages[]" value="2">
                                        <label class="form-check-label">Java</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="programming_languages[]" value="5">
                                        <label class="form-check-label">Android</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="programming_languages[]" value="3">
                                        <label class="form-check-label">PHP</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="programming_languages[]" value="6">
                                        <label class="form-check-label">Laravel</label>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="form-group mt-3 mb-2">
                        <label for="">Career Part: &nbsp; &nbsp;</label>
                        <select class="form-select form-select-lg mb-3" name="career_part" aria-label=".form-select-lg example">
                            <option value="1">Font End</option>
                            <option value="2">Back End</option>
                            <option value="3">Full Stack</option>
                            <option value="4">Mobile</option>
                        </select>
                    </div>

                    <div class="form-group mt-3 mb-2">
                        <label for="">Level: &nbsp; &nbsp;</label>
                        <select class="form-select form-select-lg mb-3" name="level" aria-label=".form-select-lg example">
                            <option value="1">Begineer</option>
                            <option value="2">Junineer Engineer</option>
                            <option value="3">Engineer</option>
                            <option value="4">Senior Engineer</option>
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
