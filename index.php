<?php  

   $devs=[
       [
           'name' =>'Md Mohiuddin',
           'skill'=>'Laravel Developer',
           'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
           'image'=>'1.jpg',
           'gender'=>'Male'
       ],
       [
        'name' =>'Taimul Patan',
        'skill'=>'Java Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'2.jpg',
        'gender'=>'Male'
    ],
    [
        'name' =>'Golam Kibria',
        'skill'=>'Python Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'3.jpg',
        'gender'=>'Male'
    ],
    [
        'name' =>'Md. Shariful Islam',
        'skill'=>'Javascript Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'4.jpg',
        'gender'=>'Male'
    ],
    [
        'name' =>'Sadman Ahsan',
        'skill'=>'Mern Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'5.jpg',
        'gender'=>'Male'
    ],
    [
        'name' =>'Nayan Islam ',
        'skill'=>'Wordpress Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'6.jpg',
        'gender'=>'Male'
    ],
    [
        'name' =>'Uzma Surwat',
        'skill'=>'Php Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'7.jpg',
        'gender'=>'Female'
    ],
    [
        'name' =>'Foysal Bin Hossain',
        'skill'=>'C++ Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'8.jpg',
        'gender'=>'Male'
    ],
    [
        'name' =>'Tasmin Ahmed',
        'skill'=>'Java Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'9.jpg',
        'gender'=>'Female'
    ],
    [
        'name' =>'Jamal Hossain',
        'skill'=>'Laravel Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'10.png',
        'gender'=>'Male'
    ],
    [
        'name' =>'Tazmim Hossain',
        'skill'=>'Python Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'11.jpg',
        'gender'=>'Male'
    ],
    [
        'name' =>'Arafat Rahman ',
        'skill'=>'Django Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'12.jpg',
        'gender'=>'Male'
    ],
    [
        'name' =>'HM Imu SC ',
        'skill'=>'Django Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'13.jpg',
        'gender'=>'Male'
    ],
    
    [
        'name' =>'Wasif Bin Jonaid ',
        'skill'=>'Php Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'14.jpg',
        'gender'=>'Male'
    ],
    [
        'name' =>'Humayun Kabir',
        'skill'=>'Laravel Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'15.jpg',
        'gender'=>'Male'
    ],
   
    [
        'name' =>' Munia Mollick',
        'skill'=>'Laravel Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'16.jpg',
        'gender'=>'female'
    ],
   
    [
        'name' =>' Pratchad Khan',
        'skill'=>'Laravel Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'17.jpg',
        'gender'=>'Male'
    ],
    
    [
        'name' =>'Md Fahim Sheikh',
        'skill'=>'Laravel Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'18.jpg',
        'gender'=>'Male'
    ],
    [
        'name' =>'Mohammad Samir',
        'skill'=>'Python Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'19.jpg',
        'gender'=>'Male'
    ],
    [
        'name' =>'Md Sohel Rana',
        'skill'=>'Python Developer',
        'Desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'image'=>'20.jpg',
        'gender'=>'Male'
    ],





    ];






?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developers Team</title>
    
   
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
</head>
    <body style="background-color:#8c93a1; font-family: 'Poppins', sans-serif;">
    <center style="color:#91248F;margin-top:20px;"><h2>Team Developers</h2><center>
     <div class="container mt-5">
         <div class="row">

         <?php
               foreach($devs as $dev):


         ?>
             <div class="col-md-3">
                 <div style="margin-top:20px;" class="card ">
                 <img src="assets/img/<?php  echo $dev['image']; ?>" alt="sobuj">
                     <div class="card-body">
                         <h4 style="color:red;font-size:15px;text-align:left;">Name: <?php  echo "<span style=\"color:black;\">{$dev['name']}<span>"; ?></h4>
                         <h5 style="color:green;font-size:15px;text-align:left;">Skill: <?php echo "<span style=\"color:black;\">{$dev['skill']}</span>";?></h5>
                         <h5 style="color:#2c5ab0;font-size:15px;text-align:left;">Gender: <?php echo "<span style=\"color:black;\">{$dev['gender']}</span>";?></h5>
                         <p style="color:rgb(0, 238, 255);font-size:15px;text-align:left">Description: <?php echo "<span style=\"color:black;\">{$dev['Desc']}</span>";?></p>
                     </div>
                 </div>
             </div>
             
             <?php endforeach; ?>
         </div>

     </div>
     <br>
     <br>
     






    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery-1.6.1.min.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/custom.js"></script>
    

    
</body>
</html>