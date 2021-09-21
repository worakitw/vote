<?php include_once 'head.php' ?>
<?php //include_once 'jumbotron.php';?>
<?php //include_once 'navigater.php';?>

<style>
  .bg-c{
    background-color: rgb(84, 195, 247);
    border-radius: 5%;
  }
  body{
    background-image: url('img/bg.png');
    opacity: 0.9;
    /* background-size: 100% ; */
    width: 100%;
    height: auto;
  }
</style>

<div class="container "  >
  <!-- <div class="row"> -->

  <div class="d-flex justify-content-center " style="margin-top:80px;">
    <div class="card bg-c" style="width:320px">
      <div class="card-body">
        <h4 class="card-title text-center bg-info text-white">เลือกตั้ง อวท. <br>วิทยาลัยเทคนิคชลบุรี</h4>
        <img src="img/vhead.png" width="100%" alt="">
        
        <form>
          <div class="form-group">
            <label for="username">username:</label>
            <input type="username" class="form-control" id="username" placeholder="รหัสนักเรียน">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="วัน/เดือน/ปี">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-info ">Submit</button>
          </div>
          
        </form>
      </div>
    </div>
  </div>
    
  

    
  <!-- </div> -->
</div>

<?php //include_once 'footer.php' ?>

</body>
</html>
