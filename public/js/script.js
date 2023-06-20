/*
* login page's password field's toggle button (eye icon)
* toogle password and text when toogle button click
*/
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("toggle-password").addEventListener("click", function() {    
      var passwordInput = document.getElementsByName("password")[0];
      console.log(passwordInput);
      passwordInput.type = passwordInput.type === "password" ? "text" : "password";
    });
});

/*
* if employee list page's  delete icon click, 
* show alert box, blur background, and set employee_id value of this row to input type hidden's id="#emp_id"
*/
document.addEventListener("DOMContentLoaded", function() {
  document.getElementsByName("show-alert-msg")[0].addEventListener("click", function() {    
    var deleteIcon = this;
    var alertBox = document.getElementsByClassName('alart-box-card')[0];
    alertBox.style.display = "block";
    document.getElementsByClassName("list-container")[0].style.filter="blur(5px)";
    employeeId = deleteIcon.parentElement.parentElement.querySelector("#emp_id").innerHTML;
    document.querySelector("#delete_emp_id").value = employeeId;
  });
});

/*
* if alert box's cancle button click,
* hide alert box, remove blur background and remove employee_id from input type hidden's id="emp_id"
*/
document.addEventListener("DOMContentLoaded", function() {
  document.getElementsByName("alert_msg_cancel")[0].addEventListener("click", function() {    
    var deleteIcon = this;
    var alertBox = document.getElementsByClassName('alart-box-card')[0];
    alertBox.style.display = "";
    document.getElementsByClassName("list-container")[0].style.filter="";
    document.querySelector("#delete_emp_id").value = "";
  });
});


function loadPhoto(event) {
    var e = event.target;
    var file = e.files[0];
    var reader = new FileReader();

    reader.onload = function(event) {
        var image = document.createElement('img');
        image.src = event.target.result;
        image.style.width = '130px';
        image.style.height = '130px';
        image.style.position = "relative";
        image.style.left= "0px";
        image.style.top = "0px";
        image.setAttribute("data-image", file.name);
        console.log(image.getAttribute('data-image'));
        var preview = document.getElementById("preview");
        preview.innerHTML = '';
        preview.appendChild(image);
    };
    reader.readAsDataURL(file);
}

document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("save").addEventListener("click", function() {    
      // $saveForm = document.getElementById("save-form").style.display='flex';
      // document.getElementById("parent").style.filter="blur(5px)";
      reloadSaveForm();
  });
});

function saveFormReload() {
  console.log("here save form reload");
  $saveForm = document.getElementById("save-form").style.display='flex';
  document.getElementById("parent").style.filter="blur(5px)";
}

document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("window-close").addEventListener("click", function() {   
      document.getElementById("save-form").style.display='';
      document.getElementById("parent").style.filter="blur(0px)";
      var form = document.getElementById("save-create");
      form.reset();
      var imagePreview = document.getElementById("preview");
      var image = imagePreview.childNodes[0];
      image.src = "";
      
  });
});

function blurBackground() {
  document.getElementsByClassName("list-container")[0].style.filter="blur(5px)";
}

function removeBlue() {
  document.getElementsByClassName("list-container")[0].style.filter="";
}

/*
* laod create-edit form and background blur and change title to Add New Employee
*/
function reloadSaveForm() {
    $saveForm = document.getElementById("save-form").style.display='flex';
    document.getElementById("parent").style.filter="blur(5px)";
    var formTitle = document.getElementsByName("form-title")[0];
    formTitle.innerHTML ="Add New Employee";
}

document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("edit-btn").addEventListener("click", function() {    
      var row = this.parentElement.parentElement;
      var employee = new Object;
      employee.employee_id = row.cells[0].innerText;
      employee.name = row.cells[1].innerText;
      employee.nrc = row.cells[2].innerText;
      employee.phone = row.cells[3].innerText;
      employee.email = row.cells[4].innerText;
      employee.gender = row.cells[4].innerText;
      employee.dob = row.cells[4].innerText;
      employee.address = row.cells[4].innerText;

      employee.image = row.cells[5].innerText;
      reloadSaveForm();
      var first_name = document.getElementsByName("first_name")[0];
      var last_name = document.getElementsByName("last_name")[0];
      var email = document.getElementsByName("email")[0];
      var job_title = document.getElementsByName("job_title")[0];
      first_name.value = employee.employee_id;
      last_name.value = employee.employee_name;
      email.value = employee.email;
      job_title.value = employee.jobTitle;
      //console.log(employee);

  });
});