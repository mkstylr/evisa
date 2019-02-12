<?php include "header.php"; ?>


<?php include "navigation.php"; ?>


<section class="custombs-cover overflow-hidden relative" style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5" id="section-home">
   <div class="overlay"></div>
   <div class="container">
      <div class="row align-items-center text-center">
         <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light custombs-animate border-bottom">Apply</h2>
            <br />
            <p class="lead mb-5 custombs-animate">Fill the E-VISA form below</p>
         </div>
      </div>
   </div>

</section>
<!-- END section -->


<section class="custombs_section bg-light">
   <div class="container">
      <form method="post">
         <h3 class="heading b-bottom">General Information</h3>
         <div class="row mb-4">
            <div class="col-4">
               <label for="email">E-mail</label>
               <input type="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="col-3">
               <label for="phone">Phone</label><br />
               <input class="form-control" id="phone" name="phone" type="tel" placeholder="">
            </div>
         </div>
         <div class="row mt-4 mb-5">
            <div class="col">
               <label for="arrival_country">Arrival Date in Country</label>
               <input type="text" id="arrv_country" class="form-control" placeholder="DD-MM-YYYY" data-provide="datepicker" data-date-clear-btn="true" data-date-format="dd-mm-yyyy" data-date-today-highlight="true">
            </div>
            <div class="col">
               <label for="dep_country">Departure Date in Country</label>
               <input type="text" id="dep_country" class="form-control" placeholder="DD-MM-YYYY" data-provide="datepicker" data-date-clear-btn="true" data-date-format="dd-mm-yyyy" data-date-today-highlight="true">
            </div>
            <div class="col">
               <label for="h_country">Home Country</label>
               <select name="" id="h_country" class="form-control">
                  <option selected disabled>--Choose--</option>
                  <?php
                     for($i=0; $i<$count; $i++){
                  ?>
                  <option>
                     <?php echo $countries[$i]; ?>
                  </option>
                  <?php
                     }
                  ?>
               </select>
            </div>
         </div>
         <h3 class="heading b-bottom custombs_mt-85">Applicant Information</h3>
         <div class="row mb-4">
            <div class="col">
               <label for="f_name">First &amp; Middle Name</label>
               <input type="text" id="f_name" class="form-control" placeholder="First & Middle Name">
            </div>
            <div class="col">
               <label for="l_name">Last Name</label>
               <input type="text" id="l_name" class="form-control" placeholder="Last Name">
            </div>
            <div class="col">
               <label for="nationality">Nationality</label>
               <select name="" id="nationality" class="form-control">
                  <option selected disabled>--Choose--</option>
                  <?php
                     for($i=0; $i<$count; $i++){
                  ?>
                  <option>
                     <?php echo $countries[$i]; ?>
                  </option>
                  <?php
                     }
                  ?>
               </select>
            </div>
         </div>
         <div class="row mt-4 mb-4">
            <div class="col">
               <label for="dob">Date of Birth</label>
               <input type="text" id="dob" class="form-control" placeholder="DD-MM-YYYY" data-provide="datepicker" data-date-clear-btn="true" data-date-format="dd-mm-yyyy">
            </div>
            <div class="col">
               <label for="b_country">Country of Birth</label>
               <select name="" id="b_country" class="form-control">
                  <option selected disabled>--Choose--</option>
                  <?php
                     for($i=0; $i<$count; $i++){
                  ?>
                  <option>
                     <?php echo $countries[$i]; ?>
                  </option>
                  <?php
                     }
                  ?>
               </select>
            </div>
            <div class="col">
               <label for="gender">Gender</label>
               <select name="gender" id="gender" class="form-control">
                  <option selected disabled>--Choose--</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
               </select>
            </div>
         </div>
         <div class="row mt-4 mb-4">
            <div class="col">
               <label for="psprt_no">Passport Number</label>
               <input type="text" id="psprt_no" class="form-control" placeholder="Passport Number">
            </div>
            <div class="col">
               <label for="psprt_is">Passport Issued</label>
               <input type="text" id="psprt_is" class="form-control" placeholder="DD-MM-YYYY" data-provide="datepicker" data-date-clear-btn="true" data-date-format="dd-mm-yyyy">
            </div>
            <div class="col">
               <label for="psprt_exp">Passport Expiration</label>
               <input type="text" id="psprt_exp" class="form-control" placeholder="DD-MM-YYYY" data-provide="datepicker" data-date-clear-btn="true" data-date-format="dd-mm-yyyy">
            </div>
         </div>
      </form>
   </div>
</section>
<!-- END section -->

<?php include "footer.php"; ?>
