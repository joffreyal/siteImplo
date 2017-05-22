<?php
    $title='Accueil';
?>
    
<?php include "fixTop.html"; ?>
    
<?php
    $articles = array(
        1 => "chat chien", 
        2 => "Un deux",
        3 => "Yin Yang",
        4 => "Noir blanc",
        5 => "Droite gauche",
    );
?>
    
    <section>
        
        
        
        <article>
            
            <h3 id="1"><?php echo $articles[1]; ?></h3>
            <p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
            <p> C'est super! </p>
        
        </article>
        
        <article>
           
            <h3 id="2"><?php echo $articles[2]; ?></h3>
            <p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
            <p> C'est super! </p>
        
        </article>
        
        <article>
           
            <h3 id="3"><?php echo $articles[3]; ?></h3>
            <p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
            <p> C'est super! </p>
        
        </article>
        
        <article>
          
            <h3 id="4"><?php echo $articles[4]; ?></h3>
            <p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
            <p> C'est super! </p>
        
        </article>
        
        <article>
           
            <h3 id="5"><?php echo $articles[5]; ?></h3>
            <p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
            <p> C'est super! </p>
        
        </article>
                    
        <?php include("fixNav.html"); ?>
        
        
    
    </section>
    
<?php include("footer.html");?>

</body>
</html>