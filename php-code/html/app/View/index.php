<?php


?>
<p style="text-align: center;">
    Registration
</p>
<form  class="needs-validation" novalidate id="form_id" action="/" name="myform" method="post" enctype="multipart/form-data" class="form">

    <div class="form-group row">
        <label for="inputUserame" class="col-sm-2 col-form-label">Userame</label>
        <div class="col-sm-6">
            <input type="email" class="form-control" id="inputUserame" placeholder="Userame" required>
            <small id="inputUserame" class="form-text text-muted">
                Your password must be 8-20 characters long
            </small>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                invalid
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-6">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
            <small id="inputEmail3" class="form-text text-muted">
                Your password must be 8-20 characters long
            </small>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                invalid
            </div>
        </div>
    </div>


    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-6">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
            <small id="inputPassword3" class="form-text text-muted">
                Your password must be 8-20 characters long
            </small>
            <div class="invalid-feedback">
                invalid
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPasswordRepeat" class="col-sm-2 col-form-label">Password repeat</label>
        <div class="col-sm-6">
            <input type="password" class="form-control" id="inputPasswordRepeat" placeholder="Password repeat" required>
            <small id="inputPasswordRepeat" class="form-text text-muted">
                Your password must be 8-20 characters long
            </small>
            <div class="invalid-feedback">
                invalid
            </div>
        </div>
    </div>


    <div class="form-group row">
        <label for="inputFileAvatar" class="col-sm-2 col-form-label">Avatar</label>
        <div class="col-sm-6">
            <fieldset disabled="disabled" name="set">
            <input type="file" class="form-control-file" id="inputFileAvatar">
            <small id="inputFileAvatar" class="form-text text-muted">
                Your password must be 8-20 characters long
            </small>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                invalid
            </div>
            </fieldset>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-6">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </div>
</form>

<script>
 /*

       var element = document.querySelector('[name="email"]');
                var validityStateObject = element.validity;
                // или через name
                var validityStateObject = document.form_name.email.validity;

                // Своя дополнительная проверка.В случае ошибки заполнить поле текстом ошибки
                if(1){
                    element.setCustomValidity("eee");// форма не отправится
                }else{
                    //убрать ошибку
                    element.setCustomValidity("");
                }



                console.info("Форма валидна ?",(validityStateObject.valid==true)?"ДА":"НЕТ");
                console.info("email:Обязательное значение установленно ?:",(validityStateObject.valueMissing==true)?"НЕТ":"ДА");
                console.info("email:Поле корректно заполнено ?:",(validityStateObject.typeMismatch==true)?"НЕТ":"ДА");
                console.info("email:Соответствует pattern ?:",(validityStateObject.patternMismatch==true)?"НЕТ":"ДА");
                console.info("email:maxlength превышен ?",(validityStateObject.tooLong==true)?"ДА":"НЕТ");
                console.info("email:customError пропускаем свою проверку ?",(validityStateObject.customError==true)?"НЕТ":"ДА");


                e.preventDefault();
                return false;
   */


    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission

                var form  = document.getElementById('form_id');
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);

        }, false);
    })();


    // Example starter JavaScript for disabling form submissions if there are invalid fields
    /*(function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                console.log('#',form)
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();*/
</script>
<!--

  <form id="form_id" action="/" name="myform" method="post" enctype="multipart/form-data" class="form">

      <div class="form-row">
          <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              <small id="inputEmail4" class="form-text text-muted">
                  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
              </small>
          </div>
          <div class="form-group col-md-6">
              <label for="inputPassword4">Password</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
              <small id="inputPassword4" class="form-text text-muted">
                  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
              </small>
          </div>
      </div>


        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            <small id="exampleCheck1" class="text-muted">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
            </small>
        </div>

      <div class="form-group col-md-6">
          <label for="exampleFormControlSelect1">Example select</label>
          <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
          </select>
          <small id="exampleFormControlSelect1" class="text-muted">
              Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
          </small>
      </div>

      <div class="form-group">
          <label for="exampleFormControlFile1">Example file input</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
          <small id="exampleFormControlFile1" class="form-text text-muted">
              Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
          </small>
      </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
-->
