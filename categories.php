<?php
echo "<h2>Категории</h2>";

$result = $conn->query("SELECT * FROM categories");

while ($row = $result->fetch()){
    echo'
        
        <div class="card border-dark mb-3" >
            <div class="card-body text-dark">
                <div class="row g-0">

                    <div class="col-md-7">
                    <a class="nav-link" href="/index.php?page=t" >
                        <h5 class="card-title">' . $row['name'] . '</h5>
                        <p class="card-text">' . $row['name'] . '</p>
                    </a>
                    </div>
                    <div class="col-md-1">
                        <a href="deletecategory.php?id='.$row['id'].'" class="btn btn-danger">Удалить</a>
                    </div>
                </div>
            </div>
            
        </div>
 
    ';

}



?>