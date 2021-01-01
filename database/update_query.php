
<?php
try{ 
    $pdo = new PDO("mysql:host=localhost; 
                    dbname=Mydb", "root", ""); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE,  
                        PDO::ERRMODE_EXCEPTION); 
} catch(PDOException $e){ 
    die("ERROR: Could not connect. "  
                    . $e->getMessage()); 
} 
  
try{ 
    $sql = "UPDATE data SET Age='28' WHERE id=201"; 
    $pdo->exec($sql); 
    echo "Records was updated successfully."; 
} catch(PDOException $e){ 
    die("ERROR: Could not able to execute $sql. " 
                                . $e->getMessage()); 
} 
unset($pdo); 
?> 
