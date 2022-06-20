<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Character Counter Application</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style media="screen">
      body{
        background: url(pexels-karolina-grabowska-4705853.jpg);
      }

      h3.py-3.text-center.text-white{
        background: #e5ccc9 !important;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="card bg-dark mt-5">
            <div class="card-title mt-3">
              <h3 class=" py-3 text-center text-white" style="background-color: ">Character Counter Application</h3>
            </div>
            <div class="card-body">
              <form class="">
                <textarea id="counters" rows="10" cols="65" class="form-control" placeholder="Write something here..."></textarea>
              </form>
            </div>
            <div class="card-footer">
              <div class="text-white lead" id="display">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="jquery.js" charset="utf-8"></script>
    <script src="application.js" charset="utf-8"></script>
  </body>
</html>
