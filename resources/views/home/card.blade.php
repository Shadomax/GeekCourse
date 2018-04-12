
  <div class="item  col-xs-3 col-lg-3">

            <div class="thumbnail">
                <img class="group list-group-image" src="https://s-media-cache-ak0.pinimg.com/originals/88/b7/5c/88b75c597c7431200a16acecc5550ee0.png" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        {{$title}}
                    </h4>

                        <p><span>Author : Asvarizal Filcha</span></p>
                        
                    	<p class="group inner list-group-item-text">
                       {{$desc}}</p>
                        <p>Rating : @foreach(range(1,$rating) as $star)<span class="glyphicon glyphicon-star" style="color: yellow;"></span>@endforeach</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <p class="lead">Rp. {{$price}}</p>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-6 col-xs-offset-6">
                        <p style="text-align: right;">
                            <a class="btn btn-primary btn-md" href="#">
                            <span class="glyphicon glyphicon-shopping-cart"></span></a>
                            <a class="btn btn-danger btn-md" href="#">
                            <span class="glyphicon glyphicon-heart"></span></a>
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
  
