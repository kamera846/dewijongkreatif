@extends('layouts.admin')

@section('page-header')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Blog</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail Postingan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-content')
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Detail Postingan</h3>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                              <img src="{{ asset('admin/assets/img/theme/team-4.jpg') }}" height="300px" width="500px" class="rounded mx-auto d-block mb-4" alt="">
                              <h1 class="text-center">Tutorial Internet Gratis No Root</h1>
                              <div class="row justify-content-center">
                                <span class="text-xs text-muted">Umam Alfarizi</span>
                                <span class="text-xs text-muted mx-2">|</span>
                                <span class="text-xs text-muted">18 April 2022</span>
                              </div>
                              <div class="row px-3 py-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus commodi voluptatibus nobis natus, voluptatum quidem ab sunt, explicabo quis necessitatibus id quam quo odit adipisci itaque officiis, aut dolores optio? Repudiandae, laboriosam tenetur ea cum enim amet delectus laudantium deserunt vero adipisci numquam ad optio blanditiis itaque. Adipisci eaque laboriosam soluta aliquam nulla consequatur deserunt voluptas, eligendi odio laborum quae voluptates ea laudantium at nemo dolor! Harum perspiciatis id quasi eligendi placeat voluptatem enim reprehenderit amet temporibus repellat? Architecto minima quasi corporis explicabo incidunt culpa vero vel, ex illum ducimus delectus doloremque voluptates ipsam nobis nemo quo optio praesentium accusamus.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus maxime a quasi iure nesciunt nam accusantium temporibus incidunt et adipisci magni reiciendis totam, explicabo veniam quidem laboriosam dignissimos placeat aperiam ullam quis sit porro odit ad perferendis! Blanditiis, minima corrupti necessitatibus architecto quisquam doloribus dignissimos tempore iure exercitationem, consequatur ut omnis quaerat! Ea voluptatum magnam quas sequi accusantium aliquid fugiat, ex rerum numquam mollitia! Ullam, dicta sequi laboriosam nostrum, quidem obcaecati dignissimos rerum nesciunt possimus consequatur eos dolores incidunt qui.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias tenetur soluta consectetur enim tempora deserunt rerum quibusdam eaque quidem? Alias iste modi saepe rem fuga placeat, libero cupiditate illum, assumenda asperiores, recusandae exercitationem corrupti quod neque possimus necessitatibus? Tempora modi recusandae quos quam? Sit quisquam magni voluptate blanditiis distinctio qui ratione odio, perspiciatis dolorum, optio libero facilis veniam tenetur! Natus quia rem itaque deserunt quaerat error ut sunt voluptate deleniti, corrupti, aut dolorem nam! Sapiente aut veniam repudiandae excepturi dolorem adipisci mollitia exercitationem illum facilis iste, maxime, modi officiis sed maiores dolor. Reiciendis quam sint iure facere asperiores? Molestias fugiat culpa sunt impedit in quia ipsa suscipit dolor, recusandae porro qui saepe repellat nulla placeat unde non illum, ipsam dolores odio, voluptates quam tenetur ut voluptatum provident. Doloribus qui est minima eveniet dolore!</p>
                              </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('partials.footer-admin')
    </div>
@endsection