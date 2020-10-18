            

            <?php
             include("../include/header.php"); 
             ?>
             <a class="btn btn-success" href="index.php">Back</a>
             <br><br>
              <div class="content">
             <h1>Add new category</h1>
            <form method="POST" action="store.php">
            <div class="form-group">
            <label for="Title">Title</label>
             <input type="text" class="form-control" id="title" name="title">
              </div>
             <button type="submit" class="btn btn-primary" name="submit">Submit</button>
             </form>
		         </div>
           <?php
           include("../include/footer.php"); 
           ?>