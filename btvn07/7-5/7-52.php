<?php 
function coutCard ($pos) {
?> 

    <div class="card" style="width: 18rem;">
                <img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Iphone <?php echo $pos ?></h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="dropdown color-select">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Choose color
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Black</a>
                    <a class="dropdown-item" href="#">White</a>
                    <a class="dropdown-item" href="#">Gold</a>
                    </div>
                </div>
                  <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
         
<?php
}
?>