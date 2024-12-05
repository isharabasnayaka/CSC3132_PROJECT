<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Options</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles1.css">
    <style>
        body {
            background-color: #f1f7f1;
            
        }
        .container {
            max-width: 1000px;
            max-height: 1000px;
            margin: 50px auto;
            text-align: center;
            border: 20px; 
        }
        .card {
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 20px;
            transition: box-shadow 0.3s, transform 0.3s;
            cursor: pointer;
        }
        
        img {
            max-width: 100px;
            margin-bottom: 15px;
            
        }
         h5 {
            font-weight: bold;
            color: #212529;
        }
         p {
            color: #6c757d;
            font-size: 14px;
        }
        .btton {
            background-color: #8ebeee;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 14px;
            max-width: 150px;
            align-items: center;
        }
        
    </style>
</head>
<body>
     <!---------------------title bar----------------------------------------------------------------->
     <section>
        <div class="navbar">
          <p class="logo" style="margin-top: 0px;">Care bond....</p>
   </div>
 </section>
 <!---------------------------------------------------------------------------------------------------------->
    <div class="container text-center">
        <h2 class="mb-4" stye="font-family:Bodoni MT Condensed;">Choose An Option.</h2>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-6" >
                <div class="card align-items-center" style="background-color:rgb(247, 247, 242) ;">
                    <img src="care.webp" alt="Caregiver Icon">
                    <h5>I need a caregiver</h5>
                    <p>Start your free search for care in your area.</p>
                    <button class="btn btton">Find care</button>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-6">
                <div class="card align-items-center" style="background-color:rgb(247, 247, 242);">
                    <img src="job.jpg" alt="Care Job Icon">
                    <h5>I want a care job</h5>
                    <p>Create a profile and search for jobs.</p>
                    <button class="btn btton">Find jobs</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
