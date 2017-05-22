<?php
    $title='Simplon';
?>
    
<?php include "fixTop.html"; ?>

<?php
    $articles = array(
        1 => "promo1", 
    );
?>  
    
    
    <section>
        
        <article>
            <h3 id="1"><?php echo $articles[1]; ?></h3>
            <p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
        
        </article>
        
        <?php include("fixNav.html"); ?>
    
    </section>

    
    <?php include("footer.html");?>

</body>
</html>