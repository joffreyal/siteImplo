<?php
    $title='A propos';
?>
    
<?php include "fixTop.html"; ?>
    
<?php
    $articles = array(
        1 => "Welcome", 
    );
?>   
    
    <section>
        
        <article>
            
            <h3 id="1"><?php echo $articles[1]; ?></h3>
            
            <p>DEVELO'PONT est un projet initié par l'Espace Public Numérique du Royans (EPN) et SIMPLON.CO . C'est une formation GRATUITE, INTENSIVE, QUALIFIANTE de 7 mois en développement web et mobile.</p> 
            
            <p>Notre mission est également de proposer des profils de poste adaptés aux entreprises et collectivités locales dans leur développement numérique.</p>
        
        </article>
        
        <?php include("fixNav.html"); ?>
    
    </section>
    
    <?php include("footer.html");?>

</body>
</html>