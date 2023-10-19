<?php include('db_connect.php') ?>

<style type="text/css">
  .slider_bg_box {
 
    text-align: right;
    /* Align the content to the right inside the container */
  }

  .slider_bg_box img {
    width: 85vh;
    height: 50vh;
    /* Set the width of the image */
    float: right;
    /* Float the image to the right */

  }
  .detail-box {
    margin: 40px;
  }
  .detail-box p{
    font: 20px sans-serif;

  }
  .detail-box h1{
    font: 50px sans-serif;

  }

  .content-wrapper {
    background:#deebff;
  }

  .slider_section {
    margin:20px;
    height: 50vh;
    
  }

  .carouselslide {
    float: left;
    position: absolute;
  }

  .main_class {
    display: flex;
    /* Use flexbox to create a flexible container */
  }

  .left-content {
    flex: 1;
    /* Make the left content expand to fill available space */
    padding: 20px;
    /* Add padding as needed */
    /* You can add more styles for the left content */
  }

  .left-content img {
    height: auto;
    width: 90%;
 
  }

  .right-content {
    flex: 1;
    /* Make the right content expand to fill available space */
    padding: 80px;
    /* Add padding as needed */
    /* You can add more styles for the right content */
  }

  .section_contender {
    display: flex;
    justify-content: space-between;
    text-align: center;
    /* Add your styles for the section and its contents */
  }

  .content {
    flex: 1;
    padding: 100px;
    /* Allow each content item to take equal space */
    /* Add your styles for the content items */
  }

  .line {
    float: left;
    width: 50px;
    height: 5px;
    position: absolute;
    background: #1f2959;
  }

  @media (max-width: 768px) {
    .section_contender {
      flex-direction: column;
    }

    .line {
      width: 81%;
    }

    .content {
      flex: none;
      padding: 20px;
      text-align: center;
    }

    .main_class {
      flex-direction: column;
    }

    .left-content,
    .right-content {
      flex: none;
      padding: 20px;
      text-align: center;
    }

    .col-md-12 {
      flex: 1;
      width: 100%;
    }

    .slider_bg_box img {
      width: 100%;
      height: auto;
    }
    .box_z {
      flex-direction: column;
      text-align: center;
    }

    .content-div, .image3 {
      width: 100%;
    }

    .btn-primary {
      margin: 10px auto;
    }
  }

  .box_z {
    display: flex;
    justify-content: space-between;
    /* Center horizontally */
    align-items: center;
    /* Center vertically */
    width: 70%;
    /* Adjust the width of the box_z as needed */
    padding: 10px;
    height: 50%;
    /* Set a fixed height for the box_z */
    margin: 0 auto;
    /* Center the box_z horizontally on the page */
    border: 1px solid #000;
    /* Optional: Add a border to the container */
    background: darkblue;
    padding: 10px;
    padding-left: 50px;
    padding-right: 50px;
  }



  .image3 img {
    height: 50vh;
    /* Set the height to 100% to match the container's height */
    width: 100%;
    /* Maintain the aspect ratio and set the maximum width to 100% */
  }



  .content-div h1,
  .content-div h3,
  .content-div a {
    color: white;
    padding: 20px;
  }
</style>
<!-- Info boxes -->
<?php if ($_SESSION['login_type'] == 1): ?><!-- Admin Side -->
  <div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Total Subscribers</span>
          <span class="info-box-number">
            <?php echo $conn->query("SELECT * FROM users where type = 3")->num_rows; ?>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-poll-h"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Total Survey</span>
          <span class="info-box-number">
            <?php echo $conn->query("SELECT * FROM survey_set")->num_rows; ?>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>

<?php else: ?> <!-- User Side -->

  <section class="slider_section">
    <div class="slider_bg_box">
      <img src="assets/dist/img/hero_illustration.png" alt="" class="img-fluid">
    </div>
    <div id="customCarousel1" class="carouselslide" data-ride="carousel">

      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-9"> <!-- Adjust the column size for responsiveness -->
              <div class="detail-box">
                <p>Welcome to Mindfull!</p>
                <h1>
                  <span>
                    Happy To
                  </span>
                  <br>
                   Help You
                </h1>
                <p>
                Unlocking Potential, One Thought at a Time, Mindfull Style.
                </p>
                <div class="btn-box">
                  <a style="background:#1f2959; border-radius: 5px" href="" class="btn btn-primary">MORE ABOUT US</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <div class="main_class">
    <div class="left-content">
      <!-- Content for the left side -->
      <img src="assets/dist/img/mentaljpg.jpg" alt="">
    </div>
    <div class="right-content">
      <!-- Content for the right side -->
      <hr class="line">
      <br>
      <h1>You're never alone.</h1>
      <p>Here in MindFull, we understand that everyone's mental health journey is unique. That's why we offer a comprehensive mental health survey, carefully crafted to provide insights and guidance tailored to your individual needs. Our survey is designed to help you gain a deeper understanding of your mental health, identify areas of concern, and explore strategies for improvement.</p>
    </div>
    <br>

  </div>
  <section class="section_contender">

    <div class="content">
      <h1><strong>500+</strong></h1>
      <p>Daily Participants</p>
    </div>
    <div class="content">
      <h1><strong>3000+</strong></h1>
      <p>Monthly Participants</p>
    </div>
    <div class="content">
      <h1><strong>15000+</strong></h1>
      <p>Yearly Participants</p>
    </div>

  </section>

  <div class="box_z" style="border-radius: 50px">
    <div class="content-div">
      <h1><strong>Take a survey now</strong></h1>
      <h3>We got your back, and your brain too.</h3>

      <a style="background:white; color:black; margin-left:20px; border-radius: 50px" href="./index.php?page=survey_widget" class="btn btn-primary"> <strong> Access the survey</strong></a>

    </div>
    <div class="image3">
      <img src="assets/dist/img/illustration.jpg" alt="">
    </div>
  </div>





  <!-- <div class="col-12">
    <div class="card">
      <div class="card-body">
        Welcome
        <?php echo $_SESSION['login_name'] ?>!
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-poll-h"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Total Surveys Taken</span>
          <span class="info-box-number">
            <?php echo $conn->query("SELECT distinct(survey_id) FROM answers  where user_id = {$_SESSION['login_id']}")->num_rows; ?>
          </span>
        </div>
      </div>
      
    </div>
   </div> -->

<?php endif; ?>