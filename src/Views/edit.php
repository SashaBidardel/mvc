<?php include './src/Views/layouts/header.php'; ?>
    <h3>Edit the request</h3>

    <section>
        <form action=<?php echo "?action=update&&id_request={$data[0]->getId()}" ?> method="post">
            
            <label for="topic">Topic</label>
            <select name="topic" id="topic" class="form-control" placeholder=""required>
                <option value=<?=$data[0]->getTopic()?> hidden selected><?=$data[0]->getTopic()?></option>
                <option value="Print error">Print error</option>
                <option value="Windows Blue Screen">Windows Blue Screen</option>
            </select>
            
            <label for="description" >Description</label>
            <textarea type="text" name="description" id="description" class="form-control" required><?=$data[0]->getDescription()?></textarea>
            
            <label for="user_name">User name</label>
            <input type="text" name="user_name" id="user_name" class="form-control" value=<?=$data[0]->getUserName()?> required>

            <input type="submit" value="Update" class="btn btn-warning mt-4">
        </form>
        
    </section>

</body>
<?php include './src/Views/layouts/footer.php'; ?>
</html>