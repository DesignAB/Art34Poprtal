

          <div class="row g-0 login-form">
            <div class="col-12 col-lg-4 d-lg-flex align-items-center justify-content-center d-none">
              <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-incognito" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="m4.736 1.968-.892 3.269-.014.058C2.113 5.568 1 6.006 1 6.5 1 7.328 4.134 8 8 8s7-.672 7-1.5c0-.494-1.113-.932-2.83-1.205a1.032 1.032 0 0 0-.014-.058l-.892-3.27c-.146-.533-.698-.849-1.239-.734C9.411 1.363 8.62 1.5 8 1.5c-.62 0-1.411-.136-2.025-.267-.541-.115-1.093.2-1.239.735Zm.015 3.867a.25.25 0 0 1 .274-.224c.9.092 1.91.143 2.975.143a29.58 29.58 0 0 0 2.975-.143.25.25 0 0 1 .05.498c-.918.093-1.944.145-3.025.145s-2.107-.052-3.025-.145a.25.25 0 0 1-.224-.274ZM3.5 10h2a.5.5 0 0 1 .5.5v1a1.5 1.5 0 0 1-3 0v-1a.5.5 0 0 1 .5-.5Zm-1.5.5c0-.175.03-.344.085-.5H2a.5.5 0 0 1 0-1h3.5a1.5 1.5 0 0 1 1.488 1.312 3.5 3.5 0 0 1 2.024 0A1.5 1.5 0 0 1 10.5 9H14a.5.5 0 0 1 0 1h-.085c.055.156.085.325.085.5v1a2.5 2.5 0 0 1-5 0v-.14l-.21-.07a2.5 2.5 0 0 0-1.58 0l-.21.07v.14a2.5 2.5 0 0 1-5 0v-1Zm8.5-.5h2a.5.5 0 0 1 .5.5v1a1.5 1.5 0 0 1-3 0v-1a.5.5 0 0 1 .5-.5Z"/>
              </svg>
            </div><!-- col-md-4-->


            <div class="col-12 col-lg-8">
            <?php $error_message = $data['messenger']->errorUserMessage();?>

              <div class="card-body dark-text">
                <form method="POST" enctype="multipart/form-data" class="row g-3 custom-form "  id="register-form" >
              <input type="hidden" id="important" class="form-control form-control-sm" name="contest_u_id" value="<?=$data['contest_u_id']?>">

                  <div class="col-md-12 mb-3 mb-md-0 req" style="height: 0px; opacity:0;">
                    <label class="text-danger" for="important">your_type</label>
                    <input type="text" id="important" class="form-control form-control-sm" name="your_type">
                  </div>
                  <!-- name and surname -->
                  <!-- email -->
                  <div class="col-lg-6">
                    <label for="inputEmail" class="form-label d-block text-center text-lg-start">Email
                    </label>
                    <input type="email" class="form-control form-control" id="u_email" name="email">

                  </div>

                  <!-- email -->

                  <!-- email -->
                  <div class="col-lg-6">
                    <label for="inputEmail" class="form-label d-block text-center text-lg-start">Has??o
                    </label>
                    <input type="password" class="form-control form-control" id="password" name="password">

                  </div>

                  <!-- email -->





                  <div class="col-12 text-center text-lg-start">
                    <button id="register-button" class="btn btn-sm btn-primary register-button">zaloguj</button>
                  </div>

                </form>

                <div class="col-12 mt-3 text-center text-lg-start">

                  <a class="" href="/userregister" >
                    zarejestruj si??
                  </a>

                <p>
                  <a class="" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    zapomniane has??o?
                  </a>
                  </p>
                </div>
                <div class="col-12 collapse" id="collapseExample">
                    <!-- forgotten form -->
                    <form method="POST" enctype="multipart/form-data" class="row g-3 custom-form "  id="register-form" >
                    <input type="text" id="important" class="form-control form-control-sm" name="i_forgot">

                      <div class="col-md-12 mb-3 mb-md-0 req" style="height: 0px; opacity:0;">
                        <label class="text-danger" for="important">your_type</label>
                        <input type="text" id="important" class="form-control form-control-sm" name="your_type">
                      </div>
                      <!-- name and surname -->
                      <!-- email -->
                      <div class="col-12">
                        <label for="inputEmail" class="form-label d-block text-center text-lg-start">Email
                        </label>
                        <input type="email" class="form-control form-control" id="u_email" name="email">
                        <p>
                          Wprowad?? adres email. Wy??lemy Ci wiadomo???? z instrukcj??.
                        </p>
                      </div>

                      <!-- email -->




                      <div class="col-12 text-center text-lg-start">
                        <button id="register-button" class="btn btn-sm btn-primary register-button">przypomnij</button>
                      </div>

                    </form>

                    <!-- forgotten form -->

                </div>




              </div>
            </div>
          </div>
