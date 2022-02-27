<?php include './src/Views/layouts/header.php'; ?>


<a href="?action=create" class="btn btn-primary" href="?action=create" role="button">Add request</a>
  </div>
    <section>
    
        <table class="table table-bordered">
            <thead>
                <th>Topic</th>
                <th>Description</th>
                <th>User</th>
                <th>Create at</th>
                <th>Edit/Delete</th>
            </thead>
            <tbody>
                
            <?php 
          
    
            foreach ($data as $request) {
                
               $html = <<<HTML
                <tr>
                    <td>{$request->getTopic()}</td>
                    <td>{$request->getDescription()}</td>
                    <td>{$request->getUserName()}</td>
                    <td>{$request->getCreateAt()}</td>
                    <td>
                        <a href="?action=edit&&id_request={$request->getId()}"class="btn btn-warning">Edit</a>   
                        <a href="?action=destroy&&id_request={$request->getId()}"class="btn btn-danger" >Delete</a>
                    </td>
                </tr>
                HTML;
                echo $html;
                
            }
            ?>  
            </tbody>
        </table>
    
    </section>

</main>

<?php include './src/Views/layouts/footer.php'; ?>

