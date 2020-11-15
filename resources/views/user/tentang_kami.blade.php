@extends('layouts.admin')
@section('title','Tentang Kami')
@section('css')
	.spacee{
		width: 100%;
		height: 45px;
    }
    p{
        font-size: 1.15rem;
    }
@endsection
@section('content')
    <!-- About Area -->
    <div class="spacee"></div>
    <section class="mb-5 mt-3" style="background-color: #f5f5f5"><br><br>
        <div class="container align-content-center">
            <div class="card col-md-12" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);">
                <div class="card-body">
                    <div class="about-text text-center">
                        <br><br>
                        <h2 class="">Pameran Kui</h2>
                        <center><hr style="width: 50px; border: 3px solid rgb(0, 0, 0); border-radius: 5px;" ></center><br>
                        <p class="text-justify">Pameran KUI(Karya Untuk Indonesia) adalah Cras lectus dui, porta rhoncus nulla et, maximus tempor justo. In eget neque dui. Vivamus dolor neque, accumsan ac volutpat non, venenatis eu velit. Nulla commodo hendrerit sem a lacinia. Fusce vulputate ante eu mattis hendrerit. Aenean vel luctus mi. Praesent ultrices euismod molestie. Nunc ut felis egestas, tempus erat ac, interdum elit. Fusce vel lectus eu dolor ornare tristique a quis quam. Suspendisse potenti.</p>

                        <p class="text-justify">Mauris aliquet lacinia massa, in tincidunt risus euismod vel. Mauris aliquet ac odio eu scelerisque. Vestibulum iaculis lectus eget iaculis egestas. Aenean ac neque urna. Nulla placerat felis at ante tincidunt maximus. Phasellus elementum ultrices augue et scelerisque. Aenean molestie quam nunc, sagittis elementum magna dictum ut. Proin id scelerisque justo, vitae scelerisque massa. Maecenas id ligula vitae libero finibus viverra a quis sem.</p>

                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a bibendum turpis. Fusce efficitur ligula orci, ac tincidunt nisl commodo et. Donec vitae efficitur diam. Donec porttitor lobortis nibh, ut convallis augue elementum vel. Integer urna metus, finibus ut bibendum ut, imperdiet quis tortor. Integer sed est ac augue dignissim ultrices vitae sed risus. Morbi at ligula nunc. Donec ex velit, sollicitudin et justo a, ullamcorper ullamcorper lectus. Curabitur sollicitudin dignissim odio, sed euismod elit aliquam vel.</p>

                        <p class="text-justify">Duis id urna sit amet augue eleifend malesuada non molestie lectus. Mauris vitae arcu vel nunc venenatis venenatis. Phasellus hendrerit vitae felis at gravida. Fusce a lectus sollicitudin, porta leo at, lacinia arcu. Etiam vulputate condimentum consectetur. Donec suscipit ante magna, eget interdum nunc eleifend sit amet. Vestibulum nec ultrices odio, eu maximus ante. Proin placerat tortor et placerat rhoncus. Donec blandit sodales metus. Donec lobortis placerat dui, tempor porttitor tortor sodales ut. Quisque maximus malesuada nibh, tincidunt tincidunt metus pharetra id. Donec ac efficitur lectus. Pellentesque pellentesque velit nec ornare rutrum.</p>

                        <p class="text-justify">Vestibulum laoreet justo enim, vitae elementum elit dictum sit amet. Praesent vehicula facilisis nisi, nec varius quam bibendum sit amet. Curabitur non posuere lacus. Vivamus id rutrum justo. Integer placerat diam nulla, commodo elementum risus ultricies a. Etiam gravida sem vel leo pharetra semper. Morbi porta dapibus enim, vel bibendum risus.</p>

                        <p class="text-justify">Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus id facilisis purus, at tincidunt neque. Vivamus felis ex, ullamcorper sit amet euismod et, semper vitae massa. Pellentesque leo ex, tristique id finibus vitae, mattis in ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras non felis malesuada est volutpat tempus. Praesent sit amet rhoncus purus. Fusce felis ex, ornare ut enim at, tincidunt commodo velit. Fusce placerat vulputate lectus at sollicitudin. Quisque a odio est. Integer elementum, massa at venenatis ornare, felis urna faucibus est, id varius ante ipsum nec justo. Aenean nisi ante, faucibus a magna ac, molestie lobortis urna. Pellentesque pellentesque, ex at feugiat dapibus, libero nisl aliquam neque, nec pretium sem nunc at justo. Curabitur et sem id est molestie pulvinar sit amet a risus.</p>

                        <p class="text-justify">Praesent urna lorem, posuere in lacus sit amet, convallis vulputate mauris. Ut cursus nisi vel nunc pulvinar tristique. Ut magna turpis, congue non mollis sit amet, consectetur vitae turpis. Aenean felis sem, fringilla hendrerit auctor non, rhoncus et ipsum. Morbi auctor convallis urna ut fermentum. Etiam imperdiet quam ante, vel facilisis purus fringilla sit amet. Morbi ullamcorper neque arcu, hendrerit placerat nunc aliquet mollis. In suscipit lobortis lobortis. Donec feugiat risus ut tortor pellentesque, ac rhoncus augue sollicitudin.</p>
                        
                        <div class="button-group">
@guest
                            <a href="/register" class="cr-btn cr-btn-blue">
                                <span>Daftar Sekarang</span>
                            </a>
@endguest                        
                        </div>
                    </div>
                    
              </div>
              
            
        </div>
    </section>
    <div class="spacee"></div>
    <!--// About Area -->
@endsection