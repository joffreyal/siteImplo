<?php
    $title='Les promos';
?>
    
<?php include "fixTop.html"; ?>
    
<?php
    $articles = array(
        1 => "promo1", 
        2 => "buy it",
        3 => "fix it",
        4 => "make it",
        5 => "technologic",
    );
?>  
    <section>
        
        <article>
            <h3 id="1"><?php echo $articles[1]; ?></h3>
            
            <div class="legende">
            <img src="img/promo1.jpg">
                <p>Promo #1</p>
            </div>
            
        </article>
        
        <article>
            <h3 id="2"><?php echo $articles[2]; ?></h3>
            <p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
            
        
        </article>
        
        <article>
            <h3 id="3"><?php echo $articles[3]; ?></h3>
            <p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
            
        
        </article>
        
        <article>
            <h3 id="4"><?php echo $articles[4]; ?></h3>
            <p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
            
        
        </article>
        
        <article>
            <h3 id="5"><?php echo $articles[5]; ?></h3>
            <p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
            
        
        </article>
        
        <?php include("fixNav.html"); ?>
    
    </section>
    
    <?php include("footer.html");?>

</body>
</html>