<?php include './src/Views/layouts/header.php'; ?>
    
    
    <h3>Add a request</h3>
    <section>
        <form action="?action=store" method="post">
        <div class="form-group"> 
            <label for="topic">Topic</label>
            <select name="topic" id="topic" class="form-control" placeholder="" required>
                <option value="" hidden selected>Select an option</option>
                <option value="Print error">Print error</option>
                <option value="Windows Blue Screen">Windows Blue Screen</option>
            </select>
            
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" class="form-control" placeholder="Description" required></textarea>
            
            <label for="user_name">User name</label>
            <input type="text" name="user_name" id="user_name" class="form-control" placeholder="User name" required>
            <input type="submit"  class="btn btn-success mt-2" value="Add">
            <a href="?action=index"class="btn btn-warning mt-2">Volver</a> 
        </div>
        </form> 
             
    </section>

</body>
<?php include './src/Views/layouts/footer.php'; ?>
</html>