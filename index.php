<?php 
include'./inc/db.php';
include'./inc/form.php';
include'./inc/select.php';

$sql = 'SELECT * FROM users';
$result = mysqli_query($conn , $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
</head>
<body>



    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
        <img class="image" src="iphone.jpg" alt="">
        <h1 class="display-4 fw-normal">اربح مع أحمد عبدالله الوادعي</h1>
        <p class="lead fw-normal">باقي علي فتح التسجيل</p>
        <h4 id="demo" style="color: #0d6efd;
    padding: 10px;"></h4>
        <p class="lead fw-normal">للسحب علي ربح نسخة مجانية من  برنامج</p>
        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
        </div>
    </div>


<ul class="list-group list-group-flush">
    <li class="list-group-item">تابع البث المباشر علي صفحتنا علي فيسبوك بالتاريخخ المذكور أعلاه</li>
    <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</li>
    <li class="list-group-item">خلال غترة الساعة سيتم فتح صفحة التسجيل هنا حيث سنقوم بتسجييل اسمك وايميلك</li>
    <li class="list-group-item">بنهاية اليث سيتم اختيار واحد من قواعد البيانات بشكل عشوائي</li>
    <li class="list-group-item">الرابح سيحصل علي نسخة مجانية من  ايفون 15</li>
</ul> 


<div class="position-relative text-center ">
<div class="col-md-5 p-lg-5 mx-auto my-5">

<div class="container">

<form  action="index.php" method="POST">
    <h3>الرجاء أدخل معلوماتك</h3>

    <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الأول</label>
    <input type="text" name="firstName" value="<?php echo $firstName?>" class="form-control" id="exampleInputEmail1">
    <div id="firstName Help" class="form-text error"><?php echo $errors['firstNameError']?></div>
    </div>

    <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الأخير</label>
    <input type="text" name="lastName" value="<?php echo $lastName?>" class="form-control" id="exampleInputEmail1">
    <div id="lastNameHelp" class="form-text error"><?php echo $errors['lastNameError']?></div>
    </div>

    <div class="mb-3">
    <label for="exampleInpemailutEmail1" class="form-label">البريد الإلكتروني</label>
    <input type="text" name="email" value="<?php echo $email?>" class="form-control" id="exampleInputEmail1">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError']?></div>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">إرسال المعلومات</button>

</form>
</div>
</div>





<div class="modal fade" id="modal"  aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="modal">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user):  ?>
      <h1 class="display-3 text-center model-title"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']);?> </h1>
      <?php endforeach ?>
    </div>


    </div>
  </div>
</div>
<div class="d-grid gap-2 col-6 mx-auto my-5">
<a class="btn btn-primary" id="winner" role="button">اختيار الرابح</a>
      </div>





<div id="cards" class="row mb-5 pb-5">

<?php foreach($users as $user):  ?>

        <div class="col-sm-6">
            <div class="card my-2 bg-light">
                <div class="card-body">
                    <h5 class="card-title" id="modal"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']);?></h5>
                    <p class="card-text"><?php echo htmlspecialchars($user['email']); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach ?> 
    </div>

<!-- End of container -->
</div> 


<div class="preloader-wrap">
  <div class="loader">
    <div class="trackbar">
      <div class="loadbar"></div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/script.js"></script>
<script>

</script>
</body>
</html>